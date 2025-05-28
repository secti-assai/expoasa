<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Avaliador;
use App\Models\Equipe;
use App\Models\Cidade;

class BancaController extends Controller
{
    /**
     * Autenticação de avaliador
     */
    public function autenticar(Request $request)
    {
        $request->validate([
            'cpf' => 'required|string',
            'senha' => 'required|string',
        ]);

        // Limpar o CPF para formato somente números
        $cpf = preg_replace('/[^0-9]/', '', $request->cpf);

        // Buscar avaliador pelo CPF
        $avaliador = Avaliador::where('cpf', $cpf)->first();

        if ($avaliador && Hash::check($request->senha, $avaliador->senha)) {
            // Se autenticado com sucesso, guarda o avaliador_id na sessão
            Session::put('avaliador_id', $avaliador->id);

            \Illuminate\Support\Facades\Log::info('Avaliador autenticado:', [
                'id' => $avaliador->id,
                'nome' => $avaliador->nome,
                'cidade_id' => $avaliador->cidade_id
            ]);

            return redirect()->route('ideasun.banca.dashboard');
        }

        return redirect()->route('ideasun.login')
            ->with('error', 'CPF ou senha inválidos. Por favor, tente novamente.')
            ->withInput($request->except('senha'));
    }

    /**
     * Dashboard da Banca
     */
    public function dashboard()
    {
        $avaliador = $this->getAvaliadorFromSession();

        if ($avaliador->nivel == 2) {
            return $this->dashboardRepescagem($avaliador);
        } elseif ($avaliador->nivel == 3) {
            return $this->dashboardEspecial($avaliador);
        }

        // Dashboard padrão para nível 1
        $cidade = $avaliador->cidade;

        // Obter as cidades vinculadas para avaliação
        $cidadesParaAvaliar = \App\Models\Cidade::whereIn('id', function ($query) use ($cidade) {
            $query->select('cidade_avaliada_id')
                ->from('banca_cidade_vinculos')
                ->where('banca_cidade_id', $cidade->id);
        })
            ->whereNotNull('banca_agendada')
            ->get();

        // Carregar as equipes para cada cidade e verificar se já foram avaliadas
        foreach ($cidadesParaAvaliar as $cidadeAvaliar) {
            $cidadeAvaliar->equipes = $cidadeAvaliar->equipes->map(function ($equipe) use ($avaliador) {
                $equipe->ja_avaliada = \Illuminate\Support\Facades\DB::table('avaliacoes')
                    ->where('avaliador_id', $avaliador->id)
                    ->where('equipe_id', $equipe->id)
                    ->exists();
                return $equipe;
            });
        }

        return view('ideasun.banca.dashboard', compact('avaliador', 'cidade', 'cidadesParaAvaliar'));
    }

    /**
     * Dashboard específico para avaliadores de repescagem (nível 2)
     */
    private function dashboardRepescagem($avaliador)
    {
        // Obter todas as equipes não classificadas (expoasa = false)
        $equipes = \App\Models\Equipe::where('expoasa', false)
            ->with(['membros'])
            ->get();
        
        // Verificar quais equipes já foram avaliadas por este avaliador
        foreach ($equipes as $equipe) {
            $equipe->ja_avaliada = \Illuminate\Support\Facades\DB::table('avaliacoes')
                ->where('avaliador_id', $avaliador->id)
                ->where('equipe_id', $equipe->id)
                ->exists();
        }
        
        // Filtrar apenas equipes não avaliadas
        $equipesNaoAvaliadas = $equipes->filter(function($equipe) {
            return !$equipe->ja_avaliada;
        });
        
        // Obter avaliações já realizadas pelo avaliador
        $avaliacoes = \Illuminate\Support\Facades\DB::table('avaliacoes')
            ->where('avaliador_id', $avaliador->id)
            ->join('equipes', 'avaliacoes.equipe_id', '=', 'equipes.id')
            ->select(
                'avaliacoes.*',
                'equipes.nome as equipe_nome'
            )
            ->orderBy('avaliacoes.created_at', 'desc')
            ->get();
        
        return view('ideasun.banca.dashboard-repescagem', compact('avaliador', 'equipesNaoAvaliadas', 'avaliacoes'));
    }

    /**
     * Dashboard específico para avaliadores de nível 3 (futuramente)
     */
    private function dashboardEspecial($avaliador)
    {
        // Obter todas as equipes classificadas (expoasa = true)
        $equipes = \App\Models\Equipe::where('expoasa', true)
            ->with(['membros'])
            ->get();

        // Verificar quais equipes já foram avaliadas por este avaliador
        foreach ($equipes as $equipe) {
            $equipe->ja_avaliada = \Illuminate\Support\Facades\DB::table('avaliacoes')
                ->where('avaliador_id', $avaliador->id)
                ->where('equipe_id', $equipe->id)
                ->exists();
        }

        // Filtrar apenas equipes não avaliadas
        $equipesNaoAvaliadas = $equipes->filter(function ($equipe) {
            return !$equipe->ja_avaliada;
        });

        // Obter avaliações já realizadas pelo avaliador
        $avaliacoes = \Illuminate\Support\Facades\DB::table('avaliacoes')
            ->where('avaliador_id', $avaliador->id)
            ->join('equipes', 'avaliacoes.equipe_id', '=', 'equipes.id')
            ->select(
                'avaliacoes.*',
                'equipes.nome as equipe_nome'
            )
            ->orderBy('avaliacoes.created_at', 'desc')
            ->get();

        return view('ideasun.banca.dashboard-especial', compact('avaliador', 'equipesNaoAvaliadas', 'avaliacoes'));
    }

