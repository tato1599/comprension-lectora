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
        Schema::create('grupos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_grupo')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_grupo')->references('id')->on('groups');
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->string('rol');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_usuarios');
    }
};
