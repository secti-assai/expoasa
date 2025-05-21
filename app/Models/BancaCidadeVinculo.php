<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BancaCidadeVinculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'banca_cidade_id',
        'cidade_avaliada_id'
    ];

    /**
     * A cidade que possui a banca avaliadora
     */
    public function bancaCidade()
    {
        return $this->belongsTo(Cidade::class, 'banca_cidade_id');
    }

    /**
     * A cidade sendo avaliada
     */
    public function cidadeAvaliada()
    {
        return $this->belongsTo(Cidade::class, 'cidade_avaliada_id');
    }
}