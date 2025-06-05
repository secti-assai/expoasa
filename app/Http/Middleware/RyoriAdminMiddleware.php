<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RyoriAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() && !session('admin_authenticated')) {
            return redirect()->route('ryori.auth.login')
                ->with('error', 'É necessário fazer login para acessar esta área.');
        }
        
        return $next($request);
    }
}