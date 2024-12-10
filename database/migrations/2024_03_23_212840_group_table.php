<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion')->nullable();
            $table->string('codigo_corto')->unique(); //el codigo corto son las iniciales del nombre del grupo mas las iniciales del maestro mas el año, si el codigo corto ya existe se le agrega un numero al final
            $table->string('codigo_acceso')->nullable(); //el codigo de acceso es un codigo que se le da al grupo para que los usuarios puedan unirse (opcional)
            $table->foreignId('owner_id')->constrained('users', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
