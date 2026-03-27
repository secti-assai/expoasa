<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RYORI | EXPOASA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #D30000;
            --primary-dark: #A50000;
            --primary-light: #FF3333;
            --secondary-color: #FFCB05;
            --dark-color: #212121;
            --light-color: #F9F9F9;
            --text-color: #333333;
            --border-radius: 10px;
            --box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            background-color: #F5F5F5;
            line-height: 1.6;
        }
        
        /* Header & Navbar */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand {
            font-family: 'Noto Sans JP', sans-serif;
            font-weight: 700;
            color: var(--primary-color);
            font-size: 1.5rem;
        }
        
        .navbar-brand span {
            color: var(--secondary-color);
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color);
            position: relative;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -3px;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        
        .navbar-toggler {
            border: none;
            color: var(--primary-color);
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/assets/images/ryori/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 0;
            text-align: center;
            position: relative;
            margin-bottom: 3rem;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 70px;
            background: linear-gradient(to top right, #F5F5F5 49%, transparent 51%);
        }
        
        .hero-section h1 {
            font-family: 'Noto Sans JP', sans-serif;
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .hero-section p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 1.5rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        }
        
        /* Cards */
        .card-ryori {
            border: none;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-ryori:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .card-ryori .card-title {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .dish-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .dish-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        /* Buttons */
        .btn-ryori {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-ryori::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: all 0.6s ease;
            z-index: -1;
        }
        
        .btn-ryori:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(211, 0, 0, 0.3);
        }
        
        .btn-ryori:hover::before {
            left: 100%;
        }
        
        .btn-outline-ryori {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-outline-ryori:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(211, 0, 0, 0.3);
        }
        
        .btn-ryori-secondary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--dark-color);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-ryori-secondary:hover {
            background-color: #E0B000;
            border-color: #E0B000;
            color: var(--dark-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 203, 5, 0.3);
        }
        
        /* Features */
        .feature-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(211, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--primary-color);
            font-size: 2rem;
            transition: all 0.3s ease;
        }
        
        .card-ryori:hover .feature-circle {
            background-color: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }
        
        /* Timeline */
        .timeline-item {
            padding: 1.5rem;
            border-left: 3px solid var(--primary-color);
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            top: 1.5rem;
            left: -9px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: var(--primary-color);
        }
        
        /* Footer */
        .footer-ryori {
            background-color: var(--dark-color);
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 5rem;
        }
        
        .footer-ryori h5 {
            color: var(--secondary-color);
            margin-bottom: 1.2rem;
            font-weight: 600;
        }
        
        .footer-ryori a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-ryori a:hover {
            color: var(--secondary-color);
        }
        
        .footer-ryori hr {
            border-color: rgba(255,255,255,0.1);
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            color: white;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-section {
                padding: 4rem 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 3rem 0;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .hero-section p {
                font-size: 1rem;
            }
            
            .feature-circle {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
        
        @yield('custom-css')
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('ryori.index') }}">
                <i class="fas fa-utensils me-2"></i>
                PRATO EXPOASA<span>2026</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ryori.index') ? 'active' : '' }}" href="{{ route('ryori.index') }}">
                            <i class="fas fa-home me-1"></i> Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ryori.dishes.*') ? 'active' : '' }}" href="{{ route('ryori.dishes.index') }}">
                            <i class="fas fa-hamburger me-1"></i> Pratos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ryori.about') ? 'active' : '' }}" href="{{ route('ryori.about') }}">
                            <i class="fas fa-info-circle me-1"></i> Sobre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('ryori.vote.*') ? 'active' : '' }}" href="{{ route('ryori.vote.index') }}">
                            <i class="fas fa-star me-1"></i> Votar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-arrow-left me-1"></i> EXPOASA
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-ryori">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5><i class="fas fa-utensils me-2"></i> PRATO EXPOASA 2026</h5>
                    <p>O principal concurso gastronômico da EXPOASA, unindo sabores, criatividade e tradição.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Links Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('ryori.index') }}"><i class="fas fa-chevron-right me-2"></i> Início</a></li>
                        <li><a href="{{ route('ryori.dishes.index') }}"><i class="fas fa-chevron-right me-2"></i> Pratos Participantes</a></li>
                        <li><a href="{{ route('ryori.vote.index') }}"><i class="fas fa-chevron-right me-2"></i> Votação</a></li>
                        <li><a href="{{ route('ryori.about') }}"><i class="fas fa-chevron-right me-2"></i> Sobre o Concurso</a></li>
                        <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right me-2"></i> EXPOASA</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-envelope me-2"></i> ryori@expoasa.com.br</li>
                        <li><i class="fas fa-phone me-2"></i> (43) 1234-5678</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Assaí, Paraná</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class="text-center">
                <p class="mb-0">&copy; {{ date('Y') }} RYORI - EXPOASA. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // CPF Mask
        function maskCPF(input) {
            let value = input.value;
            value = value.replace(/\D/g, '');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            input.value = value;
        }
        
        // Activate tooltips
        document.addEventListener('DOMContentLoaded', function () {
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    @yield('scripts')
</body>
</html>