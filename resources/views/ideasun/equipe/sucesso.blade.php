<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Concluído - IDEASUN 2025</title>
    
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
        
        .sucesso-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
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
            background-attachment: fixed;
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
            margin-bottom: 30px;
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
            margin-bottom: 15px;
        }
        
        /* Informações da equipe */
        .info-card {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .info-card h4 {
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.4rem;
        }
        
        .info-card h4::after {
            content: "";
            display: block;
            width: 40px;
            height: 3px;
            background: #e62b1e;
            margin-top: 10px;
        }
        
        .info-card p {
            margin-bottom: 10px;
        }
        
        .info-card p:last-child {
            margin-bottom: 0;
        }
        
        /* ID da equipe */
        .equipe-id-card {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 20px;
            margin: 30px 0;
            border-left: 4px solid #17a2b8;
            text-align: center;
        }
        
        .hash-display {
            background-color: #f1f3f5;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Consolas', monospace;
            font-size: 18px;
            word-break: break-all;
            margin: 15px 0;
            color: #333;
            border: 1px dashed #ddd;
        }
        
        /* Membros */
        .membro-item {
            background-color: #f9f9fa;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-left: 4px solid #e62b1e;
            transition: all 0.3s ease;
        }
        
        .membro-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .membro-item h5 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
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
        
        /* Botões */
        .btn {
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin: 5px;
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
        
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            box-shadow: 0 4px 10px rgba(108, 117, 125, 0.3);
        }
        
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(108, 117, 125, 0.3);
        }
        
        .btn-outline-primary {
            color: #e62b1e;
            border-color: #e62b1e;
        }
        
        .btn-outline-primary:hover {
            background-color: #e62b1e;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(230, 43, 30, 0.2);
        }
        
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            box-shadow: 0 4px 10px rgba(23, 162, 184, 0.3);
        }
        
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(23, 162, 184, 0.3);
        }
        
        .btn-action {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        
        .btn-copy {
            padding: 8px 20px;
            font-size: 0.9rem;
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
        
        .copied-message {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            z-index: 1000;
            display: none;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')
    
    <div class="copied-message" id="copiedMessage">
        <i class="fa fa-check-circle mr-2"></i>Copiado para a área de transferência!
    </div>

    <section class="sucesso-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="sucesso-card animate-fadeInUp">
                        <div class="sucesso-header">
                            <i class="fa fa-check-circle check-icon"></i>
                            <h2>Registro Concluído com Sucesso!</h2>
                            <p class="lead">A equipe {{ $equipe->nome }} foi registrada com sucesso no IDEASUN 2025.</p>
                            <p>Guarde as informações abaixo para acesso futuro.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-card">
                                    <h4><i class="fa fa-users mr-2"></i>Informações da Equipe</h4>
                                    <p><strong>Nome:</strong> {{ $equipe->nome }}</p>
                                    <p><strong>Modalidade:</strong> {{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</p>
                                    <p><strong>Cidade:</strong> {{ $equipe->cidade->nome }}</p>
                                    <p><strong>Instituição:</strong> {{ $equipe->instituicao }}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="info-card">
                                    <h4><i class="fa fa-user mr-2"></i>Informações do Responsável</h4>
                                    <p><strong>Nome:</strong> {{ $equipe->responsavel_nome }}</p>
                                    <p><strong>E-mail:</strong> {{ $equipe->responsavel_email }}</p>
                                    <p><strong>Telefone:</strong> {{ $equipe->responsavel_telefone }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="equipe-id-card">
                            <h4><i class="fa fa-key mr-2"></i>Código de Acesso da Equipe</h4>
                            <p>Guarde este código para acessar a plataforma e gerenciar sua equipe:</p>
                            
                            <div class="hash-display">
                                <span id="equipeId">{{ $equipe->equipe_id }}</span>
                            </div>
                            
                            <button class="btn btn-outline-primary btn-copy" onclick="copyToClipboard('{{ $equipe->equipe_id }}')">
                                <i class="fa fa-copy mr-2"></i>Copiar Código
                            </button>
                        </div>
                        
                        <hr class="my-4">
                        
                        <div class="mb-4">
                            <h4 class="mb-3"><i class="fa fa-users mr-2"></i>Membros da Equipe</h4>
                            
                            <div class="row">
                                @forelse($equipe->membros as $membro)
                                    <div class="col-md-6">
                                        <div class="membro-item">
                                            <h5>
                                                {{ $membro->nome }}
                                                <span class="badge {{ $membro->funcao == 'professor' ? 'badge-primary' : 'badge-secondary' }}">
                                                    {{ $membro->funcao == 'professor' ? 'Professor' : 'Estudante' }}
                                                </span>
                                            </h5>
                                            
                                            <div class="membro-info">
                                                <p><i class="fa fa-envelope-o mr-2"></i>{{ $membro->email ?? 'Não informado' }}</p>
                                                <p><i class="fa fa-phone mr-2"></i>{{ $membro->telefone ?? 'Não informado' }}</p>
                                                
                                                @if($membro->responsavel_equipe)
                                                    <span class="badge badge-success">
                                                        <i class="fa fa-star mr-1"></i>Responsável pela Equipe
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <div class="alert alert-warning">
                                            <i class="fa fa-exclamation-triangle mr-2"></i>
                                            Nenhum membro cadastrado para esta equipe.
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        
                        <div class="text-center mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <a href="{{ route('ideasun.cidade.dashboard') }}" class="btn btn-info btn-action btn-block mb-3">
                                        <i class="fa fa-th-large mr-2"></i>Dashboard
                                    </a>
                                </div>
                                
                                <div class="col-md-4">
                                    <a href="{{ route('ideasun.equipe.membros', ['equipe_id' => $equipe->equipe_id]) }}" class="btn btn-secondary btn-action btn-block mb-3">
                                        <i class="fa fa-users mr-2"></i>Gerenciar Membros
                                    </a>
                                </div>
                                
                                <div class="col-md-4">
                                    <a href="{{ route('ideasun.materiais') }}" class="btn btn-primary btn-action btn-block mb-3">
                                        <i class="fa fa-file-text-o mr-2"></i>Acessar Materiais
                                    </a>
                                </div>
                            </div>
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
    
    <script>
        function copyToClipboard(text) {
            // Cria um campo temporário
            var tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            
            // Seleciona o conteúdo
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // Para dispositivos móveis
            
            // Copia o texto
            document.execCommand("copy");
            
            // Remove o campo
            document.body.removeChild(tempInput);
            
            // Mostrar mensagem de sucesso
            const copiedMessage = document.getElementById('copiedMessage');
            copiedMessage.style.display = 'block';
            
            setTimeout(() => {
                copiedMessage.style.opacity = '1';
            }, 100);
            
            setTimeout(() => {
                copiedMessage.style.opacity = '0';
                setTimeout(() => {
                    copiedMessage.style.display = 'none';
                }, 300);
            }, 2000);
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            // Animar itens ao carregar a página
            const items = document.querySelectorAll('.membro-item, .info-card, .equipe-id-card');
            items.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1 + 0.3}s`;
                item.classList.add('animate-fadeInUp');
            });
        });
    </script>
</body>
</html>