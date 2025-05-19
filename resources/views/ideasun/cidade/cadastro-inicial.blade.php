<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Inicial da Cidade - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Estilos do card principal */
        .cadastro-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .cadastro-section::before {
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
            margin-top: 10px;
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
            background-color: rgba(230, 43, 30, 0.05);
            border-color: #e62b1e;
            box-shadow: 0 5px 10px rgba(230, 43, 30, 0.1);
        }
        
        .modalidade-option input[type="checkbox"]:checked + label::before {
            background-color: #e62b1e;
            border-color: #e62b1e;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff'%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E");
            background-size: 14px;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .submit-button {
            text-align: center;
            margin-top: 30px;
        }
        
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 14px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.2);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #d01a0f;
            border-color: #d01a0f;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 43, 30, 0.3);
        }
        
        .required-note {
            color: #e62b1e;
            font-size: 0.85rem;
            margin-top: 30px;
            text-align: center;
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
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="cadastro-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cadastro-card">
                        <div class="cadastro-header">
                            <h2>Cadastro da Cidade</h2>
                            <p>Bem-vindo! Complete as informações da sua cidade para continuar.</p>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle mr-2"></i> {{ session('error') }}
                            </div>
                        @endif
                        
                        <div class="cidade-info mb-4">
                            <h5><i class="fa fa-map-marker mr-2"></i>{{ $cidade->nome }} - {{ $cidade->estado }}</h5>
                            <p class="mb-0">Categoria de distância: {{ $cidade->distancia_categoria }}</p>
                        </div>
                        
                        <form action="{{ route('ideasun.cidade.salvar-cadastro-inicial') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="mb-3">Dados do Representante</h5>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="representante_nome">
                                            <i class="fa fa-user mr-2"></i>Nome do Representante <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control @error('representante_nome') is-invalid @enderror" 
                                            id="representante_nome" name="representante_nome" 
                                            value="{{ old('representante_nome') }}" required>
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
                                            value="{{ old('representante_email') }}" required>
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
                                            value="{{ old('representante_telefone') }}" 
                                            placeholder="(00) 00000-0000" required>
                                        @error('representante_telefone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <h5 class="mb-3">Modalidades de Participação <span class="text-danger">*</span></h5>
                                    <p class="text-muted">Selecione as modalidades nas quais sua cidade participará:</p>
                                    
                                    <div class="modalidades-container">
                                        <div class="modalidade-option">
                                            <input type="checkbox" id="educacao_especial" name="modalidades[]" value="educacao_especial" 
                                                {{ in_array('educacao_especial', old('modalidades', [])) ? 'checked' : '' }}>
                                            <label for="educacao_especial">Educação Especial</label>
                                        </div>
                                        
                                        <div class="modalidade-option">
                                            <input type="checkbox" id="fundamental_1" name="modalidades[]" value="fundamental_1" 
                                                {{ in_array('fundamental_1', old('modalidades', [])) ? 'checked' : '' }}>
                                            <label for="fundamental_1">Ensino Fundamental I</label>
                                        </div>
                                        
                                        <div class="modalidade-option">
                                            <input type="checkbox" id="fundamental_2" name="modalidades[]" value="fundamental_2" 
                                                {{ in_array('fundamental_2', old('modalidades', [])) ? 'checked' : '' }}>
                                            <label for="fundamental_2">Ensino Fundamental II</label>
                                        </div>
                                        
                                        <div class="modalidade-option">
                                            <input type="checkbox" id="medio_tecnico" name="modalidades[]" value="medio_tecnico" 
                                                {{ in_array('medio_tecnico', old('modalidades', [])) ? 'checked' : '' }}>
                                            <label for="medio_tecnico">Ensino Médio/Técnico</label>
                                        </div>
                                        
                                        <div class="modalidade-option">
                                            <input type="checkbox" id="ensino_superior" name="modalidades[]" value="ensino_superior" 
                                                {{ in_array('ensino_superior', old('modalidades', [])) ? 'checked' : '' }}>
                                            <label for="ensino_superior">Ensino Superior</label>
                                        </div>
                                    </div>
                                    
                                    @error('modalidades')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="note-box">
                                <i class="fa fa-info-circle"></i> Após o cadastro, você será direcionado para o dashboard, 
                                onde poderá agendar o treinamento obrigatório para participação.
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

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Máscara para telefone
            $('#representante_telefone').on('input', function() {
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
            
            // Validar pelo menos uma modalidade selecionada
            $('form').on('submit', function(e) {
                if ($('input[name="modalidades[]"]:checked').length === 0) {
                    e.preventDefault();
                    alert('Por favor, selecione pelo menos uma modalidade de participação.');
                }
            });
        });
    </script>
</body>
</html>