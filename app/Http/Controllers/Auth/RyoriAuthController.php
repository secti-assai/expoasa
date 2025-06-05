<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RyoriAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('ryori.auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Regenerate session
            $request->session()->regenerate();
            
            // Definir a sessão personalizada também
            session(['admin_authenticated' => true]);
            
            // Set a longer session lifetime (8 hours)
            config(['session.lifetime' => 480]);
            
            return redirect()->route('ryori.admin.dishes');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ])->withInput($request->except('password'));
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        session()->forget('admin_authenticated');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('ryori.auth.login');
    }
}