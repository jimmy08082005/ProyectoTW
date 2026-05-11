<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotografiasResena extends Model
{
    protected $table = 'fotografias_resena';

    protected $fillable = [
        'resena_id',
        'imagen',
    ];

    public function resena()
    {
        return $this->belongsTo(Resena::class, 'resena_id');
    }
}
