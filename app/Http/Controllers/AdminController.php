<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cidade;
use App\Models\Equipe;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Autenticar administrador
     */
    public function authenticate(Request $request)
    {
        $usuario = $request->input('usuario');
        $senha = $request->input('senha');
        
        // Credenciais de administrador (idealmente, devem estar no .env ou banco de dados)
        $adminUsuario = env('ADMIN_USER', 'admin');
        $adminSenha = env('ADMIN_PASSWORD', 'expoasa2025');
        
        if ($usuario === $adminUsuario && $senha === $adminSenha) {
            // Autenticação bem-sucedida
            Session::put('admin_authenticated', true);
            return redirect()->route('ideasun.admin.dashboard');
        }
        
        // Autenticação falhou
        return redirect()->route('ideasun.login')
            ->with('error', 'Credenciais de administrador inválidas');
    }
    
    /**
     * Fazer logout do administrador
     */
    public function logout()
    {
        Session::forget('admin_authenticated');
        return redirect()->route('ideasun.login');
    }
    
    /**
     * Exibir dashboard do administrador
     */
    public function dashboard()
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
        
        // Obter estatísticas para o dashboard
        $cidadesCount = Cidade::count();
        $equipesCount = Equipe::count();
        $agendamentosCount = Cidade::whereNotNull('treinamento_agendado')
            ->orWhereNotNull('banca_agendada')
            ->count();
        
        // Obter cidades recentes
        $cidadesRecentes = Cidade::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        
        // Obter próximos treinamentos
        $proximosTreinamentos = Cidade::whereNotNull('treinamento_agendado')
            ->where('treinamento_agendado', '>=', Carbon::now())
            ->orderBy('treinamento_agendado', 'asc')
            ->take(5)
            ->get();
        
        // Obter todas as cidades para a tab cidades
        $cidades = Cidade::all();
        
        // Obter todas as equipes para a tab equipes
        $equipes = Equipe::with('cidade')->get();
        
        // Preparar eventos para o calendário
        $eventos = [];
        
        // Adicionar treinamentos ao calendário
        $treinamentos = Cidade::whereNotNull('treinamento_agendado')->get();
        foreach ($treinamentos as $cidade) {
            $eventos[] = [
                'title' => 'Treinamento: ' . $cidade->nome,
                'start' => Carbon::parse($cidade->treinamento_agendado)->format('Y-m-d\TH:i:s'),
                'end' => Carbon::parse($cidade->treinamento_agendado)->addHours(2)->format('Y-m-d\TH:i:s'),
                'backgroundColor' => '#28a745',
                'borderColor' => '#28a745',
                'textColor' => '#fff',
                'extendedProps' => [
                    'tipo' => 'treinamento',
                    'cidade' => $cidade->nome
                ]
            ];
        }
        
        // Adicionar bancas ao calendário
        $bancas = Cidade::whereNotNull('banca_agendada')->get();
        foreach ($bancas as $cidade) {
            $eventos[] = [
                'title' => 'Banca: ' . $cidade->nome,
                'start' => Carbon::parse($cidade->banca_agendada)->format('Y-m-d\TH:i:s'),
                'end' => Carbon::parse($cidade->banca_agendada)->addHours(1)->format('Y-m-d\TH:i:s'),
                'backgroundColor' => '#9c27b0',
                'borderColor' => '#9c27b0',
                'textColor' => '#fff',
                'extendedProps' => [
                    'tipo' => 'banca',
                    'cidade' => $cidade->nome
                ]
            ];
        }
        
        return view('ideasun.admin.dashboard', compact(
            'cidadesCount',
            'equipesCount',
            'agendamentosCount',
            'cidadesRecentes',
            'proximosTreinamentos',
            'cidades',
            'equipes',
            'eventos'
        ));
    }
    
    /**
     * Exibir detalhes de uma cidade
     */
    public function cidadeDetalhes($id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
        
        $cidade = Cidade::with('equipes')->findOrFail($id);
        
        return view('ideasun.admin.cidade-detalhes', compact('cidade'));
    }
    
    /**
     * Exibir detalhes de uma equipe
     */
    public function equipeDetalhes($id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
        
        $equipe = Equipe::with(['cidade', 'estudantes'])->findOrFail($id);
        
        return view('ideasun.admin.equipe-detalhes', compact('equipe'));
    }
    
    /**
     * Exportar dados
     */
    public function export(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
        
        $type = $request->input('type', 'all');
        $format = $request->input('format', 'excel');
        
        // Aqui você implementaria a lógica de exportação
        // Usando bibliotecas como Laravel Excel ou DomPDF
        
        // Por enquanto, apenas retornamos uma mensagem
        return back()->with('success', 'Exportação iniciada. O arquivo será baixado em breve.');
    }
}