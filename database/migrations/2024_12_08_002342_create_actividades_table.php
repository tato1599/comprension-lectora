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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion')->nullable();
            $table->text('texto')->nullable();
            $table->foreignId('docente_id')->constrained('users');
            $table->string('categoria')->nullable();
            $table->string('estado')->default('pendiente');
            $table->string('ruta_pdf')->nullable();
            $table->boolean('es_publica')->default(false);
            $table->integer('tiempo_lectura')->nullable();
            $table->json('preguntas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
