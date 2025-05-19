<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipe_id',
        'nome',
        'email',
        'telefone',
        'data_nascimento',
        'funcao',
        'responsavel_equipe',
        'doc_termo_aceite_path',
        'doc_termo_dados_path',
        'doc_termo_imagem_path',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
        'responsavel_equipe' => 'boolean',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    
    public function getNomeFuncaoAttribute()
    {
        $funcoes = [
            'estudante' => 'Estudante',
            'professor' => 'Professor Orientador',
        ];
        
        return $funcoes[$this->funcao] ?? $this->funcao;
    }
}