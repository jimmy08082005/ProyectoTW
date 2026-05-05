<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{
    public function login() {
        return view('iniciarsesion');
    }
}
