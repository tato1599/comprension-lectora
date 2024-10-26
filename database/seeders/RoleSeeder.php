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
        // Crear roles para la aplicación
        Role::create(['name' => 'administrador']);
        Role::create(['name' => 'docente']);
        Role::create(['name' => 'estudiante']);
    }
}
