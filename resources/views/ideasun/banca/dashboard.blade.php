<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard da Banca - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.1;
        }
        
        .dashboard-section {
            padding: 60px 0;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .dashboard-header {
            background: #f8f9fa;
            border-radius: 10px 10px 0 0;
            padding: 15px 30px;
            margin: -30px -30px 30px;
            border-bottom: 1px solid #eee;
        }
        
        .dashboard-header h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #3f51b5;
            margin-bottom: 0;
        }
        
        .avaliador-info {
            background: #f0f8ff;
            border-left: 4px solid #3f51b5;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .badge {
            font-size: 0.9rem;
            padding: 8px 12px;
        }
        
        .equipe-card {
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            background: #fff;
        }
        
        .equipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            border-color: #3f51b5;
        }
        
        .btn-avaliar {
            background: #3f51b5;
            color: white;
        }
        
        .btn-avaliar:hover {
            background: #303f9f;
            color: white;
        }
        
        .stats-box {
            background: #f5f5f5;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .stats-box h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0;
            color: #3f51b5;
        }
        
        .nav-tabs {
            border-bottom: 2px solid #3f51b5;
        }
        
        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            font-weight: 500;
        }
        
        .nav-tabs .nav-link.active {
            color: #3f51b5;
            background-color: transparent;
            border-bottom: 3px solid #3f51b5;
        }
        
        .table {
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table thead {
            background: #3f51b5;
            color: white;
        }
        
        .modalidade-badge {
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 12px;
        }
        
        .modalidade-educacao_especial { background-color: #ff9800; }
        .modalidade-fundamental_1 { background-color: #4caf50; }
        .modalidade-fundamental_2 { background-color: #2196f3; }
        .modalidade-medio_tecnico { background-color: #9c27b0; }
        .modalidade-superior { background-color: #f44336; }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-card">
                        <div class="dashboard-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2><i class="fa fa-star mr-2"></i>Dashboard da Banca</h2>
                                <div>
                                    <a href="{{ route('ideasun.banca.logout') }}" class="btn btn-outline-danger">
                                        <i class="fa fa-sign-out mr-2"></i>Sair
                                    </a>
                                </div>
                            </div>
                        </div>
                        
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
                        
                        @if(session('info'))
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle mr-2"></i>{{ session('info') }}
                            </div>
                        @endif
                        
                        <div class="avaliador-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><i class="fa fa-user mr-2"></i>Avaliador</h5>
                                    <p class="mb-0">
                                        <strong>Nome:</strong> {{ $avaliador->nome }}<br>
                                        <strong>Cidade:</strong> {{ $cidade->nome }}<br>
                                        <strong>Nível:</strong> 
                                        <span class="badge badge-primary">
                                            @if($avaliador->nivel == 1)
                                                Avaliador Municipal
                                            @elseif($avaliador->nivel == 2)
                                                Avaliador Regional
                                            @else
                                                Avaliador Master
                                            @endif
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="stats-box text-center">
                                                <h3 id="avaliacoes-realizadas">0</h3>
                                                <p class="mb-0">Avaliações Realizadas</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="stats-box text-center">
                                                <h3 id="equipes-pendentes">0</h3>
                                                <p class="mb-0">Equipes Pendentes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navegação em Abas -->
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="avaliar-tab" data-toggle="tab" href="#avaliar" role="tab">
                                    <i class="fa fa-check-circle mr-2"></i>Avaliar Equipes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="resultados-tab" data-toggle="tab" href="#resultados" role="tab">
                                    <i class="fa fa-list-alt mr-2"></i>Minhas Avaliações
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="instrucoes-tab" data-toggle="tab" href="#instrucoes" role="tab">
                                    <i class="fa fa-info-circle mr-2"></i>Instruções
                                </a>
                            </li>
                        </ul>
                        
                        <!-- Conteúdo das Abas -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Aba de Avaliar Equipes -->
                            <div class="tab-pane fade show active" id="avaliar" role="tabpanel">
                                <h4 class="mb-3">Equipes para Avaliar</h4>
                                
                                <div class="alert alert-info">
                                    <i class="fa fa-info-circle mr-2"></i>
                                    <strong>Importante:</strong> Você deve avaliar equipes de outras cidades, nunca da sua própria cidade.
                                </div>
                                
                                <div class="row equipes-container">
                                    <!-- Lista de Equipes para Avaliar -->
                                    @if($cidadesParaAvaliar->count() > 0)
                                        @foreach($cidadesParaAvaliar as $cidadeAvaliar)
                                            @foreach($cidadeAvaliar->equipes as $equipe)
                                            <div class="col-md-6">
                                                <div class="equipe-card">
                                                    <h5>{{ $equipe->nome }}</h5>
                                                    <p>
                                                        <span class="badge modalidade-badge modalidade-{{ $equipe->modalidade }}">
                                                            {{ 
                                                                [
                                                                    'educacao_especial' => 'Educação Especial',
                                                                    'fundamental_1' => 'Fundamental I',
                                                                    'fundamental_2' => 'Fundamental II',
                                                                    'medio_tecnico' => 'Médio/Técnico',
                                                                    'superior' => 'Superior'
                                                                ][$equipe->modalidade] ?? ucfirst(str_replace('_', ' ', $equipe->modalidade)) 
                                                            }}
                                                        </span>
                                                        <span class="badge badge-secondary">{{ $cidadeAvaliar->nome }}</span>
                                                    </p>
                                                    <p class="text-muted small">{{ Str::limit($equipe->resumo_ideia ?? 'Sem descrição disponível', 100) }}</p>
                                                    <div class="text-right">
                                                        <a href="{{ route('ideasun.banca.avaliar', ['equipe_id' => $equipe->id]) }}" class="btn btn-sm btn-avaliar">
                                                            <i class="fa fa-star mr-2"></i>Avaliar Projeto
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <div class="alert alert-warning">
                                                <i class="fa fa-exclamation-triangle mr-2"></i>
                                                Não há equipes disponíveis para avaliação no momento.
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                
                                @foreach($cidadesParaAvaliar as $cidade)
                                    <h4>{{ $cidade->nome }}</h4>
                                    <ul>
                                        @foreach($cidade->equipes as $equipe)
                                            <li>
                                                {{ $equipe->nome }}
                                                @if($equipe->ja_avaliada)
                                                    <span class="badge badge-success">Avaliada</span>
                                                @else
                                                    <a href="{{ route('ideasun.banca.avaliar', ['equipe_id' => $equipe->id]) }}" class="btn btn-sm btn-primary">
                                                        Avaliar
                                                    </a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endforeach
                            </div>
                            
                            <!-- Aba de Resultados -->
                            <div class="tab-pane fade" id="resultados" role="tabpanel">
                                <h4 class="mb-4">Minhas Avaliações</h4>
                                
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Equipe</th>
                                                <th>Cidade</th>
                                                <th>Modalidade</th>
                                                <th>Nota Total</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>
                                        <tbody id="avaliacoes-table">
                                            <!-- Será preenchido via AJAX -->
                                            <tr>
                                                <td colspan="5" class="text-center">Carregando avaliações...</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Aba de Instruções -->
                            <div class="tab-pane fade" id="instrucoes" role="tabpanel">
                                <h4 class="mb-4">Instruções para Avaliadores</h4>
                                
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Critérios de Avaliação</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>Cada projeto deve ser avaliado em três critérios principais:</p>
                                        
                                        <ol>
                                            <li>
                                                <strong>Criatividade e Inovação (1-10)</strong>
                                                <p>Avalie o quanto o projeto é original, inovador e criativo na sua abordagem e solução.</p>
                                            </li>
                                            <li>
                                                <strong>Qualidade da Apresentação (1-10)</strong>
                                                <p>Avalie a clareza, organização e qualidade da apresentação do projeto.</p>
                                            </li>
                                            <li>
                                                <strong>Viabilidade e Impacto (1-10)</strong>
                                                <p>Avalie se o projeto é viável tecnicamente e qual seu potencial de impacto social ou ambiental.</p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Processo de Avaliação</h5>
                                    </div>
                                    <div class="card-body">
                                        <ol>
                                            <li>Clique no botão "Avaliar Projeto" para iniciar a avaliação de uma equipe.</li>
                                            <li>Leia atentamente a descrição do projeto e assista/veja a apresentação.</li>
                                            <li>Atribua notas de 1 a 10 para cada critério de avaliação.</li>
                                            <li>Deixe comentários construtivos e específicos para o projeto.</li>
                                            <li>Clique em "Enviar Avaliação" para finalizar.</li>
                                        </ol>
                                        
                                        <div class="alert alert-warning">
                                            <i class="fa fa-exclamation-triangle mr-2"></i>
                                            <strong>Atenção:</strong> Uma vez enviada, sua avaliação não poderá ser alterada.
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            // Carregar avaliações realizadas
            $.ajax({
                url: "{{ route('ideasun.banca.resultados') }}",
                type: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.avaliacoes && response.avaliacoes.length > 0) {
                        let html = '';
                        
                        response.avaliacoes.forEach(function(avaliacao) {
                            html += `
                                <tr>
                                    <td>${avaliacao.equipe_nome}</td>
                                    <td>${avaliacao.cidade_nome}</td>
                                    <td>
                                        <span class="badge modalidade-badge modalidade-${avaliacao.modalidade}">
                                            ${getModalidadeNome(avaliacao.modalidade)}
                                        </span>
                                    </td>
                                    <td><strong>${avaliacao.nota_total}/30</strong></td>
                                    <td>${formatDate(avaliacao.created_at)}</td>
                                </tr>
                            `;
                        });
                        
                        $('#avaliacoes-table').html(html);
                        $('#avaliacoes-realizadas').text(response.avaliacoes.length);
                    } else {
                        $('#avaliacoes-table').html('<tr><td colspan="5" class="text-center">Você ainda não realizou nenhuma avaliação.</td></tr>');
                    }
                    
                    // Atualizar contadores
                    $('#equipes-pendentes').text(response.equipesPendentes);
                }
            });
            
            // Funções auxiliares
            function getModalidadeNome(modalidade) {
                const modalidades = {
                    'educacao_especial': 'Educação Especial',
                    'fundamental_1': 'Fundamental I',
                    'fundamental_2': 'Fundamental II',
                    'medio_tecnico': 'Médio/Técnico',
                    'superior': 'Superior'
                };
                
                return modalidades[modalidade] || modalidade;
            }
            
            function formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleDateString('pt-BR');
            }
        });
    </script>
</body>
</html>