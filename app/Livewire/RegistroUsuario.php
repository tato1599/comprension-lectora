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

    public $step = 1;

    public function nextStep()
    {
        if ($this->step + 1 > 2) {
            return;
        }
        if ($this->step == 1) {
            if (empty($this->selectedRole)) {
                $this->dispatch('toast', ['type' => 'error', 'message' => 'Debes seleccionar un rol']); // instalar sweetalert2
                return;
            }
        }
        $this->step++;
    }

    public function render()
    {
        return view('livewire.registro-usuario');
    }
}
