<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Repescagem - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        :root {
            --primary-color: #3f51b5;
            --primary-light: #e8eaf6;
            --primary-dark: #303f9f;
            --success-color: #4CAF50;
            --warning-color: #FFC107;
            --danger-color: #F44336;
            --neutral-bg: #f8f9fa;
            --shadow-sm: 0 2px 5px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 5px 15px rgba(0, 0, 0, 0.1);
            --radius-sm: 8px;
            --radius-md: 12px;
            --transition: all 0.3s ease;
        }
        
        .repescagem-section {
            padding: 70px 0;
            min-height: 100vh;
            background: var(--neutral-bg);
        }
        
        .dashboard-card {
            background: white;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-md);
            padding: 25px;
            margin-bottom: 30px;
            border: none;
        }
        
        .dashboard-header {
            background: var(--primary-color);
            background-image: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            margin: -25px -25px 25px;
            padding: 25px;
            border-radius: var(--radius-md) var(--radius-md) 0 0;
            position: relative;
            overflow: hidden;
        }
        
        .dashboard-header::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(30deg);
            pointer-events: none;
        }
        
        .stats-card {
            background: white;
            border-radius: var(--radius-sm);
            box-shadow: var(--shadow-sm);
            padding: 20px;
            text-align: center;
            transition: var(--transition);
            height: 100%;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .stats-card h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .stats-card p {
            color: #6c757d;
            font-weight: 500;
        }
        
        /* Carrossel e Equipes */
        .equipe-carousel {
            margin: 35px 0;
            position: relative;
        }
        
        .equipe-card {
            background: white;
            border: none;
            border-radius: var(--radius-md);
            padding: 30px;
            margin: 15px 5px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            position: relative;
        }
        
        .equipe-card:hover {
            box-shadow: var(--shadow-md);
        }
        
        .equipe-card h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-light);
            font-size: 1.4rem;
        }
        
        .section-label {
            background: var(--primary-light);
            color: var(--primary-dark);
            padding: 5px 15px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .equipe-integrantes, .equipe-resumo {
            background: #f9f9f9;
            border-radius: var(--radius-sm);
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .equipe-integrantes strong, .equipe-resumo strong {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-dark);
        }
        
        .equipe-integrantes p, .equipe-resumo p {
            margin-bottom: 0;
            color: #495057;
            line-height: 1.6;
        }
        
        /* Controles do carrossel */
        .slick-arrow {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }
        
        .slick-prev {
            left: -20px;
        }
        
        .slick-next {
            right: -20px;
        }
        
        .slick-prev:before, .slick-next:before {
            color: var(--primary-color);
            font-family: 'FontAwesome';
            font-size: 20px;
            opacity: 1;
        }
        
        .slick-prev:before {
            content: '\f104';
        }
        
        .slick-next:before {
            content: '\f105';
        }
        
        .slick-dots li button:before {
            font-size: 12px;
            color: var(--primary-color);
        }
        
        .slick-dots li.slick-active button:before {
            color: var(--primary-dark);
        }
        
        /* Critérios de Avaliação */
        .criterios-container {
            margin: 30px 0;
            counter-reset: criterio;
        }
        
        .criterio-card {
            background: white;
            border-radius: var(--radius-sm);
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: var(--shadow-sm);
            position: relative;
            overflow: hidden;
            counter-increment: criterio;
        }
        
        .criterio-card h5 {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .criterio-card h5::before {
            content: counter(criterio, upper-alpha);
            background: var(--primary-color);
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            margin-right: 10px;
            font-weight: 700;
        }
        
        .range-container {
            margin: 15px 0;
            padding: 0 10px;
        }
        
        .nota-slider-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .nota-input {
            width: 70px;
            text-align: center;
            font-weight: 600;
            color: var(--primary-color);
            border: 2px solid var(--primary-light);
            border-radius: var(--radius-sm);
            padding: 8px 5px;
            font-size: 1.1rem;
        }
        
        input[type="range"] {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 10px;
            background: #e9ecef;
            outline: none;
        }
        
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--primary-color);
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: var(--transition);
        }
        
        input[type="range"]::-webkit-slider-thumb:hover {
            background: var(--primary-dark);
            transform: scale(1.1);
        }
        
        .range-markers {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            padding: 0 10px;
            color: #6c757d;
            font-size: 0.8rem;
        }
        
        /* Pontuação Total */
        .pontuacao-total-container {
            background: linear-gradient(135deg, #f5f7ff, var(--primary-light));
            border-radius: var(--radius-md);
            padding: 20px;
            text-align: center;
            margin: 25px 0;
            position: relative;
            border-left: 5px solid var(--primary-color);
        }
        
        .pontuacao-total-container h5 {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 0;
        }
        
        .pontuacao-total-valor {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            display: block;
            margin: 5px 0;
        }
        
        /* Estados de Pontuação */
        .pontuacao-baixa {
            color: var(--danger-color) !important;
        }
        
        .pontuacao-media {
            color: var(--warning-color) !important;
        }
        
        .pontuacao-alta {
            color: var(--success-color) !important;
        }
        
        /* Botões e Ações */
        .btn-avaliar {
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 10px rgba(63, 81, 181, 0.3);
        }
        
        .btn-avaliar:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(63, 81, 181, 0.4);
        }
        
        .btn-avaliar:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(63, 81, 181, 0.3);
        }
        
        /* Estado Vazio */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: var(--radius-md);
            margin: 40px 0 20px;
            box-shadow: var(--shadow-sm);
        }
        
        .empty-state i {
            font-size: 4rem;
            color: var(--success-color);
            margin-bottom: 20px;
            opacity: 0.8;
        }
        
        .empty-state h4 {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .empty-state p {
            color: #6c757d;
            font-size: 1.1rem;
            max-width: 500px;
            margin: 0 auto;
        }
        
        /* Tabela de Avaliações */
        .avaliacoes-realizadas {
            margin-top: 40px;
        }
        
        .avaliacoes-realizadas h4 {
            color: var(--primary-dark);
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-light);
        }
        
        .table-avaliacoes {
            border-radius: var(--radius-sm);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }
        
        .table-avaliacoes thead th {
            background: var(--primary-light);
            color: var(--primary-dark);
            font-weight: 600;
            border: none;
            padding: 15px;
        }
        
        .table-avaliacoes tbody tr {
            transition: var(--transition);
        }
        
        .table-avaliacoes tbody tr:hover {
            background-color: #f5f7ff;
        }
        
        .table-avaliacoes tbody td {
            padding: 15px;
            vertical-align: middle;
            border-top: 1px solid #e9ecef;
        }
        
        .table-avaliacoes .pontuacao {
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--primary-color);
        }
        
        .table-avaliacoes .data {
            color: #6c757d;
        }
        
        /* Alertas e Notificações */
        .alert {
            border: none;
            border-radius: var(--radius-sm);
            padding: 15px 20px;
        }
        
        .alert-info {
            background-color: #e3f2fd;
            color: #0c5460;
            border-left: 5px solid #2196F3;
        }
        
        .alert-success {
            background-color: #e8f5e9;
            color: #155724;
            border-left: 5px solid #4CAF50;
        }
        
        .alert-warning {
            background-color: #fff8e1;
            color: #856404;
            border-left: 5px solid #FFC107;
        }
        
        .alert-danger {
            background-color: #ffebee;
            color: #721c24;
            border-left: 5px solid #F44336;
        }
        
        /* Comentários */
        .comentarios-field {
            background: #fff;
            border-radius: var(--radius-sm);
            box-shadow: var(--shadow-sm);
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #e9ecef;
        }
        
        .comentarios-field label {
            font-weight: 600;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .comentarios-field textarea {
            border: 1px solid #e9ecef;
            border-radius: var(--radius-sm);
            padding: 12px;
            min-height: 120px;
            transition: var(--transition);
        }
        
        .comentarios-field textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(63, 81, 181, 0.1);
        }
        
        /* Indicador de Progresso */
        .progresso-avaliacao {
            position: relative;
            margin-top: 30px;
            padding-top: 15px;
        }
        
        .progresso-steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progresso-step {
            position: relative;
            width: 22px;
            height: 22px;
            background: #e9ecef;
            border-radius: 50%;
            z-index: 1;
        }
        
        .progresso-step.active {
            background: var(--primary-color);
        }
        
        .progresso-step.complete {
            background: var(--success-color);
        }
        
        .progresso-line {
            position: absolute;
            top: 25px;
            left: 11px;
            right: 11px;
            height: 3px;
            background: #e9ecef;
            z-index: 0;
        }
        
        .progresso-line-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .progresso-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }
        
        .progresso-label {
            font-size: 0.8rem;
            color: #6c757d;
            width: 22px;
            text-align: center;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            .dashboard-header {
                padding: 20px;
            }
            
            .equipe-card {
                padding: 20px;
            }
            
            .slick-prev {
                left: -10px;
            }
            
            .slick-next {
                right: -10px;
            }
            
            .stats-card {
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="repescagem-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-card">
                        <div class="dashboard-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="mb-0"><i class="fa fa-refresh mr-2"></i>Avaliação de Repescagem</h2>
                                <span class="badge badge-light px-3 py-2">Avaliador Nível 2</span>
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
                        
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <h5 class="mb-3"><i class="fa fa-user-circle mr-2"></i>Bem-vindo(a), {{ $avaliador->nome }}</h5>
                                <p class="text-muted">
                                    Você está participando do processo de <strong>repescagem</strong> do IDEASUN. Sua avaliação 
                                    criteriosa ajudará a selecionar equipes que merecem uma nova chance de participar da EXPOASA.
                                </p>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="stats-card">
                                            <h3>{{ $avaliacoes->count() }}</h3>
                                            <p>Avaliações Realizadas</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stats-card">
                                            <h3>{{ $equipesNaoAvaliadas->count() }}</h3>
                                            <p>Equipes Pendentes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <i class="fa fa-info-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Instruções para Avaliação</h5>
                                    <ul class="mb-0">
                                        <li>Avalie cada equipe considerando apenas as informações apresentadas, sem influência da cidade ou instituição.</li>
                                        <li>Atribua pontuações de 0 a 25 para cada um dos quatro critérios, totalizando 100 pontos possíveis.</li>
                                        <li>Seja imparcial e consistente em suas avaliações para garantir um processo justo.</li>
                                        <li>Deixe comentários construtivos para ajudar as equipes a melhorarem seus projetos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Carrossel de Equipes -->
                        @if($equipesNaoAvaliadas->count() > 0)
                            <div class="section-label">
                                <i class="fa fa-list mr-2"></i>Equipes para Avaliar
                            </div>
                            
                            <div class="equipe-carousel">
                                @foreach($equipesNaoAvaliadas as $equipe)
                                    <div>
                                        <div class="equipe-card">
                                            <h4>{{ $equipe->nome }}</h4>
                                            
                                            <div class="equipe-integrantes">
                                                <strong><i class="fa fa-users mr-2"></i>Integrantes</strong>
                                                <p>
                                                    @if($equipe->membros && $equipe->membros->count() > 0)
                                                        {{ $equipe->membros->pluck('nome')->implode(', ') }}
                                                    @else
                                                        <em>Nenhum integrante cadastrado</em>
                                                    @endif
                                                </p>
                                            </div>
                                            
                                            <div class="equipe-resumo">
                                                <strong><i class="fa fa-lightbulb-o mr-2"></i>Resumo da Ideia</strong>
                                                <p>{{ $equipe->resumo_ideia ?? 'Sem descrição disponível.' }}</p>
                                            </div>
                                            
                                            <form action="{{ route('ideasun.banca.avaliar.salvar') }}" method="POST" class="avaliar-form">
                                                @csrf
                                                <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                                
                                                <div class="criterios-container">
                                                    <div class="criterio-card">
                                                        <h5>Criatividade e Inovação</h5>
                                                        <p class="text-muted small">Avalie a originalidade da ideia e seu potencial inovador.</p>
                                                        <div class="range-container">
                                                            <div class="nota-slider-container">
                                                                <input type="range" class="form-range flex-grow-1" 
                                                                    id="A_criatividade_inovacao_{{ $equipe->id }}" 
                                                                    data-equipe="{{ $equipe->id }}"
                                                                    min="0" max="25" step="1" value="0">
                                                                <input type="number" class="form-control nota-input" 
                                                                    name="A_criatividade_inovacao" 
                                                                    id="A_valor_{{ $equipe->id }}" 
                                                                    min="0" max="25" value="0" required>
                                                            </div>
                                                            <div class="range-markers">
                                                                <span>0</span>
                                                                <span>5</span>
                                                                <span>10</span>
                                                                <span>15</span>
                                                                <span>20</span>
                                                                <span>25</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="criterio-card">
                                                        <h5>Qualidade da Apresentação</h5>
                                                        <p class="text-muted small">Avalie a clareza e organização das informações apresentadas.</p>
                                                        <div class="range-container">
                                                            <div class="nota-slider-container">
                                                                <input type="range" class="form-range flex-grow-1" 
                                                                    id="B_qualidade_apresentacao_{{ $equipe->id }}" 
                                                                    data-equipe="{{ $equipe->id }}"
                                                                    min="0" max="25" step="1" value="0">
                                                                <input type="number" class="form-control nota-input" 
                                                                    name="B_qualidade_apresentacao" 
                                                                    id="B_valor_{{ $equipe->id }}" 
                                                                    min="0" max="25" value="0" required>
                                                            </div>
                                                            <div class="range-markers">
                                                                <span>0</span>
                                                                <span>5</span>
                                                                <span>10</span>
                                                                <span>15</span>
                                                                <span>20</span>
                                                                <span>25</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="criterio-card">
                                                        <h5>Impacto na Sociedade</h5>
                                                        <p class="text-muted small">Avalie o potencial de transformação social e benefício à comunidade.</p>
                                                        <div class="range-container">
                                                            <div class="nota-slider-container">
                                                                <input type="range" class="form-range flex-grow-1" 
                                                                    id="C_impacto_sociedade_{{ $equipe->id }}" 
                                                                    data-equipe="{{ $equipe->id }}"
                                                                    min="0" max="25" step="1" value="0">
                                                                <input type="number" class="form-control nota-input" 
                                                                    name="C_impacto_sociedade" 
                                                                    id="C_valor_{{ $equipe->id }}" 
                                                                    min="0" max="25" value="0" required>
                                                            </div>
                                                            <div class="range-markers">
                                                                <span>0</span>
                                                                <span>5</span>
                                                                <span>10</span>
                                                                <span>15</span>
                                                                <span>20</span>
                                                                <span>25</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="criterio-card">
                                                        <h5>Aderência aos ODS</h5>
                                                        <p class="text-muted small">Avalie a conexão da ideia com os Objetivos de Desenvolvimento Sustentável da ONU.</p>
                                                        <div class="range-container">
                                                            <div class="nota-slider-container">
                                                                <input type="range" class="form-range flex-grow-1" 
                                                                    id="D_aderencia_ODS_{{ $equipe->id }}" 
                                                                    data-equipe="{{ $equipe->id }}"
                                                                    min="0" max="25" step="1" value="0">
                                                                <input type="number" class="form-control nota-input" 
                                                                    name="D_aderencia_ODS" 
                                                                    id="D_valor_{{ $equipe->id }}" 
                                                                    min="0" max="25" value="0" required>
                                                            </div>
                                                            <div class="range-markers">
                                                                <span>0</span>
                                                                <span>5</span>
                                                                <span>10</span>
                                                                <span>15</span>
                                                                <span>20</span>
                                                                <span>25</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="pontuacao-total-container">
                                                    <h5>Pontuação Total</h5>
                                                    <span class="pontuacao-total-valor" id="pontuacao-total-{{ $equipe->id }}">0</span>
                                                    <div class="progress mt-2" style="height: 10px;">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;" 
                                                             id="pontuacao-barra-{{ $equipe->id }}" aria-valuenow="0" 
                                                             aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="comentarios-field">
                                                    <label for="comentarios"><i class="fa fa-comment mr-2"></i>Comentários e Feedback</label>
                                                    <textarea class="form-control" name="comentarios" rows="3" 
                                                        placeholder="Deixe comentários construtivos para ajudar a equipe a melhorar o projeto..."></textarea>
                                                </div>
                                                
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-avaliar">
                                                        <i class="fa fa-check-circle mr-2"></i>Confirmar Avaliação
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            
                            <div class="progresso-avaliacao">
                                <div class="progresso-steps">
                                    @for($i = 0; $i <= 4; $i++)
                                        <div class="progresso-step {{ $i < $avaliacoes->count() ? 'complete' : ($i == $avaliacoes->count() ? 'active' : '') }}"></div>
                                    @endfor
                                </div>
                                <div class="progresso-line">
                                    <div class="progresso-line-fill" style="width: {{ min(100, ($avaliacoes->count() / 4) * 100) }}%"></div>
                                </div>
                                <div class="progresso-labels">
                                    <span class="progresso-label">0</span>
                                    <span class="progresso-label">1</span>
                                    <span class="progresso-label">2</span>
                                    <span class="progresso-label">3</span>
                                    <span class="progresso-label">4+</span>
                                </div>
                            </div>
                        @else
                            <div class="empty-state">
                                <i class="fa fa-check-circle"></i>
                                <h4>Todas as equipes foram avaliadas!</h4>
                                <p>Obrigado pela sua participação no processo de repescagem. Seu trabalho ajudará a identificar projetos promissores que merecem uma nova chance.</p>
                            </div>
                        @endif
                        
                        <!-- Avaliações Realizadas -->
                        <div class="avaliacoes-realizadas">
                            <h4><i class="fa fa-history mr-2"></i>Avaliações Realizadas</h4>
                            
                            @if($avaliacoes->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover table-avaliacoes">
                                        <thead>
                                            <tr>
                                                <th>Equipe</th>
                                                <th>Critério A</th>
                                                <th>Critério B</th>
                                                <th>Critério C</th>
                                                <th>Critério D</th>
                                                <th>Pontuação</th>
                                                <th>Data/Hora</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($avaliacoes as $avaliacao)
                                                <tr>
                                                    <td><strong>{{ $avaliacao->equipe_nome }}</strong></td>
                                                    <td>{{ $avaliacao->A_criatividade_inovacao }}</td>
                                                    <td>{{ $avaliacao->B_qualidade_apresentacao }}</td>
                                                    <td>{{ $avaliacao->C_impacto_sociedade }}</td>
                                                    <td>{{ $avaliacao->D_aderencia_ODS }}</td>
                                                    <td class="pontuacao">{{ $avaliacao->nota_total }}/100</td>
                                                    <td class="data">{{ \Carbon\Carbon::parse($avaliacao->created_at)->format('d/m/Y H:i') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fa fa-info-circle mr-2"></i>
                                    Você ainda não realizou nenhuma avaliação. Comece avaliando as equipes acima.
                                </div>
                            @endif
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
    <script src="/plugins/slick/slick.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Inicializar o carrossel
            $('.equipe-carousel').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>'
            });
            
            // Configurar cada formulário de avaliação
            @foreach($equipesNaoAvaliadas as $equipe)
                setupFormListeners('{{ $equipe->id }}');
            @endforeach
            
            // Configurar validação de formulário
            $('.avaliar-form').on('submit', function(e) {
                const equipeId = $(this).find('input[name="equipe_id"]').val();
                const total = parseInt($('#pontuacao-total-' + equipeId).text());
                
                if (total === 0) {
                    e.preventDefault();
                    alert('Por favor, atribua uma pontuação em pelo menos um dos critérios antes de enviar.');
                    return false;
                }
                
                if (!confirm('Confirma o envio desta avaliação com ' + total + ' pontos? Esta ação não poderá ser desfeita.')) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
            
            // Função para configurar os listeners de cada formulário
            function setupFormListeners(equipeId) {
                const criterios = ['A_criatividade_inovacao', 'B_qualidade_apresentacao', 'C_impacto_sociedade', 'D_aderencia_ODS'];
                
                criterios.forEach(function(criterio) {
                    const slider = $(`#${criterio}_${equipeId}`);
                    const input = $(`#${criterio.split('_')[0]}_valor_${equipeId}`);
                    
                    // Slider muda o input
                    slider.on('input', function() {
                        input.val(this.value);
                        calcularTotal(equipeId);
                    });
                    
                    // Input muda o slider
                    input.on('input', function() {
                        let value = parseInt(this.value);
                        
                        if (isNaN(value)) value = 0;
                        if (value < 0) value = 0;
                        if (value > 25) value = 25;
                        
                        this.value = value;
                        slider.val(value);
                        calcularTotal(equipeId);
                    });
                });
                
                // Calcular total inicial
                calcularTotal(equipeId);
            }
            
            // Calcular a pontuação total e atualizar visual
            function calcularTotal(equipeId) {
                let total = 0;
                
                total += parseInt($(`#A_valor_${equipeId}`).val()) || 0;
                total += parseInt($(`#B_valor_${equipeId}`).val()) || 0;
                total += parseInt($(`#C_valor_${equipeId}`).val()) || 0;
                total += parseInt($(`#D_valor_${equipeId}`).val()) || 0;
                
                const totalElement = $(`#pontuacao-total-${equipeId}`);
                const barraProgresso = $(`#pontuacao-barra-${equipeId}`);
                
                totalElement.text(total);
                barraProgresso.css('width', total + '%');
                
                // Atualizar classes de cor baseado na pontuação
                totalElement.removeClass('pontuacao-baixa pontuacao-media pontuacao-alta');
                barraProgresso.removeClass('bg-danger bg-warning bg-success');
                
                if (total < 40) {
                    totalElement.addClass('pontuacao-baixa');
                    barraProgresso.addClass('bg-danger');
                } else if (total < 70) {
                    totalElement.addClass('pontuacao-media');
                    barraProgresso.addClass('bg-warning');
                } else {
                    totalElement.addClass('pontuacao-alta');
                    barraProgresso.addClass('bg-success');
                }
            }
        });
    </script>
</body>
</html>