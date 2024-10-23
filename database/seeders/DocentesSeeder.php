<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            [
                'id_usuario' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // Agrega más registros según sea necesario
        ]);
    }
}
