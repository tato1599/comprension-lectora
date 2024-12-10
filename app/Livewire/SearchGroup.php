<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\GruposUsuarios;
use Illuminate\Support\Facades\Redirect;

class SearchGroup extends Component
{
    public $codigoAcceso;

    public string $terminoBusqueda = '';

    public array $grupos = [];

    public function mount()
    {
        $this->grupos = Group::whereIn('id', GruposUsuarios::where('id_usuario', auth()->id())->pluck('id_grupo'))
            ->addSelect([
                'rol' => GruposUsuarios::select('rol')
                    ->whereColumn('id_grupo', 'groups.id')
                    ->where('id_usuario', auth()->user()->id)
                    ->limit(1)
            ])
            ->get()
            ->toArray();
    }

    public function unirseGrupo($params)
    {
        $idGrupo = $params["idGrupo"];
        $codigoAcceso = $params["codigo_acceso"] ?? null;

        $grupo = Group::find($idGrupo);

        // Si el grupo no existe
        if (!$grupo) {
            $this->dispatch('toast', ...['message' => 'El grupo no existe', 'type' => 'error']);
            return;
        }

        if (!empty($grupo->codigo_acceso) && $grupo->codigo_acceso !== $codigoAcceso) {
            $this->dispatch('toast', ...['message' => 'Código de acceso incorrecto', 'type' => 'error']);
            return;
        }

        // Si el grupo existe y el usuario no es miembro
        GruposUsuarios::create([
            'id_grupo' => $grupo->id,
            'id_usuario' => auth()->user()->id,
            'rol' => 'alumno',
            'estado' => 'activo',
        ]);

        $this->dispatch('toast', ...['message' => 'Te has unido al grupo', 'type' => 'success']);
        return Redirect::to('/grupos/' . $grupo->id);
    }

    public function buscarGrupos()
    {
        $grupos = Group::query()
            ->where('nombre', "ilike", "%{$this->terminoBusqueda}%")
            ->orWhere('codigo_corto', "ilike", "%{$this->terminoBusqueda}%")
            ->addSelect([
                'rol' => GruposUsuarios::select('rol')
                    ->whereColumn('id_grupo', 'groups.id')
                    ->where('id_usuario', auth()->user()->id)
                    ->limit(1)
            ])
            ->get();

        if ($grupos->isEmpty()) {
            $this->dispatch('toast', ...['message' => 'No se encontraron grupos', 'type' => 'warning']);
            return;
        }
        $this->grupos = $grupos->toArray();
    }
}
