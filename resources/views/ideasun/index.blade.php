<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDEASUN - Primeiro Ideathon Inter-regional do Paraná</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
<style>
    /* Banner Styles */
    .ideasun-banner {
        position: relative;
        background-image: url('/assets/img/ideasun.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 180px 0;
        text-align: center;
        color: #fff;
    }
    
    .ideasun-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5));
        z-index: 1;
    }
    
    .ideasun-banner .container {
        position: relative;
        z-index: 2;
    }
    
    .ideasun-banner h1 {
        color: #fff;
        font-size: 3.2rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .ideasun-banner p.lead {
        color: #fff;
        font-size: 1.5rem;
        margin-bottom: 30px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Container do logo aprimorado */
    .ideasun-logo-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 35px;
        padding: 15px 30px; /* Aumentado o padding horizontal de 25px para 30px */
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 60px;
        backdrop-filter: blur(5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .ideasun-logo {
        max-width: 120px;
        height: auto;
        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.2));
        transition: all 0.4s ease;
    }

    .ideasun-logo-text {
        font-size: 4rem !important; /* Aumentado ainda mais para 4rem (era 3.2rem) */
        font-weight: 800 !important;
        margin-left: 20px !important;
        color: #fff !important;
        position: relative !important;
        padding-left: 20px !important;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;
        letter-spacing: 1px !important;
        transition: all 0.4s ease !important;
    }

    .ideasun-logo-text:before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 80%;
        width: 2px;
        background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(255,255,255,0.9), rgba(255,255,255,0));
    }

    /* Efeito hover */
    .ideasun-logo-container:hover .ideasun-logo {
        transform: scale(1.08);
        filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.3));
    }

    .ideasun-logo-container:hover .ideasun-logo-text {
        text-shadow: 0 0 15px rgba(230, 43, 30, 0.6);
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .ideasun-logo-container {
            padding: 12px 20px;
            border-radius: 50px;
        }
        
        .ideasun-logo {
            max-width: 90px;
        }
        
        .ideasun-logo-text {
            font-size: 3rem !important; /* Aumentado de 2.3rem para 3rem */
            margin-left: 15px;
            padding-left: 15px;
        }
    }

    @media (max-width: 576px) {
        .ideasun-logo-container {
            padding: 8px 15px;
            border-radius: 40px;
        }
        
        .ideasun-logo {
            max-width: 70px;
        }
        
        .ideasun-logo-text {
            font-size: 2.5rem !important; /* Aumentado de 2rem para 2.5rem */
            margin-left: 12px;
            padding-left: 12px;
        }
    }

    /* Button Styles */
    .ideasun-buttons {
        margin-top: 40px;
    }
    
    .ideasun-buttons .btn-primary {
        background-color: #e62b1e;
        border-color: #e62b1e;
        padding: 12px 32px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(230, 43, 30, 0.3);
        transition: all 0.3s ease;
        border-radius: 50px;
    }
    
    .ideasun-buttons .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(230, 43, 30, 0.4);
        background-color: #d81d11;
    }
    
    .ideasun-buttons .btn-outline-secondary {
        border-color: #fff;
        color: #fff;
        padding: 12px 32px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-radius: 50px;
    }
    
    .ideasun-buttons .btn-outline-secondary:hover {
        background-color: #fff;
        color: #333;
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    
    /* Section Styles */
    /* Sobre Section (Red Background) */
    .ideasun-section-solid {
        background-color: rgba(94, 8, 2, 0.9);
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .ideasun-section {
        padding: 120px 0;
        position: relative;
    }
    
    .ideasun-section-solid::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/assets/img/ideasun-sobre-bg.jpg');
        background-size: cover;
        background-position: center center;
        opacity: 0.15;
        z-index: 0;
        transform: scale(1.1); /* Ligeiramente aumentado para cobrir possíveis espaços vazios */
    }

    .ideasun-section-solid .container {
        position: relative;
        z-index: 1;
    }

    .ideasun-section-solid p {
        color: #fff;
        font-size: 1.15rem;
        line-height: 1.8;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        margin-bottom: 1.5rem;
    }

    .ideasun-section-solid h2,
    .ideasun-section-solid .lead {
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .ideasun-section-solid h2:after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: #fff;
        margin: 25px auto;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
    
    /* Categorias Section (Image Background) */
    .ideasun-section-image {
        position: relative;
        background-color: #f8f9fa;
        overflow: hidden;
    }
    
    .ideasun-section-image.categorias {
        background-image: url('/assets/img/ideasun-categorias-bg.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
    }
    
    .ideasun-section-image.categorias::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.65));
        z-index: 1;
    }
    
    .ideasun-section-image.calendario {
        background-image: url('/assets/img/ideasun-calendario-bg.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
    }
    
    .ideasun-section-image.calendario::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(94, 8, 2, 0.95), rgba(94, 8, 2, 0.85));
        z-index: 1;
    }
    
    .ideasun-section-image .container {
        position: relative;
        z-index: 2;
    }
    
    .ideasun-section-image h2,
    .ideasun-section-image .lead {
        color: #fff;
    }
    
    .ideasun-section-image h2:after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: #fff;
        margin: 25px auto;
    }
    
    /* Section Headers */
    .ideasun-section h2 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .ideasun-section .lead {
        font-size: 1.3rem;
        margin-bottom: 50px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Card Styles */
    .ideasun-card {
        margin-bottom: 30px;
        height: 100%;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        background-color: #fff;
        position: relative;
        z-index: 1;
    }
    
    .ideasun-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    
    .ideasun-card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: #e62b1e;
        z-index: 2;
    }
    
    .ideasun-card .card-body {
        padding: 35px 25px;
    }
    
    .ideasun-card .card-title {
        color: #e62b1e;
        font-weight: 700;
        font-size: 1.6rem;
        margin-bottom: 15px;
    }
    
    .ideasun-card .card-title::after {
        content: "";
        display: block;
        width: 50px;
        height: 3px;
        background: #e62b1e;
        margin: 15px auto;
    }
    
    .ideasun-card .card-text {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #555;
    }
    
    .ideasun-card .fa {
        transition: all 0.3s ease;
    }
    
    .ideasun-card:hover .fa {
        transform: scale(1.2);
    }
    
    /* Table Styles */
    .table-responsive {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        margin: 0 auto;
        max-width: 90%;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }

    .table-bordered {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        margin: 0 auto;
        border: none;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 18px 20px;
        vertical-align: middle;
    }
    
    .thead-dark th {
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        font-weight: 600;
        border-color: rgba(255, 255, 255, 0.2);
        font-size: 1.1rem;
        letter-spacing: 0.5px;
    }
    
    .table-bordered tbody tr {
        background-color: rgba(255, 255, 255, 0.15);
        color: #fff;
        transition: background-color 0.3s ease;
    }
    
    .table-bordered tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.25);
    }
    
    .table-bordered td:first-child {
        font-weight: 600;
    }
    
    /* Contact Section */
    .ideasun-section-contact {
        background-color: #f8f9fa;
        background-image: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 120px 0;
    }
    
    .contact-info {
        background-color: #fff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        max-width: 80%;
        transition: transform 0.3s ease;
    }
    
    .contact-info:hover {
        transform: translateY(-10px);
    }
    
    .contact-info i.fa {
        color: #e62b1e;
        margin-bottom: 20px;
    }
    
    .contact-info p {
        font-size: 1.2rem;
        margin-bottom: 25px;
        color: #555;
    }
    
    .contact-info hr {
        margin: 25px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .ideasun-banner {
            padding: 100px 0;
        }
        
        .ideasun-banner h1 {
            font-size: 2rem;
        }
        
        .ideasun-logo {
            max-width: 120px;
        }
        
        .ideasun-section {
            padding: 70px 0;
        }
        
        .ideasun-section h2 {
            font-size: 2.2rem;
        }
        
        .table-responsive {
            padding: 15px;
        }
        
        .table-bordered th,
        .table-bordered td {
            padding: 12px 15px;
            font-size: 0.9rem;
        }

        .ideasun-navbar .navbar-brand {
            margin-left: 15px;
        }
        
        .ideasun-navbar .navbar-toggler {
            margin-right: 15px;
        }
        
        /* Container com padding maior em mobile */
        .container {
            padding-left: 20px;
            padding-right: 20px;
        }
    }
    
    @media (max-width: 576px) {
        .ideasun-banner h1 {
            font-size: 1.8rem;
        }
        
        .ideasun-section h2 {
            font-size: 1.8rem;
        }
        
        .ideasun-section .lead {
            font-size: 1.1rem;
        }
        
        .ideasun-card .card-body {
            padding: 25px 15px;
        }
        
        .contact-info {
            padding: 25px;
        }
    }

    /* Estilo para o texto ao lado da logo */
    .navbar-brand-text {
        margin-left: 10px;
        font-weight: 700;
        font-size: 1.2rem; /* Tamanho original do texto no navbar */
        color: #fff;
        display: none;
    }

    @media (min-width: 576px) {
        .navbar-brand-text {
            display: inline;
        }
    }

    /* Mantém o estilo atual para o texto grande do banner */
    .ideasun-logo-text {
        font-size: 4rem !important; /* Mantém o tamanho atual no banner */
        font-weight: 800 !important;
        margin-left: 20px !important;
        color: #fff !important;
        position: relative !important;
        padding-left: 20px !important;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3) !important;
        letter-spacing: 1px !important;
        transition: all 0.4s ease !important;
    }
