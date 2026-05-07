<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'rutas';

    protected $fillable = [
        'titulo',
        'descripcion',
        'localizacion',
        'duracion',
        'dificultad',
        'distancia',
        'tipo_de_ruta',
        'imagen',
        'usuario',
    ];
}
