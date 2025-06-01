<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscrições - Cursos e Palestras da EXPOASA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Libraries -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/assets/css/landing.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        :root {
            --primary-color: #a40202;
            --primary-color-dark: #800000;
            --primary-color-light: #ff4d4d;
            --accent-color: #ffcc00;
            --text-dark: #333333;
            --text-light: #666666;
            --text-lighter: #888888;
            --white: #ffffff;
            --off-white: #f8f9fa;
            --gray-light: #eeeeee;
            --gray: #dddddd;
            --shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 5px 20px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 30px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
            --border-radius-sm: 8px;
            --border-radius-md: 12px;
            --border-radius-lg: 20px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--off-white);
            color: var(--text-dark);
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Header and Navigation */
        .custom-navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow-sm);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }

        .custom-navbar.scrolled {
            padding: 10px 0;
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-md);
        }

        .navbar-brand img {
            height: 50px;
            transition: var(--transition);
        }

        .custom-navbar.scrolled .navbar-brand img {
            height: 40px;
        }

        .nav-link {
            color: var(--text-dark);
            font-weight: 600;
            margin: 0 10px;
            transition: var(--transition);
        }

        .nav-link:hover, .nav-link:focus {
            color: var(--primary-color);
        }

        .nav-link.active {
            color: var(--primary-color);
        }

        /* Hero Banner */
        .hero-banner {
            position: relative;
            background: linear-gradient(rgba(164, 2, 2, 0.85), rgba(164, 2, 2, 0.85)), 
                        url('/assets/images/expo_2024/expo_197.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
            padding: 160px 0 100px;
            margin-top: 0;
            overflow: hidden;
            position: relative;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to top right, var(--off-white) 49%, transparent 51%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
            line-height: 1.2;
            color: var(--white);
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 400;
            margin-top: 15px;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-btn {
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 50px;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            margin: 5px;
        }

        .hero-btn.btn-outline-light {
            border: 2px solid var(--white);
        }

        .hero-btn.btn-outline-light:hover {
            background: var(--primary-color-light);
            border-color: var(--primary-color-light);
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .hero-btn.btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--text-dark);
        }

        .hero-btn.btn-primary:hover {
            background-color: var(--white);
            border-color: var(--white);
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .hero-shape {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        /* Content Sections */
        .section {
            padding: 80px 0;
        }

        .section-title {
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            z-index: 1;
        }

        .section-title h2 .accent {
            color: var(--accent-color);
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: rgba(164, 2, 2, 0.08);
            z-index: -1;
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .category-title {
            position: relative;
            display: inline-block;
            margin-bottom: 30px;
            font-size: 1.8rem;
            color: var(--text-dark);
            font-weight: 600;
        }

        .category-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background-color: var(--primary-color);
        }

        /* Cards */
        .activity-card {
            position: relative;
            background: var(--white);
            border-radius: var(--border-radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .activity-card .img-container {
            height: 180px;
            overflow: hidden;
            position: relative;
            background-color: transparent; /* Removido o fundo branco */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Tratamento específico para imagens nos cards */
        .activity-card img {
            max-height: 85%;
            max-width: 85%;
            width: auto;
            height: auto;
            object-fit: contain;
            transition: var(--transition);
        }

        /* Tratamento para logos */
        .activity-card .img-container img[src*="logo"] {
            max-height: 70%;
            max-width: 70%;
            object-fit: contain;
            transition: var(--transition);
            background-color: transparent; /* Removido o fundo branco */
            padding: 0; /* Removido o padding que estava criando espaço branco */
            border-radius: 0; /* Removido o border-radius */
        }

        /* Tratamento para a logo da UTFPR que tem fundo preto e precisa de espaço */
        .activity-card .img-container img[src*="logo_utf"] {
            max-height: 80%;
            max-width: 80%;
            padding: 0;
            background-color: transparent;
            border-radius: 0;
        }

        /* Tratamento específico para a imagem da Ana Paula (foto de pessoa) */
        .activity-card .img-container img[src*="ana-paula"] {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .activity-card .badge-container {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 10;
        }

        .activity-card .badge {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.5rem 0.8rem;
            border-radius: var(--border-radius-sm);
            box-shadow: var(--shadow-sm);
        }

        .activity-card .badge-primary {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .activity-card .badge-accent {
            background-color: var(--accent-color);
            color: var(--text-dark);
        }

        .activity-card .card-body {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .activity-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .activity-card .description {
            color: var(--text-light);
            margin-bottom: 20px;
            line-height: 1.6;
            flex: 1;
        }

        .activity-card .info-meta {
            border-top: 1px solid var(--gray-light);
            padding-top: 15px;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .activity-card .info-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            margin-bottom: 10px;
            color: var(--text-lighter);
            font-size: 0.9rem;
        }

        .activity-card .info-item i {
            margin-right: 7px;
            color: var(--primary-color);
        }

        .activity-card .card-btn {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 10px 20px;
            border-radius: var(--border-radius-sm);
            font-weight: 600;
            transition: var(--transition);
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .activity-card .card-btn:hover {
            background-color: var(--primary-color-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Logos Section */
        .logos-section {
            background-color: var(--gray-light);
            padding: 50px 0;
        }

        .logos-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .logos-container img {
            height: 70px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: var(--transition);
        }

        .logos-container img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Footer */
        .footer {
            background-color: var(--primary-color-dark);
            color: var(--white);
            padding: 40px 0;
            margin-top: 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            height: 60px;
            margin-bottom: 15px;
        }

        .footer-text {
            font-size: 0.9rem;
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.9);
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: var(--transition);
            font-size: 1rem;
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--accent-color);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.15);
            color: var(--white);
            transition: var(--transition);
            text-decoration: none;
        }

        .social-links a:hover {
            background-color: var(--accent-color);
            color: var(--text-dark);
            transform: translateY(-3px);
        }

        /* Back to top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: var(--shadow-md);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-color-dark);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* Loading Animation */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--white);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .preloader.fade-out {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(164, 2, 2, 0.1);
            border-left-color: var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .activity-card h3 {
                font-size: 1.2rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-links {
                margin-top: 25px;
                margin-bottom: 25px;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .category-title {
                font-size: 1.5rem;
            }

            .activity-card .img-container {
                height: 180px;
            }

            .logos-container img {
                height: 50px;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 576px) {
            .hero-banner {
                padding: 130px 0 80px;
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
            
            .hero-btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }

            .section {
                padding: 50px 0;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 40px;
                height: 40px;
            }
        }
        
        /* Animation Classes */
        .zoom-in {
            animation: zoomIn 1s forwards;
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s forwards;
        }
        
        .fade-in-left {
            animation: fadeInLeft 0.8s forwards;
        }
        
        .fade-in-right {
            animation: fadeInRight 0.8s forwards;
        }
        
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Correções para o footer e seção CTA */

        /* Ajuste para a seção CTA */
        .cta-section {
            padding: 70px 0;
            background-color: #f8f8f8;
            text-align: center;
            width: 100%;
        }

        .cta-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }

        .cta-text {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .cta-btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            text-decoration: none;
            margin: 0 auto;
        }

        .cta-btn:hover {
            background-color: var(--primary-color-dark);
            color: white;
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        /* Ajustes para o footer */
        .footer {
            background-color: var(--primary-color-dark);
            color: var(--white);
            padding: 40px 0;
            margin-top: 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo {
            height: 60px;
            margin-bottom: 15px;
        }

        .footer-text {
            font-size: 0.9rem;
            margin-bottom: 0;
            color: rgba(255, 255, 255, 0.9);
        }

        .footer-links {
            display: flex;
            gap: 25px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: var(--transition);
            font-size: 1rem;
            font-weight: 500;
        }

        .footer-links a:hover {
            color: var(--accent-color);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.15);
            color: var(--white);
            transition: var(--transition);
            text-decoration: none;
        }

        .social-links a:hover {
            background-color: var(--accent-color);
            color: var(--text-dark);
            transform: translateY(-3px);
        }

        /* Back to top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: var(--shadow-md);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-color-dark);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* Loading Animation */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--white);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .preloader.fade-out {
            opacity: 0;
            visibility: hidden;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(164, 2, 2, 0.1);
            border-left-color: var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3rem;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .activity-card h3 {
                font-size: 1.2rem;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-links {
                margin-top: 25px;
                margin-bottom: 25px;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .category-title {
                font-size: 1.5rem;
            }

            .activity-card .img-container {
                height: 180px;
            }

            .logos-container img {
                height: 50px;
            }
            
            .footer-links {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 576px) {
            .hero-banner {
                padding: 130px 0 80px;
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }
            
            .hero-btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }

            .section {
                padding: 50px 0;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 40px;
                height: 40px;
            }
        }
        
        /* Animation Classes */
        .zoom-in {
            animation: zoomIn 1s forwards;
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s forwards;
        }
        
        .fade-in-left {
            animation: fadeInLeft 0.8s forwards;
        }
        
        .fade-in-right {
            animation: fadeInRight 0.8s forwards;
        }
        
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/logo-expoasa.png" alt="EXPOASA 2025">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#schedule">Programação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('inscricoes') }}">Inscrições</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ideasun.index') }}">IDEASUN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <section class="hero-banner" id="top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center hero-content">
                    <h1 class="hero-title" data-aos="zoom-in">Amplie seus Conhecimentos na EXPOASA</h1>
                    <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                        Participe das palestras e cursos exclusivos da 79ª EXPOASA e conecte-se com especialistas, 
                        novas ideias e oportunidades incríveis!
                    </p>
                    <div data-aos="fade-up" data-aos-delay="400">
                        <a href="#cursos" class="btn btn-outline-light hero-btn">
                            <i class="fa fa-graduation-cap me-2"></i> Ver Cursos
                        </a>
                        <a href="#palestras" class="btn btn-outline-light hero-btn">
                            <i class="fa fa-microphone me-2"></i> Ver Palestras
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cursos Section -->
    <section class="section" id="cursos">
        <div class="container">
            <div class="section-title text-center">
                <h2 data-aos="fade-up"><span class="accent">Cursos</span> Disponíveis</h2>
                <p data-aos="fade-up" data-aos-delay="100">Aprimoramento profissional com certificação para impulsionar sua carreira.</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="activity-card">
                        <div class="img-container">
                            <img src="/assets/images/logos/CURSOS/expresso-sicoob.jpeg" alt="Expresso Móvel Sicoob">
                            <div class="badge-container">
                                <span class="badge badge-primary">Gratuito</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Expresso Móvel Sicoob</h3>
                            <p class="description">
                                Projeto educacional móvel que oferece cursos profissionalizantes gratuitos e com certificação em um ônibus equipado com estrutura climatizada, internet, notebooks e recursos didáticos, abrangendo áreas como comunicação, habilidades profissionais, tecnologia, finanças, saúde e direito.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 a 08 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>09:00 - 17:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Espaço Universidades</span>
                                </div>
                            </div>
                            <a href="https://forms.office.com/r/aebVAEBDNN" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Palestras Section -->
    <section class="section bg-light" id="palestras">
        <div class="container">
            <div class="section-title text-center">
                <h2 data-aos="fade-up">Palestras <span class="accent">Inspiradoras</span></h2>
                <p data-aos="fade-up" data-aos-delay="100">Conhecimento e networking com especialistas de diversas áreas.</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/GOVERNO/logo-senai.png" alt="Gastronomia Afetiva">
                            <div class="badge-container">
                                <span class="badge badge-primary">Precificação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Workshop de Precificação</h3>
                            <p class="description">
                                Detalhes em breve!
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>09:00 - 10:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/RkW1aCq6fJ2xkXgg8" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/GOVERNO/logo-senac.png" alt="Gastronomia Afetiva">
                            <div class="badge-container">
                                <span class="badge badge-secondary">Gastronomia</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Gastronomia Afetiva</h3>
                            <p class="description">
                                Caroline irá compartilhar como a gastronomia vai além do preparo de alimentos e se torna uma poderosa ferramenta de conexão, fortalecimento de vínculos e resgate de memórias afetivas. Através de sua experiência, ela mostra que cada receita carrega uma história e que os momentos à mesa podem transformar relações familiares, criando laços mais fortes e significativos.    
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:00 - 11:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/Ndq8R14WnxXUnhBH6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Trilha de Palestras da UTFPR-CP">
                            <div class="badge-container">
                                <span class="badge badge-primary">IA</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Inteligente: um guia para o desenvolvimento em Inteligência Artificial</h3>
                            <p class="description">
                                Detalhes em breve!
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>13:00 - 14:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/jK8pVeViqJ4xE1qS6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Trilha de Palestras da UTFPR-CP">
                            <div class="badge-container">
                                <span class="badge badge-secondary">Educação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Tecnologia Assistiva na Educação: Caminhos e Possibilidades para a Inclusão</h3>
                            <p class="description">
                                A palestra abordará conceitos e ferramentas que poderão auxiliar no processo de ensino e aprendizagem. O foco é introduzir o assunto, com o intuito de promover um ambiente educacional mais acessível e inclusivo, também discutindo o papel da Inteligência Artificial na promoção da acessibilidade.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>14:00 - 15:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/yLRY6x5C8sHoKR6w6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Trilha de Palestras da UTFPR-CP">
                            <div class="badge-container">
                                <span class="badge badge-primary">IA</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Engenharia de Prompt com ênfase em Engenharia</h3>
                            <p class="description">
                                Detalhes em breve!
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>15:00 - 16:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/HpAh8qnSzie6xqFp6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/projetek-uel.png" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-secondary">Engenharia</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Estudo de Caso sobre o CEEP</h3>
                            <p class="description">
                                Nesta palestra, será apresentado um estudo de caso sobre o Centro Estadual de Educação Profissional Prof. Maria Lydia Cescato Bomtempo, destacando sua estrutura, funcionamento, desafios e soluções implementadas na área técnica e educacional. A partir da visão prática e técnica, Luiz Ricardo compartilhará experiências, abordando como a integração entre educação e tecnologia tem contribuído para a formação de profissionais e fortalecimento da educação profissional no estado.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>16:00 - 17:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/UmcwRnX4u8og8mgm7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/aintec-logo.png" alt="Jornada Inovadora da Aintec">
                            <div class="badge-container">
                                <span class="badge badge-accent">Inovação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Jornada Inovadora da Aintec</h3>
                            <p class="description">
                                Conheça a trajetória da Agência de Inovação Tecnológica da UEL, transformando conhecimento em soluções e fortalecendo o ecossistema de inovação da região.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>06 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>17:00 - 18:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/xF8TQamg2aePysvf6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-accent">Inovação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>A História da Imigração Japonesa no Norte do Paraná</h3>
                            <p class="description">
                                Professor Doutor Roberto Bondarik - UTFPR Cornélio Procópio
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/npB13iYNnohL9CTs7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-accent">Inovação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Os seis pilares da empregabilidade</h3>
                            <p class="description">
                                Professora Mestra Josieli dos Santos Soares - UTFPR Cornélio Procópio
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/NU1RnCY5F9XwyBKc7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/natume-logo.webp" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-accent">Inovação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Inovação com Propósito</h3>
                            <p class="description">
                                Ana Paula Cruz compartilha sua trajetória empreendedora à frente da natu.me e da Ecoabea, unindo inovação, sustentabilidade e bem-estar.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>13:00 - 14:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/fntjasxf6wZJj3tE7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/GOVERNO/sebrae_logo.png" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-primary">Compras públicas</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Oficina de Compras Públicas</h3>
                            <p class="description">
                                Em breve mais detalhes!
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/MkvUAcsWnHBgCsdAA" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo-unopar.png" alt="Impressão 3D">
                            <div class="badge-container">
                                <span class="badge badge-accent">Tecnologia</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Impressão 3D: A Revolução Está em Suas Mãos!</h3>
                            <p class="description">
                                Yuri Mendes Mostagi apresenta como a Impressão 3D está transformando a forma como criamos objetos, construímos casas e salvamos vidas.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>15:00 - 16:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Tecnologia</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/wADNRarfRZK3WsJq7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo-unopar.png" alt="Inteligência Artificial">
                            <div class="badge-container">
                                <span class="badge badge-primary">IA</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Inteligência Artificial: Ferramentas e Possibilidades</h3>
                            <p class="description">
                                Ana Mauriceia Castellani apresenta o conceito de Inteligência Artificial e suas aplicações práticas no cotidiano, com demonstrações acessíveis.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>16:00 - 17:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Auditório Principal</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/wADNRarfRZK3WsJq7" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo-unopar.png" alt="Mercado de Trabalho para pessoas 50+">
                            <div class="badge-container">
                                <span class="badge badge-secondary">Meia-idade</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Mercado de Trabalho para pessoas 50+</h3>
                            <p class="description">
                                Marcos Tonasse apresenta como o mercado de trabalho tem se transformado para incluir pessoas 50+, criando ambientes mais diversos com várias gerações interagindo.
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>17:00 - 18:00</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Auditório Principal</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/iV7CAgGkvq7ZytP69" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/logo_utf.png" alt="Inovação com Propósito">
                            <div class="badge-container">
                                <span class="badge badge-accent">Inovação</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Metaverso e Vida Artificial</h3>
                            <p class="description">
                                Professor Doutor Eduardo Filgueiras Damasceno - UTFPR Cornélio Procópio
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>07 de junho, 2025</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Sala de Palestras</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/RdaDMebdkt7Ehhy37" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/" alt="Novidades em Breve!">
                            <div class="badge-container">
                                <span class="badge badge-accent">Agro</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Sucessão Familiar</h3>
                            <p class="description">
                                (Descrição em breve)
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/USr1CNG1NrerbNBM6" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/" alt="Novidades em Breve!">
                            <div class="badge-container">
                                <span class="badge badge-accent">Agro</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Nota Fiscal Eletrônica para Produtor Rural</h3>
                            <p class="description">
                                (Descrição em breve)
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/JCeXcPZWky6JbXzA9" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/" alt="Novidades em Breve!">
                            <div class="badge-container">
                                <span class="badge badge-accent">Empreendedorimo</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Empreendedorismo da UFPR</h3>
                            <p class="description">
                                (Descrição em breve)
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/LoRcUVKopNToM8bJA" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-card h-100">
                        <div class="img-container">
                            <img src="/assets/images/logos/UNIVERSIDADES/" alt="Novidades em Breve!">
                            <div class="badge-container">
                                <span class="badge badge-accent">Gestão</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h3>Workshop de Cidades</h3>
                            <p class="description">
                                (Descrição em breve)
                            </p>
                            <div class="info-meta">
                                <div class="info-item">
                                    <i class="fa fa-calendar"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Em breve!</span>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Em breve!</span>
                                </div>
                            </div>
                            <a href="https://forms.gle/LwUr6hYsW1VeBzmu8" target="_blank" class="card-btn">
                                <i class="fa fa-external-link me-2"></i> Inscreva-se
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section com alinhamento correto -->
    <section class="section cta-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="cta-title">Não perca essa oportunidade!</h2>
                    <p class="cta-text">
                        Todas as atividades são gratuitas, mas as vagas são limitadas. 
                        Garanta já a sua participação!
                    </p>
                    <a href="#cursos" class="cta-btn">
                        <i class="fa fa-check-circle me-2"></i> Inscreva-se Agora
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Logos Section -->
    <section class="logos-section">
        <div class="container">
            <div class="logos-container">
                <img src="/assets/img/logo_laca_small.png" alt="LACA">
                <img src="/assets/images/logos/GOVERNO/brasao_assai.png" alt="Prefeitura Municipal de Assaí">
                <img src="/assets/images/logos/GOVERNO/sebrae_logo.png" alt="Sebrae PR">
            </div>
        </div>
    </section>

    <!-- Back to Top Button -->
    <a href="#top" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Scripts -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inicializar AOS (Animate on Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease',
            once: true,
            offset: 100
        });

        // Preloader
        $(window).on('load', function() {
            $('.preloader').addClass('fade-out');
            setTimeout(function() {
                $('.preloader').hide();
            }, 500);
        });

        // Navbar animation on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.custom-navbar').addClass('scrolled');
                $('.back-to-top').addClass('active');
            } else {
                $('.custom-navbar').removeClass('scrolled');
                $('.back-to-top').removeClass('active');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile menu toggle - implementação manual para garantir funcionalidade
        $('.navbar-toggler').on('click', function() {
            $('.navbar-collapse').toggleClass('show');
        });

        // Mobile menu closing when clicking on a menu item
        $('.navbar-nav>li>a').on('click', function(){
            $('.navbar-collapse').collapse('hide');
        });
    </script>
</body>

</html>