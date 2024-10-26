<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowGroups extends Component
{
    public $group;
    public $groupId;
    public $usersInGroup;

    public function mount()
{
    // Verificar si el usuario tiene acceso a este grupo
    $userId = Auth::id();

    // Obtener el id del grupo desde la URL
    $this->groupId = request()->route('id');

    // Obtener todos los usuarios en el grupo
    $this->usersInGroup = GruposUsuarios::where('id_grupo', $this->groupId)
        ->join('users', 'grupos_usuarios.id_usuario', '=', 'users.id') // Asegúrate de tener esta relación
        ->get(['users.name', 'users.email']); // Obtener los campos que necesitas

    // Verificar que el usuario pertenece al grupo
    $relacion = GruposUsuarios::where('id_usuario', $userId)
        ->where('id_grupo', $this->groupId)
        ->first();

    if (!$relacion) {
        abort(403, 'No tienes permiso para acceder a este grupo.');
    }

    // Obtener el grupo y asignarlo a la propiedad
    $this->group = Group::findOrFail($this->groupId);
}


    public function render()
    {
        return view('livewire.show-groups', [
            'group' => $this->group,
            'usersInGroup' => $this->usersInGroup
        ]);
    }
}
