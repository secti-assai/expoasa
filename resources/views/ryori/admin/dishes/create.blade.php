<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/dishes/create.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Adicionar Novo Prato')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h2><i class="fas fa-utensils me-2"></i>Adicionar Novo Prato</h2>
                    <a href="{{ route('ryori.admin.dishes') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Voltar
                    </a>
                </div>
                
                <div class="admin-card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('ryori.admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nome do Prato <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="description" class="form-label">Descrição <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <label for="restaurant_name" class="form-label">Nome do Restaurante <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="restaurant_name" name="restaurant_name" value="{{ old('restaurant_name') }}" required>
                                    @error('restaurant_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="chef_name" class="form-label">Nome do Chef</label>
                                    <input type="text" class="form-control" id="chef_name" name="chef_name" value="{{ old('chef_name') }}">
                                    @error('chef_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <label for="image" class="form-label">Imagem do Prato</label>
                                <div class="image-upload-container">
                                    <div class="image-preview">
                                        <img id="preview" src="/assets/img/dish-placeholder.jpg" alt="Preview">
                                    </div>
                                    <div class="image-upload-controls">
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        <small class="form-text text-muted">
                                            Recomendado: 800x600px, máximo 2MB. Formatos: JPG, PNG.
                                        </small>
                                        @error('image')
                                            <small class="text-danger d-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', '1') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">Prato ativo para votação</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">
                                <i class="fas fa-undo me-2"></i>Limpar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Salvar Prato
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')
.admin-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.admin-card-header {
    padding: 20px 30px;
    background: var(--ryori-light);
    border-bottom: 1px solid rgba(0,0,0,0.05);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.admin-card-header h2 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--ryori-primary);
    margin-bottom: 0;
}

.admin-card-body {
    padding: 30px;
}

.image-upload-container {
    display: flex;
    gap: 20px;
    align-items: center;
}

.image-preview {
    width: 150px;
    height: 150px;
    border-radius: 10px;
    overflow: hidden;
    border: 2px dashed #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.image-upload-controls {
    flex-grow: 1;
}

.form-check-input:checked {
    background-color: var(--ryori-primary);
    border-color: var(--ryori-primary);
}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image preview
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('preview');
        
        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
</script>
@endsection