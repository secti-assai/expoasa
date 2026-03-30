<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\VotingPeriod;
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
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'description']);
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
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'description']);
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

    public function votingPeriodForm()
    {
        $votingPeriod = VotingPeriod::first();
        if ($votingPeriod) {
            $votingPeriod->start_datetime = $votingPeriod->start_datetime ? \Carbon\Carbon::parse($votingPeriod->start_datetime) : null;
            $votingPeriod->end_datetime = $votingPeriod->end_datetime ? \Carbon\Carbon::parse($votingPeriod->end_datetime) : null;
        }
        return view('ryori.admin.voting_period', compact('votingPeriod'));
    }

    public function updateVotingPeriod(Request $request)
    {
        $request->validate([
            'start_datetime' => 'required|date',
            'end_datetime' => 'required|date|after:start_datetime',
        ]);
        $votingPeriod = VotingPeriod::first();
        if (!$votingPeriod) {
            $votingPeriod = new VotingPeriod();
        }
        $votingPeriod->start_datetime = $request->start_datetime;
        $votingPeriod->end_datetime = $request->end_datetime;
        $votingPeriod->save();
        return redirect()->route('ryori.admin.voting_period.form')->with('success', 'Período de votação atualizado com sucesso!');
    }
}