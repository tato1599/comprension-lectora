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

    public $rol;

    public function mount()
    {
        // Verificar si el usuario tiene acceso a este grupo
        $userId = Auth::id();

        // Obtener el id del grupo desde la URL
        $this->groupId = request()->route('id');

        // Verificar que el usuario pertenece al grupo
        $relacion = GruposUsuarios::where('id_usuario', $userId)
            ->where('id_grupo', $this->groupId)
            ->first();

        if (!$relacion) {
            abort(403, 'No tienes permiso para acceder a este grupo.');
        }

        $this->rol = $relacion->rol;

        // Obtener el grupo y asignarlo a la propiedad
        $this->group = Group::findOrFail($this->groupId);
    }


    public function render()
    {
        return view('livewire.show-groups', [
            'group' => $this->group,
        ]);
    }
}
