<?php

namespace App\Services;

use App\Models\Cidade;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class TreinamentoService
{
    /**
     * Obtém as datas disponíveis para agendamento de treinamento
     */
    public function getDatasDisponiveis(): array
    {
        // Período: 21/05 a 23/05 (incluindo ambos)
        return $this->gerarDatasNoPeriodo('2026-05-21', '2026-05-23');
    }
    
    /**
     * Gera um array de datas dentro de um período específico
     */
    private function gerarDatasNoPeriodo(string $dataInicio, string $dataFim): array
    {
        $datas = [];
        $dataAtual = Carbon::parse($dataInicio);
        $dataFinal = Carbon::parse($dataFim);
        
        while ($dataAtual->lte($dataFinal)) {
            $datas[] = $dataAtual->format('Y-m-d');
            $dataAtual->addDay();
        }
        
        return $datas;
    }
    
    /**
     * Obtém os períodos disponíveis para uma data específica
     */
    public function getPeriodosDisponiveis(string $data): array
    {
        try {
            // Definir apenas os períodos de Manhã e Tarde
            $todosPeriodos = ['Manhã', 'Tarde'];
            
            // Obter cidades que já têm agendamento nesta data
            $agendamentosPorPeriodo = Cidade::whereNotNull('treinamento_agendado')
                ->whereDate('treinamento_agendado', $data)
                ->get()
                ->groupBy(function ($cidade) {
                    $hora = Carbon::parse($cidade->treinamento_agendado)->format('H');
                    // Considerando apenas manhã (até 12h) e tarde (após 12h)
                    if ($hora < 12) return 'Manhã';
                    else return 'Tarde';
                });
            
            \Log::info("Agendamentos encontrados na data {$data}: " . $agendamentosPorPeriodo->count());
            
            // Filtrar períodos que já têm 3 ou mais agendamentos
            $periodosDisponiveis = [];
            foreach ($todosPeriodos as $periodo) {
                $agendamentos = $agendamentosPorPeriodo->get($periodo, collect());
                \Log::info("Período {$periodo} tem " . count($agendamentos) . " agendamentos");
                
                if (count($agendamentos) < 3) {
                    $periodosDisponiveis[] = $periodo;
                }
            }
            
            return $periodosDisponiveis;
        } catch (\Exception $e) {
            \Log::error("Erro ao obter períodos: " . $e->getMessage());
            
            // Em caso de erro, retornar ambos períodos como disponíveis
            return ['Manhã', 'Tarde'];
        }
    }
    
    /**
     * Agenda um treinamento para uma cidade específica
     */
    public function agendarTreinamento(Cidade $cidade, string $data, string $periodo): bool
    {
        // Verificar se o período está disponível
        $periodosDisponiveis = $this->getPeriodosDisponiveis($data);
        
        if (!in_array($periodo, $periodosDisponiveis)) {
            return false;
        }
        
        // Definir um horário representativo para o período
        $horario = [
            'Manhã' => '09:00',
            'Tarde' => '14:00'
        ][$periodo];
        
        // Criar timestamp do agendamento
        $dataHora = Carbon::parse($data . ' ' . $horario);
        
        // Atualizar a cidade com o agendamento
        $cidade->treinamento_agendado = $dataHora;
        $cidade->treinamento_requerido = true;
        $cidade->save();
        
        return true;
    }
}