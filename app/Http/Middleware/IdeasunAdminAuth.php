<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IdeasunAdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        return $next($request);
    }
}