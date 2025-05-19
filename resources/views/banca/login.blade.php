<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Banca Avaliadora - IDEASUN</title>
    
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
            background-color: #f5f5f5;
        }
        
        .login-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        .login-section::before {
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
        
        .login-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .login-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #9c27b0;
            margin: 15px auto 20px;
        }
        
        .login-header p {
            color: #777;
            font-size: 1.1rem;
        }
        
        .logo-banca {
            margin-bottom: 20px;
            text-align: center;
        }
        
        .logo-banca img {
            height: 80px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            font-weight: 600;
            margin-bottom: 10px;
            color: #555;
            display: flex;
            align-items: center;
        }
        
        .form-group label i {
            margin-right: 10px;
            color: #9c27b0;
        }
        
        .form-control {
            height: auto;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #9c27b0;
            box-shadow: 0 0 0 0.2rem rgba(156, 39, 176, 0.25);
        }
        
        .btn-primary {
            background-color: #9c27b0;
            border-color: #9c27b0;
            border-radius: 50px;
            padding: 15px 35px;
            font-weight: 600;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(156, 39, 176, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #7b1fa2;
            border-color: #7b1fa2;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(156, 39, 176, 0.4);
        }
        
        .btn-secondary {
            background-color: transparent;
            border-color: #6c757d;
            color: #6c757d;
            border-radius: 50px;
            padding: 15px 35px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            background-color: #6c757d;
            color: #fff;
        }
        
        .form-footer {
            margin-top: 30px;
            text-align: center;
        }
        
        .form-footer p {
            color: #777;
            margin-bottom: 15px;
        }
        
        .form-footer .btn-link {
            color: #9c27b0;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .form-footer .btn-link:hover {
            color: #7b1fa2;
            text-decoration: underline;
        }
        
        .alert {
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 25px;
        }
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.1);
            border-left: 4px solid #dc3545;
            color: #dc3545;
        }
        
        .tipo-banca {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .tipo-banca-badge {
            display: inline-block;
            padding: 10px 25px;
            background-color: #9c27b0;
            color: #fff;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 50px;
            box-shadow: 0 3px 10px rgba(156, 39, 176, 0.3);
        }
    </style>
</head>
<body class="body-wrapper">

    <nav class="navbar main-nav fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('ideasun.index') }}">
                <img src="/assets/img/logo_ideasun.png" alt="IDEASUN" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="tf-ion-android-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ideasun.index') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ideasun.login') }}">Área Cidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="login-card">
                        <div class="logo-banca">
                            <img src="/assets/img/logo_ideasun.png" alt="IDEASUN 2025">
                        </div>
                        
                        <div class="login-header">
                            <h2>Banca Avaliadora</h2>
                            <p>Faça login para acessar o sistema de avaliação</p>
                        </div>
                        
                        <div class="tipo-banca">
                            <span class="tipo-banca-badge">IDEASUN 2025</span>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        <form action="{{ route('banca.autenticar') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label for="cpf">
                                    <i class="fa fa-id-card"></i> CPF
                                </label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF (somente números)" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="senha">
                                    <i class="fa fa-lock"></i> Senha
                                </label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-sign-in mr-2"></i>Entrar
                                </button>
                            </div>
                        </form>
                        
                        <div class="form-footer">
                            <p>Se você é um avaliador e não consegue acessar o sistema, entre em contato com a organização do evento.</p>
                            <a href="{{ route('ideasun.index') }}" class="btn-link">
                                <i class="fa fa-arrow-left mr-2"></i>Voltar para o site
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Máscara para CPF
            $('#cpf').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.substr(0, 11);
                }
                
                if (value.length > 9) {
                    value = value.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})$/, "$1.$2.$3-$4");
                } else if (value.length > 6) {
                    value = value.replace(/^(\d{3})(\d{3})(\d{0,3})/, "$1.$2.$3");
                } else if (value.length > 3) {
                    value = value.replace(/^(\d{3})(\d{0,3})/, "$1.$2");
                }
                
                $(this).val(value);
            });
        });
    </script>
</body>
</html>