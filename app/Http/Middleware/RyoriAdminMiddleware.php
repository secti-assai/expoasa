<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RyoriAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!session('admin_authenticated')) {
            return redirect()->route('ryori.auth.login')
                ->with('error', 'É necessário fazer login para acessar esta área.');
        }
        
        return $next($request);
    }
}