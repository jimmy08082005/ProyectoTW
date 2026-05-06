<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLogin;

Route::view('/login', "iniciarsesion")->name('login');
Route::view('/registro', "crearCuenta")->name('registro');
Route::view('/', "index")->name('index');

Route::post('/validar-registro', [ControladorLogin::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [ControladorLogin::class, 'login'])->name('inicia-sesion');
Route::get('/logout',[ControladorLogin::class, 'logout'])->name('logout');

