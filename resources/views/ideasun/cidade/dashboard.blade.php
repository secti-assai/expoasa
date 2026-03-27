<!-- filepath: /home/kawan/Documents/VDS/expoasa/resources/views/ideasun/cidade/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard da Cidade - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
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

        .dashboard-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
        }
        
        .dashboard-section::before {
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
        
        .dashboard-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
        }
        
        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .dashboard-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .dashboard-header h2::after {
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
            margin-bottom: 20px;
            border-left: 4px solid #e62b1e;
        }
        
        .equipe-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
            transition: all 0.3s ease;
        }
        
        .equipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .equipe-id {
            background-color: #e9ecef;
            display: inline-block;
            padding: 3px 10px;
            border-radius: 5px;
            font-family: monospace;
            margin-bottom: 5px;
        }
        
        .action-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid #17a2b8;
            display: block;
            color: #333;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .action-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-decoration: none;
            color: #333;
        }
        
        .action-card i {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #17a2b8;
        }
        
        .action-card h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .action-card p {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .treinamento-card {
            border-left: 4px solid #ffc107;
        }
        
        .treinamento-card i {
            color: #ffc107;
        }
        
        .materiais-card {
            border-left: 4px solid #17a2b8;
        }
        
        .materiais-card i {
            color: #17a2b8;
        }
        
        .editar-card {
            border-left: 4px solid #6c757d;
        }
        
        .editar-card i {
            color: #6c757d;
        }
        
        .success-card {
            border-left: 4px solid #28a745;
        }
        
        .success-card i {
            color: #28a745;
        }

        /* ESTILOS COMUNS PARA TODAS AS VIEWS */

        /* Fontes e Espaçamentos */
        body {
          font-family: 'Poppins', sans-serif;
          color: #333;
          line-height: 1.7;
        }

        h1, h2, h3, h4, h5, h6 {
          font-weight: 700;
          line-height: 1.3;
        }

        /* Cards com estilo consistente */
        .card {
          border: none;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
          transition: all 0.3s ease;
        }

        .card:hover {
          transform: translateY(-5px);
          box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        /* Seções com padrão consistente */
        .section-header {
          text-align: center;
          margin-bottom: 40px;
        }

        .section-header h2 {
          font-size: 2.2rem;
          position: relative;
          padding-bottom: 15px;
        }

        .section-header h2::after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          width: 80px;
          height: 3px;
          background: #e62b1e;
        }

        /* Botões com estilo consistente */
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
          background-color: #d81d11;
          border-color: #d81d11;
          transform: translateY(-3px);
          box-shadow: 0 8px 15px rgba(230, 43, 30, 0.4);
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
          box-shadow: 0 8px 15px rgba(108, 117, 125, 0.4);
        }

        /* Efeitos de animação na página */
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

        .animate-fadeInUp {
          animation: fadeInUp 0.5s ease forwards;
        }

        /* Delay para animações em cascata */
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        /* Ajustes para dispositivos móveis */
        @media (max-width: 768px) {
          .section-header h2 {
            font-size: 1.8rem;
          }
          
          .btn {
            padding: 8px 20px;
            font-size: 0.9rem;
          }
        }

        /* Estilo para o ID da Cidade */
        .cidade-id-card {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            border-left: 4px solid #17a2b8;
        }
        
        .cidade-id-display {
            background-color: #e9ecef;
            padding: 10px 15px;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            margin-top: 5px;
            font-family: monospace;
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .cidade-id-display .btn-copy {
            margin-left: 10px;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        /* Adicionar estilo específico para o card de Agendar Banca */
        .banca-card {
            border-left: 4px solid #9c27b0;
        }
        
        .banca-card i {
            color: #9c27b0;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="dashboard-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dashboard-card">
                        <div class="dashboard-header">
                            <h2>Dashboard da Cidade</h2>
                            <p>Seja bem-vindo ao seu painel de controle do IDEASUN 2026.</p>
                        </div>
                        
                        <div class="cidade-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4><i class="fa fa-building mr-2"></i>{{ $cidade->nome }} - {{ $cidade->estado }}</h4>
                                    <p><strong>Responsável:</strong> {{ $cidade->representante_nome }}</p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p><strong>Email:</strong> {{ $cidade->representante_email }}</p>
                                    <p><strong>Telefone:</strong> {{ $cidade->representante_telefone }}</p>
                                </div>
                            </div>
                            
                            <!-- Bloco para exibir o ID da cidade -->
                            <div class="cidade-id-card mt-3">
                                <h5><i class="fa fa-key mr-2"></i>ID da Cidade</h5>
                                <p>Use este ID para criar equipes ou acessar a plataforma:</p>
                                <div class="cidade-id-display">
                                    <span id="cidadeId">{{ $cidade->cidade_id }}</span>
                                    <button class="btn btn-sm btn-outline-primary btn-copy" onclick="copyToClipboard('{{ $cidade->cidade_id }}')">
                                        <i class="fa fa-copy"></i>
                                    </button>
                                </div>
                                
                                <div class="mt-3">
                                    <p><i class="fa fa-info-circle mr-2"></i>Para criar equipes, faça login na <a href="{{ route('ideasun.login') }}">área de equipes</a> usando este ID e a senha da cidade.</p>
                                </div>
                            </div>
                        </div>
                        
                        <h4 class="mt-4 mb-3"><i class="fa fa-users mr-2"></i>Suas Equipes</h4>
                        <div class="row">
                            @forelse($cidade->equipes as $equipe)
                                <div class="col-md-6">
                                    <div class="equipe-card">
                                        <div class="equipe-id">ID: {{ $equipe->equipe_id }}</div>
                                        <h5>{{ $equipe->nome }}</h5>
                                        <p class="mb-0 text-muted">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle mr-2"></i> Você ainda não tem equipes registradas.
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        
                        <h4 class="mt-4 mb-3"><i class="fa fa-cogs mr-2"></i>Ações Rápidas</h4>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <a href="{{ route('ideasun.cidade.editar') }}" class="action-card editar-card">
                                    <i class="fa fa-pencil"></i>
                                    <h4>Editar Cadastro</h4>
                                    <p>Atualize seus dados ou adicione novas modalidades.</p>
                                </a>
                            </div>
                            
                            @if($cidade->treinamento_requerido && !$cidade->treinamento_agendado)
                                <div class="col-md-6">
                                    <a href="{{ route('ideasun.cidade.treinamento') }}" class="action-card treinamento-card">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <h4>Agendar Treinamento</h4>
                                        <p>Escolha uma data para o treinamento da sua equipe.</p>
                                    </a>
                                </div>
                            @elseif($cidade->treinamento_agendado)
                                <div class="col-md-6">
                                    <div class="action-card treinamento-card">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <h4>Treinamento Agendado</h4>
                                        @php
                                            $dataAgendamento = \Carbon\Carbon::parse($cidade->treinamento_agendado);
                                            $hora = (int)$dataAgendamento->format('H');
                                            $periodo = $hora < 12 ? 'Manhã' : 'Tarde';
                                        @endphp
                                        <p>Seu treinamento está marcado para {{ $dataAgendamento->format('d/m/Y') }} no período da {{ $periodo }}</p>
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-6">
                                <a href="{{ route('ideasun.cidade.agendar-banca') }}" class="action-card banca-card">
                                    <i class="fa fa-comments"></i>
                                    <h4>Agendar Banca</h4>
                                    <p>Escolha uma data para apresentação dos pitches das suas equipes.</p>
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
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>

    <!-- Script para copiar o ID -->
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text)
                .then(() => {
                    alert('ID copiado para a área de transferência!');
                })
                .catch(err => {
                    console.error('Erro ao copiar: ', err);
                });
        }
    </script>
</body>
</html>