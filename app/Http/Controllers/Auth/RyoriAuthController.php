<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RyoriAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('ryori.auth.login');
    }
    
    public function login(Request $request)
    {
        // Senha fixa para autenticação simples
        $adminEmail = 'teste@gmail.com';
        $adminPassword = 'teste';
        
        if ($request->email == $adminEmail && $request->password == $adminPassword) {
            // Armazenar na sessão que o usuário está autenticado
            session(['admin_authenticated' => true]);
            return redirect()->route('ryori.admin.dishes');
        }
        
        return back()->with('error', 'Credenciais inválidas. Tente novamente.');
    }
    
    public function logout()
    {
        session()->forget('admin_authenticated');
        return redirect()->route('ryori.auth.login');
    }
}