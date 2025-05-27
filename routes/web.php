<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BancaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/programacao', function () {
    return redirect()->route('inicio');
});
Route::get('/galeriadia01', function () {
    return view('galeria');
});
Route::get('/galeriadia02', function () {
    return view('galeria02');
});
Route::get('/galeriadia03', function () {
    return view('galeria03');
});
Route::get('/palestrante', function () {
    return redirect()->route('inicio');
});

// Route::get('/credenciamento', function () {
//     return view('cadastro');
// });

// Route::get('/sorteio', function () {
//     return view('sorteio');
// });

Route::get('/ideasun', [IdeasunController::class, 'index'])->name('ideasun.index');
Route::get('/', [HomeController::class, 'landing2'])->name('inicio'); // Para a expoasa
Route::get('/credenciamento', [HomeController::class, 'credenciamento'])->name('credenciamento');
Route::post('/credenciamento', [HomeController::class, 'create'])->name('create');
Route::get('/sorteio', [HomeController::class, 'sorteio'])->name('sorteio');
Route::post('/sorteio', [HomeController::class, 'sortear'])->name('sortear');

// Rotas para IDEASUN
Route::prefix('ideasun')->group(function () {
    Route::get('/', [IdeasunController::class, 'index'])->name('ideasun.index'); // Renomeando de 'ideasun' para 'ideasun.index'
    Route::get('/login', [IdeasunController::class, 'login'])->name('ideasun.login');
    Route::post('/authenticate', [IdeasunController::class, 'authenticate'])->name('ideasun.authenticate');
    Route::get('/logout', [IdeasunController::class, 'logout'])->name('ideasun.logout');
    
    // Rotas para cidade (protegidas por middleware)
    Route::middleware(['ideasun.cidade'])->group(function () {
        // Cadastro completo após login
        Route::get('/cidade/cadastro-completo', [IdeasunController::class, 'cidadeCadastroCompleto'])
            ->name('ideasun.cidade.cadastro-completo');
        Route::post('/cidade/salvar-cadastro-completo', [IdeasunController::class, 'cidadeSalvarCadastroCompleto'])
            ->name('ideasun.cidade.salvar-cadastro-completo');
            
        Route::get('/cidade/dashboard', [IdeasunController::class, 'cidadeDashboard'])->name('ideasun.cidade.dashboard');
        Route::get('/cidade/editar', [IdeasunController::class, 'cidadeEditar'])->name('ideasun.cidade.editar');
        Route::post('/cidade/atualizar', [IdeasunController::class, 'cidadeAtualizar'])->name('ideasun.cidade.atualizar');
        Route::get('/cidade/treinamento', [IdeasunController::class, 'cidadeTreinamento'])->name('ideasun.cidade.treinamento');
        Route::post('/cidade/agendar', [IdeasunController::class, 'cidadeAgendar'])->name('ideasun.cidade.agendar');
        Route::get('/cidade/sucesso', [IdeasunController::class, 'cidadeSucesso'])->name('ideasun.cidade.sucesso');
        
        // Adicionar a rota para buscar horários via AJAX
        Route::get('/cidade/horarios-disponiveis', [IdeasunController::class, 'getHorariosDisponiveis'])
            ->name('ideasun.cidade.horarios');
        
        // Adicionar rota de logout para a cidade
        Route::get('/cidade/logout', [IdeasunController::class, 'logout'])->name('ideasun.cidade.logout');
    });

    // Adicionar rota para agendamento de banca
    Route::get('/agendar-banca', [IdeasunController::class, 'cidadeAgendarBanca'])->name('ideasun.cidade.agendar-banca');
    Route::post('/salvar-banca', [IdeasunController::class, 'cidadeSalvarBanca'])->name('ideasun.cidade.salvar-banca');
    Route::delete('/cancelar-banca', [IdeasunController::class, 'cidadeCancelarBanca'])->name('ideasun.cidade.cancelar-banca');
    Route::get('/banca-horarios', [IdeasunController::class, 'getBancaHorariosDisponiveis'])->name('ideasun.cidade.banca-horarios');
});

