<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use App\Models\User;
use Livewire\Component;

class Groups extends Component
{

    public $groups;
    public $users;

    public function mount()
    {
        // Obtener los id_grupo asociados al usuario actual
        $idGrupos = GruposUsuarios::where('id_usuario', auth()->id())->pluck('id_grupo');

        $this->users = User::all();

        $this->groups = Group::whereIn('id', $idGrupos)->get();
    }




    public function render()
    {

        return view('livewire.groups', [
            'groups' => $this->groups,
            'users' => $this->users
        ]);
    }
}
