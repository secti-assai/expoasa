<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdeasunController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [HomeController::class, 'index'])->name('inicio'); // Para a expoasa
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
    Route::delete('/ideasun/equipe/excluir/{id}', [IdeasunController::class, 'equipeExcluir'])->name('ideasun.equipe.excluir');
});

// Admin routes
Route::post('/ideasun/admin/authenticate', [AdminController::class, 'authenticate'])->name('ideasun.admin.authenticate');
Route::get('/ideasun/admin/logout', [AdminController::class, 'logout'])->name('ideasun.admin.logout');
Route::get('/ideasun/admin/dashboard', [AdminController::class, 'dashboard'])->name('ideasun.admin.dashboard');
Route::get('/ideasun/admin/cidade/{id}', [AdminController::class, 'cidadeDetalhes'])->name('ideasun.admin.cidade.detalhes');
Route::get('/ideasun/admin/equipe/{id}', [AdminController::class, 'equipeDetalhes'])->name('ideasun.admin.equipe.detalhes');
Route::get('/ideasun/admin/export', [AdminController::class, 'export'])->name('ideasun.admin.export');

// Remova ou comente esta rota duplicada
// Route::get('/ideasun/materiais', [IdeasunController::class, 'materiais'])->name('ideasun.materiais');

// Adicione a rota dentro de um middleware que verifica se é equipe OU cidade
Route::middleware(['ideasun.qualquer.auth'])->group(function () {
    Route::get('/ideasun/materiais', [IdeasunController::class, 'materiais'])->name('ideasun.materiais');
});

// Adicione esta rota fora dos grupos de middleware existentes
Route::get('/ideasun/materiais', [IdeasunController::class, 'materiais'])->name('ideasun.materiais');

// Modificar a rota existente de horários para períodos
Route::get('/cidade/periodos', [IdeasunController::class, 'getPeriodosDisponiveis'])
    ->name('ideasun.cidade.periodos');