// Rotas para registro de equipe
Route::get('/ideasun/equipe/registro/{hash}', [IdeasunController::class, 'equipeRegistro'])->name('ideasun.equipe.registro');
Route::post('/ideasun/equipe/store', [IdeasunController::class, 'equipeStore'])->name('ideasun.equipe.store');

// Protected routes for team members
Route::middleware(['ideasun.equipe'])->group(function () {
    Route::get('/ideasun/equipe/membros/{equipe_id}', [IdeasunController::class, 'equipeMembros'])->name('ideasun.equipe.membros');
    Route::post('/ideasun/equipe/membros/store', [IdeasunController::class, 'equipeMembrosStore'])->name('ideasun.equipe.membros.store');
    Route::delete('/ideasun/equipe/membros/{id}', [IdeasunController::class, 'equipeMembroRemover'])->name('ideasun.equipe.membros.remover');
    Route::get('/ideasun/equipe/sucesso', [IdeasunController::class, 'equipeSucesso'])->name('ideasun.equipe.sucesso');
});

// Adicionar novas rotas para área de equipes da cidade
Route::middleware(['ideasun.equipe.auth'])->group(function () {
    Route::get('/ideasun/equipe/gerenciar', [IdeasunController::class, 'equipeGerenciar'])->name('ideasun.equipe.gerenciar');
    Route::get('/ideasun/equipe/criar', [IdeasunController::class, 'equipeCriar'])->name('ideasun.equipe.criar');
    Route::post('/ideasun/equipe/salvar', [IdeasunController::class, 'equipeSalvar'])->name('ideasun.equipe.salvar');
    
    // Rotas para apresentação
    Route::post('/ideasun/equipe/apresentacao/enviar', [IdeasunController::class, 'equipeApresentacaoEnviar'])->name('ideasun.equipe.apresentacao.enviar');
    Route::delete('/ideasun/equipe/apresentacao/{equipe_id}', [IdeasunController::class, 'equipeApresentacaoRemover'])->name('ideasun.equipe.apresentacao.remover');
    Route::get('/ideasun/equipe/apresentacao/status/{equipe_id}', [IdeasunController::class, 'equipeApresentacaoStatus'])->name('ideasun.equipe.apresentacao.status');
    
    // Adicionar rota para excluir equipe
    Route::delete('/ideasun/equipe/excluir/{id}', [IdeasunController::class, 'equipeExcluir'])
        ->name('ideasun.equipe.excluir')
        ->middleware('ideasun.equipe.auth');
});

// Admin routes
Route::post('/ideasun/admin/authenticate', [AdminController::class, 'authenticate'])->name('ideasun.admin.authenticate');
Route::get('/ideasun/admin/logout', [AdminController::class, 'logout'])->name('ideasun.admin.logout');

// Agrupar todas as outras rotas admin com middleware de autenticação
Route::middleware(['ideasun.admin'])->prefix('ideasun/admin')->name('ideasun.admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/cidade/{id}', [AdminController::class, 'cidadeDetalhes'])->name('cidade.detalhes');
    Route::get('/equipe/{id}', [AdminController::class, 'equipeDetalhes'])->name('equipe.detalhes');
    Route::get('/export', [AdminController::class, 'export'])->name('export');
    
    // Rotas para gerenciamento de vinculação de bancas
    Route::get('/bancas', [AdminController::class, 'bancas'])->name('bancas');
    Route::get('/bancas/{banca_cidade_id}/vincular', [AdminController::class, 'vincularBanca'])->name('bancas.vincular');
    Route::post('/bancas/salvar-vinculos', [AdminController::class, 'salvarVinculos'])->name('bancas.salvar-vinculos');
    Route::delete('/bancas/remover-vinculo/{vinculo_id}', [AdminController::class, 'removerVinculo'])->name('bancas.remover-vinculo');
    Route::get('/bancas/resultados', [AdminController::class, 'resultadosAvaliacoes'])->name('bancas.resultados');
    
    // Rotas para seleção de finalistas
    Route::get('/cidade/{cidade_id}/avaliacoes', [AdminController::class, 'cidadeAvaliacoes'])->name('cidade.avaliacoes');
    Route::post('/equipe/selecionar-finalista', [AdminController::class, 'selecionarFinalista'])->name('equipe.selecionar-finalista');
    Route::post('/equipe/repescagem', [AdminController::class, 'repescagemEquipe'])->name('equipe.repescagem');
    
    // Excluir equipe
    Route::delete('/equipe/excluir/{id}', [AdminController::class, 'equipeExcluir'])->name('equipe.excluir');
});

