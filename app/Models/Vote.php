<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'dish_id',
        'participant_id'
    ];

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}