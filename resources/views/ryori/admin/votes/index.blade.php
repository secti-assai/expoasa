<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/votes/index.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Gerenciar Votos')

@section('content')
<div class="container py-5">
    <div class="admin-card">
        <div class="admin-card-header d-flex justify-content-between align-items-center">
            <h2><i class="fas fa-vote-yea me-2"></i>Votos Registrados</h2>
            <div>
                <a href="{{ route('ryori.admin.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Voltar ao Dashboard
                </a>
            </div>
        </div>
        
        <div class="admin-card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="votesTable">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Participante</th>
                            <th>CPF</th>
                            <th>Prato</th>
                            <th>Data/Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($votes as $vote)
                            <tr>
                                <td>{{ $vote->id }}</td>
                                <td>{{ $vote->participant->name }}</td>
                                <td>{{ $vote->participant->cpf }}</td>
                                <td>{{ $vote->dish->name }}</td>
                                <td>{{ $vote->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    <div class="empty-state">
                                        <i class="fas fa-vote-yea fa-3x mb-3 text-muted"></i>
                                        <h4>Nenhum voto registrado</h4>
                                        <p>Os votos aparecerão aqui quando o público começar a votar.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if(count($votes) > 0)
                <div class="mt-4 d-flex justify-content-between align-items-center">
                    <div>
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            <strong>Total de votos registrados:</strong> {{ count($votes) }}
                        </div>
                    </div>
                    <div>
                        <button id="downloadCsvBtn" class="btn btn-success">
                            <i class="fas fa-file-csv me-1"></i> Exportar CSV
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Adicionar funcionalidade de exportação CSV
        document.getElementById('downloadCsvBtn')?.addEventListener('click', function() {
            const table = document.getElementById('votesTable');
            if (!table) return;
            
            let csv = [];
            let rows = table.querySelectorAll('tr');
            
            for (let i = 0; i < rows.length; i++) {
                let row = [], cols = rows[i].querySelectorAll('td, th');
                
                for (let j = 0; j < cols.length; j++) {
                    // Remover HTML e sanitizar o conteúdo para CSV
                    let data = cols[j].innerText.replace(/(\r\n|\n|\r)/gm, '').replace(/"/g, '""');
                    row.push('"' + data + '"');
                }
                
                csv.push(row.join(','));
            }
            
            // Criar e baixar o arquivo CSV
            const csvString = csv.join('\n');
            const filename = 'votos_ryori_' + new Date().toISOString().slice(0, 10) + '.csv';
            
            const link = document.createElement('a');
            link.style.display = 'none';
            link.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(csvString));
            link.setAttribute('download', filename);
            
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    });
</script>
@endsection