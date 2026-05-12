<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;

class ControladorRuta extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'titulo'       => 'required|string|max:255|unique:rutas,titulo',
            'descripcion'  => 'required|string',
            'localizacion' => 'required|string|max:255',
            'duracion'     => 'required|integer|min:0.1',
            'dificultad'   => 'required|in:Baja,Media,Alta,Extrema',
            'distancia'    => 'required|numeric|min:0',
            'tipo_de_ruta' => 'required|string|max:255',
            'imagen'       => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $archivo = $request->file('imagen');
        $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();
        $archivo->move(public_path('img'), $nombreArchivo);
        $rutaImagen = 'img/' . $nombreArchivo;

        Ruta::create([
            'titulo'        => $request->titulo,
            'descripcion'   => $request->descripcion,
            'localizacion'  => $request->localizacion,
            'duracion'      => $request->duracion,
            'dificultad'    => $request->dificultad,
            'distancia'     => $request->distancia,
            'tipo_de_ruta'  => $request->tipo_de_ruta,
            'imagen'        => $rutaImagen,
            'usuario'=> auth()->user()->name,
        ]);

        return redirect()->route('subidaRuta')
                         ->with('success', '¡Ruta publicada correctamente!');
    }

    public function mostrarRutas()
    {
        $rutas = Ruta::all();
        $favoritos = auth()->check()
        ? \App\Models\Favorito::where('user_id', auth()->id())->pluck('ruta_id')->toArray()
        : [];
        $oficiales = \App\Models\Validacion::where('ruta_oficial', true)->pluck('ruta_id')->toArray();
        $verificadas = \App\Models\Validacion::pluck('ruta_id')->toArray();

        return view('rutasSubidas', compact('rutas', 'favoritos', 'oficiales', 'verificadas'));
    }

    public function mostrarDetallesRuta($id)
    {
        $ruta = Ruta::findOrFail($id);
        $resenas = $ruta->resenas()->with('fotografias')->get();
        $esFavorito = auth()->check()
        ? \App\Models\Favorito::where('ruta_id', $id)
                               ->where('user_id', auth()->id())
                               ->exists()
        : false;
        $validacion = \App\Models\Validacion::where('ruta_id', $id)->first();
        return view('rutasUsuarios.detallesRutas', compact('ruta', 'resenas', 'esFavorito', 'validacion'));
    }

    public function index()
    {
        $rutasOficiales = \App\Models\Validacion::with('ruta')
            ->where('ruta_oficial', true)
            ->get();

        return view('index', compact('rutasOficiales'));
    }
}
