<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IdeasunCidadeAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('cidade_id')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Você precisa estar logado como representante de cidade para acessar esta página.');
        }

        return $next($request);
    }
}