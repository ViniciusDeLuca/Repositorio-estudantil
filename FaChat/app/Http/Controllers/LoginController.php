<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirecionarLogin(){
        return view('auth.login');
    }

    public function redirecionarCadastro(){
        return view('auth.cadastro');
    }
}