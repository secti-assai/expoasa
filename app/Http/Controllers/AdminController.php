<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Adicione esta linha
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Cidade;
use App\Models\Equipe;
use App\Models\BancaCidadeVinculo;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Autenticar administrador
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'senha' => 'required|string',
        ]);

        // Verifique se existe um admin no banco de dados
        $admin = \App\Models\Admin::where('username', $request->usuario)
            ->where('is_active', true)
            ->first();

        if ($admin && Hash::check($request->senha, $admin->password)) {
            // Autenticação bem-sucedida
            Session::put('admin_authenticated', true);
            return redirect()->route('ideasun.admin.dashboard');
        }

        // Se não existirem admins no banco, use as credenciais do .env (temporariamente)
        if (\App\Models\Admin::count() === 0) {
            $adminUsuario = env('ADMIN_USER', 'admin');
            $adminSenha = env('ADMIN_PASSWORD', 'expoasa2025');

            if ($request->usuario === $adminUsuario && $request->senha === $adminSenha) {
                Session::put('admin_authenticated', true);
                return redirect()->route('ideasun.admin.dashboard');
            }
        }

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
        // Remova a verificação manual, o middleware já trata isso

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

    /**
     * Exibir página de gerenciamento de bancas
     */
    public function bancas()
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Obter todas as cidades com bancas agendadas (avaliadores cadastrados)
        $cidadesComBanca = Cidade::whereHas('avaliadores')
                            ->withCount('avaliadores')
                            ->with('cidadesAvaliadas.cidadeAvaliada')
                            ->get();

        // Obter todos os vínculos existentes
        $vinculos = BancaCidadeVinculo::with(['bancaCidade', 'cidadeAvaliada'])->get();

        return view('ideasun.admin.bancas', compact('cidadesComBanca', 'vinculos'));
    }

    /**
     * Exibir página para vincular uma banca específica
     */
    public function vincularBanca($banca_cidade_id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Obter a cidade da banca
        $bancaCidade = Cidade::findOrFail($banca_cidade_id);

        // Verificar se a cidade tem banca (avaliadores cadastrados)
        if ($bancaCidade->avaliadores->count() == 0) {
            return redirect()->route('ideasun.admin.bancas')
                ->with('error', 'Esta cidade não possui avaliadores cadastrados.');
        }

        // Obter todas as cidades exceto a própria banca
        $cidadesDisponiveis = Cidade::where('id', '!=', $banca_cidade_id)->get();

        // Obter os IDs das cidades já vinculadas a esta banca
        $cidadesVinculadasIds = BancaCidadeVinculo::where('banca_cidade_id', $banca_cidade_id)
                                            ->pluck('cidade_avaliada_id')
                                            ->toArray();

        return view('ideasun.admin.vincular-banca', compact(
            'bancaCidade',
            'cidadesDisponiveis',
            'cidadesVinculadasIds'
        ));
    }

    /**
     * Salvar vinculações de banca
     */
    public function salvarVinculos(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        $request->validate([
            'banca_cidade_id' => 'required|exists:cidades,id',
            'cidades_avaliadas' => 'required|array',
            'cidades_avaliadas.*' => 'exists:cidades,id'
        ]);

        try {
            $bancaCidadeId = $request->banca_cidade_id;

            // Remover vinculações existentes
            BancaCidadeVinculo::where('banca_cidade_id', $bancaCidadeId)->delete();

            // Criar novas vinculações
            foreach ($request->cidades_avaliadas as $cidadeAvaliadaId) {
                BancaCidadeVinculo::create([
                    'banca_cidade_id' => $bancaCidadeId,
                    'cidade_avaliada_id' => $cidadeAvaliadaId
                ]);
            }

            // Obter nome da cidade para mensagem
            $cidadeBanca = Cidade::find($bancaCidadeId);

            return redirect()->route('ideasun.admin.bancas')
                ->with('success', "Vinculações da banca da cidade {$cidadeBanca->nome} salvas com sucesso.");

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Erro ao salvar vinculações de banca:', [
                'erro' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->with('error', 'Erro ao salvar vinculações: ' . $e->getMessage());
        }
    }

    /**
     * Remover vinculação específica
     */
    public function removerVinculo($vinculo_id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        try {
            $vinculo = BancaCidadeVinculo::findOrFail($vinculo_id);

            // Obter nomes para mensagem
            $cidadeBanca = Cidade::find($vinculo->banca_cidade_id);
            $cidadeAvaliada = Cidade::find($vinculo->cidade_avaliada_id);

            $vinculo->delete();

            return redirect()->route('ideasun.admin.bancas')
                ->with('success', "Vinculação removida: A banca de {$cidadeBanca->nome} não avaliará mais {$cidadeAvaliada->nome}.");

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Erro ao remover vinculação: ' . $e->getMessage());
        }
    }

    /**
     * Exibir resultados das avaliações
     */
    public function resultadosAvaliacoes()
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Obter todas as equipes com suas avaliações
        $equipes = Equipe::with(['cidade', 'avaliacoes.avaliador.cidade'])
                        ->withCount('avaliacoes')
                        ->get();

        $equipesResultados = [];

        foreach ($equipes as $key => $equipe) {
            $equipesResultados[$equipe->id] = [
                'equipe' => $equipe,
                'media_A' => 0,
                'media_B' => 0,
                'media_C' => 0,
                'media_D' => 0,
                'nota_media' => 0
            ];
            
            if ($equipe->avaliacoes->count() > 0) {
                $totalA = 0;
                $totalB = 0;
                $totalC = 0;
                $totalD = 0;
                $totalNota = 0;
                $count = count($equipe->avaliacoes);
                
                foreach ($equipe->avaliacoes as $avaliacao) {
                    $totalA += $avaliacao->A_criatividade_inovacao;
                    $totalB += $avaliacao->B_qualidade_apresentacao;
                    $totalC += $avaliacao->C_impacto_sociedade;
                    $totalD += $avaliacao->D_aderencia_ODS;
                    $totalNota += $avaliacao->nota_total;
                }
                
                $equipesResultados[$equipe->id]['media_A'] = $count > 0 ? $totalA / $count : 0;
                $equipesResultados[$equipe->id]['media_B'] = $count > 0 ? $totalB / $count : 0;
                $equipesResultados[$equipe->id]['media_C'] = $count > 0 ? $totalC / $count : 0;
                $equipesResultados[$equipe->id]['media_D'] = $count > 0 ? $totalD / $count : 0;
                $equipesResultados[$equipe->id]['nota_media'] = $count > 0 ? $totalNota / $count : 0;
            }
        }

        return view('ideasun.admin.resultados-avaliacoes', compact('equipes', 'equipesResultados'));
    }

    /**
     * Exibir avaliações de todas as equipes de uma cidade
     */
    public function cidadeAvaliacoes($cidade_id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Obter a cidade
        $cidade = Cidade::findOrFail($cidade_id);

        // Obter todas as equipes da cidade com suas avaliações
        $equipes = Equipe::where('cidade_id', $cidade_id)
                ->with(['avaliacoes.avaliador.cidade'])
                ->withCount('avaliacoes')
                ->get()
                ->groupBy('modalidade');

        // Para cada equipe, atualizar a nota média no banco se necessário
        foreach ($equipes->flatten() as $equipe) {
            if ($equipe->avaliacoes->count() > 0) {
                $notaMedia = $equipe->avaliacoes->avg('nota_total');

                // Se a nota média calculada for diferente da armazenada, atualize
                if ($equipe->nota_media != $notaMedia) {
                    $equipe->nota_media = $notaMedia;
                    $equipe->save();
                }
            }
        }

        // Obtenha as modalidades utilizadas pela cidade
        $modalidades = $equipes->keys()->toArray();

        return view('ideasun.admin.cidade-avaliacoes', compact('cidade', 'equipes', 'modalidades'));
    }

    /**
     * Selecionar uma equipe como finalista para a Expoasa
     */
    public function selecionarFinalista(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
            'cidade_id' => 'required|exists:cidades,id',
            'modalidade' => 'required|string',
        ]);

        try {
            DB::beginTransaction();

            // Pegar a equipe selecionada
            $equipeSelecionada = Equipe::findOrFail($request->equipe_id);

            // Marcar todas as equipes da mesma modalidade e cidade como não selecionadas
            Equipe::where('cidade_id', $request->cidade_id)
                ->where('modalidade', $request->modalidade)
                ->update(['expoasa' => false]);

            // Marcar a equipe selecionada como finalista
            $equipeSelecionada->expoasa = true;
            $equipeSelecionada->save();

            DB::commit();

            return redirect()->back()
                ->with('success', 'Equipe "' . $equipeSelecionada->nome . '" selecionada com sucesso como finalista da Expoasa.');

        } catch (\Exception $e) {
            DB::rollback();
            \Illuminate\Support\Facades\Log::error('Erro ao selecionar finalista: ', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()
                ->with('error', 'Erro ao selecionar finalista: ' . $e->getMessage());
        }
    }

    /**
     * Repescagem de equipe (reabilitar para Expoasa)
     */
    public function repescagemEquipe(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        $request->validate([
            'equipe_id' => 'required|exists:equipes,id'
        ]);

        try {
            // Obter a equipe
            $equipe = Equipe::findOrFail($request->equipe_id);

            // Marcar como selecionada para Expoasa
            $equipe->expoasa = true;
            $equipe->save();

            return redirect()->back()
                ->with('success', 'Equipe "' . $equipe->nome . '" reabilitada para a Expoasa via repescagem.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Erro ao reabilitar equipe: ' . $e->getMessage());
        }
    }

    /**
     * Exibir página de gerenciamento de repescagem
     */
    public function repescagem()
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Obter todas as equipes não classificadas (expoasa = false)
        $equipes = Equipe::where('expoasa', false)
            ->with(['cidade', 'avaliacoes' => function($query) {
                $query->whereHas('avaliador', function($q) {
                    $q->where('nivel', 2);
                });
            }, 'avaliacoes.avaliador'])
            ->withCount(['avaliacoes' => function($query) {
                $query->whereHas('avaliador', function($q) {
                    $q->where('nivel', 2);
                });
            }])
            ->get();
        
        // Calcular a nota média de repescagem para cada equipe
        foreach ($equipes as $equipe) {
            $equipe->nota_media_repescagem = $equipe->avaliacoes->avg('nota_total') ?: 0;
            
            // Adicionar referência às avaliações de repescagem para uso na view
            $equipe->avaliacoesRepescagem = $equipe->avaliacoes;
        }
        
        // Ordenar equipes por nota média de repescagem (maior para menor)
        $equipes = $equipes->sortByDesc('nota_media_repescagem');
        
        return view('ideasun.admin.repescagem', compact('equipes'));
    }

    /**
     * Selecionar uma equipe de repescagem para a EXPOASA
     */
    public function selecionarRepescagem(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
        ]);

        try {
            $equipe = Equipe::findOrFail($request->equipe_id);
            
            // Atualizar o status da equipe para finalista da EXPOASA
            $equipe->expoasa = true;
            $equipe->save();
            
            return redirect()->route('ideasun.admin.repescagem')
                ->with('success', "A equipe {$equipe->nome} foi selecionada na repescagem para participar da EXPOASA!");
            
        } catch (\Exception $e) {
            return redirect()->route('ideasun.admin.repescagem')
                ->with('error', 'Erro ao selecionar equipe: ' . $e->getMessage());
        }
    }

    /**
     * Exibir página de gerenciamento de avaliadores
     */
    public function gerenciarAvaliadores()
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }

        // Buscar todos os avaliadores agrupados por nível
        $avaliadores = \App\Models\Avaliador::with('cidade')
            ->orderBy('nivel')
            ->orderBy('nome')
            ->get()
            ->groupBy('nivel');
    
        // Listar cidades para o formulário de criação
        $cidades = \App\Models\Cidade::orderBy('nome')->get();
    
        return view('ideasun.admin.gerenciar-avaliadores', compact('avaliadores', 'cidades'));
    }

    /**
     * Salvar novo avaliador ou atualizar existente
     */
    public function salvarAvaliador(Request $request)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
        
        // Validação de dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string',
            'telefone' => 'required|string|max:20',
            'cidade_id' => 'required|exists:cidades,id',
            'nivel' => 'required|integer|min:1|max:3',
            'tipo' => 'required|string|in:municipal,regional,repescagem,especial',
        ]);

        try {
            // Limpar o CPF (remover pontos, traços, etc.)
            $cpfLimpo = preg_replace('/[^0-9]/', '', $request->cpf);

            // Se for atualização de avaliador existente
            if ($request->avaliador_id) {
                $avaliador = \App\Models\Avaliador::findOrFail($request->avaliador_id);
                
                // Validar se o CPF já existe para outro avaliador
                if ($avaliador->cpf != $cpfLimpo) {
                    $cpfExistente = \App\Models\Avaliador::where('cpf', $cpfLimpo)
                        ->where('id', '!=', $avaliador->id)
                        ->exists();
                    
                    if ($cpfExistente) {
                        return redirect()->back()
                            ->with('error', 'O CPF informado já está cadastrado para outro avaliador.')
                            ->withInput();
                    }
                }
                
                // Atualizar dados do avaliador
                $avaliador->nome = $request->nome;
                $avaliador->cpf = $cpfLimpo;
                $avaliador->telefone = $request->telefone;
                $avaliador->cidade_id = $request->cidade_id;
                $avaliador->nivel = $request->nivel;
                $avaliador->tipo = $request->tipo;
                $avaliador->ativo = $request->has('ativo') ? 1 : 0;
                
                // Redefinir senha apenas se solicitado
                if ($request->has('resetar_senha')) {
                    $senha = substr($cpfLimpo, 0, 6);
                    $avaliador->senha = bcrypt($senha);
                    $senhaInfo = " Senha redefinida para os 6 primeiros dígitos do CPF ({$senha}).";
                } else {
                    $senhaInfo = "";
                }
                
                $avaliador->save();
                
                return redirect()->route('ideasun.admin.gerenciar-avaliadores')
                    ->with('success', "Avaliador {$avaliador->nome} atualizado com sucesso.{$senhaInfo}");
            } else {
                // Criação de novo avaliador
                
                // Verificar se o CPF já existe
                $cpfExistente = \App\Models\Avaliador::where('cpf', $cpfLimpo)->exists();
                if ($cpfExistente) {
                    return redirect()->back()
                        ->with('error', 'O CPF informado já está cadastrado no sistema.')
                        ->withInput();
                }
                
                // Gerar senha (6 primeiros dígitos do CPF)
                $senha = substr($cpfLimpo, 0, 6);
                
                // Criar novo avaliador
                $avaliador = new \App\Models\Avaliador();
                $avaliador->nome = $request->nome;
                $avaliador->cpf = $cpfLimpo;
                $avaliador->telefone = $request->telefone;
                $avaliador->senha = bcrypt($senha);
                $avaliador->cidade_id = $request->cidade_id;
                $avaliador->nivel = $request->nivel;
                $avaliador->tipo = $request->tipo;
                $avaliador->ativo = $request->has('ativo') ? 1 : 0;
                $avaliador->save();
                
                return redirect()->route('ideasun.admin.gerenciar-avaliadores')
                    ->with('success', "Avaliador {$avaliador->nome} criado com sucesso! Senha inicial: {$senha}");
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Erro ao salvar avaliador: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Erro ao salvar avaliador: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Alternar status do avaliador (ativo/inativo)
     */
    public function alternarStatusAvaliador($id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
    
        try {
            $avaliador = \App\Models\Avaliador::findOrFail($id);
            $avaliador->ativo = !$avaliador->ativo;
            $avaliador->save();
        
            $status = $avaliador->ativo ? 'ativado' : 'desativado';
        
            return redirect()->route('ideasun.admin.gerenciar-avaliadores')
                ->with('success', "Avaliador {$avaliador->nome} {$status} com sucesso.");
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Erro ao alterar status do avaliador: ' . $e->getMessage());
        }
    }

    /**
     * Excluir avaliador (apenas se não tiver avaliações)
     */
    public function excluirAvaliador($id)
    {
        // Verificar se o administrador está autenticado
        if (!Session::has('admin_authenticated')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Acesso restrito. Faça login como administrador.');
        }
    
        try {
            $avaliador = \App\Models\Avaliador::findOrFail($id);
        
            // Verificar se o avaliador já realizou alguma avaliação
            $temAvaliacoes = \App\Models\Avaliacao::where('avaliador_id', $id)->exists();
        
            if ($temAvaliacoes) {
                return redirect()->back()
                    ->with('error', "O avaliador {$avaliador->nome} não pode ser excluído pois já realizou avaliações.");
            }
        
            // Excluir avaliador
            $avaliador->delete();
        
            return redirect()->route('ideasun.admin.gerenciar-avaliadores')
                ->with('success', "Avaliador {$avaliador->nome} excluído com sucesso.");
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Erro ao excluir avaliador: ' . $e->getMessage());
        }
    }
}
