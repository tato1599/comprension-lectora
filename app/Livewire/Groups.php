<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use Livewire\Component;

class Groups extends Component
{

    public $groups;

    public function mount()
    {
        // Obtener los id_grupo asociados al usuario actual
        $idGrupos = GruposUsuarios::where('id_usuario', auth()->id())->pluck('id_grupo');

        // Obtener los grupos correspondientes a los id_grupo obtenidos
        $this->groups = Group::whereIn('id', $idGrupos)->get();
    }




    public function render()
    {   
        
        return view('livewire.groups', [
            'groups' => $this->groups
        ]);
    }
}
