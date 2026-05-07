<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLogin;

Route::view('/login', "iniciarsesion")->name('login');
Route::view('/registro', "crearCuenta")->name('registro');
Route::view('/subidaRuta', "subidaRuta")->name('subidaRuta');
Route::view('/', "index")->name('index');
Route::view('/rutasMontana', "listaRutasMontaña")->name('listamontanas');
Route::view('/rutasMontana/penalara',"rutasmontaña.penalara")->name('penalara');

Route::post('/validar-registro', [ControladorLogin::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [ControladorLogin::class, 'login'])->name('inicia-sesion');
Route::get('/logout',[ControladorLogin::class, 'logout'])->name('logout');

Route::post('/guardar-ruta', function () {
    return "Formulario enviado correctamente";
})->name('guardar-ruta');

