@extends('ryori.admin.layouts.admin')

@section('title', 'Período de Votação')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ryori.admin.voting_period.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="start_datetime" class="form-label">Início da Votação</label>
                    <input type="datetime-local" class="form-control @error('start_datetime') is-invalid @enderror" id="start_datetime" name="start_datetime" value="{{ old('start_datetime', $votingPeriod?->start_datetime ? $votingPeriod->start_datetime->format('Y-m-d\TH:i') : '') }}" required>
                    @error('start_datetime')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="end_datetime" class="form-label">Fim da Votação</label>
                    <input type="datetime-local" class="form-control @error('end_datetime') is-invalid @enderror" id="end_datetime" name="end_datetime" value="{{ old('end_datetime', $votingPeriod?->end_datetime ? $votingPeriod->end_datetime->format('Y-m-d\TH:i') : '') }}" required>
                    @error('end_datetime')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salvar Período</button>
            </form>
        </div>
    </div>
@endsection
