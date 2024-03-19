<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class CrearRolesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roles:crear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea los roles de administrador, maestro y alumno';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Crear el rol de administrador si no existe
          if (!Role::where('name', 'administrador')->exists()) {
            Role::create(['name' => 'administrador']);
            $this->info('Rol administrador creado exitosamente');
        }

        // Crear el rol de maestro si no existe
        if (!Role::where('name', 'maestro')->exists()) {
            Role::create(['name' => 'maestro']);
            $this->info('Rol maestro creado exitosamente');
        }

        // Crear el rol de alumno si no existe
        if (!Role::where('name', 'alumno')->exists()) {
            Role::create(['name' => 'alumno']);
            $this->info('Rol alumno creado exitosamente');
        }
    }
    
}
