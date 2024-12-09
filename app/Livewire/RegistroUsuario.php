<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        DB::beginTransaction();
        try {
            $user = User::create([
                'email' => $this->email,
                'password' => Hash::make($this->contraseña),
                'name' => $this->nombre,
                'last_name' => $this->apellido,
                'birth_date' => $this->fechaNacimiento,
            ]);
            switch ($this->selectedRole) {
                case 'docente':
                    $user->assignRole('docente');
                    break;
                case 'padre':
                    $user->assignRole('padre');
                    break;
                case 'alumno':
                    $user->assignRole('alumno');
                    break;
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->dispatch('toast', ...['type' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
            return;
        }
        // autenticar usuario
        auth()->login($user);
        $this->dispatch('toast', ...['type' => 'success', 'message' => 'Usuario registrado correctamente']);
        $this->redirect(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.registro-usuario');
    }
}
