<?php

namespace App\Livewire;

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

    public function render()
    {
        return view('livewire.registro-usuario');
    }
}
