<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\FotografiasResena;
use App\Models\Ruta;

class ControladorResena extends Controller
{
    public function store(Request $request, $ruta_id)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'valoracion'  => 'required|numeric|min:1|max:5',
            'imagenes'    => 'nullable|array',
            'imagenes.*'  => 'image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $resena = Resena::create([
            'ruta_id'     => $ruta_id,
            'usuario'     => auth()->user()->name,
            'descripcion' => $request->descripcion,
            'valoracion'  => $request->valoracion,
        ]);

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $nombreArchivo = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move(public_path('img/resenas'), $nombreArchivo);

                FotografiasResena::create([
                    'resena_id' => $resena->id,
                    'imagen'    => 'img/resenas/' . $nombreArchivo,
                ]);
            }
        }

        return redirect()->back()->with('success', '¡Reseña publicada correctamente!');
    }

    public function InfoUsuario()
    {
        $resenas = Resena::where('usuario', auth()->user()->name)
            ->with('fotografias')
            ->latest()
            ->get();
        
        $rutas = Ruta::where('usuario', auth()->user()->name)->get();

        $favoritos = \App\Models\Favorito::where('user_id', auth()->id())
        ->with('ruta')
        ->get();

        return view('panelUsuario', compact('resenas', 'rutas', 'favoritos'));
    }
}
