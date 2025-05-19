<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Equipe - IDEASUN</title>
    
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
        
        /* Estilos do card principal */
        .criar-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        .criar-section::before {
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
        
        .criar-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .criar-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #e62b1e;
            border-radius: 15px 15px 0 0;
        }
        
        .criar-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .criar-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .criar-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 20px;
        }
        
        .modalidade-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #e1e1e1;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .modalidade-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .modalidade-card.selected {
            background-color: rgba(40, 167, 69, 0.1);
            border-color: #28a745;
            border-left-width: 4px;
        }
        
        .modalidade-card h5 {
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .modalidade-card .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .section-title {
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
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
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="criar-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="criar-card animate-fadeInUp">
                        <div class="criar-header">
                            <h2>Criar Nova Equipe</h2>
                            <p>{{ $cidade->nome }} - {{ $cidade->estado }}</p>
                        </div>
                        
                        <div class="alert alert-info">
                            <h5 class="mb-2"><i class="fa fa-info-circle mr-2"></i>Informações Importantes</h5>
                            <p>Você está registrando uma equipe para representar sua instituição de ensino no IDEASUN 2025.</p>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-triangle mr-2"></i>{{ session('error') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('ideasun.equipe.salvar') }}" method="post" id="equipeForm" enctype="multipart/form-data">
                            @csrf
                            
                            <h4 class="section-title">Selecione a Modalidade</h4>
                            
                            <div class="modalidades-wrapper">
                                <div class="row">
                                    @if(count($modalidades) > 0)
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
                                    @else
                                        <div class="col-12">
                                            <div class="alert alert-warning">
                                                <i class="fa fa-exclamation-triangle mr-2"></i>Não há modalidades disponíveis para esta cidade. Adicione modalidades no cadastro da cidade primeiro.
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <input type="hidden" name="modalidade" id="modalidade_selecionada">
                            
                            <div id="detalhes-equipe" style="display: none">
                                <hr class="my-4">
                                
                                <h4 class="section-title">Informações da Equipe</h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">
                                                <i class="fa fa-users mr-2"></i>Nome da Equipe
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
                                
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="resumo_ideia">
                                                <i class="fa fa-lightbulb-o mr-2"></i>Resumo da Ideia <small class="text-muted">(máx. 500 caracteres)</small>
                                            </label>
                                            <textarea class="form-control" id="resumo_ideia" name="resumo_ideia" maxlength="500" rows="4" 
                                                      placeholder="Descreva brevemente a ideia ou projeto que sua equipe pretende desenvolver"></textarea>
                                            <small class="form-text text-muted">
                                                <span id="char-counter">500</span> caracteres restantes
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr class="my-4">
                                
                                <h4 class="section-title">Dados do Responsável</h4>
                                
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
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_telefone">
                                                <i class="fa fa-phone mr-2"></i>Telefone
                                            </label>
                                            <input type="text" class="form-control" id="responsavel_telefone" name="responsavel_telefone" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Documentos do Responsável -->
                                <div class="form-section mt-4">
                                    <h5 class="mb-3"><i class="fa fa-file-pdf-o mr-2"></i>Documentos Obrigatórios</h5>
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle mr-2"></i>Por favor, envie os seguintes documentos em formato PDF, PNG ou JPG:
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="doc_termo_aceite">
                                                    <i class="fa fa-file-text mr-2"></i>Termo de aceite de participação <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="form-control-file" id="doc_termo_aceite" name="doc_termo_aceite" 
                                                    accept=".pdf,.png,.jpg,.jpeg" required>
                                                <small class="form-text text-muted">Termo de aceite de participação nas etapas presenciais do IDEASUN</small>
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

    @include('ideasun.partials.footer')

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
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
            
            document.getElementById('nome').value = '';
            
            // Limpar campos do responsável
            document.getElementById('responsavel_nome').value = '';
            document.getElementById('responsavel_email').value = '';
            document.getElementById('responsavel_telefone').value = '';
            
            // Scroll suave até o restante do formulário
            document.getElementById('detalhes-equipe').scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
        
        document.addEventListener('DOMContentLoaded', function() {
            // Character counter for idea summary
            const resumoIdeia = document.getElementById('resumo_ideia');
            const charCounter = document.getElementById('char-counter');
            
            if (resumoIdeia) {
                resumoIdeia.addEventListener('input', function() {
                    const remaining = 500 - this.value.length;
                    charCounter.textContent = remaining;
                    
                    // Change color when approaching limit
                    if (remaining < 100) {
                        charCounter.style.color = '#e62b1e';
                    } else {
                        charCounter.style.color = '';
                    }
                });
            }
        });
    </script>
</body>
</html>