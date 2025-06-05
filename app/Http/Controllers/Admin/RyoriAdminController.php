<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Vote;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RyoriAdminController extends Controller
{
    public function index()
    {
        $totalDishes = Dish::count();
        $totalVotes = Vote::count();
        $dishes = Dish::withCount('votes')
                      ->orderBy('votes_count', 'desc')
                      ->get();
                      
        return view('ryori.admin.index', compact('totalDishes', 'totalVotes', 'dishes'));
    }
    
    public function dishes()
    {
        $dishes = Dish::all();
        return view('ryori.admin.dishes.index', compact('dishes'));
    }
    
    public function createDish()
    {
        return view('ryori.admin.dishes.create');
    }
    
    public function storeDish(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'chef_name' => 'nullable|string|max:255',
            'restaurant_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'active' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/dishes');
            $data['image_path'] = Storage::url($path);
        }
        
        Dish::create($data);
        
        return redirect()->route('ryori.admin.dishes')->with('success', 'Prato criado com sucesso!');
    }
    
    public function editDish($id)
    {
        $dish = Dish::findOrFail($id);
        return view('ryori.admin.dishes.edit', compact('dish'));
    }
    
    public function updateDish(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'chef_name' => 'nullable|string|max:255',
            'restaurant_name' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
            'active' => 'boolean',
        ]);
        
        $data = $request->except('image');
        
        if ($request->hasFile('image')) {
            // Remove a imagem antiga se existir
            if ($dish->image_path && Storage::exists(str_replace('/storage', 'public', $dish->image_path))) {
                Storage::delete(str_replace('/storage', 'public', $dish->image_path));
            }
            
            $path = $request->file('image')->store('public/dishes');
            $data['image_path'] = Storage::url($path);
        }
        
        $dish->update($data);
        
        return redirect()->route('ryori.admin.dishes')->with('success', 'Prato atualizado com sucesso!');
    }
    
    public function destroyDish($id)
    {
        $dish = Dish::findOrFail($id);
        
        // Remove a imagem se existir
        if ($dish->image_path && Storage::exists(str_replace('/storage', 'public', $dish->image_path))) {
            Storage::delete(str_replace('/storage', 'public', $dish->image_path));
        }
        
        $dish->delete();
        
        return redirect()->route('ryori.admin.dishes')->with('success', 'Prato excluído com sucesso!');
    }
    
    public function votes()
    {
        $votes = Vote::with(['participant', 'dish'])->get();
        return view('ryori.admin.votes.index', compact('votes'));
    }
    
    public function results()
    {
        $dishes = Dish::withCount('votes')
                      ->orderBy('votes_count', 'desc')
                      ->get();
                      
        return view('ryori.admin.results', compact('dishes'));
    }
}
