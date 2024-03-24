<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Illuminate\Support\Str;


class CreateGroups extends Component
{
    //store
    public $nombre;
    public $descripcion;
    public $codigo_acceso;

    public function store()
    {

        //generar un uuid para el codigo de acceso de 6 caracteres
        $this->codigo_acceso = Str::random(6);

        Group::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'codigo_acceso' => $this->codigo_acceso,
        ]);

        GruposUsuarios::create([
            'id_grupo' => Group::latest('id')->first()->id,
            'id_usuario' => auth()->user()->id,
            'rol' => 'docente',
            'estado' => 'activo',
        ]);

        $this->reset([
            'nombre',
            'descripcion',
            'codigo_acceso',
        ]);

        session()->flash('message', 'Grupo creado con éxito');
        return Redirect::to('/grupos');
    }

    public function render()
    {
        return view('livewire.create-groups');
    }
}
