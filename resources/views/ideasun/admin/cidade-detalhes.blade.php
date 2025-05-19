<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Cidade - Admin IDEASUN</title>
    
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
        
        .details-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .details-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .details-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #343a40;
            margin: 0;
        }
        
        .info-section {
            margin-bottom: 30px;
        }
        
        .info-section h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
            color: #343a40;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 15px;
        }
        
        .info-label {
            width: 200px;
            font-weight: 600;
            color: #555;
        }
        
        .info-value {
            flex-grow: 1;
            color: #333;
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
        
        .equipes-list {
            margin-top: 20px;
        }
        
        .equipe-card {
            background-color: #f9f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            transition: all 0.3s ease;
        }
        
        .equipe-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .equipe-id {
            display: inline-block;
            background-color: #e9ecef;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 5px;
        }
        
        .equipe-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        
        .no-equipes {
            text-align: center;
            padding: 20px;
            background-color: #f9f9fa;
            border-radius: 8px;
            color: #6c757d;
        }
        
        .agenda-card {
            background-color: #f9f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #17a2b8;
        }
        
        .agenda-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        
        .agenda-date {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="details-card">
                        <div class="details-header">
                            <h2 class="details-title">{{ $cidade->nome }} - {{ $cidade->estado }}</h2>
                            
                            <div>
                                <a href="{{ route('ideasun.admin.dashboard') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-arrow-left mr-2"></i>Voltar
                                </a>
                            </div>
                        </div>
                        
                        <!-- Informações da Cidade -->
                        <div class="info-section">
                            <h3><i class="fa fa-building mr-2"></i>Informações Básicas</h3>
                            
                            <div class="info-row">
                                <div class="info-label">ID da Cidade:</div>
                                <div class="info-value">{{ $cidade->cidade_id }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $cidade->nome }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Estado:</div>
                                <div class="info-value">{{ $cidade->estado }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Categoria de Distância:</div>
                                <div class="info-value">{{ $cidade->distancia_categoria }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Modalidades:</div>
                                <div class="info-value">
                                    @foreach($cidade->modalidades as $modalidade)
                                        <span class="badge bg-secondary text-white">
                                            {{ ucfirst(str_replace('_', ' ', $modalidade)) }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Status:</div>
                                <div class="info-value">
                                    @if($cidade->treinamento_agendado)
                                        <span class="badge bg-success text-white">Treinamento Agendado</span>
                                    @elseif($cidade->treinamento_requerido)
                                        <span class="badge bg-warning text-dark">Aguardando Agendamento</span>
                                    @else
                                        <span class="badge bg-info text-white">Cadastro Completo</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informações do Representante -->
                        <div class="info-section">
                            <h3><i class="fa fa-user mr-2"></i>Informações do Representante</h3>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $cidade->representante_nome ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">E-mail:</div>
                                <div class="info-value">{{ $cidade->representante_email ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Telefone:</div>
                                <div class="info-value">{{ $cidade->representante_telefone ?? 'Não informado' }}</div>
                            </div>
                        </div>
                        
                        <!-- Informações do Prefeito (se disponível) -->
                        @if($cidade->prefeito_nome)
                        <div class="info-section">
                            <h3><i class="fa fa-user-circle mr-2"></i>Informações do Prefeito</h3>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $cidade->prefeito_nome }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">E-mail:</div>
                                <div class="info-value">{{ $cidade->prefeito_email ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Telefone:</div>
                                <div class="info-value">{{ $cidade->prefeito_telefone ?? 'Não informado' }}</div>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Informações do Secretário (se disponível) -->
                        @if($cidade->secretario_nome)
                        <div class="info-section">
                            <h3><i class="fa fa-user-circle-o mr-2"></i>Informações do Secretário</h3>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $cidade->secretario_nome }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">E-mail:</div>
                                <div class="info-value">{{ $cidade->secretario_email ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Telefone:</div>
                                <div class="info-value">{{ $cidade->secretario_telefone ?? 'Não informado' }}</div>
                            </div>
                        </div>
                        @endif
                        
                        <!-- Agendamentos -->
                        <div class="info-section">
                            <h3><i class="fa fa-calendar mr-2"></i>Agendamentos</h3>
                            
                            @if($cidade->treinamento_agendado)
                                <div class="agenda-card">
                                    <div class="agenda-title">Treinamento</div>
                                    <div class="agenda-date">
                                        <i class="fa fa-calendar-check-o mr-2"></i>
                                        {{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('d/m/Y') }} às 
                                        {{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('H:i') }}
                                    </div>
                                </div>
                            @else
                                <div class="agenda-card">
                                    <div class="agenda-title">Treinamento</div>
                                    <div class="agenda-date">
                                        <i class="fa fa-calendar-o mr-2"></i>
                                        Não agendado
                                    </div>
                                </div>
                            @endif
                            
                            @if($cidade->banca_agendada)
                                <div class="agenda-card">
                                    <div class="agenda-title">Banca</div>
                                    <div class="agenda-date">
                                        <i class="fa fa-calendar-check-o mr-2"></i>
                                        {{ \Carbon\Carbon::parse($cidade->banca_agendada)->format('d/m/Y') }} às 
                                        {{ \Carbon\Carbon::parse($cidade->banca_agendada)->format('H:i') }}
                                    </div>
                                </div>
                            @else
                                <div class="agenda-card">
                                    <div class="agenda-title">Banca</div>
                                    <div class="agenda-date">
                                        <i class="fa fa-calendar-o mr-2"></i>
                                        Não agendada
                                    </div>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Equipes -->
                        <div class="info-section">
                            <h3><i class="fa fa-users mr-2"></i>Equipes Registradas</h3>
                            
                            <div class="equipes-list">
                                @forelse($cidade->equipes as $equipe)
                                    <div class="equipe-card">
                                        <div class="equipe-id">ID: {{ $equipe->equipe_id }}</div>
                                        <div class="equipe-title">{{ $equipe->nome }}</div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1">
                                                    <span class="badge bg-primary text-white">
                                                        {{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}
                                                    </span>
                                                </p>
                                                <p class="mb-0 text-muted small">{{ $equipe->instituicao }}</p>
                                            </div>
                                            <div class="col-md-6 text-md-right">
                                                <a href="{{ route('ideasun.admin.equipe.detalhes', ['id' => $equipe->equipe_id]) }}" class="btn btn-sm btn-outline-primary">
                                                    <i class="fa fa-eye mr-1"></i>Ver Detalhes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="no-equipes">
                                        <i class="fa fa-info-circle fa-2x mb-3"></i>
                                        <p>Esta cidade ainda não possui equipes registradas.</p>
                                    </div>
                                @endforelse
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
</body>
</html>