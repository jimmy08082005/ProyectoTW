<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorLogin;
use App\Http\Controllers\ControladorRuta;
use App\Http\Controllers\ControladorResena;
use App\Http\Controllers\ControladorFavorito;
use App\Http\Controllers\ControladorAdmin;

Route::view('/login', "iniciarsesion")->name('login');
Route::view('/registro', "crearCuenta")->name('registro');
Route::view('/contacta', "contacta")->name('contacta');
Route::view('/rutasMontana', "listaRutasMontaña")->name('listamontanas');
Route::view('/rutasMontana/penalara',"rutasmontaña.penalara")->name('penalara');
Route::view('/rutasMontana/pedriza',"rutasmontaña.pedriza")->name('pedriza');
Route::view('/rutasMontana/ordesa',"rutasmontaña.ordesa")->name('ordesa');
Route::view('/rutasMontana/gredos',"rutasmontaña.gredos")->name('gredos');
Route::view('/rutasArida', "listaRutasAridas")->name('listaaridas');
Route::view('/rutasArida/tabernas',"rutasaridas.tabernas")->name('tabernas');
Route::view('/rutasArida/bardenas',"rutasaridas.bardenas")->name('bardenas');
Route::view('/rutasArida/gorafe',"rutasaridas.gorafe")->name('gorafe');
Route::view('/rutasArida/gata',"rutasaridas.gata")->name('gata');
Route::view('/rutasRio', "listaRutasRios")->name('listarios');
Route::view('/rutasRio/cares',"rutasrios.cares")->name('cares');
Route::view('/rutasRio/cabriel',"rutasrios.cabriel")->name('cabriel');
Route::view('/rutasRio/borosa',"rutasrios.borosa")->name('borosa');
Route::view('/rutasRio/algar',"rutasrios.algar")->name('algar');

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

Route::get('/panelUsuario', [ControladorResena::class, 'InfoUsuario'])
    ->middleware('auth')
    ->name('panelUsuario');

Route::get('/panelAdmin', [ControladorAdmin::class, 'panelAdmin'])
    ->middleware('auth')->name('panelAdmin');

Route::post('/panelAdmin/validar/{ruta_id}', [ControladorAdmin::class, 'validar'])
    ->middleware('auth')->name('admin.validar');

Route::delete('/panelAdmin/eliminar/{ruta_id}', [ControladorAdmin::class, 'eliminar'])
    ->middleware('auth')->name('admin.eliminar');

Route::post('/panelAdmin/oficial/{ruta_id}', [ControladorAdmin::class, 'ajustarOficial'])
    ->middleware('auth')->name('admin.oficial');

Route::delete('/panelAdmin/invalidar/{ruta_id}', [ControladorAdmin::class, 'invalidar'])
    ->middleware('auth')->name('admin.invalidar');

Route::post('/subidaRuta', [ControladorRuta::class, 'store'])
     ->middleware('auth')
     ->name('subidaRuta.store');

Route::get('/rutasSubidas', [ControladorRuta::class, 'mostrarRutas'])->name('rutasSubidas');
Route::get('/rutasSubidas/{id}', [ControladorRuta::class, 'mostrarDetallesRuta'])->name('rutasSubidas.mostrarDetallesRuta');

Route::post('/rutasSubidas/{ruta_id}/resena', [ControladorResena::class, 'store'])
     ->middleware('auth')
     ->name('resena.store');

Route::post('/favoritos/{ruta_id}', [ControladorFavorito::class, 'ajustarFavorito'])
     ->middleware('auth')
     ->name('favoritos.ajustarFavorito');

Route::get('/', [ControladorRuta::class, 'index'])
    ->name('index');

Route::get('/rutasSubidas/{id}/editar', [ControladorRuta::class, 'editar'])
    ->middleware('auth')->name('rutasSubidas.editar');

Route::put('/rutasSubidas/{id}/actualizar', [ControladorRuta::class, 'actualizar'])
    ->middleware('auth')->name('rutasSubidas.actualizar');