<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Redirect;

class JoinGroup extends Component
{

    public $accessCode;

    public function store()
    {
        //buscar el grupo con el codigo de acceso
        $group = Group::where('codigo_acceso', $this->accessCode)->first();

        //si el grupo no existe
        if (!$group) {
            session()->flash('message', 'El grupo no existe');
            return Redirect::to('/grupos');
        }

        //si el usuario ya esta en el grupo
        if (GruposUsuarios::where('id_grupo', $group->id)->where('id_usuario', auth()->user()->id)->first()) {
            session()->flash('message', 'Ya eres miembro de este grupo');
            return Redirect::to('/grupos');
        }

        //si el grupo existe y el usuario no es miembro
        GruposUsuarios::create([
            'id_grupo' => $group->id,
            'id_usuario' => auth()->user()->id,
            'rol' => 'alumno',
            'estado' => 'activo',
        ]);

        session()->flash('message', 'Te has unido al grupo con éxito');
        return Redirect::to('/grupos');
    }
}
