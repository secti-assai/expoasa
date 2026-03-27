<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Participant;
use App\Models\Vote;
use App\Models\VotingPeriod;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        $dishes = Dish::where('active', true)->get();
        $votingPeriod = VotingPeriod::first();
        $now = now();
        $votingOpen = $votingPeriod && $now->gte($votingPeriod->start_datetime) && $now->lte($votingPeriod->end_datetime);
        return view('ryori.vote.index', compact('dishes', 'votingOpen', 'votingPeriod'));
    }
    
    public function store(Request $request)
    {
        // Restringe votação para período definido no admin
        $now = now();
        $votingPeriod = VotingPeriod::first();
        if (!$votingPeriod || $now->lt($votingPeriod->start_datetime) || $now->gt($votingPeriod->end_datetime)) {
            return back()->withErrors(['voting_period' => 'A votação não está disponível neste momento. Consulte o período definido pelo administrador.'])->withInput();
        }
        $customMessages = [
            'name.required' => 'Por favor, preencha seu nome completo.',
            'name.string' => 'O nome deve ser um texto válido.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'cpf.required' => 'Por favor, informe seu CPF.',
            'cpf.string' => 'O CPF deve ser um texto válido.',
            'cpf.max' => 'O CPF deve ter no máximo 14 caracteres.',
            'cpf.unique' => 'Este CPF já foi utilizado para votar.',
            'dish_id.required' => 'Selecione um prato para votar.',
            'dish_id.exists' => 'O prato selecionado não é válido.',
            'email.email' => 'Informe um e-mail válido.',
            'email.max' => 'O e-mail não pode ter mais de 255 caracteres.',
            'phone.max' => 'O telefone não pode ter mais de 20 caracteres.',
        ];
        $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:participants,cpf',
            'dish_id' => 'required|exists:dishes,id',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
        ], $customMessages);
        
        // Validação de CPF 
        $cpf = preg_replace('/[^0-9]/', '', $request->cpf);
        
        if (!$this->validateCPF($cpf)) {
            return back()->withErrors(['cpf' => 'CPF inválido.'])->withInput();
        }
        
        // Criar o participante
        $participant = Participant::create([
            'name' => $request->name,
            'cpf' => $cpf,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        
        // Criar o voto
        Vote::create([
            'participant_id' => $participant->id,
            'dish_id' => $request->dish_id,
        ]);
        
        return redirect()->route('ryori.vote.success');
    }
    
    public function success()
    {
        return view('ryori.vote.success');
    }
    
    public function validateCPF($cpf)
    {
        // Remove qualquer formatação
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        
        // Verifica se foi informado todos os dígitos
        if (strlen($cpf) != 11) {
            return false;
        }
        
        // Verifica se foi informada uma sequência de dígitos repetidos
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        
        // Faz o cálculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }
}