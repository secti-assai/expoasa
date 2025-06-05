@extends('ryori.admin.layouts.admin')

@section('title', 'Novo Prato')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ryori.admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do Prato *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Descrição *</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="active" id="active" value="1" checked>
                        <label class="form-check-label" for="active">
                            Ativo
                        </label>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('ryori.admin.dishes') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Salvar Prato</button>
                </div>
            </form>
        </div>
    </div>
@endsection