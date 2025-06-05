@extends('ryori.admin.layouts.admin')

@section('title', 'Resultados da Votação')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Posição</th>
                            <th>Prato</th>
                            <th>Total de Votos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dishes as $index => $dish)
                            <tr class="{{ $index === 0 ? 'table-success' : '' }}">
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if($dish->image_path)
                                        <img src="{{ $dish->image_path }}" width="50" alt="{{ $dish->name }}" class="me-2">
                                    @endif
                                    <strong>{{ $dish->name }}</strong>
                                </td>
                                <td>
                                    <span class="badge bg-primary fs-6">{{ $dish->votes_count }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Ainda não há pratos cadastrados ou votos registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="card">
            <div class="card-body">
                <h5>Resumo da Votação</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p>Total de pratos: <strong>{{ $dishes->count() }}</strong></p>
                    </div>
                    <div class="col-md-6">
                        <p>Total de votos: <strong>{{ $dishes->sum('votes_count') }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection