<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function redirecionarInicio(){
        return view('inicio');
    }
}
