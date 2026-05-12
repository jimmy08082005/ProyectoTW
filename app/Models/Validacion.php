<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validacion extends Model
{
    protected $table = 'validaciones';

    protected $fillable = ['ruta_id', 'ruta_oficial'];

    public function ruta()
    {
        return $this->belongsTo(Ruta::class, 'ruta_id');
    }
}
