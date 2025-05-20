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
    
    /**
     * Retorna a cidade a que o avaliador pertence
     */
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}