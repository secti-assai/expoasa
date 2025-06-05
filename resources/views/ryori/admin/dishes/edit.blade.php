<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/dishes/edit.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Editar Prato')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="admin-card">
                <div class="admin-card-header">
                    <h2><i class="fas fa-edit me-2"></i>Editar Prato</h2>
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
                    
                    <form action="{{ route('ryori.admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nome do Prato <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $dish->name) }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="description" class="form-label">Descrição <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $dish->description) }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <label for="category" class="form-label">Categoria <span class="text-danger">*</span></label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="Concurso RYORI 2025">Concurso RYORI 2025</option>
                                    </select>
                                    @error('category')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="restaurant_name" class="form-label">Nome do Restaurante <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="restaurant_name" name="restaurant_name" value="{{ old('restaurant_name', $dish->restaurant_name) }}" required>
                                    @error('restaurant_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="chef_name" class="form-label">Nome do Chef</label>
                                    <input type="text" class="form-control" id="chef_name" name="chef_name" value="{{ old('chef_name', $dish->chef_name) }}">
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
                                        <img id="preview" src="{{ $dish->image_path ? $dish->image_path : '/assets/img/dish-placeholder.jpg' }}" alt="Preview">
                                    </div>
                                    <div class="image-upload-controls">
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        <small class="form-text text-muted">
                                            Recomendado: 800x600px, máximo 2MB. Formatos: JPG, PNG.
                                        </small>
                                        @if($dish->image_path)
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" id="remove_image" name="remove_image" value="1">
                                                <label class="form-check-label" for="remove_image">
                                                    Remover imagem atual
                                                </label>
                                            </div>
                                        @endif
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
                                    <input class="form-check-input" type="checkbox" id="active" name="active" value="1" {{ old('active', $dish->active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="active">Prato ativo para votação</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="fas fa-trash-alt me-2"></i>Excluir Prato
                            </button>
                            
                            <div>
                                <button type="reset" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-undo me-2"></i>Restaurar
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Salvar Alterações
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmação para Excluir -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir o prato <strong>"{{ $dish->name }}"</strong>?</p>
                <p class="text-danger"><i class="fas fa-exclamation-triangle me-2"></i>Esta ação não pode ser desfeita e todos os votos associados a este prato serão perdidos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('ryori.admin.dishes.destroy', $dish->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
                </form>
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
        const removeImage = document.getElementById('remove_image');
        
        imageInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    if (removeImage) {
                        removeImage.checked = false;
                    }
                }
                
                reader.readAsDataURL(this.files[0]);
            }
        });
        
        // Handle remove image checkbox
        if (removeImage) {
            removeImage.addEventListener('change', function() {
                if (this.checked) {
                    imagePreview.src = '/assets/img/dish-placeholder.jpg';
                    imageInput.value = '';
                } else {
                    // Restore original image if available
                    const originalImage = '{{ $dish->image_path }}';
                    if (originalImage) {
                        imagePreview.src = originalImage;
                    }
                }
            });
        }
    });
</script>
@endsection