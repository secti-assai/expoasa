<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipe - IDEASUN 2026</title>
    
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
        
        .registro-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .registro-section::before {
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
        
        .registro-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
        }
        
        .registro-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .registro-header h2 {
            color: #333;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .registro-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 0;
        }
        
        /* Cartões de modalidade */
        .modalidades-wrapper {
            margin: 30px 0;
        }
        
        .modalidade-card {
            background-color: #f9f9fa;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .modalidade-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: #e62b1e;
        }
        
        .modalidade-card h5 {
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .modalidade-card.disabled {
            opacity: 0.6;
            cursor: not-allowed;
            background-color: #f0f0f0;
        }
        
        .modalidade-card.disabled:hover {
            transform: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-color: transparent;
        }
        
        .modalidade-card.selected {
            border-color: #e62b1e;
            background-color: rgba(230, 43, 30, 0.05);
            box-shadow: 0 10px 25px rgba(230, 43, 30, 0.15);
        }
        
        .badge {
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.75rem;
        }
        
        .badge-success {
            background-color: #28a745;
        }
        
        .badge-secondary {
            background-color: #6c757d;
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
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
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
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #5a6268;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(108, 117, 125, 0.3);
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
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.1);
            border-left: 4px solid #dc3545;
            color: #dc3545;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="registro-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="registro-card animate-fadeInUp">
                        <div class="registro-header">
                            <h2>Registro de Equipe</h2>
                            <p class="lead text-muted">{{ $cidade->nome }} - {{ $cidade->estado }}</p>
                        </div>
                        
                        <div class="alert alert-info">
                            <h5 class="mb-2"><i class="fa fa-info-circle mr-2"></i>Informações Importantes</h5>
                            <p>Você está registrando uma equipe para representar sua instituição de ensino no IDEASUN 2026.</p>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-triangle mr-2"></i>{{ session('error') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('ideasun.equipe.store') }}" method="post" id="equipeForm">
                            @csrf
                            <input type="hidden" name="cidade_id" value="{{ $cidade->id }}">
                            <input type="hidden" name="modalidade" id="modalidade_selecionada">
                            
                            <h4 class="section-title">Selecione a Modalidade</h4>
                            
                            <div class="modalidades-wrapper">
                                <div class="row">
                                    @foreach($modalidades as $key => $nome)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="modalidade-card" 
                                                 data-modalidade="{{ $key }}" 
                                                 onclick="selecionarModalidade(this)">
                                                <h5><i class="fa fa-graduation-cap mr-2"></i>{{ $nome }}</h5>
                                                
                                                <span class="badge badge-success">
                                                    <i class="fa fa-plus-circle mr-1"></i>Disponível
                                                </span>
                                                
                                                <p class="text-muted mt-2 mb-0">
                                                    @if($key == 'educacao_especial' || $key == 'fundamental_1' || $key == 'fundamental_2')
                                                        <small><i class="fa fa-users mr-1"></i>Equipe com 3-4 membros</small>
                                                    @else
                                                        <small><i class="fa fa-users mr-1"></i>Equipe com 4-5 membros</small>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div id="detalhes-equipe" style="display: none">
                                <hr class="my-4">
                                
                                <h4 class="section-title">Informações da Equipe</h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">
                                                <i class="fa fa-tag mr-2"></i>Nome da Equipe
                                            </label>
                                            <input type="text" class="form-control" id="nome" name="nome" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="instituicao">
                                                <i class="fa fa-university mr-2"></i>Instituição de Ensino
                                            </label>
                                            <input type="text" class="form-control" id="instituicao" name="instituicao" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr class="my-4">
                                
                                <h4 class="section-title">Responsável pela Equipe</h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">
                                                <i class="fa fa-user mr-2"></i>Nome Completo
                                            </label>
                                            <input type="text" class="form-control" id="responsavel_nome" name="responsavel_nome" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_email">
                                                <i class="fa fa-envelope mr-2"></i>E-mail
                                            </label>
                                            <input type="email" class="form-control" id="responsavel_email" name="responsavel_email" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_telefone">
                                                <i class="fa fa-phone mr-2"></i>Telefone
                                            </label>
                                            <input type="text" class="form-control" id="responsavel_telefone" name="responsavel_telefone" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-circle mr-2"></i>Registrar Equipe
                                    </button>
                                </div>
                            </div>
                        </form>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Aplicar máscaras
            $('#responsavel_telefone').mask('(00) 00000-0000');
        });
        
        // Atualizar a função selecionarModalidade para não verificar se já existe
        function selecionarModalidade(element) {
            // Remover seleção anterior
            const modalidades = document.querySelectorAll('.modalidade-card');
            modalidades.forEach(modalidade => {
                modalidade.classList.remove('selected');
            });
            
            // Selecionar modalidade atual
            element.classList.add('selected');
            
            // Definir o valor do input hidden
            const modalidade = element.getAttribute('data-modalidade');
            document.getElementById('modalidade_selecionada').value = modalidade;
            
            // Exibir o restante do formulário
            document.getElementById('detalhes-equipe').style.display = 'block';
            
            // Sugerir nome da equipe com base na modalidade
            const nomeCidade = '{{ $cidade->nome }}';
            let nomeEquipe = '';
            
            // Obter data e hora atual para tornar nome único
            const now = new Date();
            const timestamp = now.getHours() + '' + now.getMinutes() + '' + now.getSeconds();
            
            switch(modalidade) {
                case 'educacao_especial':
                    nomeEquipe = nomeCidade + ' - INSPIRA ' + timestamp;
                    break;
                case 'fundamental_1':
                    nomeEquipe = nomeCidade + ' - BRINCA ' + timestamp;
                    break;
                case 'fundamental_2':
                    nomeEquipe = nomeCidade + ' - IMAGINA ' + timestamp;
                    break;
                case 'medio_tecnico':
                    nomeEquipe = nomeCidade + ' - CRIA ' + timestamp;
                    break;
                case 'superior':
                    nomeEquipe = nomeCidade + ' - AVANÇA ' + timestamp;
                    break;
                default:
                    nomeEquipe = nomeCidade + ' - ' + modalidade.toUpperCase() + ' ' + timestamp;
            }
            
            document.getElementById('nome').value = nomeEquipe;
            
            // Scroll suave até o restante do formulário
            document.getElementById('detalhes-equipe').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    </script>
</body>
</html>