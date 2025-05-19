<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IdeasunQualquerAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar se está logado como equipe OU cidade
        if (!Session::has('cidade_id_para_equipe') && !Session::has('equipe_id') && !Session::has('cidade_id')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Você precisa estar logado para acessar esta página.');
        }

        return $next($request);
    }
}