<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'administrador']);
        Role::firstOrCreate(['name' => 'docente']);
        Role::firstOrCreate(['name' => 'estudiante']);
        Role::firstOrCreate(['name' => 'padre']);


        // Buscar usuario por correo y asignar rol
        $user = \App\Models\User::where('email', 'test@example.com')->first();

        if ($user) {
            $user->assignRole('docente');
            $this->command->info('Rol asignado al usuario con correo test@example.com.');
        } else {
            $this->command->warn('No se encontró al usuario con correo test@example.com.');
        }
    }
}
