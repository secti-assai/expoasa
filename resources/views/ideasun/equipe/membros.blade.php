<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Equipe - IDEASUN 2025</title>
    
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
        }
        
        .membros-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        .membros-section::before {
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
        
        .membros-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
        }
        
        .membros-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .membros-header h2 {
            color: #333;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .membros-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 0;
        }
        
        /* Detalhes da equipe */
        .equipe-info {
            background-color: rgba(23, 162, 184, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #17a2b8;
        }
        
        .equipe-info p {
            margin-bottom: 8px;
            font-size: 16px;
        }
        
        .equipe-info p:last-child {
            margin-bottom: 0;
        }
        
        /* Progresso */
        .progress-container {
            margin: 30px 0;
        }
        
        .progress {
            height: 12px;
            border-radius: 10px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .progress-bar {
            transition: width 0.5s ease;
        }
        
        .progress-bar.bg-success {
            background-color: #28a745 !important;
        }
        
        .progress-bar.bg-primary {
            background-color: #e62b1e !important;
        }
        
        /* Membros */
        .membro-item {
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-left: 4px solid #e62b1e;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .membro-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
        }
        
        .membro-item .membro-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            text-align: left;
        }
        
        .membro-item h5 {
            margin-bottom: 0;
            font-weight: 600;
            color: #333;
        }
        
        .membro-item p {
            margin-bottom: 5px;
            color: #555;
        }
        
        .membro-item .badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.75rem;
        }
        
        .membro-item .btn-remove {
            position: absolute;
            bottom: 15px;
            right: 15px;
            color: #dc3545;
            background: none;
            border: none;
            font-size: 16px;
            padding: 5px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .membro-item .btn-remove:hover {
            background-color: rgba(220, 53, 69, 0.1);
            color: #bd2130;
            transform: scale(1.1);
        }
        
        /* Formulário */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #e62b1e;
            box-shadow: 0 0 0 0.2rem rgba(230, 43, 30, 0.25);
        }
        
        label {
            font-weight: 500;
            margin-bottom: 8px;
            display: block;
            color: #444;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 25px;
            padding-bottom: 15px;
            font-size: 1.3rem;
            color: #444;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background: #e62b1e;
        }
        
        /* Botões */
        .btn {
            border-radius: 50px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            box-shadow: 0 4px 10px rgba(230, 43, 30, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #d01f13;
            border-color: #d01f13;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(230, 43, 30, 0.3);
        }
        
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.3);
        }
        
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
        }
        
        /* Alertas */
        .alert {
            border-radius: 10px;
            padding: 20px;
            border: none;
            margin-bottom: 30px;
        }
        
        .alert-info {
            background-color: rgba(23, 162, 184, 0.1);
            border-left: 4px solid #17a2b8;
            color: #17a2b8;
        }
        
        .alert-success {
            background-color: rgba(40, 167, 69, 0.1);
            border-left: 4px solid #28a745;
            color: #28a745;
        }
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.1);
            border-left: 4px solid #dc3545;
            color: #dc3545;
        }
        
        .alert-warning {
            background-color: rgba(255, 193, 7, 0.1);
            border-left: 4px solid #ffc107;
            color: #856404;
        }
        
        /* Divisores */
        hr {
            border-color: rgba(0,0,0,0.05);
        }
        
        /* Animações */
        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Estilo para área de upload */
        .upload-section {
            background-color: #f8f9fa;
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }
        
        .upload-section:hover {
            border-color: #e62b1e;
            background-color: rgba(230, 43, 30, 0.05);
        }
        
        .upload-section i {
            font-size: 3rem;
            color: #e62b1e;
            margin-bottom: 15px;
        }
        
        .upload-section h4 {
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .upload-section p {
            margin-bottom: 20px;
            color: #6c757d;
        }
        
        .file-input {
            display: none;
        }
        
        .file-label {
            cursor: pointer;
            display: inline-block;
            font-weight: 600;
        }
        
        .file-info {
            margin-top: 20px;
            text-align: left;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            border-left: 4px solid #28a745;
            display: none;
        }
        
        .file-info.visible {
            display: block;
            animation: fadeIn 0.3s ease forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .tab-section {
            margin-bottom: 30px;
        }
        
        .tab-button {
            padding: 15px 20px;
            font-weight: 600;
            border: none;
            background-color: #f8f9fa;
            border-radius: 10px 10px 0 0;
            margin-right: 5px;
            color: #495057;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
        }
        
        .tab-button:hover {
            background-color: #e9ecef;
            color: #e62b1e;
        }
        
        .tab-button.active {
            background-color: #fff;
            color: #e62b1e;
            border-bottom: 3px solid #e62b1e;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
        
        .responsavel-info {
            background-color: rgba(40, 167, 69, 0.1);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #28a745;
        }
        
        .responsavel-info h5 {
            color: #28a745;
            margin-bottom: 15px;
        }
        
        /* Estilos para a nova seção de abas */
        .tab-navigation {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
        }
        
        .tab-button {
            flex: 1;
            padding: 15px;
            font-weight: 600;
            border: none;
            background-color: #f8f9fa;
            border-radius: 10px 10px 0 0;
            margin-right: 5px;
            color: #495057;
            transition: all 0.3s ease;
            border-bottom: 3px solid transparent;
            text-align: center;
        }
        
        .tab-button:hover {
            background-color: #e9ecef;
            color: #e62b1e;
        }
        
        .tab-button.active {
            background-color: #fff;
            color: #e62b1e;
            border-bottom: 3px solid #e62b1e;
        }
        
        .tab-contents {
            background-color: #fff;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 25px;
        }
        
        /* Estilos para o upload de arquivo */
        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            background-color: #f9f9f9;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .upload-area:hover {
            border-color: #e62b1e;
            background-color: #fef8f8;
        }
        
        .custom-file-upload {
            margin: 20px 0;
        }
        
        .file-input {
            position: absolute;
            width: 0;
            height: 0;
            opacity: 0;
            overflow: hidden;
        }
        
        .custom-file-upload label {
            cursor: pointer;
            padding: 12px 25px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .custom-file-upload label:hover {
            background-color: #e62b1e;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.2);
        }
        
        #file-details {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        /* Ajuste para o card de estudante */
        .membro-item {
            background-color: #fff;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-left: 4px solid #e62b1e;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .membro-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.1);
        }
        
        /* Ajustes para os botões de documentos */
        .documentos-container {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .documento-btn {
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
            color: #0d6efd;
            border: 1px solid #dee2e6;
            text-decoration: none;
        }
        
        .documento-btn:hover {
            background-color: #e2e6ea;
            color: #0a58ca;
            text-decoration: none;
        }
        
        .documento-btn i {
            font-size: 1rem;
        }
        
        /* Ajuste para o botão remover */
        .delete-form {
            display: inline-block;
        }
        
        @media (max-width: 768px) {
            .documento-btn {
                margin-bottom: 10px;
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="membros-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="membros-card animate-fadeInUp">
                        <div class="membros-header">
                            <h2>Gerenciamento da Equipe</h2>
                            <p class="lead text-muted">Complete sua equipe para participar do IDEASUN 2025</p>
                        </div>
                        
                        <div class="equipe-info">
                            <div class="row">
                                <div class="col-md-4">
                                    <p><strong><i class="fa fa-users mr-2"></i>Equipe:</strong> {{ $equipe->nome }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong><i class="fa fa-graduation-cap mr-2"></i>Modalidade:</strong> {{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong><i class="fa fa-building mr-2"></i>Cidade:</strong> {{ $equipe->cidade->nome }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Exibindo informações do responsável -->
                        <div class="responsavel-info">
                            <h5><i class="fa fa-user-circle mr-2"></i>Responsável pela Equipe</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <p><strong>Nome:</strong> {{ $equipe->responsavel_nome }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>E-mail:</strong> {{ $equipe->responsavel_email }}</p>
                                </div>
                                <div class="col-md-4">
                                    <p><strong>Telefone:</strong> {{ $equipe->responsavel_telefone }}</p>
                                </div>
                            </div>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-triangle mr-2"></i>{{ session('error') }}
                            </div>
                        @endif
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                <i class="fa fa-check-circle mr-2"></i>{{ session('success') }}
                            </div>
                        @endif
                        
                        <!-- Sistema de abas -->
                        <div class="tab-navigation">
                            <button class="tab-button active" onclick="mostrarAba('estudantes', this)" id="tab-estudantes">
                                <i class="fa fa-users mr-2"></i> Estudantes
                            </button>
                            <button class="tab-button" onclick="mostrarAba('apresentacao', this)" id="tab-apresentacao">
                                <i class="fa fa-file-powerpoint-o mr-2"></i> Apresentação
                            </button>
                        </div>
                        
                        <div class="tab-contents">
                            <!-- Aba de Estudantes -->
                            <div id="estudantes" class="tab-content active">
                                <!-- Progresso da equipe -->
                                <div class="progress-container">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5><i class="fa fa-chart-line mr-2"></i>Progresso da Equipe</h5>
                                        <span>{{ count($membros) }}/{{ $limites['min'] }} estudantes mínimos</span>
                                    </div>
                                    
                                    <div class="progress">
                                        @php
                                            $totalEstudantes = count($membros);
                                            $porcentagem = min(100, ($totalEstudantes / $limites['min']) * 100);
                                        @endphp
                                        <div class="progress-bar {{ $porcentagem == 100 ? 'bg-success' : 'bg-primary' }}" 
                                             role="progressbar" 
                                             style="width: {{ $porcentagem }}%" 
                                             aria-valuenow="{{ $porcentagem }}" 
                                             aria-valuemin="0" 
                                             aria-valuemax="100">
                                            {{ round($porcentagem) }}%
                                        </div>
                                    </div>
                                    <small class="text-muted mt-2 d-block">
                                        <i class="fa fa-info-circle mr-1"></i>
                                        Você precisa adicionar pelo menos <strong>{{ $limites['min'] }} estudantes</strong> para completar sua equipe
                                    </small>
                                </div>
                                
                                <!-- Lista de estudantes -->
                                <h4 class="section-title mt-4">Estudantes da Equipe</h4>
                                
                                @if(count($membros) > 0)
                                    <div class="row">
                                        @foreach($membros as $membro)
                                            <div class="col-12"> <!-- Alterado de col-md-6 para col-12 -->
                                                <div class="membro-item mb-4"> <!-- Adicionado mb-4 para espaçamento entre cards -->
                                                    <div class="membro-header">
                                                        <h5>{{ $membro->nome }}</h5>
                                                        <span class="badge badge-secondary">
                                                            <i class="fa fa-user-graduate mr-1"></i>
                                                            Estudante
                                                        </span>
                                                    </div>
                                                    
                                                    <hr class="my-2">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <p><i class="fa fa-envelope-o mr-2"></i>{{ $membro->email ?? 'Não informado' }}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p><i class="fa fa-phone mr-2"></i>{{ $membro->telefone ?? 'Não informado' }}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            @if($membro->data_nascimento)
                                                                <p><i class="fa fa-calendar mr-2"></i>{{ $membro->data_nascimento->format('d/m/Y') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Documentos -->
                                                    <div class="documentos mt-3">
                                                        <p class="mb-2"><strong><i class="fa fa-file-text mr-2"></i>Documentos:</strong></p>
                                                        <div class="d-flex flex-wrap documentos-container">
                                                            @if($membro->doc_termo_aceite_path)
                                                                <a href="{{ asset($membro->doc_termo_aceite_path) }}" target="_blank" class="documento-btn mr-2 mb-2">
                                                                    <i class="fa fa-file-pdf-o mr-1"></i>TERMO DE ACEITE
                                                                </a>
                                                            @endif
                                                            
                                                            @if($membro->doc_termo_dados_path)
                                                                <a href="{{ asset($membro->doc_termo_dados_path) }}" target="_blank" class="documento-btn mr-2 mb-2">
                                                                    <i class="fa fa-file-pdf-o mr-1"></i>TERMO DE DADOS
                                                                </a>
                                                            @endif
                                                            
                                                            @if($membro->doc_termo_imagem_path)
                                                                <a href="{{ asset($membro->doc_termo_imagem_path) }}" target="_blank" class="documento-btn mr-2 mb-2">
                                                                    <i class="fa fa-file-pdf-o mr-1"></i>TERMO DE IMAGEM
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="text-right mt-3">
                                                        <form action="{{ route('ideasun.equipe.membros.remover', $membro->id) }}" method="POST" class="delete-form">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja remover este estudante?')">
                                                                <i class="fa fa-trash mr-1"></i> REMOVER
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle mr-2"></i>
                                        Nenhum estudante cadastrado ainda. Adicione estudantes utilizando o formulário abaixo.
                                    </div>
                                @endif
                                
                                <!-- Formulário para adicionar estudantes -->
                                @if(count($membros) < $limites['max'])
                                    <hr class="my-4">
                                    
                                    <h4 class="section-title">Adicionar Novo Estudante</h4>
                                    
                                    <form action="{{ route('ideasun.equipe.membros.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                        <input type="hidden" name="funcao" value="estudante">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">
                                                        <i class="fa fa-user mr-2"></i>Nome Completo
                                                    </label>
                                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">
                                                        <i class="fa fa-envelope mr-2"></i>E-mail
                                                    </label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telefone">
                                                        <i class="fa fa-phone mr-2"></i>Telefone
                                                    </label>
                                                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_nascimento">
                                                        <i class="fa fa-calendar mr-2"></i>Data de Nascimento
                                                    </label>
                                                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Documentos do Estudante -->
                                        <div class="form-section mt-3">
                                            <h5 class="mb-3"><i class="fa fa-file-pdf-o mr-2"></i>Documentos Obrigatórios</h5>
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle mr-2"></i>Por favor, envie os seguintes documentos em formato PDF, PNG ou JPG.
                                                <p class="mb-0 mt-1"><strong>Para menores de 18 anos, os documentos devem ser assinados pelo responsável legal.</strong></p>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="doc_termo_aceite">
                                                            <i class="fa fa-file-text mr-2"></i>Termo de aceite de participação <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="file" class="form-control-file" id="doc_termo_aceite" name="doc_termo_aceite" 
                                                            accept=".pdf,.png,.jpg,.jpeg" required>
                                                        <small class="form-text text-muted">Termo de aceite de autorização de participação nas etapas presenciais</small>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="doc_termo_dados">
                                                            <i class="fa fa-file-text mr-2"></i>Termo de consentimento de dados <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="file" class="form-control-file" id="doc_termo_dados" name="doc_termo_dados" 
                                                            accept=".pdf,.png,.jpg,.jpeg" required>
                                                        <small class="form-text text-muted">Termo de consentimento sobre o tratamento de dados pessoais</small>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="doc_termo_imagem">
                                                            <i class="fa fa-file-text mr-2"></i>Termo de autorização de imagem <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="file" class="form-control-file" id="doc_termo_imagem" name="doc_termo_imagem" 
                                                            accept=".pdf,.png,.jpg,.jpeg" required>
                                                        <small class="form-text text-muted">Termo de autorização de uso de imagem</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group text-center mt-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-plus-circle mr-2"></i>Adicionar Estudante
                                            </button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-info mt-4">
                                        <i class="fa fa-info-circle mr-2"></i>
                                        Você já atingiu o número máximo de estudantes para esta modalidade.
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Aba de Apresentação -->
                            <div id="apresentacao" class="tab-content">
                                <div class="section-title">
                                    <h4><i class="fa fa-file-powerpoint-o mr-2"></i>Apresentação do Projeto</h4>
                                    <p>Envie a apresentação do projeto da sua equipe</p>
                                </div>
                                
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        <i class="fa fa-check-circle mr-2"></i> {{ session('success') }}
                                    </div>
                                @endif
                                
                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        <i class="fa fa-times-circle mr-2"></i> {{ session('error') }}
                                    </div>
                                @endif
                                
                                @if($equipe->apresentacao_path)
                                    <div class="alert alert-info">
                                        <i class="fa fa-file-powerpoint-o mr-2"></i> Apresentação atual: 
                                        <strong>{{ basename($equipe->apresentacao_path) }}</strong>
                                        <div class="mt-2">
                                            <a href="{{ asset($equipe->apresentacao_path) }}" class="btn btn-sm btn-primary" target="_blank">
                                                <i class="fa fa-download mr-1"></i> Visualizar
                                            </a>
                                            
                                            <form action="{{ route('ideasun.equipe.apresentacao.remover', $equipe->id) }}" 
                                                  method="POST" style="display: inline-block" 
                                                  onsubmit="return confirm('Tem certeza que deseja remover esta apresentação?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash mr-1"></i> Remover
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <div class="upload-section">
                                        <form action="{{ route('ideasun.equipe.apresentacao.enviar') }}" method="POST" enctype="multipart/form-data" class="text-center">
                                            @csrf
                                            <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                                            
                                            <div class="upload-area">
                                                <i class="fa fa-cloud-upload fa-3x mb-3"></i>
                                                <h4>Envie sua Apresentação</h4>
                                                <p>Formatos aceitos: PDF, PPT, PPTX (Máximo 10MB)</p>
                                                
                                                <div class="custom-file-upload">
                                                    <input type="file" name="apresentacao" id="apresentacao_file" class="file-input" accept=".pdf,.ppt,.pptx" required>
                                                    <label for="apresentacao_file" class="btn btn-outline-primary">
                                                        <i class="fa fa-file mr-2"></i>Selecionar Arquivo
                                                    </label>
                                                </div>
                                                
                                                <div id="file-details" style="display: none;" class="mt-3">
                                                    <p><strong>Arquivo selecionado:</strong> <span id="file-name"></span></p>
                                                    <p><strong>Tamanho:</strong> <span id="file-size"></span></p>
                                                </div>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary mt-4">
                                                <i class="fa fa-upload mr-2"></i> Enviar Apresentação
                                            </button>
                                        </form>
                                    </div>
                                @endif
                                
                                <div class="alert alert-info mt-4">
                                    <i class="fa fa-info-circle mr-2"></i>
                                    <strong>Dicas para sua apresentação:</strong>
                                    <ul class="mb-0 mt-2">
                                        <li>Seu pitch deve ter entre 5-10 slides</li>
                                        <li>Seja claro e objetivo na apresentação do problema e solução</li>
                                        <li>Inclua imagens e esquemas para melhor compreensão</li>
                                        <li>Tamanho máximo do arquivo: 10MB</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-5">
                            <a href="{{ route('ideasun.equipe.gerenciar') }}" class="btn btn-outline-secondary mr-2">
                                <i class="fa fa-arrow-left mr-2"></i>Voltar para Equipes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Aplicar máscaras
            function aplicarMascaraTelefone(input) {
    $(input).on('input', function() {
        var phone = $(this).val().replace(/\D/g, '');
        var formatted = '';
        
        if (phone.length > 0) {
            formatted = '(' + phone.substring(0, 2);
            
            if (phone.length > 2) {
                if (phone.length > 7) {
                    // Formato (XX) XXXXX-XXXX para celular
                    formatted += ') ' + phone.substring(2, 7) + '-' + phone.substring(7, 15);
                } else {
                    // Formato (XX) XXXX-XXXX para telefone fixo
                    formatted += ') ' + phone.substring(2, 6) + '-' + phone.substring(6, 10);
                }
            } else {
                formatted += ')';
            }
        }
        
        $(this).val(formatted);
    });
}

// Use a função no seu telefone
aplicarMascaraTelefone('#telefone');
            
            // Sistema de abas
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            // ATENÇÃO: CORREÇÃO PARA O BOTÃO DE UPLOAD QUE NÃO FUNCIONA
            const fileInput = document.getElementById('apresentacao');
            const fileLabel = document.querySelector('.file-label');
            const fileInfo = document.getElementById('file-info');
            
            // Verificar se os elementos existem antes de adicionar os listeners
            if (fileInput && fileLabel) {
                // Método direto e simples para garantir que o clique funcione
                fileLabel.onclick = function(e) {
                    e.preventDefault();
                    console.log("Botão clicado - tentando acionar input file");
                    // Usar um pequeno delay para garantir que o evento seja processado
                    setTimeout(function() {
                        fileInput.click();
                    }, 0);
                    return false;
                };
                
                // Listener para o input file quando um arquivo é selecionado
                fileInput.addEventListener('change', function() {
                    console.log("Arquivo selecionado:", this.files[0] ? this.files[0].name : "nenhum");
                    if (this.files[0]) {
                        showFileInfo(this.files[0]);
                    }
                });
            } else {
                console.error("Elementos de upload não encontrados");
            }
            
            // Função para exibir informações do arquivo (mantida do código original)
            function showFileInfo(file) {
                // Mostrar informações do arquivo
                document.getElementById('file-name').textContent = file.name;
                
                // Formatação do tamanho do arquivo
                const size = file.size;
                if (size < 1024) {
                    document.getElementById('file-size').textContent = size + ' bytes';
                } else if (size < 1024 * 1024) {
                    document.getElementById('file-size').textContent = (size / 1024).toFixed(2) + ' KB';
                } else {
                    document.getElementById('file-size').textContent = (size / (1024 * 1024)).toFixed(2) + ' MB';
                }
                
                // Verificar tamanho máximo
                if (size > 50 * 1024 * 1024) {
                    alert('O arquivo é maior que 50MB. Por favor, selecione um arquivo menor.');
                    fileInput.value = '';
                    return;
                }
                
                // Mostrar seção de informações do arquivo
                fileInfo.style.display = 'block';
            }
            
            // Animar itens ao carregar a página
            const items = document.querySelectorAll('.membro-item');
            items.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
                item.classList.add('animate-fadeInUp');
            });
        });
        
        // Função para confirmar exclusão do arquivo
        function confirmarExclusao() {
            if (confirm('Tem certeza que deseja excluir esta apresentação?')) {
                document.getElementById('form-excluir-apresentacao').submit();
            }
        }
        
        function mostrarAba(abaId, elemento) {
            // Ocultar todos os conteúdos de abas
            document.querySelectorAll('.tab-content').forEach(function(content) {
                content.classList.remove('active');
            });
            
            // Remover classe ativa de todos os botões
            document.querySelectorAll('.tab-button').forEach(function(button) {
                button.classList.remove('active');
            });
            
            // Mostrar a aba selecionada
            document.getElementById(abaId).classList.add('active');
            
            // Marcar o botão como ativo
            elemento.classList.add('active');
            
            // Salvar a aba ativa no localStorage para persistir entre recarregamentos
            localStorage.setItem('activeTab', abaId);
            
            // Prevenir o comportamento padrão do link
            return false;
        }

        // Quando a página carregar, verificar se há uma aba salva
        document.addEventListener('DOMContentLoaded', function() {
            const savedTab = localStorage.getItem('activeTab');
            if (savedTab) {
                const tabButton = document.getElementById('tab-' + savedTab);
                if (tabButton) {
                    mostrarAba(savedTab, tabButton);
                }
            }
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fix for tab navigation
            function mostrarAba(abaId, elemento) {
                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(function(content) {
                    content.classList.remove('active');
                    content.style.display = 'none';  // Explicitly hide
                });
                
                // Remove active class from all buttons
                document.querySelectorAll('.tab-button').forEach(function(button) {
                    button.classList.remove('active');
                });
                
                // Show the selected tab and mark button as active
                var selectedTab = document.getElementById(abaId);
                if (selectedTab) {
                    selectedTab.classList.add('active');
                    selectedTab.style.display = 'block';  // Explicitly show
                    elemento.classList.add('active');
                    
                    // Save active tab to localStorage
                    localStorage.setItem('activeTab', abaId);
                }
            }
            
            // Expose the function globally
            window.mostrarAba = mostrarAba;
            
            // Initialize tabs from localStorage or default to 'estudantes'
            const savedTab = localStorage.getItem('activeTab') || 'estudantes';
            const tabButton = document.getElementById('tab-' + savedTab);
            if (tabButton) {
                mostrarAba(savedTab, tabButton);
            }
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Buscar os elementos necessários
            const fileInput = document.getElementById('apresentacao-file');
            const fileInfo = document.getElementById('file-info');
            const fileName = document.getElementById('file-name');
            const fileSize = document.getElementById('file-size');
            
            if (fileInput) {
                // Adicionar evento de mudança ao input file
                fileInput.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        const file = this.files[0];
                        
                        // Atualizar nome do arquivo
                        fileName.textContent = file.name;
                        
                        // Formatar e atualizar tamanho do arquivo
                        if (file.size < 1024) {
                            fileSize.textContent = file.size + ' bytes';
                        } else if (file.size < 1024 * 1024) {
                            fileSize.textContent = (file.size / 1024).toFixed(2) + ' KB';
                        } else {
                            fileSize.textContent = (file.size / (1024 * 1024)).toFixed(2) + ' MB';
                        }
                        
                        // Verificar tamanho máximo permitido
                        if (file.size > 50 * 1024 * 1024) {
                            alert('O arquivo é maior que 50MB. Por favor, selecione um arquivo menor.');
                            this.value = '';
                            return;
                        }
                        
                        // Mostrar a seção de informações do arquivo
                        fileInfo.style.display = 'block';
                        
                        // Rolar a página até as informações do arquivo
                        fileInfo.scrollIntoView({behavior: 'smooth', block: 'center'});
                    }
                });
            }
        });
    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Interceptar o envio do formulário para dar feedback imediato
        const uploadForm = document.getElementById('upload-form');
        
        if (uploadForm) {
            uploadForm.addEventListener('submit', function(e) {
                // Verificar tamanho do arquivo antes de enviar
                const fileInput = document.getElementById('apresentacao-file');
                if (fileInput.files[0] && fileInput.files[0].size > 15 * 1024 * 1024) { // 15MB
                    e.preventDefault();
                    criarNotificacao('error', 'Arquivo muito grande', 
                        'O arquivo excede o limite máximo permitido de 15MB. Por favor, reduza o tamanho do arquivo.');
                    return false;
                }
                
                // Salvar referência à área de upload
                const uploadSection = document.getElementById('drop-area');
                const originalContent = uploadSection.innerHTML;
                uploadSection.dataset.originalContent = originalContent;
                
                // Substituir com mensagem de carregamento
                uploadSection.innerHTML = `
                    <div class="text-center py-4">
                        <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
                            <span class="sr-only">Carregando...</span>
                        </div>
                        <h4 class="mt-3">Enviando Apresentação...</h4>
                        <p class="text-muted">Por favor, aguarde enquanto enviamos seu arquivo.</p>
                        <div class="progress mt-3" style="height: 10px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                                role="progressbar" style="width: 100%" 
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                `;
                
                // Mostrar notificação de envio em andamento
                const notificacao = criarNotificacao('info', 'Enviando arquivo...', 
                    'O upload está em andamento. Por favor, não feche esta página.');
                
                // Configurar timeout para detectar falhas de upload
                window.uploadTimeout = setTimeout(function() {
                    // Restaurar conteúdo original se demorar muito
                    if (uploadSection.dataset.originalContent) {
                        uploadSection.innerHTML = uploadSection.dataset.originalContent;
                    }
                    
                    // Remover notificação anterior se existir
                    if (notificacao && notificacao.parentNode) {
                        notificacao.parentNode.removeChild(notificacao);
                    }
                    
                    // Mostrar erro
                    criarNotificacao('danger', 'Erro no upload', 
                        'O servidor demorou muito para responder. O arquivo pode ser muito grande. Tente reduzir o tamanho ou use outro formato.');
                }, 60000); // 1 minuto
            });
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Função para lidar com o upload de arquivo na aba de apresentação
        const fileInput = document.getElementById('apresentacao_file');
        
        if (fileInput) {
            fileInput.addEventListener('change', function() {
                const fileDetails = document.getElementById('file-details');
                const fileName = document.getElementById('file-name');
                const fileSize = document.getElementById('file-size');
                
                if (this.files && this.files[0]) {
                    const file = this.files[0];
                    
                    // Mostrar detalhes do arquivo
                    fileName.textContent = file.name;
                    
                    // Converter tamanho para KB ou MB
                    const size = file.size;
                    if (size < 1024 * 1024) {
                        fileSize.textContent = Math.round(size / 1024) + ' KB';
                    } else {
                        fileSize.textContent = (size / (1024 * 1024)).toFixed(2) + ' MB';
                        
                        // Verificar se o arquivo é maior que o permitido
                        if (size > 10 * 1024 * 1024) {
                            alert('O arquivo excede o tamanho máximo permitido de 10MB.');
                            this.value = ''; // Limpar o input
                            fileDetails.style.display = 'none';
                            return;
                        }
                    }
                    
                    // Exibir detalhes
                    fileDetails.style.display = 'block';
                } else {
                    fileDetails.style.display = 'none';
                }
            });
        }
        
        // Mostrar a aba ativa ou a aba de estudantes por padrão
        const showActiveTab = function() {
            const activeTab = localStorage.getItem('activeTab') || 'estudantes';
            const tabButton = document.getElementById('tab-' + activeTab);
            
            if (tabButton) {
                mostrarAba(activeTab, tabButton);
            }
        };
        
        // Inicializar abas
        showActiveTab();
    });
    
    // Função para alternar entre abas
    function mostrarAba(abaId, elemento) {
        // Esconder todos os conteúdos
        document.querySelectorAll('.tab-content').forEach(function(content) {
            content.classList.remove('active');
        });
        
        // Remover classe ativa de todos os botões
        document.querySelectorAll('.tab-button').forEach(function(button) {
            button.classList.remove('active');
        });
        
        // Mostrar o conteúdo selecionado
        document.getElementById(abaId).classList.add('active');
        
        // Marcar o botão como ativo
        elemento.classList.add('active');
        
        // Salvar a aba ativa no localStorage
        localStorage.setItem('activeTab', abaId);
    }
</script>
</body>
</html>