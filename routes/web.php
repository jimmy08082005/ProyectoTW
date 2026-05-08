<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorRuta;

Route::view('/login', "iniciarsesion")->name('login');
Route::view('/registro', "crearCuenta")->name('registro');
Route::view('/', "index")->name('index');
Route::view('/contacta', "contacta")->name('contacta');
Route::view('/rutasMontana', "listaRutasMontaña")->name('listamontanas');
Route::view('/rutasMontana/penalara',"rutasmontaña.penalara")->name('penalara');
Route::view('/rutasMontana/pedriza',"rutasmontaña.pedriza")->name('pedriza');
Route::view('/rutasMontana/ordesa',"rutasmontaña.ordesa")->name('ordesa');
Route::view('/rutasMontana/gredos',"rutasmontaña.gredos")->name('gredos');
Route::view('/rutasArida', "listaRutasAridas")->name('listamontanas');

Route::post('/validar-registro', [ControladorLogin::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [ControladorLogin::class, 'login'])->name('inicia-sesion');
Route::get('/logout',[ControladorLogin::class, 'logout'])->name('logout');

Route::get('/subidaRuta', function () {
    if (!auth()->check()) {
        return redirect()->route('login')
               ->with('error', 'Debes iniciar sesión para acceder a esta página.');
    }
    return view('subidaRuta');
})->name('subidaRuta');

Route::post('/subidaRuta', [ControladorRuta::class, 'store'])
     ->middleware('auth')
     ->name('subidaRuta.store');


