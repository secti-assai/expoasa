<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados - IDEASUN</title>
    
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
        .resultados-card {
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
        }
        
        .card-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
            color: #333;
        }
        
        /* Tabela de resultados */
        .table-resultados {
            width: 100%;
        }
        
        .table-resultados th {
            background-color: #f8f9fa;
            color: #444;
            font-weight: 600;
            padding: 12px 15px;
            border-top: none;
        }
        
        .table-resultados td {
            padding: 15px;
            vertical-align: middle;
        }
        
        .table-resultados tbody tr {
            border-bottom: 1px solid #eee;
            transition: background-color 0.2s;
        }
        
        .table-resultados tbody tr:hover {
            background-color: #f9f9f9;
        }
        
        /* Nota destaque */
        .nota-highlight {
            font-weight: 700;
            font-size: 1.1rem;
            color: #9c27b0;
        }
        
        /* Badges */
        .modalidade-badge {
            padding: 5px 12px;
            border-radius: 30px;
            font-weight: 500;
            font-size: 0.8rem;
            display: inline-block;
            background-color: #9c27b0;
            color: white;
        }
        
        /* Empty state */
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
                        <a class="nav-link" href="{{ route('banca.dashboard') }}">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('banca.resultados') }}">
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
            <h1>Avaliações Realizadas</h1>
            <p>Visualize todas as avaliações que você realizou na banca {{ ucfirst($tipo) }}</p>
        </div>
    </section>

    <section class="container my-5">
        <div class="resultados-card">
            <div class="card-header">
                <h2>Suas Avaliações</h2>
            </div>
            
            @if(count($avaliacoes) > 0)
                <div class="table-responsive">
                    <table class="table table-resultados">
                        <thead>
                            <tr>
                                <th>Equipe</th>
                                <th>Cidade</th>
                                <th>Modalidade</th>
                                <th>Nota</th>
                                <th>Data da Avaliação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($avaliacoes as $avaliacao)
                                <tr>
                                    <td>{{ $avaliacao->equipe->nome }}</td>
                                    <td>{{ $avaliacao->equipe->cidade->nome }}</td>
                                    <td>
                                        <span class="modalidade-badge">
                                            {{ ucfirst(str_replace('_', ' ', $avaliacao->equipe->modalidade)) }}
                                        </span>
                                    </td>
                                    <td><span class="nota-highlight">{{ number_format($avaliacao->nota, 1) }}</span></td>
                                    <td>{{ $avaliacao->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('banca.avaliar', ['equipe_id' => $avaliacao->equipe_id]) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-eye"></i> Revisar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('banca.dashboard') }}" class="btn btn-primary">
                        <i class="fa fa-th-large me-2"></i>Voltar ao Dashboard
                    </a>
                </div>
            @else
                <div class="empty-state">
                    <i class="fa fa-info-circle"></i>
                    <h4>Nenhuma avaliação realizada</h4>
                    <p class="text-muted">Você ainda não realizou nenhuma avaliação na banca {{ ucfirst($tipo) }}.</p>
                    <a href="{{ route('banca.dashboard') }}" class="btn btn-primary mt-3">
                        <i class="fa fa-star me-2"></i>Começar a Avaliar
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>