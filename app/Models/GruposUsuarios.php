<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposUsuarios extends Model
{
    use HasFactory;

    protected $table = 'grupos_usuarios';

    protected $fillable = [
        'id_grupo',
        'id_usuario',
        'rol',
        'estado',
    ];

    public function grupo()
    {
        return $this->belongsTo(Group::class, 'id_grupo');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    
}