// Rotas para seleção de finalistas
Route::get('/ideasun/admin/cidade/{cidade_id}/avaliacoes', [AdminController::class, 'cidadeAvaliacoes'])
    ->name('ideasun.admin.cidade.avaliacoes');

// Rota para selecionar uma equipe como finalista
Route::post('/ideasun/admin/equipe/selecionar-finalista', [AdminController::class, 'selecionarFinalista'])
    ->name('ideasun.admin.equipe.selecionar-finalista');

// Rota para repescagem de equipe
Route::post('/ideasun/admin/equipe/repescagem', [AdminController::class, 'repescagemEquipe'])
    ->name('ideasun.admin.equipe.repescagem');

// Remova ou comente esta rota duplicada
// Route::get('/ideasun/materiais', [IdeasunController::class, 'materiais'])->name('ideasun.materiais');

// Adicione a rota dentro de um middleware que verifica se é equipe OU cidade
Route::middleware(['ideasun.qualquer.auth'])->group(function () {
    Route::get('/ideasun/materiais', [IdeasunController::class, 'materiais'])->name('ideasun.materiais');
});

// Modificar a rota existente de horários para períodos
Route::get('/cidade/periodos', [IdeasunController::class, 'getPeriodosDisponiveis'])
    ->name('ideasun.cidade.periodos');

// Rotas para a banca (avaliadores)
Route::post('/ideasun/banca/autenticar', [BancaController::class, 'autenticar'])->name('ideasun.banca.autenticar');

// Rotas protegidas da banca
Route::middleware(['ideasun.banca'])->group(function () {
    Route::get('/ideasun/banca/dashboard', [BancaController::class, 'dashboard'])->name('ideasun.banca.dashboard');
    Route::get('/ideasun/banca/avaliar/{equipe_id?}', [BancaController::class, 'avaliar'])->name('ideasun.banca.avaliar');
    Route::post('/ideasun/banca/avaliar/salvar', [BancaController::class, 'salvarAvaliacao'])->name('ideasun.banca.avaliar.salvar');
    Route::get('/ideasun/banca/resultados', [BancaController::class, 'resultados'])->name('ideasun.banca.resultados');
    Route::get('/ideasun/banca/logout', [BancaController::class, 'logout'])->name('ideasun.banca.logout');
});

// Rotas para verificar CPF e telefone de avaliadores
Route::get('/ideasun/cidade/verificar-cpf', [IdeasunController::class, 'verificarCpfAvaliador'])->name('ideasun.cidade.verificar-cpf');
Route::get('/ideasun/cidade/verificar-telefone', [IdeasunController::class, 'verificarTelefoneAvaliador'])->name('ideasun.cidade.verificar-telefone');

// Rota para gerenciamento de repescagem (admin)
Route::get('/admin/repescagem', [AdminController::class, 'repescagem'])->name('ideasun.admin.repescagem');
Route::post('/admin/equipe/selecionar-repescagem', [AdminController::class, 'selecionarRepescagem'])->name('ideasun.admin.equipe.selecionar-repescagem');

// Rotas para gerenciamento de avaliadores
Route::get('/admin/avaliadores', [AdminController::class, 'gerenciarAvaliadores'])->name('ideasun.admin.gerenciar-avaliadores');
Route::post('/admin/avaliadores/salvar', [AdminController::class, 'salvarAvaliador'])->name('ideasun.admin.salvar-avaliador');
Route::get('/admin/avaliadores/alternar-status/{id}', [AdminController::class, 'alternarStatusAvaliador'])->name('ideasun.admin.alternar-status-avaliador');
Route::delete('/admin/avaliadores/excluir/{id}', [AdminController::class, 'excluirAvaliador'])->name('ideasun.admin.excluir-avaliador');
