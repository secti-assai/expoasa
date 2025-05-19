<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IdeasunEquipeAuth
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar se existe uma cidade logada para criar equipes
        if (!Session::has('cidade_id_para_equipe')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Você precisa estar logado com o ID de cidade para gerenciar equipes.');
        }

        return $next($request);
    }
}