@extends('ryori.admin.layouts.admin')

@section('title', 'Editar Prato')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ryori.admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do Prato *</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $dish->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label">Imagem</label>
                    @if($dish->image_path)
                        <div class="mb-2">
                            <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}" style="max-width:200px">
                        </div>
                    @endif
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $dish->active ? 'checked' : '' }}>
                        <label class="form-check-label" for="active">
                            Ativo
                        </label>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('ryori.admin.dishes') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Atualizar Prato</button>
                </div>
            </form>
        </div>
    </div>
@endsection