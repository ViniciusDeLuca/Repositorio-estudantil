<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicacaoRequest;
use App\Models\Materia;
use App\Models\Publicacao;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function redirecionarInicio(Request $request){

        $materias = Materia::all();
        if($request->filtro){
            $filtro = $request->filtro;
            $publicacoes = Publicacao::where('id_materia', $request->filtro)->orderBy('created_at', 'desc')->paginate(5);
        }else{
            $publicacoes = Publicacao::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('home', [
            'materias' => $materias,
            'publicacoes' => $publicacoes,
            'filtro' => $filtro ?? ''
        ]);
    }

    public function publicacao($id)
    {
        $publicacao = Publicacao::where('id', $id)->first();

        return view('publicacao', [
            'publicacao' => $publicacao
        ]);
    }
    
    public function redirecionarCadastroPublicacao()
    {
        if(!session('docente')){
            redirect()->back();
        }
        $materias = Materia::all();

        return view('cadastrar_publicacao', [
            'materias' => $materias
        ]);
    }

    public function cadastrarPublicacao(PublicacaoRequest $request)
    {
        $publicacao = new Publicacao();
        $publicacao->titulo = $request->titulo;
        $publicacao->conteudo = $request->conteudo;
        $publicacao->id_materia = intval($request->materia);
        $publicacao->id_autor = session('docente')->id;
        $publicacao->data_entrega = $request->data_entrega;

        $publicacao->save();

        return redirect()->route('inicio')->with('sucesso', 'Adicionado com sucesso!');
    }
}
