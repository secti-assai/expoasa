<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/dishes/index.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Gerenciar Pratos')

@section('content')
<div class="container py-5">
    <div class="admin-toolbar mb-4">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="dishSearch" class="form-control" placeholder="Buscar pratos...">
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('ryori.admin.dishes.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Adicionar Novo Prato
                </a>
                <button class="btn btn-outline-secondary ms-2" id="filterBtn">
                    <i class="fas fa-filter me-2"></i>Filtros
                </button>
            </div>
        </div>
        
        <div class="filter-options mt-3" id="filterOptions" style="display: none;">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <label class="form-label">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">Todos os status</option>
                                <option value="active">Ativos</option>
                                <option value="inactive">Inativos</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 d-flex align-items-end">
                            <button class="btn btn-secondary w-100" id="clearFilters">
                                <i class="fas fa-times me-2"></i>Limpar Filtros
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" width="80">ID</th>
                            <th scope="col" width="100">Imagem</th>
                            <th scope="col">Nome do Prato</th>
                            <th scope="col">Restaurante</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Votos</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="120">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dishes as $dish)
                        <tr data-category="{{ $dish->category ?? '' }}" data-status="{{ $dish->active ? 'active' : 'inactive' }}">
                            <td>{{ $dish->id }}</td>
                            <td>
                                <div class="dish-thumbnail">
                                    @if($dish->image_path)
                                        <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}">
                                    @else
                                        <div class="no-image">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="dish-name">{{ $dish->name }}</div>
                                @if($dish->chef_name)
                                    <small class="text-muted">Chef: {{ $dish->chef_name }}</small>
                                @endif
                            </td>
                            <td>{{ $dish->restaurant_name ?? 'N/A' }}</td>
                            <td>
                                @if($dish->category)
                                    <span class="badge rounded-pill bg-light text-dark">{{ $dish->category }}</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary">Sem categoria</span>
                                @endif
                            </td>
                            <td>
                                <span class="badge bg-primary">{{ $dish->votes_count ?? 0 }}</span>
                            </td>
                            <td>
                                @if($dish->active)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-danger">Inativo</span>
                                @endif
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('ryori.admin.dishes.edit', $dish->id) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('ryori.dishes.show', $dish->id) }}" class="btn btn-sm btn-outline-info" target="_blank">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-5">
                                <div class="empty-state">
                                    <i class="fas fa-utensils fa-3x mb-3"></i>
                                    <h4>Nenhum prato cadastrado</h4>
                                    <p>Comece adicionando pratos ao concurso.</p>
                                    <a href="{{ route('ryori.admin.dishes.create') }}" class="btn btn-primary mt-3">
                                        <i class="fas fa-plus me-2"></i>Adicionar Prato
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')
.admin-toolbar {
    margin-bottom: 30px;
}

.search-box {
    position: relative;
}

.search-box i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa;
}

.search-box input {
    padding-left: 40px;
    border-radius: 30px;
}

.dish-thumbnail {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    overflow: hidden;
    background-color: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
}

.dish-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.no-image {
    color: #ccc;
    font-size: 1.5rem;
}

.dish-name {
    font-weight: 500;
}

.actions {
    display: flex;
    gap: 5px;
}

.filter-options {
    margin-top: 15px;
    transition: all 0.3s ease;
}

.empty-state {
    text-align: center;
    padding: 30px;
    color: #777;
}

.empty-state i {
    color: #ddd;
}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle filters
        const filterBtn = document.getElementById('filterBtn');
        const filterOptions = document.getElementById('filterOptions');
        
        filterBtn.addEventListener('click', function() {
            filterOptions.style.display = filterOptions.style.display === 'none' ? 'block' : 'none';
        });
        
        // Search functionality
        const searchInput = document.getElementById('dishSearch');
        const tableRows = document.querySelectorAll('tbody tr');
        
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const shouldShow = text.includes(searchTerm);
                
                applyFilters(row, shouldShow);
            });
        });
        
        // Status filter
        const statusFilter = document.getElementById('statusFilter');
        statusFilter.addEventListener('change', applyAllFilters);
        
        // Clear filters
        const clearFilters = document.getElementById('clearFilters');
        clearFilters.addEventListener('click', function() {
            searchInput.value = '';
            statusFilter.value = '';
            
            tableRows.forEach(row => {
                row.style.display = '';
            });
        });
        
        // Apply all filters
        function applyAllFilters() {
            const searchTerm = searchInput.value.toLowerCase();
            const statusValue = statusFilter.value;
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const status = row.getAttribute('data-status');
                
                const matchesSearch = searchTerm === '' || text.includes(searchTerm);
                const matchesStatus = statusValue === '' || status === statusValue;
                
                row.style.display = (matchesSearch && matchesStatus) ? '' : 'none';
            });
        }
        
        // Helper function to apply filters while preserving search results
        function applyFilters(row, shouldShow) {
            if (!shouldShow) {
                row.style.display = 'none';
                return;
            }
            
            const status = row.getAttribute('data-status');
            const statusValue = statusFilter.value;
            
            const matchesStatus = statusValue === '' || status === statusValue;
            
            row.style.display = matchesStatus ? '' : 'none';
        }
    });
</script>
@endsection