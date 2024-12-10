<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;

    protected $table = 'actividades';

    protected $fillable = [
        'titulo',
        'descripcion',
        'texto',
        'docente_id',
        'grupo_id',
        'categoria',
        'estado',
        'ruta_pdf',
        'es_publica',
        'tiempo_lectura',
        'preguntas',
    ];

    protected $casts = [
        'preguntas' => 'array', // Para manejar automáticamente el campo JSON
        'es_publica' => 'boolean',
    ];
}
