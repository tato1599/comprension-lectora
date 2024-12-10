<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistroUsuario extends Component
{
    public $rolSeleccionado;

    public $correo = '';

    public $contraseña = '';

    public $confirmarContraseña = '';

    public $nombre = '';

    public $apellido = '';

    public $fechaNacimiento;

    public $sexo = 'H';

    public function registrar()
    {
        DB::beginTransaction();
        $this->nombre = ucwords(strtolower($this->nombre));
        $this->apellido = ucwords(strtolower($this->apellido));
        try {
            $user = User::create([
                'email' => $this->correo,
                'password' => Hash::make($this->contraseña),
                'name' => $this->nombre,
                'last_name' => $this->apellido,
                'birth_date' => $this->fechaNacimiento,
                'sex' => $this->sexo,
            ]);
            switch ($this->rolSeleccionado) {
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
            $message = "Error al registrar usuario";
            if ($e->getCode() == 23505) {
                $message = "El correo electrónico ya está registrado";
            }
            $this->dispatch('toast', ...['type' => 'error', 'message' => $message]);
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
