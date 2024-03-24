<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowGroups extends Component
{
    public $groups;

    public function mount()
    {
        // Obtener el ID del usuario actual
    $userId = Auth::id();

    // Obtener los grupos asociados al usuario actual
    $idGrupos = GruposUsuarios::where('id_usuario', $userId)->pluck('id_grupo');

    // Obtener los grupos correspondientes a los id_grupo obtenidos
    $this->groups = Group::whereIn('id', $idGrupos)->get();

    // Verificar si el grupo solicitado está entre los grupos asociados al usuario actual
    $requestedGroupId = request()->route('id');
    if (!$this->groups->contains('id', $requestedGroupId)) {
        abort(403, 'No tienes permiso para acceder a este grupo.');
    }
    }


    public function render()
    {
        return view('livewire.show-groups');
    }
}
