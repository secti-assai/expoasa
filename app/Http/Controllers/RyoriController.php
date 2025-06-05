<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class RyoriController extends Controller
{
    public function index()
    {
        $dishes = Dish::where('active', true)->get();
        return view('ryori.index', compact('dishes'));
    }
    
    public function about()
    {
        return view('ryori.about');
    }
    
    public function rules()
    {
        return view('ryori.rules');
    }
}
