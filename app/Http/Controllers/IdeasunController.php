<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Equipe;
use App\Models\Material;
use App\Models\Membro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Services\TreinamentoService;

class IdeasunController extends Controller
{
    /**
     * Página inicial do IDEASUN
     */
    public function index()
    {
        return view('ideasun.index');
    }

    /**
     * Página de login
     */
    public function login()
    {
        // Verificar se já está logado como cidade
        if (Session::has('cidade_id')) {
            return redirect()->route('ideasun.cidade.dashboard');
        }
        
        // Verificar se já está logado como equipe
        if (Session::has('equipe_id')) {
            $equipe = Equipe::find(Session::get('equipe_id'));
            if ($equipe) {
                return redirect()->route('ideasun.equipe.membros', ['equipe_id' => $equipe->equipe_id]);
            }
        }
        
        return view('ideasun.login');
    }

    /**
     * Autenticação de usuários
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'tipo' => 'required|in:cidade,equipe',
            'identificador' => 'required|string',
            'senha' => 'required|string',
        ]);

        if ($request->tipo === 'cidade') {
            // Buscar cidade pelo nome ou ID
            $cidade = Cidade::where('nome', 'ILIKE', $request->identificador)
                        ->orWhere('cidade_id', $request->identificador)
                        ->first();

            if ($cidade && Hash::check($request->senha, $cidade->senha)) {
                Session::put('cidade_id', $cidade->id);
                
                // Verificar se o cadastro completo já foi realizado
                // Um cadastro completo tem pelo menos dados do representante, prefeito e secretário
                if ($cidade->representante_nome && $cidade->prefeito_nome && $cidade->secretario_nome) {
                    // Redirecionar para o dashboard se já tiver completado o cadastro
                    return redirect()->route('ideasun.cidade.dashboard');
                } else {
                    // Redirecionar para cadastro completo se for o primeiro acesso ou dados incompletos
                    return redirect()->route('ideasun.cidade.cadastro-completo');
                }
            }
        } else {
            // Buscar cidade pelo cidade_id para autenticar equipe
            $cidade = Cidade::where('cidade_id', $request->identificador)->first();
            
            if ($cidade && Hash::check($request->senha, $cidade->senha)) {
                // Se autenticou com sucesso, guarda o cidade_id na sessão
                Session::put('cidade_id_para_equipe', $cidade->id);
                
                // Redireciona para página de gerenciamento de equipes
                return redirect()->route('ideasun.equipe.gerenciar');
            }
        }

        return redirect()->route('ideasun.login')
            ->with('error', 'Credenciais inválidas. Por favor, tente novamente.');
    }

    /**
     * Logout do sistema
     */
    public function logout()
    {
        Session::forget(['cidade_id', 'cidade_id_para_equipe', 'equipe_id']);
        return redirect()->route('ideasun.index');
    }

    /**
     * Página de registro de cidade
     */
    public function cidadeRegistro()
    {
        // Estados brasileiros para o dropdown
        $estados = [
            'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia',
            'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás',
            'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais',
            'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo',
            'SE' => 'Sergipe', 'TO' => 'Tocantins'
        ];
        
        // View específica para registro, sem variáveis relacionadas a treinamento
        return view('ideasun.cidade.registro', compact('estados'));
    }

