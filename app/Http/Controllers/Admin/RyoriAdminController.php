<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RyoriAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('ryori.admin');
    }

    // Página inicial do admin - enviando direto para os pratos
    public function index()
    {
        return redirect()->route('ryori.admin.dishes');
    }

    // Dish management
    public function dishes()
    {
        $dishes = Dish::withCount('votes')->orderByDesc('votes_count')->get();
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
            'image' => 'nullable|image|max:2048',
        ]);
        
        $data = $request->only(['name']);
        $data['active'] = $request->has('active') ? 1 : 0;
        
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
            'image' => 'nullable|image|max:2048',
        ]);
        
        $data = $request->only(['name']);
        $data['active'] = $request->has('active') ? 1 : 0;
        
        if ($request->hasFile('image')) {
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
        
        if ($dish->image_path && Storage::exists(str_replace('/storage', 'public', $dish->image_path))) {
            Storage::delete(str_replace('/storage', 'public', $dish->image_path));
        }
        
        $dish->delete();
        
        return redirect()->route('ryori.admin.dishes')->with('success', 'Prato excluído com sucesso!');
    }
    
    // Results display
    public function results()
    {
        $dishes = Dish::withCount('votes')
                    ->orderByDesc('votes_count')
                    ->paginate(10); // Add pagination
                     
        return view('ryori.admin.results', compact('dishes'));
    }
}