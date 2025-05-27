<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Equipes - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Estilos do card principal */
        .gerenciar-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        .gerenciar-section::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.15;
            z-index: -1;
        }
        
        .gerenciar-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .gerenciar-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #e62b1e;
            border-radius: 15px 15px 0 0;
        }
        
        .gerenciar-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .gerenciar-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .gerenciar-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 20px;
        }
        
        .cidade-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #e62b1e;
        }
        
        .equipe-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .equipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .equipe-id {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e9ecef;
            display: inline-block;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 0.75rem;
            color: #495057;
        }
        
        .equipe-card h5 {
            margin-top: 0;
            margin-bottom: 8px;
            padding-right: 60px; /* Make room for ID tag */
            font-size: 1.1rem;
        }
        
        .equipe-card p {
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #d01c11;
            border-color: #d01c11;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 43, 30, 0.4);
        }
        
        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        /* Improve form layout */
        .equipe-card form {
            display: inline-block;
            margin-left: 5px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .equipe-card {
                padding: 12px;
            }
            
            .equipe-id {
                font-size: 0.7rem;
                padding: 1px 6px;
            }
            
            .btn-sm {
                padding: 0.2rem 0.4rem;
                font-size: 0.8rem;
            }
        }
        
        /* Add a little space between buttons on small screens */
        .mb-2 {
            margin-bottom: 0.5rem !important;
        }
        
        .me-2 {
            margin-right: 0.5rem !important;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="gerenciar-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="gerenciar-card">
                        <div class="gerenciar-header">
                            <h2>Gerenciar Equipes</h2>
                            <p>Crie e gerencie suas equipes para o IDEASUN 2025</p>
                        </div>
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                <i class="fa fa-check-circle mr-2"></i>{{ session('success') }}
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle mr-2"></i>{{ session('error') }}
                            </div>
                        @endif
                        
                        <div class="cidade-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><i class="fa fa-building mr-2"></i>{{ $cidade->nome }} - {{ $cidade->estado }}</h4>
                                    <p><strong>ID da Cidade:</strong> {{ $cidade->cidade_id }}</p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p><strong>Responsável:</strong> {{ $cidade->representante_nome }}</p>
                                    <p><strong>Modalidades disponíveis:</strong> 
                                        @foreach($cidade->modalidades as $modalidade)
                                            <span class="badge bg-secondary">{{ ucfirst(str_replace('_', ' ', $modalidade)) }}</span>
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4><i class="fa fa-users mr-2"></i>Suas Equipes</h4>
                            <a href="{{ route('ideasun.equipe.criar') }}" class="btn btn-primary">
                                <i class="fa fa-plus-circle mr-2"></i>Nova Equipe
                            </a>
                        </div>
                        
                        @if(count($equipes) > 0)
                            <div class="row">
                                @foreach($equipes as $equipe)
                                    <div class="col-md-6">
                                        <div class="equipe-card">
                                            <div class="equipe-id">ID: {{ $equipe->equipe_id }}</div>
                                            <h5>{{ $equipe->nome }}</h5>
                                            <p class="mb-2 text-muted">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</p>
                                            <p class="mb-2"><small><strong>Instituição:</strong> {{ $equipe->instituicao }}</small></p>
                                            
                                            <div class="d-flex flex-wrap mt-2">
                                                <a href="{{ route('ideasun.equipe.membros', ['equipe_id' => $equipe->equipe_id]) }}" class="btn btn-sm btn-outline-primary me-2 mb-2">
                                                    <i class="fa fa-users"></i><span class="d-none d-sm-inline ml-1">Gerenciar</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle mr-2"></i>Você ainda não tem equipes cadastradas. Clique em "Nova Equipe" para começar.
                            </div>
                        @endif
                        
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
</body>
</html>