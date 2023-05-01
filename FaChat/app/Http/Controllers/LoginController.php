<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
use App\Models\Mantenedor;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function redirecionarLogin(){
        return view('auth.login');
    }

    public function logar(Request $request){
        //Busca se existe conta com o e-mail informado
        $usuario = Usuario::where('email', $request->email)->first();

        //verifica se a conta existe e as senha são compatíveis
        if($usuario && Hash::check($request->senha, $usuario->senha)){
            //verifica se é docente ou aluno
            if($usuario->docente == true){
                session()->put('docente', $usuario);
                return redirect()->route('inicio');
            }else{
                session()->put('aluno', $usuario);
                return redirect()->route('inicio');
            }
        }else{
            return redirect()->route('inicio')->with('erro', 'Credenciais inválidas!');
        }
    }

    public function redirecionarCadastro(){
        return view('auth.cadastro');
    }

    public function cadastrar(CadastroRequest $request){
        try{
            //Instancia um novo usuario e faz o cadastro do mesmo no banco
            $usuario = new Usuario();

            $usuario->nome = $request->nome;
            $usuario->sobrenome = $request->sobrenome;
            $usuario->email = $request->email;
            $usuario->senha = Hash::make($request->senha);
            $usuario->docente = false;
            $usuario->ativo = false;

            $usuario->save();

        }catch(\Throwable $th){
            dd($th);
            abort(500);
        }
        return redirect()->route('login')->with('sucesso', 'Usuário cadastrado com sucesso!');
    }

    public function redirecionarLoginMantenedor(){
        return view('auth.loginMantenedor');
    }

    public function logarMantenedor(Request $request){
        $mantenedor = Mantenedor::where('login', $request->login)->first();

        if($mantenedor && ($mantenedor->ativo == false) && (Hash::check($request->senha, $mantenedor->senha))){
            session()->put('mantenedor', $mantenedor);
            return view('mantenedor.index');
        }else{
            return redirect()->back()->with('erro', 'Credenciais inválidas!');
        }
    }

    public function logout()
    {
        if(session('docente')){
            session()->forget('docente');
        }
        if(session('aluno')){
            session()->forget('aluno');
        }

        return redirect()->route('login');
    }
}
