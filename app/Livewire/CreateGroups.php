<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;


class CreateGroups extends Component
{
    public $nombre;

    public $descripcion;

    public $codigo_acceso;

    public function crearGrupo()
    {
        $this->nombre = ucwords(strtolower($this->nombre));
        //el codigo corto son las iniciales del nombre del grupo mas las iniciales del maestro mas el año, si el codigo corto ya existe se le agrega un numero al final
        $codigo_corto = '';
        $nombre = explode(' ', trim($this->nombre));
        // iniciales del nombre
        foreach ($nombre as $palabra) {
            if (strlen($palabra) <= 2) {
                continue;
            }
            $codigo_corto .= $palabra[0];
        }
        $codigo_corto .= '-';
        // iniciales del maestro
        $names = explode(' ', auth()->user()->name);
        $last_names = explode(' ', auth()->user()->last_name);
        foreach ($names as $names) {
            $codigo_corto .= strtoupper($names[0]);
        }
        foreach ($last_names as $last_names) {
            $codigo_corto .= strtoupper($last_names[0]);
        }
        $codigo_corto .= '-' . date('Y');


        $group = Group::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'codigo_acceso' => empty($this->codigo_acceso) ? null : $this->codigo_acceso,
            'codigo_corto' => $codigo_corto,
            'owner_id' => auth()->user()->id,
        ]);

        GruposUsuarios::create([
            'id_grupo' => $group->id,
            'id_usuario' => auth()->user()->id,
            'rol' => 'owner',
            'estado' => 'activo',
        ]);

        $this->reset([
            'nombre',
            'descripcion',
            'codigo_acceso',
        ]);
        return Redirect::to('/grupos');
    }

    public function render()
    {
        return view('livewire.create-groups');
    }
}
