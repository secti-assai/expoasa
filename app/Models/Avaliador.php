<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliador extends Model
{
    use HasFactory;

    protected $table = 'avaliadores';

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'senha',
        'cidade_id',
        'nivel',
        'tipo',
        'ativo'
    ];

    protected $hidden = [
        'senha',
    ];

    /**
     * Retorna a cidade a que o avaliador pertence
     */
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    /**
     * As avaliações feitas por este avaliador
     */
    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}