    /**
     * Armazenar dados do cadastro da cidade
     */
    public function cidadeStore(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255|unique:cidades,nome',
            'estado' => 'required|string|size:2',
            'representante_nome' => 'required|string|max:255',
            'representante_email' => 'required|email|max:255',
            'representante_telefone' => 'required|string|max:20',
            'senha' => 'required|string|min:6|confirmed',
        ], [
            'modalidades.required' => 'Selecione pelo menos uma modalidade para participar.',
            'modalidades.min' => 'Selecione pelo menos uma modalidade para participar.'
        ]);
        
        // Calcular categoria de distância com base no estado
        // (Aqui você pode implementar uma lógica mais sofisticada)
        $distanciaCategoria = 1; // Padrão: próxima (categoria 1)
        
        // Estados de média distância
        $mediaDistancia = ['SP', 'SC', 'MS'];
        if (in_array($request->estado, $mediaDistancia)) {
            $distanciaCategoria = 2;
        }
        
        // Estados de longa distância
        $longaDistancia = ['RJ', 'ES', 'MG', 'GO', 'MT', 'RS'];
        if (in_array($request->estado, $longaDistancia)) {
            $distanciaCategoria = 3;
        }
        
        // Todas as modalidades disponíveis
        $todasModalidades = [
            'educacao_especial', 
            'fundamental_1', 
            'fundamental_2', 
            'medio_tecnico', 
            'superior'
        ];
        
        // Criar a cidade com todas as modalidades
        $cidade = Cidade::create([
            'nome' => $request->nome,
            'estado' => $request->estado,
            'representante_nome' => $request->representante_nome,
            'representante_email' => $request->representante_email,
            'representante_telefone' => $request->representante_telefone,
            'senha' => Hash::make($request->senha),
            'distancia_categoria' => $distanciaCategoria,
            'modalidades' => $todasModalidades, // Atribuir todas as modalidades
            'hash_id' => Str::uuid(),
            'treinamento_requerido' => $request->has('necessita_treinamento'),
        ]);
        
        // Iniciar sessão
        Session::put('cidade_id', $cidade->id);
        
        // Redirecionar para página de treinamento se solicitado
        if ($cidade->treinamento_requerido) {
            return redirect()->route('ideasun.cidade.treinamento');
        }
        
        return redirect()->route('ideasun.cidade.dashboard');
    }
    
    /**
     * Retorna um nome amigável para a equipe baseado na modalidade
     */
    private function getNomeEquipePorModalidade($cidade, $modalidade)
    {
        $nomesPorModalidade = [
            'educacao_especial' => 'INSPIRA',
            'fundamental_1' => 'BRINCA',
            'fundamental_2' => 'IMAGINA',
            'medio_tecnico' => 'CRIA',
            'superior' => 'AVANÇA'
        ];
        
        $modalidadeNome = $nomesPorModalidade[$modalidade] ?? ucfirst(str_replace('_', ' ', $modalidade));
        
        return $cidade->nome . ' - ' . $modalidadeNome;
    }

    /**
     * Página para agendar treinamento
     */
    public function cidadeTreinamento()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        if (!$cidade->treinamento_requerido || $cidade->treinamento_agendado) {
            return redirect()->route('ideasun.cidade.sucesso');
        }
        
        $treinamentoService = new TreinamentoService();
        $diasDisponiveis = $treinamentoService->getDatasDisponiveis();
        
        return view('ideasun.cidade.treinamento', compact('cidade', 'diasDisponiveis'));
    }

    /**
     * AJAX para obter períodos disponíveis para uma data
     */
    public function getPeriodosDisponiveis(Request $request)
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $data = $request->input('data');
        if (!$data) {
            return response()->json(['error' => 'Data não informada'], 400);
        }
        
        // Debug para verificar se a data está chegando corretamente
        \Log::info("Solicitando períodos para a data: " . $data);
        
        $treinamentoService = new TreinamentoService();
        $periodos = $treinamentoService->getPeriodosDisponiveis($data);
        
        // Debug para verificar os períodos retornados
        \Log::info("Períodos disponíveis: ", $periodos);
        
        return response()->json(['periodos' => $periodos]);
    }

    /**
     * Agendar treinamento
     */
    public function cidadeAgendar(Request $request)
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $request->validate([
            'data' => 'required|date',
            'periodo' => 'required|string',
        ]);
        
        $treinamentoService = new TreinamentoService();
        $agendado = $treinamentoService->agendarTreinamento(
            $cidade, 
            $request->input('data'),
            $request->input('periodo')
        );
        
        if ($agendado) {
            return redirect()->route('ideasun.cidade.dashboard')
                ->with('success', 'Treinamento agendado com sucesso!');
        }
        
        return back()
            ->with('error', 'Não foi possível agendar o treinamento. O período já está lotado ou não está disponível.')
            ->withInput();
    }

    /**
     * Página de sucesso do registro da cidade
     */
    public function cidadeSucesso()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        $equipes = $cidade->equipes;
        
        return view('ideasun.cidade.dashboard', compact('cidade', 'equipes'));
    }

    /**
     * Página de edição de cidade
     */
    public function cidadeEditar()
    {
        // Obter ID da cidade da sessão
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::with('equipes')->findOrFail($cidade_id);
        
        // Estados brasileiros para o dropdown
        $estados = [
            'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia',
            'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás',
            'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais',
            'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo',
            'SE' => 'Sergipe', 'TO' => 'Tocantins'
        ];
        
        return view('ideasun.cidade.editar', compact('cidade', 'estados'));
    }

    /**
     * Atualiza os dados da cidade
     */
    public function cidadeAtualizar(Request $request)
    {
        // Obter ID da cidade da sessão
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $request->validate([
            'representante_nome' => 'required|string|max:255',
            'representante_email' => 'required|email|max:255',
            'representante_telefone' => 'required|string|max:20',
            'modalidades' => 'required|array|min:1',
            'modalidades.*' => 'in:educacao_especial,fundamental_1,fundamental_2,medio_tecnico,superior',
        ], [
            'modalidades.required' => 'Selecione pelo menos uma modalidade para participar.',
            'modalidades.min' => 'Selecione pelo menos uma modalidade para participar.'
        ]);
        
        // Atualizar apenas os dados permitidos
        $cidade->update([
            'representante_nome' => $request->representante_nome,
            'representante_email' => $request->representante_email,
            'representante_telefone' => $request->representante_telefone,
            'treinamento_requerido' => $request->has('necessita_treinamento'),
            'modalidades' => $request->modalidades,
        ]);
        
        // Redirecionar para página de treinamento se solicitado
        if ($cidade->treinamento_requerido && !$cidade->treinamento_agendado) {
            return redirect()->route('ideasun.cidade.treinamento');
        }
        
        return redirect()->route('ideasun.cidade.dashboard');
    }

    /**
     * Exibe o dashboard da cidade
     */
    public function cidadeDashboard()
    {
        // Obter ID da cidade da sessão
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::with('equipes')->findOrFail($cidade_id);
        
        return view('ideasun.cidade.dashboard', compact('cidade'));
    }

    /**
     * Exibe formulário para cadastro inicial da cidade
     */
    public function cidadeCadastroInicial()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        // Se já completou o cadastro, redirecionar para dashboard
        if ($cidade->representante_nome !== null && $cidade->representante_email !== null) {
            return redirect()->route('ideasun.cidade.dashboard');
        }
        
        return view('ideasun.cidade.cadastro-inicial', compact('cidade'));
    }

    /**
     * Processa o cadastro inicial da cidade
     */
    public function cidadeSalvarCadastroInicial(Request $request)
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $request->validate([
            'representante_nome' => 'required|string|max:255',
            'representante_email' => 'required|email|max:255',
            'representante_telefone' => 'required|string|max:20',
            'modalidades' => 'required|array|min:1',
            'modalidades.*' => 'required|string|in:educacao_especial,fundamental_1,fundamental_2,medio_tecnico,ensino_superior',
        ]);
        
        // Atualizar dados da cidade
        $cidade->update([
            'representante_nome' => $request->representante_nome,
            'representante_email' => $request->representante_email,
            'representante_telefone' => $request->representante_telefone,
            'modalidades' => $request->modalidades,
            'treinamento_requerido' => true // Definir treinamento como requerido por padrão
        ]);
        
        // Criar equipes para cada modalidade selecionada
        $this->atualizarEquipes($cidade, $request->modalidades);
        
        // Redirecionar para o dashboard com mensagem de sucesso
        return redirect()->route('ideasun.cidade.dashboard')
            ->with('success', 'Cadastro da cidade realizado com sucesso! Agora você pode agendar o treinamento necessário.');
    }

    /**
     * Página de registro de equipe
     */
    public function equipeRegistro($hash)
    {
        $cidade = Cidade::where('hash_id', $hash)->firstOrFail();
        $modalidades = [
            'educacao_especial' => 'Educação Especial',
            'fundamental_1' => 'Ensino Fundamental I',
            'fundamental_2' => 'Ensino Fundamental II',
            'ensino_medio' => 'Ensino Médio/Técnico',
            'ensino_superior' => 'Ensino Superior',
        ];
        
        // Obter modalidades que já foram registradas
        $modalidadesRegistradas = $cidade->equipes()->pluck('modalidade')->toArray();
        
        return view('ideasun.equipe.registro', compact('cidade', 'modalidades', 'modalidadesRegistradas'));
    }

    /**
     * Armazenar dados do cadastro da equipe
     */
    public function equipeStore(Request $request)
    {
        $request->validate([
            'cidade_id' => 'required|exists:cidades,id',
            'nome' => 'required|string|max:255',
            'modalidade' => 'required|string|max:50',
            'instituicao' => 'required|string|max:255',
            'resumo_ideia' => 'nullable|string|max:500',
            'responsavel_nome' => 'required|string|max:255',
            'responsavel_email' => 'required|email|max:255',
            'responsavel_telefone' => 'required|string|max:20',
        ]);
        
        // REMOVER essa verificação para permitir múltiplas equipes
        // da mesma modalidade para uma cidade
        /*
        $existente = Equipe::where('cidade_id', $request->cidade_id)
            ->where('modalidade', $request->modalidade)
            ->exists();
            
        if ($existente) {
            return redirect()->back()
                ->with('error', 'Já existe uma equipe registrada para esta modalidade nesta cidade.')
                ->withInput();
        }
        */
        
        $equipe = Equipe::create([
            'cidade_id' => $request->cidade_id,
            'nome' => $request->nome,
            'modalidade' => $request->modalidade,
            'instituicao' => $request->instituicao,
            'responsavel_nome' => $request->responsavel_nome,
            'responsavel_email' => $request->responsavel_email,
            'responsavel_telefone' => $request->responsavel_telefone,
            'hash_id' => Str::uuid(),
        ]);
        
        Session::put('equipe_id', $equipe->id);
        
        return redirect()->route('ideasun.equipe.membros', ['hash' => $equipe->hash_id]);
    }

    /**
     * Página para cadastro de membros da equipe
     */
    public function equipeMembros($equipe_id)
    {
        $equipe = Equipe::where('equipe_id', $equipe_id)->firstOrFail();
        $membros = $equipe->membros;
        
        // Definir o número mínimo e máximo de membros por modalidade
        $limitesModalidade = [
            'educacao_especial' => ['min' => 3, 'max' => 4],
            'fundamental_1' => ['min' => 3, 'max' => 4],
            'fundamental_2' => ['min' => 3, 'max' => 4],
            'ensino_medio' => ['min' => 4, 'max' => 5],
            'ensino_superior' => ['min' => 4, 'max' => 5],
        ];
        
        $limites = $limitesModalidade[$equipe->modalidade] ?? ['min' => 3, 'max' => 5];
        
        return view('ideasun.equipe.membros', compact('equipe', 'membros', 'limites'));
    }

    /**
     * Armazena um novo membro para a equipe
     */
    public function equipeMembroStore(Request $request)
    {
        // Validações e outras lógicas existentes...
        
        // Corrigindo o processamento do responsável pela equipe
        $responsavelEquipe = $request->has('responsavel_equipe') ? true : false;
        
        // Se está marcando um novo membro como responsável, remova esse status de outros membros
        if ($responsavelEquipe) {
            // Remover o status de responsável de outros membros
            Membro::where('equipe_id', $request->equipe_id)
                ->update(['responsavel_equipe' => false]);
        }
        
        // Criar o novo membro com o status de responsável correto
        Membro::create([
            'equipe_id' => $request->equipe_id,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nascimento,
            'funcao' => $request->funcao,
            'responsavel_equipe' => $responsavelEquipe
        ]);
        
        // Resto do código...
    }

    /**
     * Armazenar dados dos membros da equipe
     */
    public function equipeMembrosStore(Request $request)
    {
        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
            'nome' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'data_nascimento' => 'nullable|date',
            'funcao' => 'required|in:estudante,professor',
            'responsavel_equipe' => 'boolean',
            'doc_termo_aceite' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
            'doc_termo_dados' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
            'doc_termo_imagem' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
        ], [
            'doc_termo_aceite.required' => 'O termo de aceite de participação é obrigatório.',
            'doc_termo_dados.required' => 'O termo de consentimento de dados é obrigatório.',
            'doc_termo_imagem.required' => 'O termo de autorização de imagem é obrigatório.',
        ]);
        
        $equipe = Equipe::findOrFail($request->equipe_id);
        
        // Verificar limites de membros (código existente)
        $limitesModalidade = [
            'educacao_especial' => ['min' => 3, 'max' => 4],
            'fundamental_1' => ['min' => 3, 'max' => 4],
            'fundamental_2' => ['min' => 3, 'max' => 4],
            'ensino_medio' => ['min' => 4, 'max' => 5],
            'ensino_superior' => ['min' => 4, 'max' => 5],
        ];
        
        $limites = $limitesModalidade[$equipe->modalidade] ?? ['min' => 3, 'max' => 5];
        
        if ($equipe->membros()->count() >= $limites['max']) {
            return redirect()->back()
                ->with('error', 'Número máximo de membros já atingido.')
                ->withInput();
        }
        
        // Upload dos documentos
        $docPaths = [];
        $docTypes = ['doc_termo_aceite', 'doc_termo_dados', 'doc_termo_imagem'];
        
        foreach ($docTypes as $docType) {
            if ($request->hasFile($docType)) {
                $file = $request->file($docType);
                $fileName = $docType . '_membro_' . time() . '_' . $file->getClientOriginalName();
                $path = 'uploads/documentos/membros';
                
                // Ensure directory exists
                if (!file_exists(public_path($path))) {
                    mkdir(public_path($path), 0777, true);
                }
                
                $file->move(public_path($path), $fileName);
                $docPaths[$docType . '_path'] = $path . '/' . $fileName;
            }
        }
        
        // Se for marcado como responsável, desmarcar os outros
        if ($request->has('responsavel_equipe')) {
            $equipe->membros()->update(['responsavel_equipe' => false]);
        }
        
        $membro = Membro::create([
            'equipe_id' => $request->equipe_id,
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nascimento,
            'funcao' => $request->funcao,
            'responsavel_equipe' => $request->has('responsavel_equipe'),
            'doc_termo_aceite_path' => $docPaths['doc_termo_aceite_path'] ?? null,
            'doc_termo_dados_path' => $docPaths['doc_termo_dados_path'] ?? null,
            'doc_termo_imagem_path' => $docPaths['doc_termo_imagem_path'] ?? null,
        ]);
        
        // Verificar se atingiu o número mínimo de membros
        if ($equipe->membros()->count() >= $limites['min']) {
            // Verificar se tem pelo menos um professor orientador
            $temProfessor = $equipe->membros()->where('funcao', 'professor')->exists();
            
            if ($temProfessor) {
                return redirect()->back()
                    ->with('success', 'Membro adicionado com sucesso. Você já pode finalizar a inscrição.')
                    ->with('pode_finalizar', true);
            }
        }
        
        return redirect()->back()
            ->with('success', 'Membro adicionado com sucesso.');
    }

    /**
     * Remover membro da equipe
     */
    public function equipeMembroRemover($id)
    {
        $membro = Membro::findOrFail($id);
        $equipe = $membro->equipe;
        
        // Verificar se a cidade logada tem permissão para gerenciar esta equipe
        $cidade_id = Session::get('cidade_id_para_equipe');
        if ($equipe->cidade_id != $cidade_id) {
            return redirect()->back()->with('error', 'Você não tem permissão para gerenciar esta equipe.');
        }
        
        // Excluir o membro
        $membro->delete();
        
        return redirect()->back()->with('success', 'Membro removido com sucesso.');
    }

    /**
     * Página de sucesso do registro da equipe
     */
    public function equipeSucesso()
    {
        $equipe_id = Session::get('equipe_id');
        $equipe = Equipe::findOrFail($equipe_id);
        
        return view('ideasun.equipe.sucesso', compact('equipe'));
    }

    /**
     * Página para download de materiais
     */
    public function materiais()
    {
        // Verificar se está logado como equipe OU como cidade
        if (!Session::has('cidade_id_para_equipe') && !Session::has('equipe_id') && !Session::has('cidade_id')) {
            return redirect()->route('ideasun.login')
                ->with('error', 'Você precisa estar logado para acessar os materiais.');
        }
        
        $materiais = Material::orderBy('created_at', 'desc')->get();
        
        return view('ideasun.materiais', compact('materiais'));
    }

    /**
     * Página de gerenciamento de equipes
     */
    public function equipeGerenciar()
    {
        $cidade_id = Session::get('cidade_id_para_equipe');
        $cidade = Cidade::findOrFail($cidade_id);
        $equipes = $cidade->equipes;
        
        return view('ideasun.equipe.gerenciar', compact('cidade', 'equipes'));
    }

    /**
     * Página para criar nova equipe
     */
    public function equipeCriar()
    {
        $cidade_id = Session::get('cidade_id_para_equipe');
        $cidade = Cidade::findOrFail($cidade_id);
        
        // Obter modalidades disponíveis para a cidade
        $modalidadesDisponiveis = $cidade->modalidades ?? [];
        
        $modalidades = [];
        foreach ($modalidadesDisponiveis as $modalidade) {
            switch ($modalidade) {
                case 'educacao_especial':
                    $modalidades[$modalidade] = 'Educação Especial (INSPIRA)';
                    break;
                case 'fundamental_1':
                    $modalidades[$modalidade] = 'Ensino Fundamental I (BRINCA)';
                    break;
                case 'fundamental_2':
                    $modalidades[$modalidade] = 'Ensino Fundamental II (IMAGINA)';
                    break;
                case 'medio_tecnico':
                    $modalidades[$modalidade] = 'Ensino Médio/Técnico (CRIA)';
                    break;
                case 'superior':
                    $modalidades[$modalidade] = 'Ensino Superior (AVANÇA)';
                    break;
                default:
                    $modalidades[$modalidade] = ucfirst(str_replace('_', ' ', $modalidade));
            }
        }
        
        return view('ideasun.equipe.criar', compact('cidade', 'modalidades'));
    }

    /**
     * Salvar nova equipe
     */
    public function equipeSalvar(Request $request)
    {
        $cidade_id = Session::get('cidade_id_para_equipe');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $request->validate([
            'nome' => 'required|string|max:255',
            'modalidade' => 'required|string|in:' . implode(',', $cidade->modalidades),
            'instituicao' => 'required|string|max:255',
            'resumo_ideia' => 'nullable|string|max:500',
            'responsavel_nome' => 'required|string|max:255',
            'responsavel_email' => 'required|email|max:255',
            'responsavel_telefone' => 'required|string|max:20',
            'doc_termo_aceite' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
            'doc_termo_dados' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
            'doc_termo_imagem' => 'required|file|mimes:pdf,png,jpg,jpeg|max:5120',
        ]);
        
        // Gerar um novo equipe_id
        $ultimoId = Equipe::max('equipe_id') ?? 1000;
        $novoId = $ultimoId + 1;
        
        // Upload dos documentos
        $docPaths = [];
        $docTypes = ['doc_termo_aceite', 'doc_termo_dados', 'doc_termo_imagem'];
        
        foreach ($docTypes as $docType) {
            if ($request->hasFile($docType)) {
                $file = $request->file($docType);
                $fileName = $docType . '_' . $novoId . '_' . time() . '.' . $file->getClientOriginalExtension();
                $path = 'uploads/documentos/equipes';
                
                // Ensure directory exists
                if (!file_exists(public_path($path))) {
                    mkdir(public_path($path), 0777, true);
                }
                
                $file->move(public_path($path), $fileName);
                $docPaths[$docType . '_path'] = $path . '/' . $fileName;
            }
        }
        
        // Create the team with the new field
        $equipe = Equipe::create([
            'cidade_id' => $cidade_id,
            'nome' => $request->nome,
            'modalidade' => $request->modalidade,
            'instituicao' => $request->instituicao,
            'resumo_ideia' => $request->resumo_ideia,
            'responsavel_nome' => $request->responsavel_nome,
            'responsavel_email' => $request->responsavel_email,
            'responsavel_telefone' => $request->responsavel_telefone,
            'equipe_id' => $novoId,
            'doc_termo_aceite_path' => $docPaths['doc_termo_aceite_path'] ?? null,
            'doc_termo_dados_path' => $docPaths['doc_termo_dados_path'] ?? null,
            'doc_termo_imagem_path' => $docPaths['doc_termo_imagem_path'] ?? null,
        ]);
        
        Session::put('equipe_id', $equipe->id);
        
        return redirect()->route('ideasun.equipe.membros', ['equipe_id' => $equipe->equipe_id])
            ->with('success', 'Equipe criada com sucesso! Agora adicione os membros da equipe.');
    }

    /**
     * Exibe formulário para cadastro completo da cidade
     */
    public function cidadeCadastroCompleto()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        // Estados brasileiros para o dropdown
        $estados = [
            'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá', 'AM' => 'Amazonas', 'BA' => 'Bahia',
            'CE' => 'Ceará', 'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás',
            'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul', 'MG' => 'Minas Gerais',
            'PA' => 'Pará', 'PB' => 'Paraíba', 'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina', 'SP' => 'São Paulo',
            'SE' => 'Sergipe', 'TO' => 'Tocantins'
        ];
        
        return view('ideasun.cidade.cadastro-completo', compact('cidade', 'estados'));
    }

    /**
     * Processa o cadastro completo da cidade
     */
    public function cidadeSalvarCadastroCompleto(Request $request)
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        $request->validate([
            'representante_nome' => 'required|string|max:255',
            'representante_email' => 'required|email|max:255',
            'representante_telefone' => 'required|string|max:20',
            'prefeito_nome' => 'required|string|max:255',
            'secretario_nome' => 'required|string|max:255',
            'secretario_email' => 'nullable|email|max:255',
            'secretario_telefone' => 'nullable|string|max:20',
            // Removemos prefeito_email e prefeito_telefone
        ]);
        
        // Atualizar dados da cidade
        $cidade->update([
            'representante_nome' => $request->representante_nome,
            'representante_email' => $request->representante_email,
            'representante_telefone' => $request->representante_telefone,
            'prefeito_nome' => $request->prefeito_nome,
            'prefeito_email' => null, // Removemos o email do gabinete
            'prefeito_telefone' => null, // Removemos o telefone do gabinete
            'secretario_nome' => $request->secretario_nome,
            'secretario_email' => $request->secretario_email,
            'secretario_telefone' => $request->secretario_telefone,
        ]);
        
        // Redirecionar para o dashboard com mensagem de sucesso
        return redirect()->route('ideasun.cidade.dashboard')
            ->with('success', 'Cadastro completo da cidade realizado com sucesso!');
    }

    /**
     * Processa o envio de apresentação para a equipe
     */
    public function equipeApresentacaoEnviar(Request $request)
    {
        // Validação
        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
            'apresentacao' => 'required|file|mimes:pdf,ppt,pptx|max:10240', // 10MB
        ], [
            'apresentacao.required' => 'Por favor, selecione um arquivo para enviar.',
            'apresentacao.mimes' => 'O arquivo deve ser no formato PDF, PPT ou PPTX.',
            'apresentacao.max' => 'O tamanho máximo do arquivo é 10MB.'
        ]);
        
        // Encontrar a equipe
        $equipe = Equipe::findOrFail($request->equipe_id);
        
        // Verificar permissão
        $cidade_id = Session::get('cidade_id_para_equipe');
        if ($equipe->cidade_id != $cidade_id) {
            return redirect()->back()->with('error', 'Você não tem permissão para gerenciar esta equipe.');
        }
        
        // Se já existe um arquivo, excluir o anterior
        if ($equipe->apresentacao_path && file_exists(public_path($equipe->apresentacao_path))) {
            unlink(public_path($equipe->apresentacao_path));
        }
        
        // Upload do novo arquivo
        $file = $request->file('apresentacao');
        $fileName = 'pitch_' . $equipe->id . '_' . time() . '.' . $file->getClientOriginalExtension();
        $path = 'uploads/apresentacoes';
        
        // Garantir que o diretório existe
        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 0777, true);
        }
        
        // Mover o arquivo e atualizar o banco de dados
        if ($file->move(public_path($path), $fileName)) {
            $equipe->update([
                'apresentacao_path' => $path . '/' . $fileName
            ]);
            
            return redirect()->back()->with('success', 'Apresentação enviada com sucesso!');
        }
        
        return redirect()->back()->with('error', 'Ocorreu um erro ao enviar o arquivo. Tente novamente.');
    }

    /**
     * Remove a apresentação de uma equipe
     */
    public function equipeApresentacaoRemover($equipe_id)
    {
        $equipe = Equipe::findOrFail($equipe_id);
        
        // Verificar se a cidade logada tem permissão para gerenciar esta equipe
        $cidade_id = Session::get('cidade_id_para_equipe');
        if ($equipe->cidade_id != $cidade_id) {
            return redirect()->back()->with('error', 'Você não tem permissão para gerenciar esta equipe.');
        }
        
        // Excluir o arquivo
        if ($equipe->apresentacao_path && file_exists(public_path($equipe->apresentacao_path))) {
            unlink(public_path($equipe->apresentacao_path));
        }
        
        // Limpar o caminho no banco de dados
        $equipe->update([
            'apresentacao_path' => null
        ]);
        
        return redirect()->back()->with('success', 'Apresentação removida com sucesso.');
    }
    
    /**
     * Exibe a página de agendamento de banca
     */
    public function cidadeAgendarBanca()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::with('equipes')->findOrFail($cidade_id);
        
        // Datas disponíveis (você pode ajustar conforme necessário)
        $diasDisponiveis = [
            '2025-05-26' => 'Segunda, 26 de Maio de 2025',
            '2025-05-27' => 'Terça, 27 de Maio de 2025',
            '2025-05-28' => 'Quarta, 28 de Maio de 2025',
            '2025-05-29' => 'Quinta, 29 de Maio de 2025',
            '2025-05-30' => 'Sexta, 30 de Maio de 2025',
        ];
        
        return view('ideasun.cidade.agendar-banca', compact('cidade', 'diasDisponiveis'));
    }

    /**
     * Busca os horários disponíveis para a banca
     */
    public function getBancaHorariosDisponiveis(Request $request)
    {
        $data = $request->input('data');
        if (!$data) {
            return response()->json(['error' => 'Data não informada'], 400);
        }
        
        // Horários disponíveis para banca com período correto
        $horariosPorDia = [
            '2025-05-26' => [
                ['horario' => '08:00 às 12:00', 'periodo' => 'Manhã'],
                ['horario' => '13:00 às 17:00', 'periodo' => 'Tarde']
            ],
            '2025-05-27' => [
                ['horario' => '08:00 às 12:00', 'periodo' => 'Manhã'],
                ['horario' => '13:00 às 17:00', 'periodo' => 'Tarde']
            ],
            '2025-05-28' => [
                ['horario' => '08:00 às 12:00', 'periodo' => 'Manhã'],
                ['horario' => '13:00 às 17:00', 'periodo' => 'Tarde']
            ],
            '2025-05-29' => [
                ['horario' => '08:00 às 12:00', 'periodo' => 'Manhã'],
                ['horario' => '13:00 às 17:00', 'periodo' => 'Tarde']
            ],
            '2025-05-30' => [
                ['horario' => '08:00 às 12:00', 'periodo' => 'Manhã'],
                ['horario' => '13:00 às 17:00', 'periodo' => 'Tarde']
            ],
        ];
        
        // Verificar horários já agendados
        $horariosAgendados = Cidade::whereNotNull('banca_agendada')
            ->whereDate('banca_agendada', $data)
            ->pluck('banca_agendada')
            ->map(function($datetime) {
                return \Carbon\Carbon::parse($datetime)->format('H:i');
            })
            ->toArray();
        
        // Filtrar horários disponíveis
        $horariosDisponiveis = [];
        foreach ($horariosPorDia[$data] ?? [] as $opcao) {
            // Verificar se o horário já está agendado
            if (!in_array(substr($opcao['horario'], 0, 5), $horariosAgendados)) {
                $horariosDisponiveis[] = $opcao;
            }
        }
        
        return response()->json(['horarios' => $horariosDisponiveis]);
    }

    /**
     * Salvar agendamento de banca
     */
    public function cidadeSalvarBanca(Request $request)
    {
        $request->validate([
            'data_banca' => 'required|date',
            'horario' => 'required|string',
        ]);
        
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        // Extrair apenas o primeiro horário da string (antes do "às")
        $horarioPartes = explode(' às ', $request->horario);
        $horarioInicio = trim($horarioPartes[0]);
        
        // Criar a data/hora completa com o horário de início apenas
        $dataHora = $request->data_banca . ' ' . $horarioInicio . ':00';
        
        // Verificar se já não existe outro agendamento no mesmo horário/data
        $existeAgendamento = Cidade::whereDate('banca_agendada', $request->data_banca)
            ->whereRaw("to_char(banca_agendada, 'HH24:MI') = ?", [$horarioInicio])
            ->exists();
        
        if ($existeAgendamento) {
            return redirect()->back()->with('error', 'Este horário já foi reservado. Por favor, escolha outro horário.');
        }
        
        // Salvar o agendamento
        $cidade->update([
            'banca_agendada' => $dataHora
        ]);
        
        // Para exibição na mensagem de sucesso, mantenha o formato completo
        $horarioExibicao = $request->horario;
        
        return redirect()->route('ideasun.cidade.dashboard')
            ->with('success', 'Agendamento de banca realizado com sucesso para ' . 
                   \Carbon\Carbon::parse($dataHora)->format('d/m/Y') . ' - ' . $horarioExibicao);
    }

    /**
     * Cancelar agendamento de banca
     */
    public function cidadeCancelarBanca()
    {
        $cidade_id = Session::get('cidade_id');
        $cidade = Cidade::findOrFail($cidade_id);
        
        if (!$cidade->banca_agendada) {
            return redirect()->back()->with('error', 'Não há agendamento para cancelar.');
        }
        
        $dataHoraAntiga = \Carbon\Carbon::parse($cidade->banca_agendada)->format('d/m/Y \à\s H:i');
        
        $cidade->update([
            'banca_agendada' => null
        ]);
        
        return redirect()->route('ideasun.cidade.dashboard')
            ->with('success', 'Agendamento de banca para ' . $dataHoraAntiga . ' foi cancelado com sucesso.');
    }
    
    /**
     * Retorna o status atual da apresentação de uma equipe
     */
    public function equipeApresentacaoStatus($equipe_id)
    {
        $equipe = Equipe::findOrFail($equipe_id);
        
        // Verificar se a cidade logada tem permissão para gerenciar esta equipe
        $cidade_id = Session::get('cidade_id_para_equipe');
        if ($equipe->cidade_id != $cidade_id) {
            return response()->json([
                'success' => false,
                'error' => 'Você não tem permissão para acessar esta equipe.'
            ]);
        }
        
        if (!$equipe->apresentacao_path) {
            return response()->json([
                'success' => true,
                'has_presentation' => false
            ]);
        }
        
        // Extrair informações do arquivo
        $file_path = $equipe->apresentacao_path;
        $file_name = basename($file_path);
        $file_size = file_exists(public_path($file_path)) ? 
            $this->formatFileSize(filesize(public_path($file_path))) : 'N/A';
        $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
        
        // Obter a data de upload do arquivo (data de modificação)
        $upload_date = file_exists(public_path($file_path)) ? 
            date('d/m/Y H:i', filemtime(public_path($file_path))) : 'N/A';
        
        return response()->json([
            'success' => true,
            'has_presentation' => true,
            'equipe_id' => $equipe->id,
            'file_path' => asset($file_path),
            'file_name' => $file_name,
            'file_size' => $file_size,
            'file_extension' => $file_extension,
            'upload_date' => $upload_date
        ]);
    }

    /**
     * Formata o tamanho do arquivo para exibição
     */
    private function formatFileSize($size)
    {
        if ($size < 1024) {
            return $size . ' bytes';
        } elseif ($size < 1024 * 1024) {
            return round($size / 1024, 2) . ' KB';
        } else {
            return round($size / (1024 * 1024), 2) . ' MB';
        }
    }
    
    /**
     * Exclui uma equipe
     */
    public function equipeExcluir($id)
    {
        $equipe = Equipe::findOrFail($id);
        
        // Verificar se a cidade logada tem permissão para gerenciar esta equipe
        $cidade_id = Session::get('cidade_id_para_equipe');
        if ($equipe->cidade_id != $cidade_id) {
            return redirect()->back()->with('error', 'Você não tem permissão para excluir esta equipe.');
        }
        
        // Excluir todos os membros associados a esta equipe
        $equipe->membros()->delete();
        
        // Excluir a apresentação se existir
        if ($equipe->apresentacao_path && file_exists(public_path($equipe->apresentacao_path))) {
            unlink(public_path($equipe->apresentacao_path));
        }
        
        // Excluir os documentos do responsável se existirem
        $docPaths = ['doc_termo_aceite_path', 'doc_termo_dados_path', 'doc_termo_imagem_path'];
        foreach ($docPaths as $docPath) {
            if ($equipe->$docPath && file_exists(public_path($equipe->$docPath))) {
                unlink(public_path($equipe->$docPath));
            }
        }
        
        // Excluir a equipe
        $equipe->delete();
        
        return redirect()->route('ideasun.equipe.gerenciar')
            ->with('success', 'Equipe excluída com sucesso!');
    }
}