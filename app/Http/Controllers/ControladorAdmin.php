<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruta;
use App\Models\Validacion;

class ControladorAdmin extends Controller
{
    public function panelAdmin()
    {
        $rutasValidadas = Validacion::pluck('ruta_id')->toArray();

        $rutasSinValidar = Ruta::whereNotIn('id', $rutasValidadas)->get();
        $rutasValidadasList = Validacion::with('ruta')->get();

        return view('panelAdmin', compact('rutasSinValidar', 'rutasValidadasList'));
    }

    public function validar($ruta_id)
    {
        Validacion::create([
            'ruta_id'      => $ruta_id,
            'ruta_oficial' => false,
        ]);

        return redirect()->back()->with('success', 'Ruta validada correctamente.');
    }

    public function eliminar($ruta_id)
    {
        $ruta = Ruta::findOrFail($ruta_id);

        $imagenAnterior = public_path($ruta->imagen);
        if (file_exists($imagenAnterior)) {
            unlink($imagenAnterior);
        }
    
        $ruta->delete();
        return redirect()->back()->with('success', 'Ruta eliminada correctamente.');
    }

    public function ajustarOficial($ruta_id)
    {
        $validacion = Validacion::where('ruta_id', $ruta_id)->firstOrFail();
        $validacion->ruta_oficial = !$validacion->ruta_oficial;
        $validacion->save();

        return redirect()->back();
    }

    public function invalidar($ruta_id)
    {
        $validacion = Validacion::where('ruta_id', $ruta_id)->firstOrFail();
        
        if ($validacion) {
            $validacion->delete();
        }

        return redirect()->back()->with('success', 'Ruta invalidada correctamente.');
    }
}