    /**
     * Página para avaliar uma equipe específica
     */
    public function avaliar($equipe_id = null)
    {
        $avaliador = $this->getAvaliadorFromSession();

        if ($equipe_id) {
            // Avaliar equipe específica
            $equipe = Equipe::findOrFail($equipe_id);

            // Verificar se a equipe não é da cidade do avaliador
            if ($equipe->cidade_id == $avaliador->cidade_id) {
                return redirect()->route('ideasun.banca.dashboard')
                    ->with('error', 'Você não pode avaliar equipes da sua própria cidade.');
            }

            // Verificar se o avaliador já avaliou esta equipe
            $jaAvaliada = \Illuminate\Support\Facades\DB::table('avaliacoes')
                ->where('avaliador_id', $avaliador->id)
                ->where('equipe_id', $equipe_id)
                ->exists();

            if ($jaAvaliada) {
                return redirect()->route('ideasun.banca.dashboard')
                    ->with('error', 'Você já avaliou esta equipe.');
            }

            // Obter avaliações realizadas pelo avaliador atual (para a tabela de avaliações)
            $avaliacoes = \Illuminate\Support\Facades\DB::table('avaliacoes')
                ->where('avaliador_id', $avaliador->id)
                ->join('equipes', 'avaliacoes.equipe_id', '=', 'equipes.id')
                ->join('cidades', 'equipes.cidade_id', '=', 'cidades.id')
                ->select(
                    'avaliacoes.*',
                    'equipes.nome as equipe_nome',
                    'equipes.modalidade',
                    'cidades.nome as cidade_nome'
                )
                ->orderBy('avaliacoes.created_at', 'desc')
                ->get();

            return view('ideasun.banca.avaliar', compact('avaliador', 'equipe', 'avaliacoes'));
        } else {
            // Buscar próxima equipe não avaliada
            $equipe = Equipe::whereHas('cidade', function ($query) use ($avaliador) {
                $query->where('id', '!=', $avaliador->cidade_id);
            })
                ->whereDoesntHave('avaliacoes', function ($query) use ($avaliador) {
                    $query->where('avaliador_id', $avaliador->id);
                })
                ->first();

            if (!$equipe) {
                return redirect()->route('ideasun.banca.dashboard')
                    ->with('info', 'Não há mais equipes para avaliar no momento.');
            }

            return redirect()->route('ideasun.banca.avaliar', ['equipe_id' => $equipe->id]);
        }
    }

    /**
     * Salvar avaliação de uma equipe
     */
    public function salvarAvaliacao(Request $request)
    {
        $request->validate([
            'equipe_id' => 'required|exists:equipes,id',
            'A_criatividade_inovacao' => 'required|integer|min:0|max:25',
            'B_qualidade_apresentacao' => 'required|integer|min:0|max:25',
            'C_impacto_sociedade' => 'required|integer|min:0|max:25',
            'D_aderencia_ODS' => 'required|integer|min:0|max:25',
            'comentarios' => 'nullable|string|max:1000',
        ]);

        $avaliador = $this->getAvaliadorFromSession();

        // Verificar se já avaliou esta equipe
        $avaliacaoExistente = \Illuminate\Support\Facades\DB::table('avaliacoes')
            ->where('avaliador_id', $avaliador->id)
            ->where('equipe_id', $request->equipe_id)
            ->exists();

        if ($avaliacaoExistente) {
            return redirect()->route('ideasun.banca.dashboard')
                ->with('error', 'Você já avaliou esta equipe anteriormente.');
        }

        // Calcular a nota total (soma dos 4 critérios)
        $notaTotal = $request->A_criatividade_inovacao +
                    $request->B_qualidade_apresentacao +
                    $request->C_impacto_sociedade +
                    $request->D_aderencia_ODS;

        // Criar registro de avaliação
        \Illuminate\Support\Facades\DB::table('avaliacoes')->insert([
            'avaliador_id' => $avaliador->id,
            'equipe_id' => $request->equipe_id,
            'A_criatividade_inovacao' => $request->A_criatividade_inovacao,
            'B_qualidade_apresentacao' => $request->B_qualidade_apresentacao,
            'C_impacto_sociedade' => $request->C_impacto_sociedade,
            'D_aderencia_ODS' => $request->D_aderencia_ODS,
            'nota_total' => $notaTotal,
            'comentarios' => $request->comentarios,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('ideasun.banca.dashboard')
            ->with('success', 'Avaliação registrada com sucesso!');
    }

    /**
     * Visualizar resultados das avaliações realizadas
     */
    public function resultados()
    {
        $avaliador = $this->getAvaliadorFromSession();

        // Buscar todas as avaliações feitas por este avaliador
        $avaliacoes = \Illuminate\Support\Facades\DB::table('avaliacoes')
            ->where('avaliador_id', $avaliador->id)
            ->join('equipes', 'avaliacoes.equipe_id', '=', 'equipes.id')
            ->join('cidades', 'equipes.cidade_id', '=', 'cidades.id')
            ->select(
                'avaliacoes.*',
                'equipes.nome as equipe_nome',
                'equipes.modalidade',
                'cidades.nome as cidade_nome'
            )
            ->orderBy('avaliacoes.created_at', 'desc')
            ->get();

        return view('ideasun.banca.resultados', compact('avaliador', 'avaliacoes'));
    }

    /**
     * Logout do avaliador
     */
    public function logout()
    {
        Session::forget('avaliador_id');
        return redirect()->route('ideasun.login')
            ->with('success', 'Você saiu do sistema com sucesso.');
    }

    /**
     * Utilitário para obter o avaliador da sessão
     */
    protected function getAvaliadorFromSession()
    {
        $avaliador_id = Session::get('avaliador_id');
        return Avaliador::findOrFail($avaliador_id);
    }
}
