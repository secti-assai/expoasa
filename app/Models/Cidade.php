<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Cidade extends Model
{
    use HasFactory;

    protected $table = 'cidades';

    protected $fillable = [
        'nome',
        'estado',
        'distancia_categoria',
        'representante_nome',
        'representante_email',
        'representante_telefone',
        'prefeito_nome',       // Novo campo
        'prefeito_email',      // Novo campo
        'prefeito_telefone',   // Novo campo
        'secretario_nome',     // Novo campo
        'secretario_email',    // Novo campo
        'secretario_telefone', // Novo campo
        'senha',
        'hash_id',
        'treinamento_requerido',
        'treinamento_agendado',
        'modalidades',
        'cidade_id',
        'banca_agendada',
    ];

    protected $casts = [
        'treinamento_agendado' => 'datetime',
        'modalidades' => 'array',
        'banca_agendada' => 'datetime',
    ];

    public function equipes()
    {
        return $this->hasMany(Equipe::class);
    }
    
    // Método para obter dias disponíveis com base na categoria de distância
    public function getDiasDisponiveis()
    {
        $hoje = Carbon::now();
        $diasDisponiveis = [];
        
        // Gerar próximos 30 dias
        for ($i = 1; $i <= 30; $i++) {
            $data = $hoje->copy()->addDays($i);
            $diaSemana = $data->dayOfWeek;
            
            // Pular finais de semana
            if ($diaSemana == 0 || $diaSemana == 6) {
                continue;
            }
            
            // Lógica com base na categoria de distância
            // Categoria 1 (próxima): disponível todos os dias úteis
            // Categoria 2 (média): disponível terças, quartas e quintas
            // Categoria 3 (longe): disponível apenas terças e quintas
            if (
                ($this->distancia_categoria == 1) || // Todas as cidades próximas
                ($this->distancia_categoria == 2 && in_array($diaSemana, [2, 3, 4])) || // Média distância: terça, quarta, quinta
                ($this->distancia_categoria == 3 && in_array($diaSemana, [2, 4])) // Longa distância: terça e quinta
            ) {
                $diasDisponiveis[] = [
                    'data' => $data->format('Y-m-d'),
                    'dia_formatado' => $data->format('d/m/Y'),
                    'dia_semana' => __($data->format('l')),
                ];
            }
        }
        
        return $diasDisponiveis;
    }

    // Método para verificar se uma modalidade específica está selecionada
    public function hasModalidade($modalidade)
    {
        return in_array($modalidade, $this->modalidades ?? []);
    }

    // Boot para gerar automaticamente o cidade_id
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($cidade) {
            if (empty($cidade->cidade_id)) {
                $cidade->cidade_id = 'CID-' . rand(1000, 9999);
            }
            
            if (empty($cidade->hash_id)) {
                $cidade->hash_id = Str::uuid();
            }
        });
    }
}