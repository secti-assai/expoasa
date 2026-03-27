<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Concluído - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Regra global para imagens de background */
        [class*="-section"]::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
            z-index: 0;
        }

        /* Garante que o contêiner principal cubra toda a área */
        [class*="-section"] {
            position: relative;
            overflow: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        /* Garante que o conteúdo fique sobre o background */
        [class*="-section"] > .container {
            position: relative;
            z-index: 1;
        }

        .sucesso-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .sucesso-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .sucesso-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .sucesso-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .sucesso-header .check-icon {
            font-size: 5rem;
            color: #28a745;
            display: block;
            margin-bottom: 20px;
        }
        
        .sucesso-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .modalidade-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #e62b1e;
        }
        
        .modalidade-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .modalidade-id {
            background-color: #e9ecef;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-family: monospace;
            letter-spacing: 1px;
        }
        
        .modalidade-tag {
            background-color: #e62b1e;
            color: white;
            display: inline-block;
            padding: 3px 10px;
            border-radius: 50px;
            font-size: 0.8rem;
        }
        
        .treinamento-info {
            background-color: #f8f9fa;
            border-left: 4px solid #17a2b8;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        
        .btn-action {
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="sucesso-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="sucesso-card">
                        <div class="sucesso-header">
                            <i class="fa fa-check-circle check-icon"></i>
                            <h2>Registro Concluído com Sucesso!</h2>
                            <p>Parabéns! Sua cidade está registrada para o IDEASUN 2026. Abaixo estão os detalhes do seu registro.</p>
                        </div>
                        
                        <h4><i class="fa fa-building mr-2"></i>Cidade Registrada</h4>
                        <div class="cidade-info mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Nome:</strong> {{ $cidade->nome }}</p>
                                    <p><strong>Estado:</strong> {{ $cidade->estado }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Representante:</strong> {{ $cidade->representante_nome }}</p>
                                    <p><strong>E-mail:</strong> {{ $cidade->representante_email }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <h4><i class="fa fa-users mr-2"></i>Equipes Registradas</h4>
                        <div class="row mb-4">
                            @foreach($equipes as $equipe)
                                <div class="col-md-6">
                                    <div class="modalidade-card">
                                        <div class="modalidade-title">{{ $equipe->nome }}</div>
                                        <div class="modalidade-id">ID: {{ $equipe->equipe_id }}</div>
                                        <div class="modalidade-tag">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                        @if($cidade->treinamento_agendado)
                            <div class="treinamento-info">
                                <h5><i class="fa fa-calendar-check-o mr-2"></i>Treinamento Agendado</h5>
                                <p>Seu treinamento foi agendado para <strong>{{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('d/m/Y') }}</strong> às <strong>{{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('H:i') }}</strong>.</p>
                            </div>
                        @elseif($cidade->treinamento_requerido)
                            <div class="alert alert-warning">
                                <i class="fa fa-exclamation-triangle mr-2"></i> Você ainda não agendou seu treinamento. Por favor, <a href="{{ route('ideasun.cidade.treinamento') }}">clique aqui</a> para agendar.
                            </div>
                        @endif
                        
                        <div class="text-center mt-5">
                            <a href="{{ route('ideasun.cidade.editar') }}" class="btn btn-secondary btn-action">
                                <i class="fa fa-pencil mr-2"></i>Editar Dados
                            </a>
                            
                            <a href="{{ route('ideasun.materiais') }}" class="btn btn-primary btn-action">
                                <i class="fa fa-file-text-o mr-2"></i>Acessar Materiais
                            </a>
                            
                            <a href="{{ route('ideasun') }}" class="btn btn-info btn-action">
                                <i class="fa fa-home mr-2"></i>Página Inicial
                            </a>
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
</body>
</html>