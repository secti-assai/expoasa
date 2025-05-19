<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Equipe - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Estilos gerais */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
        }
        
        /* Navbar customizada */
        .navbar-banca {
            background-color: #9c27b0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-banca .nav-link {
            color: rgba(255, 255, 255, 0.8);
            transition: color 0.3s;
            font-weight: 500;
            padding: 1rem 1.5rem;
        }
        
        .navbar-banca .nav-link:hover,
        .navbar-banca .nav-link.active {
            color: #fff;
        }
        
        .navbar-banca .nav-link i {
            margin-right: 6px;
        }
        
        .user-info {
            color: #fff;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .user-info .badge {
            font-size: 0.8rem;
            padding: 0.35rem 0.65rem;
            margin-left: 10px;
        }
        
        .badge-municipal {
            background-color: #28a745;
        }
        
        .badge-repescagem {
            background-color: #ffc107;
            color: #212529;
        }
        
        .badge-expoasa {
            background-color: #9c27b0;
        }
        
        /* Header da página */
        .page-header {
            background: linear-gradient(135deg, #9c27b0, #673ab7);
            padding: 60px 0 30px 0;
            text-align: center;
            color: #fff;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .page-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Cards principais */
        .evaluation-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .card-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
            color: #333;
        }
        
        /* Estilos de equipe */
        .equipe-header {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .equipe-nome {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .equipe-cidade {
            font-size: 1rem;
            color: #666;
            margin-bottom: 5px;
        }
        
        .equipe-modalidade {
            display: inline-block;
            padding: 5px 15px;
            background-color: #9c27b0;
            color: #fff;
            border-radius: 30px;
            font-size: 0.9rem;
            margin-top: 10px;
        }
        
        /* Form de avaliação */
        .form-avaliacao {
            margin-top: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
            color: #444;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: none;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #9c27b0;
            box-shadow: 0 0 0 0.2rem rgba(156, 39, 176, 0.15);
        }
        
        /* Star rating */
        .rating-stars {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        
        .rating-stars input {
            display: none;
        }
        
        .rating-stars label {
            cursor: pointer;
            width: 40px;
            height: 40px;
            margin-right: 5px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3e%3cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z' fill='%23e0e0e0'/%3e%3c/svg%3e");
            transition: background-image 0.3s;
        }
        
        .rating-stars label:hover,
        .rating-stars label:hover ~ label,
        .rating-stars input:checked ~ label {
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3e%3cpath d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z' fill='%239c27b0'/%3e%3c/svg%3e");
        }
        
        /* Nota manual */
        .nota-manual-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        
        .nota-manual-container label {
            margin-right: 15px;
            margin-bottom: 0;
            white-space: nowrap;
        }
        
        .nota-manual {
            width: 80px;
            text-align: center;
            font-weight: 600;
            color: #9c27b0;
        }
        
        /* Buttons */
        .btn-primary {
            background-color: #9c27b0;
            border-color: #9c27b0;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(156, 39, 176, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #7b1fa2;
            border-color: #7b1fa2;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(156, 39, 176, 0.4);
        }
        
        .btn-outline-secondary {
            color: #666;
            background-color: transparent;
            border-color: #ccc;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-outline-secondary:hover {
            background-color: #f5f5f5;
            transform: translateY(-2px);
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        /* Progress bar */
        .progress-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }
        
        .progress {
            height: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
        
        .progress-bar {
            background-color: #9c27b0;
        }
        
        .progress-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Detalhes da equipe */
        .equipe-detalhes {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        .detalhes-section {
            margin-bottom: 25px;
        }
        
        .detalhes-section h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .membro-card {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .membro-card .nome {
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 5px;
        }
        
        .membro-card .cargo {
            font-size: 0.9rem;
            color: #666;
        }
        
        .apresentacao-link {
            display: inline-flex;
            align-items: center;
            padding: 8px 15px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #555;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .apresentacao-link i {
            margin-right: 8px;
            color: #9c27b0;
        }
        
        .apresentacao-link:hover {
            background-color: #f0f0f0;
            border-color: #bbb;
            color: #333;
        }
        
        .carrossel-nav {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-banca fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('banca.dashboard') }}">
                <img src="/assets/img/logo_ideasun.png" alt="IDEASUN" style="height: 40px;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBanca">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarBanca">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('banca.dashboard') }}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('banca.resultados') }}">
                            <i class="fa fa-bar-chart"></i> Resultados
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('banca.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link border-0 bg-transparent">
                                <i class="fa fa-sign-out"></i> Sair
                            </button>
                        </form>
                    </li>
                </ul>
                
                <div class="ms-3 user-info">
                    <span>{{ Session::get('avaliador_nome') }}</span>
                    @php 
                        $tipoBanca = Session::get('avaliador_tipo');
                        $badgeClass = '';
                        
                        if ($tipoBanca == 'municipal') $badgeClass = 'badge-municipal';
                        elseif ($tipoBanca == 'repescagem') $badgeClass = 'badge-repescagem';
                        else $badgeClass = 'badge-expoasa';
                    @endphp
                    <span class="badge {{ $badgeClass }}">{{ ucfirst($tipoBanca) }}</span>
                </div>
            </div>
        </div>
    </nav>

    <section class="page-header">
        <div class="container">
            <h1>Avaliação de Equipe</h1>
            <p>Atribua uma nota de 0 a 10 para o projeto apresentado</p>
            
            <div class="progress-container">
                <div class="progress-info">
                    <span>Progresso: <strong>{{ $progresso['avaliadas'] }}/{{ $progresso['total'] }}</strong> equipes avaliadas</span>
                    <span>Equipe <strong>{{ $progresso['atual'] }}</strong> de <strong>{{ $progresso['total'] }}</strong></span>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: {{ $progresso['percentual'] }}%" 
                         aria-valuenow="{{ $progresso['avaliadas'] }}" aria-valuemin="0" aria-valuemax="{{ $progresso['total'] }}"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container my-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <i class="fa fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                <i class="fa fa-exclamation-circle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        
        <div class="evaluation-card">
            <div class="card-header">
                <h2>{{ $equipe->nome }}</h2>
                <span class="equipe-modalidade">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</span>
            </div>
            
            <div class="equipe-header">
                <div class="equipe-cidade">
                    <i class="fa fa-building me-2"></i> {{ $equipe->cidade->nome }} - {{ $equipe->cidade->estado }}
                </div>
                <div class="equipe-instituicao">
                    <i class="fa fa-university me-2"></i> {{ $equipe->instituicao }}
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="detalhes-section">
                        <h3><i class="fa fa-lightbulb-o me-2"></i>Ideia do Projeto</h3>
                        <p>{{ $equipe->resumo_ideia ?? 'Descrição não disponível' }}</p>
                    </div>
                    
                    <div class="detalhes-section">
                        <h3><i class="fa fa-users me-2"></i>Membros da Equipe</h3>
                        
                        @if(count($equipe->estudantes) > 0)
                            @foreach($equipe->estudantes as $membro)
                                <div class="membro-card">
                                    <div class="nome">{{ $membro->nome }}</div>
                                    @if($membro->responsavel_equipe)
                                        <div class="cargo"><span class="badge bg-success">Responsável</span></div>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">Nenhum membro cadastrado</p>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="detalhes-section">
                        <h3><i class="fa fa-file-powerpoint-o me-2"></i>Apresentação</h3>
                        
                        @if($equipe->apresentacao_path)
                            <a href="{{ asset($equipe->apresentacao_path) }}" target="_blank" class="apresentacao-link">
                                <i class="fa fa-download"></i> Baixar apresentação
                            </a>
                        @else
                            <p class="text-muted">Nenhuma apresentação enviada</p>
                        @endif
                    </div>
                    
                    <div class="form-avaliacao">
                        <h3><i class="fa fa-star me-2"></i>Formulário de Avaliação</h3>
                        
                        <form action="{{ route('banca.salvar-avaliacao', ['equipe_id' => $equipe->id]) }}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="proximo_id" value="{{ $proximoId }}">
                            
                            <div class="form-group">
                                <label for="nota">Nota (0-10):</label>
                                
                                <div class="nota-manual-container">
                                    <label for="nota_manual">Nota:</label>
                                    <input type="number" id="nota_manual" name="nota" min="0" max="10" step="0.1" 
                                           class="form-control nota-manual" value="{{ $avaliacao->nota ?? 0 }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="comentario">Comentários (opcional):</label>
                                <textarea class="form-control" id="comentario" name="comentario" rows="5" 
                                          placeholder="Escreva aqui suas observações sobre o projeto...">{{ $avaliacao->comentario ?? '' }}</textarea>
                            </div>
                            
                            <div class="action-buttons">
                                <div>
                                    @if($anteriorId)
                                        <a href="{{ route('banca.avaliar', ['equipe_id' => $anteriorId]) }}" class="btn btn-outline-secondary">
                                            <i class="fa fa-arrow-left me-2"></i>Equipe Anterior
                                        </a>
                                    @else
                                        <a href="{{ route('banca.dashboard') }}" class="btn btn-outline-secondary">
                                            <i class="fa fa-th-large me-2"></i>Dashboard
                                        </a>
                                    @endif
                                </div>
                                
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        @if($avaliacao)
                                            <i class="fa fa-refresh me-2"></i>Atualizar Avaliação
                                        @else
                                            <i class="fa fa-check me-2"></i>Salvar Avaliação
                                        @endif
                                        
                                        @if($proximoId)
                                            e Avançar
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="carrossel-nav">
                <div>
                    @if($anteriorId)
                        <a href="{{ route('banca.avaliar', ['equipe_id' => $anteriorId]) }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fa fa-arrow-left me-1"></i>Anterior
                        </a>
                    @endif
                </div>
                
                <div class="text-center">
                    <a href="{{ route('banca.dashboard') }}" class="btn btn-sm btn-outline-secondary">
                        <i class="fa fa-th-large me-1"></i>Ver Todas
                    </a>
                </div>
                
                <div>
                    @if($proximoId)
                        <a href="{{ route('banca.avaliar', ['equipe_id' => $proximoId]) }}" class="btn btn-sm btn-outline-secondary">
                            Próxima<i class="fa fa-arrow-right ms-1"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Atualização simultânea entre estrelas e campo numérico
            const notaManual = document.getElementById('nota_manual');
            
            // Validação para garantir que a nota esteja entre 0 e 10
            notaManual.addEventListener('change', function() {
                let value = parseFloat(this.value);
                
                if (isNaN(value)) {
                    this.value = 0;
                } else if (value < 0) {
                    this.value = 0;
                } else if (value > 10) {
                    this.value = 10;
                }
            });
        });
    </script>
</body>
</html>