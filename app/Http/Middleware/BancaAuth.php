<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BancaAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('avaliador_id')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Você precisa estar logado como avaliador para acessar esta página.');
        }

        return $next($request);
    }
}