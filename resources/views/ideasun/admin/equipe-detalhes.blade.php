<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Equipe - Admin IDEASUN</title>
    
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
        
        .estudante-card {
            background-color: #f9f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #17a2b8;
            transition: all 0.3s ease;
        }
        
        .estudante-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .estudante-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }
        
        .estudante-info {
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .no-estudantes {
            text-align: center;
            padding: 20px;
            background-color: #f9f9fa;
            border-radius: 8px;
            color: #6c757d;
        }
        
        .presentation-card {
            background-color: #f9f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #e62b1e;
        }
        
        .presentation-status {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-confirmed {
            background-color: #d4edda;
            color: #155724;
        }
        
        .presentation-actions {
            margin-top: 15px;
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
                            <h2 class="details-title">{{ $equipe->nome }}</h2>
                            
                            <div>
                                <a href="{{ route('ideasun.admin.dashboard') }}" class="btn btn-secondary btn-sm mr-2">
                                    <i class="fa fa-arrow-left mr-2"></i>Voltar para Dashboard
                                </a>
                                <a href="{{ route('ideasun.admin.cidade.detalhes', ['id' => $equipe->cidade->id]) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-building mr-2"></i>Ver Cidade
                                </a>
                            </div>
                        </div>
                        
                        <!-- Informações da Equipe -->
                        <div class="info-section">
                            <h3><i class="fa fa-users mr-2"></i>Informações Básicas</h3>
                            
                            <div class="info-row">
                                <div class="info-label">ID da Equipe:</div>
                                <div class="info-value">{{ $equipe->equipe_id }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $equipe->nome }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Cidade:</div>
                                <div class="info-value">
                                    <a href="{{ route('ideasun.admin.cidade.detalhes', ['id' => $equipe->cidade->id]) }}">
                                        {{ $equipe->cidade->nome }} ({{ $equipe->cidade->cidade_id }})
                                    </a>
                                </div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Modalidade:</div>
                                <div class="info-value">
                                    <span class="badge bg-primary text-white">
                                        {{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}
                                    </span>
                                </div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Instituição:</div>
                                <div class="info-value">{{ $equipe->instituicao }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Data de Registro:</div>
                                <div class="info-value">{{ $equipe->created_at->format('d/m/Y H:i') }}</div>
                            </div>
                        </div>
                        
                        <!-- Informações do Responsável -->
                        <div class="info-section">
                            <h3><i class="fa fa-user-circle mr-2"></i>Responsável pela Equipe</h3>
                            
                            <div class="info-row">
                                <div class="info-label">Nome:</div>
                                <div class="info-value">{{ $equipe->responsavel_nome }}</div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">E-mail:</div>
                                <div class="info-value">
                                    <a href="mailto:{{ $equipe->responsavel_email }}">{{ $equipe->responsavel_email }}</a>
                                </div>
                            </div>
                            
                            <div class="info-row">
                                <div class="info-label">Telefone:</div>
                                <div class="info-value">
                                    <a href="tel:{{ $equipe->responsavel_telefone }}">{{ $equipe->responsavel_telefone }}</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Apresentação -->
                        <div class="info-section">
                            <h3><i class="fa fa-file-powerpoint-o mr-2"></i>Apresentação</h3>
                            
                            @if($equipe->apresentacao_path)
                                <div class="presentation-card">
                                    <div class="presentation-status status-confirmed">
                                        <i class="fa fa-check-circle mr-2"></i>Apresentação Enviada
                                    </div>
                                    
                                    <div class="info-row">
                                        <div class="info-label">Arquivo:</div>
                                        <div class="info-value">
                                            {{ basename($equipe->apresentacao_path) }}
                                        </div>
                                    </div>
                                    
                                    <div class="presentation-actions">
                                        <a href="{{ route('ideasun.admin.equipe.download.apresentacao', ['id' => $equipe->id]) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-download mr-2"></i>Download
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="presentation-card">
                                    <div class="presentation-status status-pending">
                                        <i class="fa fa-clock-o mr-2"></i>Apresentação Pendente
                                    </div>
                                    
                                    <p>Esta equipe ainda não enviou sua apresentação.</p>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Membros da Equipe -->
                        <div class="info-section">
                            <h3><i class="fa fa-users mr-2"></i>Membros da Equipe</h3>
                            
                            <div class="row">
                                @forelse($equipe->membros as $membro)
                                    <div class="col-md-6">
                                        <div class="estudante-card">
                                            <div class="estudante-name">
                                                {{ $membro->nome }}
                                                @if($membro->responsavel_equipe)
                                                    <span class="badge bg-success text-white">
                                                        <i class="fa fa-star mr-1"></i>Responsável
                                                    </span>
                                                @endif
                                            </div>
                                            
                                            <div class="estudante-info">
                                                <p class="mb-1">
                                                    <i class="fa fa-user mr-2"></i>
                                                    <span class="badge {{ $membro->funcao == 'professor' ? 'bg-primary' : 'bg-secondary' }} text-white">
                                                        {{ $membro->funcao == 'professor' ? 'Professor' : 'Estudante' }}
                                                    </span>
                                                </p>
                                                
                                                @if($membro->email)
                                                    <p class="mb-1">
                                                        <i class="fa fa-envelope mr-2"></i>{{ $membro->email }}
                                                    </p>
                                                @endif
                                                
                                                @if($membro->telefone)
                                                    <p class="mb-1">
                                                        <i class="fa fa-phone mr-2"></i>{{ $membro->telefone }}
                                                    </p>
                                                @endif
                                                
                                                @if($membro->data_nascimento)
                                                    <p class="mb-1">
                                                        <i class="fa fa-calendar mr-2"></i>{{ $membro->data_nascimento->format('d/m/Y') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <div class="no-estudantes">
                                            <i class="fa fa-users fa-3x mb-3"></i>
                                            <h5>Nenhum membro cadastrado</h5>
                                            <p class="text-muted">Esta equipe ainda não cadastrou seus membros.</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        
                        <!-- Ações Administrativas -->
                        <div class="info-section">
                            <h3><i class="fa fa-cogs mr-2"></i>Ações Administrativas</h3>
                            
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('ideasun.admin.equipe.editar', ['id' => $equipe->id]) }}" class="btn btn-warning mr-2 mb-2">
                                    <i class="fa fa-pencil mr-2"></i>Editar Equipe
                                </a>
                                
                                <form action="{{ route('ideasun.admin.equipe.excluir', ['id' => $equipe->id]) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta equipe? Esta ação não pode ser desfeita.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mr-2 mb-2">
                                        <i class="fa fa-trash mr-2"></i>Excluir Equipe
                                    </button>
                                </form>
                                
                                <a href="{{ route('ideasun.admin.equipe.enviar-email', ['id' => $equipe->id]) }}" class="btn btn-info mr-2 mb-2">
                                    <i class="fa fa-envelope mr-2"></i>Enviar E-mail
                                </a>
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
    <script src="/js/custom.js"></script>
</body>
</html>