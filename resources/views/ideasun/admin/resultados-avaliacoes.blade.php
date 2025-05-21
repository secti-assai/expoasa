<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados das Avaliações - Admin IDEASUN</title>
    
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
        }
        
        .card-header {
            margin: -25px -25px 25px -25px;
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
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
        
        .bg-danger {
            background-color: #f44336 !important;
        }
        
        .pontuacao {
            font-weight: 700;
            font-size: 1.2rem;
            color: #3f51b5;
        }
        
        .avaliadores-badge {
            background: #e9ecef;
            color: #495057;
            font-size: 0.9rem;
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
        
        .search-box {
            position: relative;
            margin-bottom: 20px;
        }
        
        .search-box input {
            padding-left: 40px;
            border-radius: 50px;
            border: 1px solid #eee;
            padding: 10px 20px 10px 40px;
            width: 100%;
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }
        
        .notas-detalhes {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 10px;
            border-left: 4px solid #3f51b5;
            font-size: 0.9rem;
        }
        
        .nota-criterio {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        
        .progress {
            height: 8px;
            margin-bottom: 15px;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-bar {
            background-color: #3f51b5;
        }
        
        .equipe-card {
            margin-bottom: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 15px;
            transition: all 0.3s ease;
        }
        
        .equipe-card:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-color: #3f51b5;
        }
        
        .filtro-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .filtro-btn {
            background-color: #f8f9fa;
            border: 1px solid #eee;
            border-radius: 50px;
            padding: 8px 15px;
            font-size: 0.9rem;
            color: #495057;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filtro-btn:hover,
        .filtro-btn.active {
            background-color: #3f51b5;
            border-color: #3f51b5;
            color: #fff;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('ideasun.admin.bancas') }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar para Gerenciamento de Bancas
                    </a>
                    
                    <h1 class="mb-4">Resultados das Avaliações</h1>
                    
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
                            <h4 class="mb-0">
                                <i class="fa fa-bar-chart mr-2"></i>Resultados Consolidados das Avaliações
                            </h4>
                        </div>
                        
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" id="searchEquipes" class="form-control" placeholder="Buscar equipes, cidades ou modalidades...">
                        </div>
                        
                        <div class="filtro-container">
                            <span class="filtro-btn active" data-filtro="todas">Todas</span>
                            <span class="filtro-btn" data-filtro="fundamental_1">Fundamental I</span>
                            <span class="filtro-btn" data-filtro="fundamental_2">Fundamental II</span>
                            <span class="filtro-btn" data-filtro="medio_tecnico">Médio/Técnico</span>
                            <span class="filtro-btn" data-filtro="ensino_superior">Superior</span>
                            <span class="filtro-btn" data-filtro="educacao_especial">Educação Especial</span>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="data-table" id="resultadosTable">
                                <thead>
                                    <tr>
                                        <th>Equipe</th>
                                        <th>Cidade</th>
                                        <th>Modalidade</th>
                                        <th>Avaliações</th>
                                        <th>Pontuação</th>
                                        <th>Status</th>
                                        <th>Detalhes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($equipes->sortByDesc('nota_media') as $equipe)
                                        <tr class="equipe-row" data-modalidade="{{ $equipe->modalidade }}">
                                            <td>{{ $equipe->nome }}</td>
                                            <td>{{ $equipe->cidade->nome }}</td>
                                            <td>
                                                <span class="badge {{ getCssClassFromModalidade($equipe->modalidade) }}">
                                                    {{ getModalidadeName($equipe->modalidade) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge avaliadores-badge">
                                                    {{ $equipe->avaliacoes_count }} avaliações
                                                </span>
                                            </td>
                                            <td>
                                                @if($equipe->avaliacoes_count > 0)
                                                    <div class="pontuacao">{{ number_format($equipe->nota_media, 1) }}/100</div>
                                                @else
                                                    <span class="text-muted">Não avaliada</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($equipe->expoasa === true)
                                                    <span class="badge bg-success">Finalista EXPOASA</span>
                                                @elseif($equipe->expoasa === false)
                                                    <span class="badge bg-secondary">Não selecionada</span>
                                                @else
                                                    <span class="badge bg-warning">Aguardando seleção</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($equipe->avaliacoes_count > 0)
                                                    <button class="btn btn-sm btn-outline-primary toggle-detalhes" data-equipe="{{ $equipe->id }}">
                                                        <i class="fa fa-eye mr-1"></i> Ver Detalhes
                                                    </button>
                                                @else
                                                    <button class="btn btn-sm btn-outline-secondary" disabled>
                                                        <i class="fa fa-eye-slash mr-1"></i> Sem Avaliações
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                        @if($equipe->avaliacoes_count > 0)
                                            <tr class="notas-row" id="detalhes-{{ $equipe->id }}" style="display: none;">
                                                <td colspan="6">
                                                    <div class="notas-detalhes">
                                                        <h5>Médias por Critério</h5>
                                                        <div class="nota-criterio">
                                                            <span>A. Criatividade e Inovação:</span>
                                                            <strong>{{ number_format($equipe->media_A, 1) }}/25</strong>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: {{ ($equipe->media_A / 25) * 100 }}%"></div>
                                                        </div>
                                                        
                                                        <div class="nota-criterio">
                                                            <span>B. Qualidade da Apresentação:</span>
                                                            <strong>{{ number_format($equipe->media_B, 1) }}/25</strong>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: {{ ($equipe->media_B / 25) * 100 }}%"></div>
                                                        </div>
                                                        
                                                        <div class="nota-criterio">
                                                            <span>C. Impacto na Sociedade:</span>
                                                            <strong>{{ number_format($equipe->media_C, 1) }}/25</strong>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: {{ ($equipe->media_C / 25) * 100 }}%"></div>
                                                        </div>
                                                        
                                                        <div class="nota-criterio">
                                                            <span>D. Aderência aos ODS:</span>
                                                            <strong>{{ number_format($equipe->media_D, 1) }}/25</strong>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" style="width: {{ ($equipe->media_D / 25) * 100 }}%"></div>
                                                        </div>
                                                        
                                                        <div class="mt-3">
                                                            <h6>Avaliadores ({{ $equipe->avaliacoes_count }})</h6>
                                                            <ul>
                                                                @foreach($equipe->avaliacoes as $avaliacao)
                                                                    <li>
                                                                        {{ $avaliacao->avaliador->nome }} 
                                                                        <small class="text-muted">({{ $avaliacao->avaliador->cidade->nome }})</small> -
                                                                        <strong>{{ $avaliacao->nota_total }}/100</strong>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <p class="my-3 text-muted">
                                                    <i class="fa fa-info-circle mr-2"></i>Nenhuma avaliação registrada
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
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <h5><i class="fa fa-lightbulb-o mr-2"></i>Sobre as Avaliações</h5>
                        <p>A pontuação final é calculada como a média de todas as avaliações recebidas por cada equipe.</p>
                        <p>Cada avaliação atribui de 0 a 25 pontos para cada um dos critérios:</p>
                        <ul>
                            <li>A. Criatividade e Inovação (0-25 pontos)</li>
                            <li>B. Qualidade da Apresentação (0-25 pontos)</li>
                            <li>C. Impacto da Ideia na Sociedade (0-25 pontos)</li>
                            <li>D. Aderência da Ideia aos ODS (0-25 pontos)</li>
                        </ul>
                        <p class="mb-0">A pontuação total pode variar de 0 a 100 pontos por avaliador.</p>
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
            // Mostrar/ocultar detalhes da avaliação
            $('.toggle-detalhes').click(function() {
                const equipeId = $(this).data('equipe');
                $('#detalhes-' + equipeId).toggle();
                
                // Alternar texto e ícone do botão
                if ($(this).find('i').hasClass('fa-eye')) {
                    $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                    $(this).html('<i class="fa fa-eye-slash mr-1"></i> Ocultar Detalhes');
                } else {
                    $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                    $(this).html('<i class="fa fa-eye mr-1"></i> Ver Detalhes');
                }
            });
            
            // Busca nas tabelas
            $("#searchEquipes").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $("#resultadosTable tbody tr.equipe-row").filter(function() {
                    const visible = $(this).text().toLowerCase().indexOf(value) > -1;
                    $(this).toggle(visible);
                    
                    // Também ocultar a linha de detalhes associada se estiver visível
                    const equipeId = $(this).find('.toggle-detalhes').data('equipe');
                    if (equipeId && !visible) {
                        $('#detalhes-' + equipeId).hide();
                    }
                });
            });
            
            // Filtrar por modalidade
            $('.filtro-btn').click(function() {
                $('.filtro-btn').removeClass('active');
                $(this).addClass('active');
                
                const filtro = $(this).data('filtro');
                
                if (filtro === 'todas') {
                    $('.equipe-row').show();
                } else {
                    $('.equipe-row').hide();
                    $('.equipe-row[data-modalidade="' + filtro + '"]').show();
                    
                    // Ocultar todas as linhas de detalhes
                    $('.notas-row').hide();
                }
            });
        });
    </script>
    
    @php
    function getModalidadeName($modalidade) {
        $nomes = [
            'educacao_especial' => 'Educação Especial',
            'fundamental_1' => 'Fundamental I',
            'fundamental_2' => 'Fundamental II',
            'medio_tecnico' => 'Médio/Técnico',
            'ensino_superior' => 'Superior',
        ];
        
        return $nomes[$modalidade] ?? ucfirst(str_replace('_', ' ', $modalidade));
    }
    
    function getCssClassFromModalidade($modalidade) {
        $classes = [
            'educacao_especial' => 'bg-warning',
            'fundamental_1' => 'bg-info',
            'fundamental_2' => 'bg-primary',
            'medio_tecnico' => 'bg-success',
            'ensino_superior' => 'bg-danger',
        ];
        
        return $classes[$modalidade] ?? 'bg-secondary';
    }
    @endphp
</body>
</html>