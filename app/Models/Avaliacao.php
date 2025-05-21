<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = 'avaliacoes';

    protected $fillable = [
        'avaliador_id',
        'equipe_id',
        'A_criatividade_inovacao',
        'B_qualidade_apresentacao',
        'C_impacto_sociedade',
        'D_aderencia_ODS',
        'nota_total',
        'comentarios'
    ];

    /**
     * O avaliador que realizou esta avaliação
     */
    public function avaliador()
    {
        return $this->belongsTo(Avaliador::class);
    }

    /**
     * A equipe que foi avaliada
     */
    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
}