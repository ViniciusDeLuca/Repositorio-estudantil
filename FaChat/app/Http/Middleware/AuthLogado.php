<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthLogado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if(session('aluno') || session('docente')){
            return $next($request);
        }else{
            return redirect()->route('login')->with('erro', 'Para acessar essa página necessita estar logado!');
        }
        return $next($request);
    }
}
