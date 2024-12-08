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
            $table->text('descripcion')->nullable();
            $table->text('texto')->nullable();
            $table->foreignId('docente_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('grupo_id')->nullable()->constrained('grupos')->onDelete('set null');
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamp('fecha_limite')->nullable();
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
