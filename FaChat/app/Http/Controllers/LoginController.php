<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroRequest;
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
            return redirect()->back()->with('erro', 'Credenciais inválidas');
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

            $usuario->save();

        }catch(\Throwable $th){
            abort(500);
        }
        return redirect()->route('redirecionarLogin')->with('sucesso', 'Usuário cadastrado com sucesso!');
    }
}
