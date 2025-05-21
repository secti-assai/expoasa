<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Bancas - Admin IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        .admin-section {
            min-height: 100vh;
            background: #f8f9fa;
            padding-top: 90px;
            padding-bottom: 40px;
        }
        
        .admin-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .card-header {
            margin: -25px -25px 25px -25px;
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .data-table th {
            background-color: #f8f9fa;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            color: #555;
            border-bottom: 2px solid #eee;
        }
        
        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #333;
            vertical-align: middle;
        }
        
        .data-table tr:hover {
            background-color: #f9f9f9;
        }
        
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.75rem;
            margin-right: 5px;
            margin-bottom: 5px;
            display: inline-block;
        }
        
        .bg-primary {
            background-color: #3f51b5 !important;
            color: #fff;
        }
        
        .bg-info {
            background-color: #2196f3 !important;
        }
        
        .bg-success {
            background-color: #4caf50 !important;
        }
        
        .bg-warning {
            background-color: #ff9800 !important;
            color: #212529 !important;
        }
        
        .btn-primary {
            background-color: #3f51b5;
            border-color: #3f51b5;
        }
        
        .btn-primary:hover {
            background-color: #303f9f;
            border-color: #303f9f;
        }
        
        .btn-sm {
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        
        .progress {
            height: 8px;
            margin-top: 5px;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .vinculos-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #3f51b5;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            color: #6c757d;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .back-btn:hover {
            color: #3f51b5;
            text-decoration: none;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('ideasun.admin.dashboard') }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar ao Dashboard
                    </a>
                    
                    <h1 class="mb-4">Gerenciamento de Bancas Avaliadoras</h1>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fa fa-check-circle mr-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            <i class="fa fa-exclamation-triangle mr-2"></i>{{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="admin-card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fa fa-check-square-o mr-2"></i>Cidades com Bancas Disponíveis</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="data-table" id="bancasTable">
                                <thead>
                                    <tr>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Avaliadores</th>
                                        <th>Banca Agendada</th>
                                        <th>Avaliando</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($cidadesComBanca as $cidade)
                                        <tr>
                                            <td>{{ $cidade->nome }}</td>
                                            <td>{{ $cidade->estado }}</td>
                                            <td>
                                                <span class="badge bg-info">{{ $cidade->avaliadores_count }} avaliadores</span>
                                            </td>
                                            <td>
                                                @if($cidade->banca_agendada)
                                                    {{ \Carbon\Carbon::parse($cidade->banca_agendada)->format('d/m/Y H:i') }}
                                                @else
                                                    <span class="text-warning">Sem agenda</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($cidade->cidadesAvaliadas->count() > 0)
                                                    <ul class="mb-0 list-unstyled">
                                                        @foreach($cidade->cidadesAvaliadas as $vinculo)
                                                            <li>
                                                                <span class="badge bg-primary">
                                                                    {{ $vinculo->cidadeAvaliada->nome }}
                                                                </span>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <span class="text-muted">Nenhuma cidade vinculada</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('ideasun.admin.bancas.vincular', $cidade->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-link mr-1"></i> Gerenciar Vinculações
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p class="my-3 text-muted">
                                                    <i class="fa fa-info-circle mr-2"></i>Não há cidades com bancas cadastradas
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="admin-card">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0"><i class="fa fa-list-alt mr-2"></i>Todas as Vinculações Ativas</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="data-table" id="vinculosTable">
                                <thead>
                                    <tr>
                                        <th>Banca Avaliadora</th>
                                        <th>Cidade Avaliada</th>
                                        <th>Equipes a Avaliar</th>
                                        <th>Avaliações Realizadas</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($vinculos as $vinculo)
                                        <tr>
                                            <td>
                                                <strong>{{ $vinculo->bancaCidade->nome }}</strong>
                                                <span class="d-block small text-muted">{{ $vinculo->bancaCidade->avaliadores()->count() }} avaliadores</span>
                                            </td>
                                            <td>
                                                <strong>{{ $vinculo->cidadeAvaliada->nome }}</strong>
                                                <span class="d-block small text-muted">{{ $vinculo->cidadeAvaliada->estado }}</span>
                                            </td>
                                            <td>
                                                @php
                                                    $totalEquipes = $vinculo->cidadeAvaliada->equipes->count();
                                                @endphp
                                                {{ $totalEquipes }} equipes
                                            </td>
                                            <td>
                                                @php
                                                    $equipeIds = $vinculo->cidadeAvaliada->equipes->pluck('id');
                                                    $avaliacoes = \App\Models\Avaliador::where('cidade_id', $vinculo->banca_cidade_id)
                                                                ->join('avaliacoes', 'avaliadores.id', '=', 'avaliacoes.avaliador_id')
                                                                ->whereIn('avaliacoes.equipe_id', $equipeIds)
                                                                ->count();
                                                    
                                                    $percentual = $totalEquipes > 0 ? round(($avaliacoes / ($totalEquipes * $vinculo->bancaCidade->avaliadores()->count())) * 100) : 0;
                                                @endphp
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $percentual }}%" 
                                                         aria-valuenow="{{ $percentual }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <small class="text-muted">{{ $avaliacoes }} avaliações realizadas ({{ $percentual }}%)</small>
                                            </td>
                                            <td>
                                                <form action="{{ route('ideasun.admin.bancas.remover-vinculo', $vinculo->id) }}" 
                                                      method="POST" 
                                                      onsubmit="return confirm('Tem certeza que deseja remover esta vinculação? As avaliações já realizadas não serão afetadas.')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-unlink mr-1"></i> Remover Vínculo
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <p class="my-3 text-muted">
                                                    <i class="fa fa-info-circle mr-2"></i>Nenhuma vinculação de banca registrada
                                                </p>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <h5><i class="fa fa-lightbulb-o mr-2"></i>Como funcionam as vinculações de banca?</h5>
                        <p>Cada cidade com avaliadores cadastrados pode ser designada para avaliar outras cidades. Ao vincular uma banca a uma cidade:</p>
                        <ul>
                            <li>Os avaliadores da banca terão acesso para avaliar todas as equipes da cidade designada.</li>
                            <li>Uma banca pode avaliar múltiplas cidades, e uma cidade pode ser avaliada por múltiplas bancas.</li>
                            <li>A nota final de uma equipe é calculada como a média de todas as avaliações recebidas.</li>
                        </ul>
                        <p class="mb-0">Use a página de <a href="{{ route('ideasun.admin.bancas.resultados') }}" class="alert-link">Resultados das Avaliações</a> para ver as notas consolidadas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('ideasun.partials.footer')

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Adicionar busca nas tabelas
            $("#searchInput").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $(".data-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>