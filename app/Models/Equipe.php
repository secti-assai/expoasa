<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'cidade_id',
        'nome',
        'modalidade',
        'instituicao',
        'resumo_ideia', // New field
        'responsavel_nome',
        'responsavel_email',
        'responsavel_telefone',
        'equipe_id',
        'apresentacao_path',
        'doc_termo_aceite_path',
        'doc_termo_dados_path',
        'doc_termo_imagem_path',
        'expoasa',
        'nota_media'
    ];

    protected $casts = [
        'membros_dados' => 'array',
        'expoasa' => 'boolean',
        'nota_media' => 'decimal:2'
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function membros()
    {
        return $this->hasMany(Membro::class);
    }
    
    public function getNomeModalidadeAttribute()
    {
        $modalidades = [
            'educacao_especial' => 'Educação Especial',
            'fundamental_1' => 'Ensino Fundamental I',
            'fundamental_2' => 'Ensino Fundamental II',
            'ensino_medio' => 'Ensino Médio/Técnico',
            'ensino_superior' => 'Ensino Superior',
        ];
        
        return $modalidades[$this->modalidade] ?? $this->modalidade;
    }
    
    public function getMembroResponsavelAttribute()
    {
        return $this->membros()->where('responsavel_equipe', true)->first();
    }

    /**
     * As avaliações recebidas por esta equipe
     */
    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }

    /**
     * Obtém o nome da modalidade formatado para exibição
     */
    public function getModalidadeNome()
    {
        $modalidades = [
            'educacao_especial' => 'Educação Especial',
            'fundamental_1' => 'Fundamental I',
            'fundamental_2' => 'Fundamental II',
            'medio_tecnico' => 'Médio/Técnico',
            'superior' => 'Superior',
        ];
        
        return $modalidades[$this->modalidade] ?? ucfirst(str_replace('_', ' ', $this->modalidade));
    }
}