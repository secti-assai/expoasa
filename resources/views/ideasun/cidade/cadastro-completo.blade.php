<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Completo - IDEASUN</title>
    
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
        .cadastro-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative; /* Adicionado position relative */
            z-index: 0; /* Garante que a seção tenha um stacking context próprio */
        }
        
        .cadastro-section::before {
            content: "";
            position: fixed; /* Alterado de absolute para fixed */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Mantém a imagem fixa durante o scroll */
            opacity: 0.15;
            z-index: -1; /* Garante que fique atrás do conteúdo */
        }
        
        .cadastro-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .cadastro-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #e62b1e;
            border-radius: 15px 15px 0 0;
        }
        
        .cadastro-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .cadastro-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .cadastro-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 20px;
        }
        
        .cidade-info {
            background-color: #f8f9fa;
            border-left: 4px solid #e62b1e;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .form-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #28a745;
        }
        
        .form-section h4 {
            color: #28a745;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: none;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #e62b1e;
            box-shadow: 0 0 0 0.2rem rgba(230, 43, 30, 0.15);
        }
        
        .modalidades-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        
        .modalidade-option {
            position: relative;
        }
        
        .modalidade-option input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .modalidade-option label {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 8px;
            background-color: #f9f9f9;
            border: 1px solid #e1e1e1;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .modalidade-option label::before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .modalidade-option input[type="checkbox"]:checked + label {
            background-color: rgba(40, 167, 69, 0.1);
            border-color: #28a745;
            box-shadow: 0 5px 10px rgba(40, 167, 69, 0.1);
        }
        
        .modalidade-option input[type="checkbox"]:checked + label::before {
            background-color: #28a745;
            border-color: #28a745;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E");
            background-size: 14px;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .submit-button {
            text-align: center;
            margin-top: 40px;
        }
        
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 12px 35px;
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
        
        .required-note {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .note-box {
            background-color: #fff7f7;
            border: 1px dashed #e62b1e;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            text-align: center;
        }
        
        .note-box i {
            color: #e62b1e;
            font-size: 1.2rem;
            margin-right: 5px;
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

    <section class="cadastro-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cadastro-card animate-fadeInUp">
                        <div class="cadastro-header">
                            <h2>Cadastro Completo da Cidade</h2>
                            <p>Complete todas as informações da sua cidade para continuar.</p>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle mr-2"></i> {{ session('error') }}
                            </div>
                        @endif
                        
                        <div class="cidade-info mb-4">
                            <h5><i class="fa fa-map-marker mr-2"></i>{{ $cidade->nome }} - {{ $cidade->estado }}</h5>
                            <p class="mb-0">ID da Cidade: <strong>{{ $cidade->cidade_id }}</strong></p>
                            <p class="mb-0">Categoria de distância: {{ $cidade->distancia_categoria }}</p>
                        </div>
                        
                        <form action="{{ route('ideasun.cidade.salvar-cadastro-completo') }}" method="POST">
                            @csrf
                            
                            <div class="form-section">
                                <h4><i class="fa fa-user-circle mr-2"></i>Dados do Representante</h4>
                                <p class="text-muted small">Pessoa responsável pelo cadastro e comunicação principal.</p>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="representante_nome">
                                                <i class="fa fa-user mr-2"></i>Nome do Representante <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('representante_nome') is-invalid @enderror" 
                                                id="representante_nome" name="representante_nome" 
                                                value="{{ old('representante_nome', $cidade->representante_nome) }}" required>
                                            @error('representante_nome')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="representante_email">
                                                <i class="fa fa-envelope mr-2"></i>E-mail do Representante <span class="text-danger">*</span>
                                            </label>
                                            <input type="email" class="form-control @error('representante_email') is-invalid @enderror" 
                                                id="representante_email" name="representante_email" 
                                                value="{{ old('representante_email', $cidade->representante_email) }}" required>
                                            @error('representante_email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="representante_telefone">
                                                <i class="fa fa-phone mr-2"></i>Telefone do Representante <span class="text-danger">*</span>
                                            </label>
                                            <input type="tel" class="form-control @error('representante_telefone') is-invalid @enderror" 
                                                id="representante_telefone" name="representante_telefone" 
                                                value="{{ old('representante_telefone', $cidade->representante_telefone) }}" 
                                                placeholder="(00) 00000-0000" required>
                                            @error('representante_telefone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-section">
                                <h4><i class="fa fa-users mr-2"></i>Dados da Prefeitura</h4>
                                <p class="text-muted small">Informações dos representantes da prefeitura.</p>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="prefeito_nome">
                                                <i class="fa fa-user mr-2"></i>Nome do Prefeito <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('prefeito_nome') is-invalid @enderror" 
                                                id="prefeito_nome" name="prefeito_nome" 
                                                value="{{ old('prefeito_nome', $cidade->prefeito_nome) }}" required>
                                            @error('prefeito_nome')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="secretario_nome">
                                                <i class="fa fa-user mr-2"></i>Nome do Secretário de Educação <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('secretario_nome') is-invalid @enderror" 
                                                id="secretario_nome" name="secretario_nome" 
                                                value="{{ old('secretario_nome', $cidade->secretario_nome) }}" required>
                                            @error('secretario_nome')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="secretario_email">
                                                <i class="fa fa-envelope mr-2"></i>E-mail da Secretaria de Educação
                                            </label>
                                            <input type="email" class="form-control @error('secretario_email') is-invalid @enderror" 
                                                id="secretario_email" name="secretario_email" 
                                                value="{{ old('secretario_email', $cidade->secretario_email) }}">
                                            @error('secretario_email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="secretario_telefone">
                                                <i class="fa fa-phone mr-2"></i>Telefone da Secretaria de Educação
                                            </label>
                                            <input type="tel" class="form-control @error('secretario_telefone') is-invalid @enderror" 
                                                id="secretario_telefone" name="secretario_telefone" 
                                                value="{{ old('secretario_telefone', $cidade->secretario_telefone) }}" 
                                                placeholder="(00) 00000-0000">
                                            @error('secretario_telefone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-section">
                                <h4><i class="fa fa-graduation-cap mr-2"></i>Modalidades de Participação</h4>
                                <div class="alert alert-info">
                                    <i class="fa fa-info-circle mr-2"></i>Sua cidade está registrada para participar em todas as modalidades disponíveis. Você poderá ajustar as modalidades posteriormente na página de edição do cadastro.
                                </div>
                            </div>
                            
                            <div class="form-section">
                                <h4><i class="fa fa-calendar-check-o mr-2"></i>Treinamento</h4>
                                <p class="text-muted small">Informe se deseja receber treinamento presencial para o evento.</p>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="necessita_treinamento" name="necessita_treinamento" value="1" {{ old('necessita_treinamento', $cidade->treinamento_requerido ? 'checked' : '') }}>
                                    <label class="form-check-label" for="necessita_treinamento">
                                        Gostaria de receber treinamento presencial para o evento
                                    </label>
                                    <div class="text-muted small mt-2">
                                        <i class="fa fa-info-circle mr-2"></i>O treinamento será realizado na semana anterior ao evento, conforme disponibilidade.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="note-box">
                                <i class="fa fa-info-circle"></i> Após o cadastro completo, você será direcionado para o dashboard, 
                                onde poderá gerenciar suas equipes e configurar outras opções do evento.
                            </div>
                            
                            <div class="submit-button">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-save mr-2"></i>Salvar e Ir para Dashboard
                                </button>
                            </div>
                            
                            <p class="required-note">
                                <i class="fa fa-info-circle mr-1"></i> Campos marcados com <span class="text-danger">*</span> são obrigatórios.
                            </p>
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
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Máscara para telefone
            function aplicarMascaraTelefone(input) {
                var phone = $(input).val().replace(/\D/g, '');
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
                
                $(input).val(formatted);
            }
            
            // Aplicar máscara a todos os campos de telefone
            $('#representante_telefone, #prefeito_telefone, #secretario_telefone').on('input', function() {
                aplicarMascaraTelefone(this);
            });
            
            // Aplicar máscara inicial se houver valores
            $('#representante_telefone, #prefeito_telefone, #secretario_telefone').each(function() {
                if ($(this).val()) {
                    aplicarMascaraTelefone(this);
                }
            });
        });
    </script>
</body>
</html>