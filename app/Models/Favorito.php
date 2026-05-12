<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table = 'favoritos';

    protected $fillable = ['ruta_id', 'user_id'];

    public function ruta()
    {
        return $this->belongsTo(Ruta::class, 'ruta_id');
    }
}
