<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;

class ControladorFavorito extends Controller
{
    public function ajustarFavorito($ruta_id)
    {
        $favorito = Favorito::where('ruta_id', $ruta_id)
                            ->where('user_id', auth()->id())
                            ->first();

        if ($favorito) {
            $favorito->delete();
        } else {
            Favorito::create([
                'ruta_id' => $ruta_id,
                'user_id' => auth()->id(),
            ]);
        }

        return redirect()->back();
    }
}
