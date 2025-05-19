use App\Services\TreinamentoService;

// ... outras methods do controller ...

/**
 * Exibe a página de agendamento de treinamento
 */
public function exibirAgendamento()
{
    $cidade = auth()->user(); // Assumindo que o usuário logado é uma Cidade
    $treinamentoService = new TreinamentoService();
    
    $datasDisponiveis = $treinamentoService->getDatasDisponiveis();
    
    return view('cidades.agendamento', [
        'cidade' => $cidade,
        'datasDisponiveis' => $datasDisponiveis
    ]);
}

/**
 * Carrega os horários disponíveis para uma data específica via AJAX
 */
public function carregarHorarios(Request $request)
{
    $cidade = auth()->user();
    $data = $request->input('data');
    
    $treinamentoService = new TreinamentoService();
    $horariosDisponiveis = $treinamentoService->getHorariosDisponiveis($cidade->distancia_categoria, $data);
    
    return response()->json(['horarios' => $horariosDisponiveis]);
}

/**
 * Agenda o treinamento com a data e horário selecionados
 */
public function agendarTreinamento(Request $request)
{
    $request->validate([
        'data' => 'required|date',
        'horario' => 'required|string'
    ]);
    
    $cidade = auth()->user();
    $treinamentoService = new TreinamentoService();
    
    $agendado = $treinamentoService->agendarTreinamento(
        $cidade, 
        $request->input('data'),
        $request->input('horario')
    );
    
    if ($agendado) {
        return redirect()->route('cidade.perfil')
            ->with('success', 'Treinamento agendado com sucesso!');
    }
    
    return back()->with('error', 'Não foi possível agendar o treinamento. Por favor, tente outro horário.');
}