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
        'chef_name',
        'restaurant_name',
        'category',
        'image_path',
        'active'
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
    
    public function getVoteCountAttribute()
    {
        return $this->votes()->count();
    }
}