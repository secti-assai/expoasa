<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/dishes/index.blade.php -->
@extends('ryori.admin.layouts.admin')

@section('title', 'Gerenciar Pratos')

@section('content')
    <div class="mb-4">
        <a href="{{ route('ryori.admin.dishes.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Novo Prato
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Nome</th>
                            <th>Votos</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($dishes as $dish)
                            <tr>
                                <td>{{ $dish->id }}</td>
                                <td>
                                    @if($dish->image_path)
                                        <img src="{{ $dish->image_path }}" width="50" height="50" alt="{{ $dish->name }}">
                                    @else
                                        <span class="text-muted">Sem imagem</span>
                                    @endif
                                </td>
                                <td>{{ $dish->name }}</td>
                                <td><span class="badge bg-primary">{{ $dish->votes_count }}</span></td>
                                <td>
                                    @if($dish->active)
                                        <span class="badge bg-success">Ativo</span>
                                    @else
                                        <span class="badge bg-secondary">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('ryori.admin.dishes.edit', $dish->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('ryori.admin.dishes.destroy', $dish->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este prato?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Nenhum prato cadastrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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