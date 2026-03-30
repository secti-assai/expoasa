<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Background e layout principal */
        .login-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.9) 0%, rgba(94,8,2,0.9) 100%);
            background-size: cover;
            position: relative;
        }
        
        .login-section::before {
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
        
        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 0 15px;
        }
        
        /* Card de login */
        .login-card {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .login-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #e62b1e, #ff6b6b);
            z-index: 1;
        }
        
        /* Logo e cabeçalho */
        .login-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-logo img {
            max-height: 70px;
            margin-bottom: 15px;
        }
        
        .ideasun-year {
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }
        
        .login-heading {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .login-heading::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 25px;
        }
        
        /* Opções de login */
        .login-options {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .login-option-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 14px 20px;
            border-radius: 50px;
            background-color: white;
            border: 2px solid #eee;
            font-size: 1rem;
            font-weight: 600;
            color: #555;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            text-decoration: none;
        }
        
        .login-option-btn:hover,
        .login-option-btn.active {
            border-color: #e62b1e;
            color: #e62b1e;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.15);
        }
        
        .login-option-btn.cidade {
            background-color: #e62b1e;
            border-color: #e62b1e;
            color: white;
        }
        
        .login-option-btn.cidade:hover {
            background-color: #d01c11;
            border-color: #d01c11;
            color: white;
        }
        
        .login-option-btn i, 
        .btn i, 
        .input-group-text i {
            display: inline-block;
            width: 16px;
            text-align: center;
            vertical-align: middle;
            margin-right: 8px;
        }

        .input-group-prepend {
            display: flex;
            align-items: center;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
        }
        
        /* Formulários */
        .login-form {
            margin-top: 25px;
            display: none;
            animation: fadeIn 0.4s ease forwards;
        }
        
        .login-form.active {
            display: block;
        }
        
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .form-group label {
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            border-radius: 8px;
            border: 1px solid rgba(0,0,0,0.15);
            padding: 12px 15px;
            height: auto;
            transition: all 0.3s ease;
            box-shadow: none;
        }
        
        .form-control:focus {
            border-color: #e62b1e;
            box-shadow: 0 0 0 0.2rem rgba(230, 43, 30, 0.25);
        }
        
        /* Botões */
        .btn-primary {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.3);
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-primary:hover, 
        .btn-primary:focus {
            background-color: #d01c11;
            border-color: #d01c11;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 43, 30, 0.4);
        }
        
        /* Alertas */
        .alert {
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 25px;
            border: none;
            text-align: left;
        }
        
        .alert-danger {
            background-color: rgba(220, 53, 69, 0.1);
            border-left: 4px solid #dc3545;
            color: #dc3545;
        }
        
        /* Contacto */
        .contact-info {
            margin-top: 30px;
            text-align: center;
            color: #555;
            font-size: 0.9rem;
        }
        
        .contact-info p {
            margin-bottom: 5px;
        }
        
        .divider {
            height: 1px;
            background: rgba(0,0,0,0.1);
            margin: 25px 0;
        }
        
        /* Animações */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Responsivo */
        @media (max-width: 768px) {
            .login-card {
                padding: 30px 20px;
            }
            
            .login-heading {
                font-size: 1.5rem;
            }
            
            .login-option-btn {
                font-size: 0.9rem;
                padding: 12px 15px;
            }
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="login-section">
        <div class="login-container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="login-card">
                        <div class="login-logo">
                            <img src="/assets/img/logo-expoasa.png" alt="IDEASUN 2026">
                            <div class="ideasun-year">IDEASUN 2026</div>
                            <h1 class="login-heading">Acesso à Plataforma</h1>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle mr-2"></i>
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        <div class="login-options">
                            <button class="login-option-btn cidade active" onclick="showLoginForm('cidade')">
                                <i class="fa fa-map-marker"></i> Acesso para Cidades
                            </button>
                            <button class="login-option-btn" onclick="showLoginForm('equipe')">
                                <i class="fa fa-users"></i> Acesso para Equipes
                            </button>
                            <button class="login-option-btn" onclick="showLoginForm('banca')">
                                <i class="fa fa-star mr-2" style="margin-right: 8px; vertical-align: middle;"></i> Acesso para Banca
                            </button>
                            <button class="login-option-btn" onclick="showLoginForm('admin')">
                                <i class="fa fa-lock"></i> Administração
                            </button>
                        </div>
                        
                        <div id="cidadeForm" class="login-form active">
                            <form action="{{ route('ideasun.authenticate') }}" method="post">
                                @csrf
                                <input type="hidden" name="tipo" value="cidade">
                                
                                <div class="form-group">
                                    <label for="cidade_nome"><i class="fa fa-building mr-2"></i>Nome ou ID da Cidade</label>
                                    <input type="text" class="form-control" id="cidade_nome" name="identificador" required placeholder="Digite o nome ou ID da sua cidade">
                                </div>
                                
                                <div class="form-group">
                                    <label for="cidade_senha"><i class="fa fa-lock mr-2"></i>Senha de Acesso</label>
                                    <input type="password" class="form-control" id="cidade_senha" name="senha" required placeholder="Digite sua senha de acesso">
                                </div>
                                
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-sign-in mr-2"></i>Acessar como Cidade
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <div id="equipeForm" class="login-form">
                            <form action="{{ route('ideasun.authenticate') }}" method="post">
                                @csrf
                                <input type="hidden" name="tipo" value="equipe">
                                
                                <div class="form-group">
                                    <label for="equipe_id"><i class="fa fa-building mr-2"></i>ID da Cidade</label>
                                    <input type="text" class="form-control" id="equipe_id" name="identificador" required placeholder="Digite o ID da cidade (CID-XXXX)">
                                    <small class="form-text text-muted">O ID da cidade foi fornecido no cadastro.</small>
                                </div>
                                
                                <div class="form-group">
                                    <label for="equipe_senha"><i class="fa fa-lock mr-2"></i>Senha</label>
                                    <input type="password" class="form-control" id="equipe_senha" name="senha" required placeholder="Digite a senha da cidade">
                                    <small class="form-text text-muted">Use a mesma senha definida para a cidade.</small>
                                </div>
                                
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-sign-in mr-2"></i>Acessar como Equipe
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <div id="bancaForm" class="login-form">
                            <form action="{{ route('ideasun.banca.autenticar') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="cpf">CPF do Avaliador</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-id-card" style="width: 16px; text-align: center;"></i></span>
                                        </div>
                                        <input type="text" class="form-control cpf-mask" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha_banca">Senha</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-lock" style="width: 16px; text-align: center;"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="senha_banca" name="senha" placeholder="Digite sua senha" required>
                                    </div>
                                    <small class="form-text text-muted">A senha inicial são os 6 primeiros dígitos do seu CPF.</small>
                                </div>
                                <button type="submit" class="btn btn-info btn-block">
                                    <i class="fa fa-sign-in" style="margin-right: 8px; vertical-align: middle;"></i> Acessar como Avaliador
                                </button>
                            </form>
                        </div>
                        
                        <div id="adminForm" class="login-form">
                            <form action="{{ route('ideasun.admin.authenticate') }}" method="post">
                                @csrf
                                <input type="hidden" name="tipo" value="admin">
                                
                                <div class="form-group">
                                    <label for="admin_usuario"><i class="fa fa-user mr-2"></i>Usuário</label>
                                    <input type="text" class="form-control" id="admin_usuario" name="usuario" required placeholder="Digite seu usuário de administrador">
                                </div>
                                
                                <div class="form-group">
                                    <label for="admin_senha"><i class="fa fa-lock mr-2"></i>Senha</label>
                                    <input type="password" class="form-control" id="admin_senha" name="senha" required placeholder="Digite sua senha">
                                </div>
                                
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-sign-in mr-2"></i>Acessar como Administrador
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <div class="divider"></div>
                        
                        <div class="contact-info">
                            <p>Não tem acesso? Entre em contato com a organização do evento.</p>
                            <p><i class="fa fa-envelope mr-2" style="color: #e62b1e;"></i><strong>E-mail:</strong> valedosolpr@gmail.com</p>
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
        function showLoginForm(type) {
            // Esconder todos os formulários
            document.getElementById('cidadeForm').classList.remove('active');
            document.getElementById('equipeForm').classList.remove('active');
            document.getElementById('bancaForm').classList.remove('active');
            document.getElementById('adminForm').classList.remove('active');
            
            // Mostrar o formulário selecionado
            document.getElementById(type + 'Form').classList.add('active');
            
            // Atualizar botões
            const buttons = document.querySelectorAll('.login-option-btn');
            buttons.forEach(btn => btn.classList.remove('cidade', 'active'));
            
            // Destacar botão ativo
            event.target.classList.add('active');
            if (type === 'cidade') {
                event.target.classList.add('cidade');
            }
        }
        
        $(document).ready(function() {
            // Adicionar máscara para o campo CPF
            $('.cpf-mask').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.substr(0, 11);
                }
                
                if (value.length > 9) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3, 3) + '.' + value.substr(6, 3) + '-' + value.substr(9));
                } else if (value.length > 6) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3, 3) + '.' + value.substr(6));
                } else if (value.length > 3) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3));
                } else {
                    $(this).val(value);
                }
            });
        });
    </script>
</body>
</html>