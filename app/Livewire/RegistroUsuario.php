<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistroUsuario extends Component
{
    public $selectedRole;

    public $email = '';

    public $contraseña = '';

    public $confirmarContraseña = '';

    public $nombre = '';

    public $apellido = '';

    public $fechaNacimiento;

    public $sexo = 'H';

    public function register()
    {
        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->contraseña),
            'name' => $this->nombre,
            'last_name' => $this->apellido,
            'birth_date' => $this->fechaNacimiento,
            'sex' => $this->sexo,
        ]);

        $user->assignRole($this->selectedRole);
    }

    public function render()
    {
        return view('livewire.registro-usuario');
    }
}
