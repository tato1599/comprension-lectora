<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminDashboard extends Component
{


    public $users;

    public function mount()
    {
        // Obtener todos los usuarios de la aplicación
        $this->users = User::all();
    }

    public function assignRole($userId, $role)
    {
        $user = User::find($userId);
        if ($user) {
            if($role == 'maestro'){
                $user->removeRole('alumno');
            }
            if($role == 'alumno'){
                $user->removeRole('maestro');
            }
            $user->assignRole($role); // Esto depende de cómo estés manejando los roles en tu aplicación
        }

   }


    public function render()
    {
        // Pasar los usuarios a la vista livewire.admin-dashboard
        return view('livewire.admin-dashboard', [
            'users' => $this->users,
        ]);
    }
}
