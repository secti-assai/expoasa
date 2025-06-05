<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone'
    ];

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }
}