</style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <!-- Banner Section - Atualizado para ser mais impactante -->
    <section class="ideasun-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Primeiro Ideathon Inter-regional do Paraná</h1>
                    <p class="lead">Transformando ideias em soluções inovadoras para os desafios da nossa região</p>
                    
                    <div class="ideasun-buttons">
                        <a href="{{ route('ideasun.login') }}" class="btn btn-primary btn-lg mx-2">
                            <i class="fa fa-sign-in mr-2"></i>Acessar Plataforma
                        </a>
                        <a href="#sobre" class="btn btn-outline-secondary btn-lg mx-2">
                            <i class="fa fa-info-circle mr-2"></i>Saiba Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Section -->
    <section id="sobre" class="ideasun-section ideasun-section-solid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Sobre o IDEASUN</h2>
                    <p class="lead">Inspirando jovens talentos a criarem o futuro através da inovação</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <p>O <strong>IDEASUN – Edição 2025</strong> é o primeiro <strong>Ideathon Inter-Regional do Paraná</strong>, uma maratona de ideias que nasceu como evolução do HACKASUN 2024. Reunimos estudantes, professores e gestores educacionais das cidades da região do Sebrae PR, Núcleo de Cornélio Procópio, em um ambiente de criatividade e colaboração.</p>
                    <p>Nosso objetivo é fomentar a cultura da inovação e do empreendedorismo, desenvolvendo soluções criativas para desafios reais das comunidades locais, alinhadas aos <strong>17 Objetivos de Desenvolvimento Sustentável (ODS)</strong> da ONU.</p>
                </div>
                <div class="col-md-6">
                    <p>O evento promove competências essenciais como pensamento crítico, criatividade, trabalho em equipe e compromisso social entre os participantes de todas as idades e níveis educacionais.</p>
                    <p>Composto por etapas de pré-seleção regional e uma grande final durante a <strong>Exposição Regional de Assaí (EXPOASA)</strong>, nos dias 6 e 7 de junho de 2025, o IDEASUN premia as melhores ideias e oferece visibilidade aos projetos, contribuindo diretamente para o desenvolvimento sustentável das cidades envolvidas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorias Section -->
    <section class="ideasun-section ideasun-section-image categorias">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Categorias</h2>
                    <p class="lead">O IDEASUN está dividido em cinco categorias</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card ideasun-card">
                        <div class="card-body text-center">
                            <h3 class="card-title">BRINCA</h3>
                            <p class="card-text">Destinada a estudantes do 4º e 5º anos do Ensino Fundamental</p>
                            <div class="mt-3">
                                <i class="fa fa-child fa-3x" style="color: #e62b1e;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card ideasun-card">
                        <div class="card-body text-center">
                            <h3 class="card-title">IMAGINA</h3>
                            <p class="card-text">Destinada a estudantes do Ensino Fundamental – anos finais</p>
                            <div class="mt-3">
                                <i class="fa fa-lightbulb-o fa-3x" style="color: #e62b1e;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card ideasun-card">
                        <div class="card-body text-center">
                            <h3 class="card-title">CRIA</h3>
                            <p class="card-text">Destinada a estudantes de todo o Ensino Médio e Ensino Médio-Técnico</p>
                            <div class="mt-3">
                                <i class="fa fa-cogs fa-3x" style="color: #e62b1e;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card ideasun-card">
                        <div class="card-body text-center">
                            <h3 class="card-title">INSPIRA</h3>
                            <p class="card-text">Destinada a estudantes do Ensino Especial</p>
                            <div class="mt-3">
                                <i class="fa fa-heart fa-3x" style="color: #e62b1e;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card ideasun-card">
                        <div class="card-body text-center">
                            <h3 class="card-title">AVANÇA</h3>
                            <p class="card-text">Destinada a estudantes da Educação Superior, de cursos de graduação, e da Educação Profissional</p>
                            <div class="mt-3">
                                <i class="fa fa-graduation-cap fa-3x" style="color: #e62b1e;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendário Section -->
    <section class="ideasun-section ideasun-section-image calendario">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Calendário de Atividades</h2>
                    <p class="lead">Acompanhe as etapas do IDEASUN 2025 e prepare-se para transformar ideias em realidade</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="2" class="text-center"><i class="fa fa-flag-checkered mr-2"></i> PRIMEIRA FASE – ETAPAS REGIONAIS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Habilitação das cidades</strong> no site do IDEASUN</td>
                                    <td>17 a 20 de maio de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Reunião online</strong> para esclarecimentos com dirigentes e professores</td>
                                    <td>19 de maio de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Treinamento presencial</strong> das cidades habilitadas</td>
                                    <td>21 a 23 de maio de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Cadastro das equipes</strong> e submissão das ideias no portal</td>
                                    <td>21 a 27 de maio de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Bancas Regionais</strong> para apresentação dos projetos e pré-seleção das equipes <em>(presencial no CEEP Assaí)</em></td>
                                    <td>28 a 30 de maio de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Anúncio das equipes pré-selecionadas</strong>, por cidade e por categoria</td>
                                    <td>02 de junho de 2025</td>
                                </tr>
                            </tbody>
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="2" class="text-center"><i class="fa fa-trophy mr-2"></i> SEGUNDA FASE – ETAPAS NA EXPOASA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Reunião online de alinhamento</strong> para a etapa final com dirigentes e líderes das equipes</td>
                                    <td>05 de junho de 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>06 de junho (manhã):</strong><br>
                                        • Anúncio das equipes repescadas<br>
                                        • <strong>Maratona de Ideias – Etapa Final Presencial</strong> para as equipes da Educação Básica na EXPOASA
                                    </td>
                                    <td>06 de junho de 2025</td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>07 de junho (manhã):</strong><br>
                                        • <strong>Maratona de Ideias – Etapa Final Presencial</strong> para Ensino Técnico e Ensino Superior na EXPOASA
                                    </td>
                                    <td>07 de junho de 2025</td>
                                </tr>
                                <tr>
                                    <td><strong>Cerimônia de Premiação</strong> no palco principal da EXPOASA</td>
                                    <td>07 de junho de 2025 (11h)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section class="ideasun-section ideasun-section-contact">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Contato</h2>
                    <p class="lead">Para mais informações, entre em contato</p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-info text-center">
                        <i class="fa fa-envelope-o fa-3x"></i>
                        <p><strong>E-mail:</strong> valedosolpr@gmail.com</p>
                        <hr>
                        <i class="fa fa-map-marker fa-3x"></i>
                        <p><strong>Local:</strong> Centro de Eventos Toyosaburo Ikeda - Assaí/PR</p>
                        <hr>
                        <div class="ideasun-buttons mt-4">
                            <a href="{{ route('ideasun.login') }}" class="btn btn-primary">
                                <i class="fa fa-sign-in mr-2"></i>Acessar Plataforma
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
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        // Efeito de rolagem suave
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                
                var target = this.hash;
                var $target = $(target);
                
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 900, 'swing', function() {
                    window.location.hash = target;
                });
            });
            
            // Adiciona classe ativa aos links de navegação
            $(window).on('scroll', function() {
                var scrollPos = $(window).scrollTop();
                
                $('.navbar-nav a[href^="#"]').each(function() {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));
                    
                    if (refElement.length && refElement.position().top <= scrollPos + 100 && refElement.position().top + refElement.height() > scrollPos + 100) {
                        $('.navbar-nav a').removeClass("active");
                        currLink.addClass("active");
                    } else {
                        currLink.removeClass("active");
                    }
                });
            });
        });
    </script>
</body>
</html>