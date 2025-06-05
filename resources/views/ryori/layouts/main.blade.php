<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RYORI 2025 | EXPOASA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        :root {
            --primary-color: #a40202;
            --secondary-color: #ffcc00;
        }
        
        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        
        .navbar-ryori {
            background-color: var(--primary-color);
        }
        
        .btn-ryori {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }
        
        .btn-ryori:hover {
            background-color: #8b0000;
            color: white;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/img/ryori-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .card-ryori {
            border-top: 3px solid var(--primary-color);
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .card-ryori:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        }
        
        .footer-ryori {
            background-color: #333;
            color: white;
            padding: 40px 0;
        }
        
        .dish-card img {
            height: 200px;
            object-fit: cover;
        }
        
        .swiper {
            width: 100%;
            height: 400px;
        }
        
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .votes-count-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            padding: 5px 10px;
            font-size: 14px;
        }
        
        /* Padronização de imagens de pratos */
        .dish-image, 
        .dish-thumbnail img,
        .dish-card .dish-image img,
        .dish-image-container img,
        .image-preview img,
        .dish-preview img,
        [class*="dish"] img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center;
        }
        
        /* Ajustes para versões específicas de thumbnails */
        .dish-thumbnail img {
            height: 60px;
            width: 60px;
        }
        
        /* Para garantir que na página de detalhes a imagem tenha altura adequada */
        .dish-image-container {
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
        }
        
        /* Para a versão de administração */
        .image-preview img {
            height: 150px;
            width: 150px;
        }
        
        /* Para manter o aspecto da imagem na página inicial */
        .hero-image-container img {
            max-height: 450px;
            width: auto;
            object-fit: contain;
        }
        
        /* Para evitar distorções em listas de pratos */
        .dish-card .dish-image {
            height: 200px;
            overflow: hidden;
        }
        
        @yield('custom-css')
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-ryori">
        <div class="container">
            <a class="navbar-brand" href="{{ route('ryori.index') }}">
                <i class="fa fa-cutlery me-2"></i> RYORI 2025
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRyori">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarRyori">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ryori.index') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ryori.about') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ryori.dishes.index') }}">Pratos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Expoasa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning text-dark ms-2" href="{{ route('ryori.vote.index') }}">
                            <i class="fa fa-star me-1"></i> Votar Agora
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-ryori mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5><i class="fa fa-cutlery me-2"></i> RYORI 2025</h5>
                    <p>O principal concurso gastronômico da EXPOASA, unindo sabores, criatividade e tradição.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('ryori.index') }}" class="text-white">Início</a></li>
                        <li><a href="{{ route('ryori.dishes.index') }}" class="text-white">Pratos Participantes</a></li>
                        <li><a href="{{ route('ryori.vote.index') }}" class="text-white">Votação</a></li>
                        <li><a href="{{ route('inicio') }}" class="text-white">Expoasa</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-envelope me-2"></i> valedosol@gmail.com</li>
                        <li><i class="fa fa-phone me-2"></i> (43) 3262-0516</li>
                        <li><i class="fa fa-map-marker me-2"></i> Assaí, Paraná</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="text-center">
                <p class="mb-0">© 2025 EXPOASA - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Script para máscara de CPF
        function maskCPF(input) {
            let value = input.value.replace(/\D/g, '');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            input.value = value;
        }
        
        // Script para máscara de telefone
        function maskPhone(input) {
            let value = input.value.replace(/\D/g, '');
            if (value.length > 10) {
                value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
            } else if (value.length > 5) {
                value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
            } else if (value.length > 2) {
                value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            } else {
                value = value.replace(/^(\d*)/, '($1');
            }
            input.value = value;
        }
        
        @yield('custom-js')
    </script>
</body>
</html>