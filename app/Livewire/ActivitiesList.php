<?php

namespace App\Livewire;

use App\Models\Activitie;
use App\Models\GruposUsuarios;
use Livewire\Component;

class ActivitiesList extends Component
{
    public $activities = [];

    public $rol;

    public function mount($groupId = null)
    {
        $groups = GruposUsuarios::where('id_usuario', auth()->id())
            ->where('estado', 'activo');

        if ($groupId) {
            $groups->where('id_grupo', $groupId);
            $this->rol = GruposUsuarios::where('id_usuario', auth()->id())
                ->where('id_grupo', $groupId)
                ->first()->rol;
        } else {
            $groups->where('rol', '!=', 'owner');
        }
        $groups = $groups->get();

        $this->activities = Activitie::whereIn('grupo_id', $groups->pluck('id_grupo'))
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.activities-list');
    }
}
