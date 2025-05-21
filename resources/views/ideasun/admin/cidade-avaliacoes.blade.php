<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações de {{ $cidade->nome }} - Admin IDEASUN</title>
    
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
        }
        
        .section-divider {
            margin: 30px 0;
            border-top: 1px solid #eee;
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
        
        .badge-primary { background-color: #3f51b5; color: #fff; }
        .badge-success { background-color: #4caf50; color: #fff; }
        .badge-warning { background-color: #ff9800; color: #212529; }
        .badge-danger { background-color: #f44336; color: #fff; }
        .badge-info { background-color: #2196f3; color: #fff; }
        .badge-secondary { background-color: #6c757d; color: #fff; }
        
        .bg-primary { background-color: #3f51b5 !important; color: #fff !important; }
        .bg-success { background-color: #4caf50 !important; color: #fff !important; }
        .bg-warning { background-color: #ff9800 !important; color: #212529 !important; }
        .bg-danger { background-color: #f44336 !important; color: #fff !important; }
        .bg-info { background-color: #2196f3 !important; color: #fff !important; }
        
        .nota-media {
            font-size: 1.5rem;
            font-weight: 700;
            color: #3f51b5;
        }
        
        .nota-destaque {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
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
        
        .equipe-card {
            border: 1px solid #eee;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
        }
        
        .equipe-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
        }
        
        .equipe-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
        }
        
        .equipe-body {
            padding: 20px;
        }
        
        .avaliacoes-container {
            margin-top: 20px;
        }
        
        .avaliacoes-header {
            padding: 10px 0;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .avaliacao-item {
            border: 1px solid #eee;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
        }
        
        .avaliacao-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        
        .avaliador-info {
            font-weight: 500;
        }
        
        .avaliacao-criterios {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        
        .criterio {
            flex: 1 0 calc(25% - 15px);
            margin-right: 15px;
            margin-bottom: 10px;
            background: #f8f9fa;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
        }
        
        .criterio-nome {
            font-size: 0.85rem;
            margin-bottom: 5px;
            color: #666;
        }
        
        .criterio-valor {
            font-size: 1.1rem;
            font-weight: 700;
            color: #3f51b5;
        }
        
        .avaliacao-comentario {
            background: #f9f9f9;
            border-left: 3px solid #ddd;
            padding: 10px 15px;
            font-style: italic;
            color: #555;
            margin-top: 10px;
        }
        
        .medalha {
            margin-left: 10px;
            font-size: 1.4rem;
        }
        
        .medalha-ouro { color: #FFD700; }
        .medalha-prata { color: #C0C0C0; }
        .medalha-bronze { color: #CD7F32; }
        
        .finalista-badge {
            background: linear-gradient(135deg, #4CAF50, #8BC34A);
            color: white;
            border: none;
        }
        
        .repescagem-badge {
            background: linear-gradient(135deg, #FF9800, #FFC107);
            color: #212529;
            border: none;
        }
        
        .equipe-status {
            margin-left: 10px;
        }
        
        .ranking-position {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            margin-right: 10px;
        }
        
        .ranking-position.top-1 { background-color: #FFD700; color: #212529; }
        .ranking-position.top-2 { background-color: #C0C0C0; color: #212529; }
        .ranking-position.top-3 { background-color: #CD7F32; color: #fff; }
        
        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            font-weight: 500;
            color: #555;
            padding: 10px 20px;
            margin-right: 5px;
        }
        
        .nav-tabs .nav-link:hover {
            border-color: transparent;
            color: #3f51b5;
        }
        
        .nav-tabs .nav-link.active {
            border-color: #3f51b5;
            color: #3f51b5;
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
        
        .spinner-container {
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100px;
        }
        
        .spinner-border {
          width: 3rem;
          height: 3rem;
          color: #3f51b5;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('ideasun.admin.cidade.detalhes', $cidade->id) }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar para Detalhes da Cidade
                    </a>
                    
                    <h1 class="mb-4">Avaliações das Equipes de {{ $cidade->nome }}</h1>
                    
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
            
            <!-- Estatísticas Gerais -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="admin-card">
                        <div class="card-header bg-primary">
                            <h4 class="mb-0 text-white"><i class="fa fa-pie-chart mr-2"></i>Estatísticas de Avaliação</h4>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h2>{{ count($equipes->flatten()) }}</h2>
                                    <p class="text-muted">Total de Equipes</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h2>{{ count(array_filter($equipes->flatten()->toArray(), function($equipe) { return $equipe['avaliacoes_count'] > 0; })) }}</h2>
                                    <p class="text-muted">Equipes Avaliadas</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h2>{{ count($equipes->flatten()->filter(function($equipe) { return $equipe->expoasa === true; })) }}</h2>
                                    <p class="text-muted">Equipes Finalistas</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h2>{{ count($modalidades) }}</h2>
                                    <p class="text-muted">Modalidades</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fa fa-info-circle mr-2"></i>
                            <strong>Lembrete:</strong> Será selecionada uma equipe finalista por modalidade para participar da EXPOASA.
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navegação por Modalidades -->
            <div class="row">
                <div class="col-12">
                    <div class="admin-card">
                        <ul class="nav nav-tabs" id="modalidadeTabs" role="tablist">
                            @foreach($modalidades as $index => $modalidade)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{ $index == 0 ? 'active' : '' }}" 
                                       id="{{ $modalidade }}-tab" 
                                       data-toggle="tab" 
                                       href="#{{ $modalidade }}" 
                                       role="tab">
                                        {{ getModalidadeNome($modalidade) }}
                                        <span class="badge badge-secondary">{{ count($equipes[$modalidade]) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                        <div class="tab-content mt-4" id="modalidadeTabsContent">
                            @foreach($modalidades as $index => $modalidade)
                                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" 
                                     id="{{ $modalidade }}" 
                                     role="tabpanel">
                                    
                                    <div class="search-box">
                                        <i class="fa fa-search"></i>
                                        <input type="text" class="equipe-search" placeholder="Buscar equipes..." data-modalidade="{{ $modalidade }}">
                                    </div>
                                    
                                    <div class="modalidade-info mb-4">
                                        <h4>{{ getModalidadeNome($modalidade) }}</h4>
                                        <p>Esta cidade possui {{ count($equipes[$modalidade]) }} equipe(s) nesta modalidade.</p>
                                        
                                        @php 
                                            $equipeFinalista = $equipes[$modalidade]->firstWhere('expoasa', true);
                                        @endphp
                                        
                                        @if($equipeFinalista)
                                            <div class="alert alert-success">
                                                <i class="fa fa-trophy mr-2"></i>
                                                <strong>Finalista selecionada:</strong> {{ $equipeFinalista->nome }} (Média: {{ number_format($equipeFinalista->nota_media, 1) }})
                                            </div>
                                        @else
                                            <div class="alert alert-warning">
                                                <i class="fa fa-exclamation-triangle mr-2"></i>
                                                <strong>Atenção:</strong> Nenhuma finalista selecionada para esta modalidade ainda.
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <!-- Lista de Equipes Ordenadas por Nota -->
                                    @php 
                                        $equipesOrdenadas = $equipes[$modalidade]->sortByDesc('nota_media');
                                        $posicao = 1;
                                    @endphp
                                    
                                    @foreach($equipesOrdenadas as $equipe)
                                        <div class="equipe-card {{ $equipe->expoasa === true ? 'nota-destaque' : '' }}" data-equipe-nome="{{ $equipe->nome }}">
                                            <div class="equipe-header">
                                                <div class="equipe-title">
                                                    <div class="ranking-position {{ $posicao <= 3 ? 'top-'.$posicao : '' }}">
                                                        {{ $posicao }}
                                                    </div>
                                                    {{ $equipe->nome }}
                                                    
                                                    @if($equipe->expoasa === true)
                                                        <span class="badge finalista-badge equipe-status">
                                                            <i class="fa fa-trophy mr-1"></i>Finalista EXPOASA
                                                        </span>
                                                    @elseif($equipe->expoasa === false)
                                                        <span class="badge badge-secondary equipe-status">
                                                            Não classificada
                                                        </span>
                                                    @endif
                                                </div>
                                                
                                                <div>
                                                    <span class="nota-media">{{ number_format($equipe->nota_media, 1) }}</span>
                                                    <small class="text-muted">/100</small>
                                                    
                                                    @if($posicao === 1)
                                                        <span class="medalha medalha-ouro" title="Melhor nota">
                                                            <i class="fa fa-medal"></i>
                                                        </span>
                                                    @elseif($posicao === 2)
                                                        <span class="medalha medalha-prata" title="Segunda melhor nota">
                                                            <i class="fa fa-medal"></i>
                                                        </span>
                                                    @elseif($posicao === 3)
                                                        <span class="medalha medalha-bronze" title="Terceira melhor nota">
                                                            <i class="fa fa-medal"></i>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="equipe-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-8">
                                                        <p><strong>Instituição:</strong> {{ $equipe->instituicao }}</p>
                                                        <p><strong>Avaliações recebidas:</strong> {{ $equipe->avaliacoes_count }}</p>
                                                        <p><strong>Cadastrada em:</strong> {{ \Carbon\Carbon::parse($equipe->created_at)->format('d/m/Y') }}</p>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        @if($equipe->expoasa !== true)
                                                            <form action="{{ route('ideasun.admin.equipe.selecionar-finalista') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                                                <input type="hidden" name="cidade_id" value="{{ $cidade->id }}">
                                                                <input type="hidden" name="modalidade" value="{{ $modalidade }}">
                                                                <button type="submit" class="btn btn-success" onclick="return confirm('Confirma a seleção desta equipe como finalista da EXPOASA? Isso removerá qualquer outra finalista selecionada anteriormente nesta modalidade.')">
                                                                    <i class="fa fa-trophy mr-2"></i>Selecionar como Finalista
                                                                </button>
                                                            </form>
                                                        @endif
                                                        
                                                        @if($equipe->expoasa === false)
                                                            <form action="{{ route('ideasun.admin.equipe.repescagem') }}" method="POST" class="mt-2">
                                                                @csrf
                                                                <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                                                <button type="submit" class="btn btn-warning" onclick="return confirm('Confirma a repescagem desta equipe? Isso a habilitará para participar da EXPOASA.')">
                                                                    <i class="fa fa-refresh mr-2"></i>Repescagem
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <div class="avaliacoes-container">
                                                    <div class="avaliacoes-header">
                                                        <h5><i class="fa fa-star mr-2"></i>Avaliações ({{ $equipe->avaliacoes_count }})</h5>
                                                        <button class="btn btn-sm btn-outline-primary toggle-avaliacoes" data-equipe="{{ $equipe->id }}">
                                                            <i class="fa fa-eye mr-1"></i>Mostrar Avaliações
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="avaliacoes-lista" id="avaliacoes-{{ $equipe->id }}" style="display: none;">
                                                        @if($equipe->avaliacoes_count > 0)
                                                            @foreach($equipe->avaliacoes as $avaliacao)
                                                                <div class="avaliacao-item">
                                                                    <div class="avaliacao-header">
                                                                        <div class="avaliador-info">
                                                                            <i class="fa fa-user mr-1"></i>
                                                                            {{ $avaliacao->avaliador->nome }} 
                                                                            <span class="text-muted">({{ $avaliacao->avaliador->cidade->nome }})</span>
                                                                        </div>
                                                                        <div>
                                                                            <span class="badge badge-primary">{{ number_format($avaliacao->nota_total, 1) }}/100</span>
                                                                            <small class="text-muted ml-1">{{ \Carbon\Carbon::parse($avaliacao->created_at)->format('d/m/Y H:i') }}</small>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="avaliacao-criterios">
                                                                        <div class="criterio">
                                                                            <div class="criterio-nome">A. Criatividade</div>
                                                                            <div class="criterio-valor">{{ $avaliacao->A_criatividade_inovacao }}/25</div>
                                                                        </div>
                                                                        <div class="criterio">
                                                                            <div class="criterio-nome">B. Apresentação</div>
                                                                            <div class="criterio-valor">{{ $avaliacao->B_qualidade_apresentacao }}/25</div>
                                                                        </div>
                                                                        <div class="criterio">
                                                                            <div class="criterio-nome">C. Impacto</div>
                                                                            <div class="criterio-valor">{{ $avaliacao->C_impacto_sociedade }}/25</div>
                                                                        </div>
                                                                        <div class="criterio">
                                                                            <div class="criterio-nome">D. ODS</div>
                                                                            <div class="criterio-valor">{{ $avaliacao->D_aderencia_ODS }}/25</div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    @if($avaliacao->comentarios)
                                                                        <div class="avaliacao-comentario">
                                                                            <i class="fa fa-comment-o mr-1"></i>
                                                                            "{{ $avaliacao->comentarios }}"
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="alert alert-warning">
                                                                <i class="fa fa-exclamation-triangle mr-2"></i>
                                                                Esta equipe ainda não recebeu avaliações.
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @php $posicao++; @endphp
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
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
            // Mostrar/ocultar avaliações
            $('.toggle-avaliacoes').click(function() {
                const equipeId = $(this).data('equipe');
                const avaliacoesDiv = $(`#avaliacoes-${equipeId}`);
                
                avaliacoesDiv.slideToggle(300);
                
                if ($(this).html().includes('Mostrar')) {
                    $(this).html('<i class="fa fa-eye-slash mr-1"></i>Ocultar Avaliações');
                } else {
                    $(this).html('<i class="fa fa-eye mr-1"></i>Mostrar Avaliações');
                }
            });
            
            // Busca de equipes dentro de cada tab
            $('.equipe-search').on('keyup', function() {
                const value = $(this).val().toLowerCase();
                const modalidade = $(this).data('modalidade');
                
                $(`#${modalidade} .equipe-card`).filter(function() {
                    $(this).toggle($(this).data('equipe-nome').toLowerCase().indexOf(value) > -1);
                });
            });
            
            // Preservar tab ativa ao recarregar
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                localStorage.setItem('activeModalidadeTab', $(e.target).attr('href'));
            });
            
            const activeTab = localStorage.getItem('activeModalidadeTab');
            if(activeTab && $(activeTab).length) {
                $(`#modalidadeTabs a[href="${activeTab}"]`).tab('show');
            }
        });
    </script>
</body>
</html>