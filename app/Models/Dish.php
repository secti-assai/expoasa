<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'active'
    ];
    
    protected $casts = [
        'active' => 'boolean',
    ];
    
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'dish_id',
        'participant_id',
        'value'
    ];

    public function dish()
    {
        return $this->belongsTo(\App\Models\Dish::class);
    }

    public function participant()
    {
        return $this->belongsTo(\App\Models\Participant::class);
    }
}