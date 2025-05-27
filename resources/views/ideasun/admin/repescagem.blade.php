<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Repescagem - Admin IDEASUN</title>
    
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
        
        .pontuacao {
            font-weight: 700;
            font-size: 1.2rem;
            color: #3f51b5;
        }
        
        .notas-row {
            background-color: #f9f9f9;
        }
        
        .notas-detalhes {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 10px;
            border-left: 4px solid #3f51b5;
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
                    <a href="{{ route('ideasun.admin.dashboard') }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar para Dashboard
                    </a>
                    
                    <h1 class="mb-4">Gerenciamento de Repescagem</h1>
                    
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
                            <h4 class="mb-0"><i class="fa fa-refresh mr-2"></i>Equipes Avaliadas na Repescagem</h4>
                        </div>
                        
                        <p>Esta é a lista de equipes que não foram selecionadas inicialmente para a EXPOASA, mas passaram pela avaliação de repescagem.</p>
                        
                        <div class="btn-group mb-4">
                            <button type="button" class="btn btn-outline-secondary filtro-btn active" data-filtro="todas">Todas</button>
                            <button type="button" class="btn btn-outline-secondary filtro-btn" data-filtro="avaliadas">Avaliadas</button>
                            <button type="button" class="btn btn-outline-secondary filtro-btn" data-filtro="nao-avaliadas">Não Avaliadas</button>
                        </div>
                        
                        <div class="search-box">
                            <i class="fa fa-search"></i>
                            <input type="text" id="searchInput" class="form-control" placeholder="Buscar equipes...">
                        </div>
                        
                        <div class="table-responsive">
                            <table class="data-table" id="repescagemTable">
                                <thead>
                                    <tr>
                                        <th>Equipe</th>
                                        <th>Cidade</th>
                                        <th>Modalidade</th>
                                        <th>Avaliações</th>
                                        <th>Nota Original</th>
                                        <th>Nota Repescagem</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($equipes as $equipe)
                                        <tr class="equipe-row" data-status="{{ $equipe->avaliacoes_count > 0 ? 'avaliada' : 'nao-avaliada' }}">
                                            <td>{{ $equipe->nome }}</td>
                                            <td>{{ $equipe->cidade->nome }}</td>
                                            <td>
                                                <span class="badge {{ getCssClassFromModalidade($equipe->modalidade) }}">
                                                    {{ getModalidadeName($equipe->modalidade) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary">
                                                    {{ $equipe->avaliacoes_count }} avaliações
                                                </span>
                                            </td>
                                            <td>
                                                @if($equipe->nota_media > 0)
                                                    <div class="pontuacao">{{ number_format($equipe->nota_media, 1) }}/100</div>
                                                @else
                                                    <span class="text-muted">Não avaliada</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($equipe->nota_media_repescagem > 0)
                                                    <div class="pontuacao text-primary">{{ number_format($equipe->nota_media_repescagem, 1) }}/100</div>
                                                @else
                                                    <span class="text-muted">Não avaliada</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($equipe->expoasa === true)
                                                    <span class="badge badge-success">Selecionada</span>
                                                @else
                                                    <span class="badge badge-warning">Em avaliação</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($equipe->avaliacoes_count > 0 && $equipe->expoasa === false)
                                                    <form action="{{ route('ideasun.admin.equipe.selecionar-repescagem') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                                        <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Confirma a seleção desta equipe para participar da EXPOASA?')">
                                                            <i class="fa fa-check-circle mr-1"></i>Selecionar
                                                        </button>
                                                    </form>
                                                @elseif($equipe->expoasa === true)
                                                    <button class="btn btn-sm btn-outline-secondary" disabled>
                                                        <i class="fa fa-check mr-1"></i>Selecionada
                                                    </button>
                                                @else
                                                    <button class="btn btn-sm btn-outline-warning" disabled>
                                                        <i class="fa fa-clock-o mr-1"></i>Aguardando
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                        <!-- Linha expandível com detalhes -->
                                        <tr id="detalhes-{{ $equipe->id }}" class="notas-row" style="display: none;">
                                            <td colspan="8" class="bg-light">
                                                <div class="p-3">
                                                    <h5>Detalhes das Avaliações</h5>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6>Notas Originais:</h6>
                                                            <ul>
                                                                <li>A. Criatividade: {{ number_format($equipe->avaliacoes->avg('A_criatividade_inovacao'), 1) }}/25</li>
                                                                <li>B. Apresentação: {{ number_format($equipe->avaliacoes->avg('B_qualidade_apresentacao'), 1) }}/25</li>
                                                                <li>C. Impacto: {{ number_format($equipe->avaliacoes->avg('C_impacto_sociedade'), 1) }}/25</li>
                                                                <li>D. ODS: {{ number_format($equipe->avaliacoes->avg('D_aderencia_ODS'), 1) }}/25</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6>Notas de Repescagem:</h6>
                                                            <ul>
                                                                <li>A. Criatividade: {{ number_format($equipe->avaliacoesRepescagem->avg('A_criatividade_inovacao'), 1) }}/25</li>
                                                                <li>B. Apresentação: {{ number_format($equipe->avaliacoesRepescagem->avg('B_qualidade_apresentacao'), 1) }}/25</li>
                                                                <li>C. Impacto: {{ number_format($equipe->avaliacoesRepescagem->avg('C_impacto_sociedade'), 1) }}/25</li>
                                                                <li>D. ODS: {{ number_format($equipe->avaliacoesRepescagem->avg('D_aderencia_ODS'), 1) }}/25</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                    @if(count($equipe->avaliacoesRepescagem) > 0)
                                                        <h6 class="mt-3">Comentários dos Avaliadores de Repescagem:</h6>
                                                        <div class="comentarios-list">
                                                            @foreach($equipe->avaliacoesRepescagem as $avaliacao)
                                                                @if($avaliacao->comentarios)
                                                                    <div class="card mb-2">
                                                                        <div class="card-body py-2 px-3">
                                                                            <p class="mb-0">{{ $avaliacao->comentarios }}</p>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">
                                                <p class="my-3 text-muted">
                                                    <i class="fa fa-info-circle mr-2"></i>Nenhuma equipe avaliada na repescagem
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
                        <h5><i class="fa fa-lightbulb-o mr-2"></i>Sobre o Processo de Repescagem</h5>
                        <p>O processo de repescagem permite que equipes não selecionadas inicialmente tenham uma segunda chance.</p>
                        <ul>
                            <li>As equipes são avaliadas por avaliadores nível 2 ou do tipo 'repescagem'.</li>
                            <li>Os avaliadores não veem o nome da cidade nem da instituição durante a avaliação.</li>
                            <li>Os critérios de avaliação são os mesmos da banca municipal: Criatividade, Apresentação, Impacto e ODS.</li>
                            <li>As equipes com melhor nota na repescagem podem ser selecionadas para a EXPOASA.</li>
                        </ul>
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
            $('.toggle-detalhes').click(function(e) {
                e.preventDefault();
                const equipeId = $(this).data('equipe');
                $('#detalhes-' + equipeId).toggle();
                
                // Alternar ícone
                if ($(this).find('i').hasClass('fa-plus-circle')) {
                    $(this).find('i').removeClass('fa-plus-circle').addClass('fa-minus-circle');
                    $(this).text(' Ocultar detalhes');
                    $(this).prepend('<i class="fa fa-minus-circle"></i>');
                } else {
                    $(this).find('i').removeClass('fa-minus-circle').addClass('fa-plus-circle');
                    $(this).text(' Ver detalhes');
                    $(this).prepend('<i class="fa fa-plus-circle"></i>');
                }
            });
            
            // Adicionar clique na linha para mostrar detalhes
            $('.equipe-row').click(function(e) {
                if (!$(e.target).closest('button, a, input').length) {
                    const equipeId = $(this).next('.notas-row').attr('id').replace('detalhes-', '');
                    $('#detalhes-' + equipeId).toggle();
                }
            });
            
            // Adicionar busca na tabela
            $("#searchInput").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $("#repescagemTable tbody tr.equipe-row").filter(function() {
                    const visible = $(this).text().toLowerCase().indexOf(value) > -1;
                    $(this).toggle(visible);
                    
                    // Também ocultar a linha de detalhes associada
                    const equipeId = $(this).find('button').data('equipe');
                    if (equipeId && !visible) {
                        $('#detalhes-' + equipeId).hide();
                    }
                });
            });
            
            // Filtrar por status
            $('.filtro-btn').click(function() {
                $('.filtro-btn').removeClass('active');
                $(this).addClass('active');
                
                const filtro = $(this).data('filtro');
                
                if (filtro === 'todas') {
                    $('.equipe-row').show();
                } else {
                    $('.equipe-row').hide();
                    $(`.equipe-row[data-status="${filtro}"]`).show();
                }
                
                // Ocultar linhas de detalhes
                $('.notas-row').hide();
            });
        });
    </script>
</body>
</html>