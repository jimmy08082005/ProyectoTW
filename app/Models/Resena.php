<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FotografiasResena;

class Resena extends Model
{
    protected $table = 'resenas';

    protected $fillable = [
        'ruta_id',
        'usuario',
        'descripcion',
        'valoracion',
    ];

    public function fotografias()
    {
        return $this->hasMany(FotografiasResena::class, 'resena_id');
    }

    public function ruta()
    {
        return $this->belongsTo(Ruta::class, 'ruta_id');
    }
}
