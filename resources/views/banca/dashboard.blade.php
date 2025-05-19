<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Banca - IDEASUN</title>
    
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
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
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
        .dashboard-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .card-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
            color: #333;
        }
        
        /* Progress bar */
        .progress-card {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .progress {
            height: 10px;
            border-radius: 5px;
            margin: 15px 0;
        }
        
        .progress-bar {
            background-color: #9c27b0;
        }
        
        /* Lista de equipes */
        .equipes-table {
            width: 100%;
        }
        
        .equipe-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background-color 0.3s;
        }
        
        .equipe-item:hover {
            background-color: #f9f9f9;
        }
        
        .equipe-info {
            flex-grow: 1;
        }
        
        .equipe-nome {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .equipe-cidade {
            font-size: 0.9rem;
            color: #666;
        }
        
        .equipe-modalidade {
            font-size: 0.85rem;
            color: #555;
            display: block;
            margin-top: 3px;
        }
        
        .badge-status {
            padding: 5px 12px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 0.8rem;
        }
        
        .status-avaliado {
            background-color: #28a745;
            color: white;
        }
        
        .status-pendente {
            background-color: #ffc107;
            color: #212529;
        }
        
        .btn-avaliar {
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .summary-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            padding: 25px;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .summary-value {
            font-size: 2.5rem;
            font-weight: 600;
            color: #9c27b0;
            margin-bottom: 10px;
        }
        
        .summary-label {
            font-size: 1rem;
            color: #777;
            margin-bottom: 0;
        }
        
        .no-equipes {
            text-align: center;
            padding: 30px;
        }
        
        .no-equipes i {
            font-size: 3rem;
            color: #ddd;
            margin-bottom: 15px;
        }
        
        .no-equipes p {
            color: #777;
            font-size: 1.1rem;
        }
        
        .empty-state {
            text-align: center;
            padding: 50px 20px;
            background-color: rgba(0,0,0,0.02);
            border-radius: 10px;
        }
        
        .empty-state i {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
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
                        <a class="nav-link active" href="{{ route('banca.dashboard') }}">
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
            <h1>Banca Avaliadora - {{ ucfirst($tipo) }}</h1>
            <p>Avalie as equipes atribuindo notas de 0 a 10 para seus projetos</p>
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
        
        <div class="row">
            <div class="col-md-4">
                <div class="summary-card">
                    <div class="summary-value">{{ count($equipes) }}</div>
                    <p class="summary-label">Total de Equipes</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="summary-card">
                    <div class="summary-value">{{ count($avaliacoes) }}</div>
                    <p class="summary-label">Equipes Avaliadas</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="summary-card">
                    <div class="summary-value">{{ count($equipes) - count($avaliacoes) }}</div>
                    <p class="summary-label">Pendentes de Avaliação</p>
                </div>
            </div>
        </div>
        
        <div class="dashboard-card">
            <div class="card-header">
                <h2>Equipes para Avaliação</h2>
            </div>
            
            @if(count($equipes) > 0)
                <div class="progress-card">
                    <h5>Progresso da Avaliação</h5>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{ count($equipes) > 0 ? (count($avaliacoes) / count($equipes) * 100) : 0 }}%" 
                             aria-valuenow="{{ count($avaliacoes) }}" aria-valuemin="0" aria-valuemax="{{ count($equipes) }}"></div>
                    </div>
                    <p class="mt-2">{{ count($avaliacoes) }} de {{ count($equipes) }} avaliações realizadas</p>
                </div>
                
                <div class="equipes-table">
                    @foreach($equipes as $equipe)
                        <div class="equipe-item">
                            <div class="equipe-info">
                                <div class="equipe-nome">{{ $equipe->nome }}</div>
                                <div class="equipe-cidade">{{ $equipe->cidade->nome }} - {{ $equipe->cidade->estado }}</div>
                                <span class="equipe-modalidade">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</span>
                            </div>
                            
                            @if(in_array($equipe->id, $avaliacoes))
                                <div>
                                    <span class="badge badge-status status-avaliado">Avaliado</span>
                                    <a href="{{ route('banca.avaliar', ['equipe_id' => $equipe->id]) }}" class="btn btn-sm btn-outline-primary ms-2">
                                        <i class="fa fa-eye"></i> Ver Avaliação
                                    </a>
                                </div>
                            @else
                                <div>
                                    <span class="badge badge-status status-pendente">Pendente</span>
                                    <a href="{{ route('banca.avaliar', ['equipe_id' => $equipe->id]) }}" class="btn btn-sm btn-primary ms-2 btn-avaliar">
                                        <i class="fa fa-star"></i> Avaliar
                                    </a>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('banca.avaliar') }}" class="btn btn-primary">
                        <i class="fa fa-play-circle me-2"></i>Iniciar/Continuar Avaliação
                    </a>
                </div>
            @else
                <div class="empty-state">
                    <i class="fa fa-info-circle"></i>
                    <h4>Nenhuma equipe para avaliar</h4>
                    <p class="text-muted">
                        @if($tipo == 'municipal')
                            Não há equipes vinculadas à sua cidade para avaliação. Entre em contato com a organização.
                        @elseif($tipo == 'repescagem')
                            Não há equipes disponíveis para repescagem no momento.
                        @else
                            Não há equipes classificadas para a fase Expoasa ainda.
                        @endif
                    </p>
                </div>
            @endif
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>