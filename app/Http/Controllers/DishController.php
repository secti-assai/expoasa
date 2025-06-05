<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::where('active', true)->get();
        return view('ryori.dishes.index', compact('dishes'));
    }
    
    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        return view('ryori.dishes.show', compact('dish'));
    }
}