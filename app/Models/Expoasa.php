<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expoasa extends Model
{
    use HasFactory;

    protected $table = "visitantes";

    protected $fillable = [
        'nome',
        'cpf',
        'endereco',
        'cidade',
        'contato',
        'nascimento',
        'lgpd'
    ];
}
