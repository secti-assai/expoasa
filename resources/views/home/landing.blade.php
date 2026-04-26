<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>80ª EXPOASA - Exposição Regional de Assaí</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #a40202;
            --primary-light: #c41010;
            --primary-dark: #8a0202;
            --secondary-color: #0a4b0f;
            --text-color: #333333;
            --text-light: #666666;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --section-spacing: 60px;
            --card-radius: 8px;
            --transition-speed: 0.3s;
        }

        body {
            color: var(--text-color);
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--text-color);
        }

        /* HEADER & NAVBAR - Versão Corrigida */
        .navbar.main-nav {
            background-color: rgba(255, 255, 255, 0.98);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            padding: 12px 0;
            transition: all 0.3s ease;
            height: auto;
            border-bottom: 1px solid rgba(15, 23, 42, 0.06);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .navbar.main-nav.nav-scrolled {
            padding: 8px 0;
            background-color: rgba(255, 255, 255, 0.94);
            box-shadow: 0 14px 34px rgba(14, 21, 31, 0.15);
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-logos-wrapper {
            flex: 1;
            max-width: 75%;
        }

        .navbar-logos {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            gap: 15px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover {
            transform: translateY(-2px);
        }

        .navbar-actions {
            display: flex;
            align-items: center;
        }

        .ticket {
            display: flex;
            align-items: center;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
        }

        .ticket:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
            color: var(--white);
        }

        .ticket img {
            height: 20px;
            margin-right: 8px;
            transition: transform 0.3s ease;
        }

        /* Botão de Menu Hamburger */
        .navbar-toggler {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 8px;
            outline: none;
        }

        .navbar-toggler-icon {
            display: block;
            width: 22px;
            height: 2px;
            background-color: var(--primary-color);
            position: relative;
            transition: all 0.3s ease;
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 2px;
            background-color: var(--primary-color);
            transition: transform 0.3s ease;
        }

        .navbar-toggler-icon::before {
            top: -7px;
        }

        .navbar-toggler-icon::after {
            bottom: -7px;
        }

        /* Responsividade aprimorada */
        @media (max-width: 991px) {


            .navbar-logos {
                gap: 10px;
            }


            .navbar-actions {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: rgba(255, 255, 255, 0.98);
                padding: 15px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                display: none;
                justify-content: center;
            }

            .navbar-actions.show {
                display: flex;
            }

            .ticket {
                width: 80%;
                justify-content: center;
            }
        }

        @media (max-width: 767px) {

            .navbar-logos {
                gap: 8px;
            }

            .banner {
                margin-top: 65px;
            }
        }



        /* BANNER SECTION */
        .banner {
            position: relative;
            height: 100vh;
            min-height: 560px;
            padding: 0;
            background-image: url('/assets/2026/cover.jpg.jpeg');
            background-color: #222; /* Cor de fallback caso a imagem não carregue */
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(8, 8, 8, 0.2) 0%, rgba(8, 8, 8, 0.35) 58%, rgba(8, 8, 8, 0.55) 100%);
            z-index: 1;
        }

        section.countdown-section {
            position: relative;
            z-index: 10;
            margin-top: 0;
            padding: 22px 0 30px;
            background: linear-gradient(180deg, #f4f6f7 0%, #ffffff 100%);
        }

        .countdown-panel {
            max-width: 860px;
            margin: 0 auto;
            padding: 18px 24px 22px;
            border-radius: 20px;
            background: linear-gradient(135deg, rgba(16, 16, 16, 0.9), rgba(78, 10, 10, 0.9));
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 22px 45px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(8px);
        }

        .countdown-title {
            margin: 0 0 16px;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .countdown-wrapper {
            margin: 0;
            display: grid;
            grid-template-columns: repeat(4, minmax(120px, 1fr));
            gap: 14px;
        }

        .countdown-item {
            border-radius: 14px;
            border: 1px solid rgba(255, 255, 255, 0.28);
            background-color: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(4px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 92px;
            padding: 12px 10px;
            color: var(--white);
        }

        .countdown-value {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 8px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.35);
        }

        .countdown-label {
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            opacity: 0.9;
        }

        @media (max-width: 991px) {
            .navbar-logos-wrapper {
                max-width: 100%;
                margin-bottom: 10px;
                justify-content: center;
            }

            .navbar .container {
                justify-content: center;
            }

            .banner {
                background-attachment: scroll; /* Resolve problemas em dispositivos móveis */
            }

            section.countdown-section {
                margin-top: 0;
                padding: 18px 0 22px;
            }

            .countdown-panel {
                max-width: 760px;
                padding: 16px 18px 18px;
            }

            .countdown-wrapper {
                grid-template-columns: repeat(4, minmax(95px, 1fr));
                gap: 10px;
            }

            .countdown-item {
                min-height: 84px;
            }

            .countdown-value {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 767px) {
            .banner {
                height: 72vh;
                min-height: 420px;
            }

            section.countdown-section {
                margin-top: 0;
                padding: 14px 0 18px;
            }

            .countdown-panel {
                border-radius: 16px;
            }

            .countdown-title {
                font-size: 0.9rem;
                margin-bottom: 12px;
            }

            .countdown-wrapper {
                grid-template-columns: repeat(2, minmax(120px, 1fr));
                gap: 10px;
            }

            .countdown-item {
                min-height: 72px;
                padding: 10px 8px;
            }

            .countdown-value {
                font-size: 1.35rem;
                margin-bottom: 6px;
            }
        }



        /* SEÇÕES GERAIS */
        section {
            padding: var(--section-spacing) 0;
            position: relative;
        }

        section.bg-light {
            background-color: var(--bg-light);
        }

        .section-title {
            margin-bottom: 40px;
            text-align: center;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .section-title p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .accent {
            color: var(--primary-color);
        }

        /* SOBRE NÓS */
        .about-image {
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .about-image img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        .about-content h2 {
            margin-bottom: 20px;
            font-weight: 600;
            position: relative;
            display: inline-block;
        }

        .about-content h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
        }

        .about-content p {
            margin-bottom: 20px;
            line-height: 1.7;
            color: var(--text-light);
        }

        /* CARDS DE ARENA */
        .arenas {
            background: linear-gradient(rgba(164, 2, 2, 0.9), rgba(164, 2, 2, 0.9)),
                        url('/assets/images/background/japanese-pattern.jpg');
            background-attachment: fixed;
            color: var(--white);
        }

        .arenas .section-title h2,
        .arenas .section-title p {
            color: var(--white);
        }

        .arena-card {
            background-color: var(--white);
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            height: 100%;
            transition: transform var(--transition-speed);
            margin-bottom: 30px;
        }

        .arena-card:hover {
            transform: translateY(-10px);
        }

        .arena-image {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .arena-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .arena-card:hover .arena-image img {
            transform: scale(1.1);
        }

        .arena-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(164, 2, 2, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity var(--transition-speed);
        }

        .arena-card:hover .arena-overlay {
            opacity: 1;
        }

        .arena-content {
            padding: 20px;
        }

        .arena-content h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .arena-content p {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-bottom: 0;
        }

        /* PROGRAMAÇÃO */
        .schedule-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            border: none;
        }

        .schedule-tab {
            padding: 12px 25px;
            background: var(--bg-light);
            border: 1px solid #dee2e6;
            margin: 0 5px;
            border-radius: var(--card-radius);
            transition: all var(--transition-speed);
            cursor: pointer;
            text-align: center;
        }

        .schedule-tab.active {
            background-color: var(--primary-color);
            color: var(--white);
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
        }

        .schedule-tab h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .schedule-tab span {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .schedule-content {
            background-color: var(--white);
            border-radius: var(--card-radius);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .schedule-header {
            display: grid;
            grid-template-columns: 100px 200px 1fr;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 15px 20px;
            border-radius: var(--card-radius) var(--card-radius) 0 0;
        }

        .schedule-row {
            display: grid;
            grid-template-columns: 100px 200px 1fr;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            transition: all var(--transition-speed);
        }

        .schedule-row:hover {
            background-color: var(--bg-light);
        }

        .time-block {
            font-weight: 500;
            color: var(--primary-color);
        }

        .speaker-block {
            display: flex;
            align-items: center;
        }

        .speaker-block img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        /* REGISTRO - Melhorias de UI */
        .registration {
            background: linear-gradient(rgba(10, 75, 15, 0.9), rgba(10, 75, 15, 0.9)),
                        url('/assets/images/background/sebrae.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: var(--white);
            padding: 80px 0; /* Espaçamento aumentado */
            position: relative;
        }

        .registration::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/images/background/pattern-dots.png');
            opacity: 0.1;
            z-index: 1;
        }

        .registration .container {
            position: relative;
            z-index: 2;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px; /* Aumentado de 20px */
            margin-top: 30px; /* Espaçamento adicional */
        }

        .feature-item {
            text-align: center;
            padding: 30px 20px; /* Aumentado padding vertical */
            background-color: rgba(255, 255, 255, 0.15); /* Ligeiramente mais opaco */
            border-radius: var(--card-radius);
            backdrop-filter: blur(5px);
            transition: all var(--transition-speed);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-item:hover {
            transform: translateY(-5px);
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .feature-item i {
            font-size: 2.8rem; /* Aumentado de 2.5rem */
            margin-bottom: 20px; /* Aumentado de 15px */
            color: var(--white);
            transition: all var(--transition-speed);
        }

        .feature-item:hover i {
            transform: scale(1.1);
        }

        .feature-item h3 {
            font-size: 1.2rem; /* Aumentado de 1.1rem */
            color: var(--white);
            margin-bottom: 0;
            font-weight: 600;
        }

        .registration-content {
            padding: 35px; /* Aumentado de 30px */
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--card-radius);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .registration-content h2 {
            color: var(--white);
            margin-bottom: 10px;
            font-size: 2rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .registration-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            font-weight: 500;
            letter-spacing: 1px;
            color: rgba(255, 255, 255, 0.9);
        }

        .registration-content .btn-light {
            margin-bottom: 30px;
            width: fit-content;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .registration-content .btn-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .registration-content .info-box {
            background-color: rgba(255, 255, 255, 0.95);
            color: var(--text-color);
            padding: 25px; /* Aumentado de 20px */
            border-radius: var(--card-radius);
            margin-top: auto; /* Empurra para o final do container flex */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-left: 4px solid var(--primary-color);
        }

        .info-box h4 {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            font-weight: 600;
            line-height: 1.4;
        }

        .info-box h4 i {
            margin-right: 10px;
            font-size: 1.3rem;
            color: var(--primary-color);
        }

        .info-box p {
            margin-bottom: 10px;
            color: var(--text-color);
            font-size: 0.95rem;
            letter-spacing: normal;
        }

        /* Ajustes responsivos */
        @media (max-width: 991px) {
            .registration {
                padding: 60px 0;
            }

            .registration-content {
                margin-top: 40px;
            }
        }

        @media (max-width: 767px) {
            .registration {
                padding: 50px 0;
                background-attachment: scroll;
            }

            .feature-grid {
                grid-template-columns: 1fr 1fr; /* Mantém 2 colunas em tablets */
                gap: 15px;
            }

            .feature-item {
                padding: 20px 15px;
            }

            .feature-item i {
                font-size: 2.2rem;
                margin-bottom: 15px;
            }

            .registration-content {
                padding: 25px;
                margin-top: 30px;
            }

            .registration-content h2 {
                font-size: 1.8rem;
            }

            .registration-content p {
                font-size: 1.1rem;
                margin-bottom: 20px;
            }

            .info-box {
                padding: 20px;
            }
        }

        @media (max-width: 575px) {
            .feature-grid {
                grid-template-columns: 1fr; /* Muda para 1 coluna em celulares */
            }
        }

        /* PROJETOS */
        .project-card {
            background-color: var(--white);
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
            transition: transform var(--transition-speed);
            margin-bottom: 30px;
        }

        .project-card:hover {
            transform: translateY(-10px);
        }

        .project-image {
            height: 200px;
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform var(--transition-speed);
        }

        .project-card:hover .project-image img {
            transform: scale(1.1);
        }

        .project-content {
            padding: 20px;
        }

        .project-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .project-content p {
            font-size: 0.95rem;
            color: var(--text-light);
            margin-bottom: 20px;
            height: 80px;
            overflow: hidden;
        }

        .project-actions {
            display: flex;
            gap: 10px;
        }

        /* PATROCINADORES */
        .sponsor-category {
            margin-bottom: 40px;
        }

        .sponsor-category h3 {
            font-size: 1.3rem;
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .sponsor-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .sponsor-item {
            background-color: var(--white);
            padding: 20px;
            border-radius: var(--card-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            width: 200px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-speed);
        }

        .sponsor-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .sponsor-item img {
            max-width: 80%;
            max-height: 80%;
            filter: grayscale(100%);
            transition: filter var(--transition-speed);
        }

        .sponsor-item:hover img {
            filter: grayscale(0%);
        }

        /* MAPA */
        .map-section {
            position: relative;
            height: 500px;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        .map-overlay {
            position: absolute;
            top: 50px;
            left: 50px;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 30px;
            border-radius: var(--card-radius);
            width: 350px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .map-overlay h3 {
            color: var(--white);
            margin-bottom: 15px;
            align-items: flex-start;
        }

        .address-item i {
            margin-right: 10px;
            margin-top: 5px;
        }

        /* FOOTER */
        .footer {
            background-color: #FFF;
            color: var(--white);
            padding: 60px 0 0;
        }

        .footer-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .footer-logo img {
            height: 60px;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: red;
            border-radius: 50%;
            color: var(--white);
            transition: all var(--transition-speed);
        }

        .social-link:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
            color: var(--white);
        }

        .subfooter {
            background-color: #fff;
            padding: 20px 0;
            margin-top: 60px;
        }

        .subfooter p {
            color: black;
            margin-bottom: 0;
            font-size: 12px;
        }

        .subfooter a {
            color: var(--primary-color);
        }

        .back-to-top {
            background-color: var(--primary-color);
            color: #fff;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            float: right;
        }

        .back-to-top:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
            color: var(--white);
        }

        /* BOTÕES */
        .btn {
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            transition: all var(--transition-speed);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline:hover {
            background-color: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
        }

        .btn-light {
            background-color: var(--white);
            color: var(--primary-color);
        }

        .btn-light:hover {
            background-color: var(--bg-light);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* RESPONSIVO */
        @media (max-width: 991px) {
            :root {
                --section-spacing: 50px;
            }

            .schedule-header,
            .schedule-row {
                grid-template-columns: 90px 150px 1fr;
            }
        }

        @media (max-width: 767px) {
            :root {
                --section-spacing: 40px;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .countdown-wrapper {
                gap: 10px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }

            .schedule-header,
            .schedule-row {
                grid-template-columns: 80px 1fr;
            }

            .schedule-header div:nth-child(2),
            .schedule-row div:nth-child(2) {
                display: none;
            }

            .map-overlay {
                position: relative;
                top: auto;
                left: auto;
                width: 100%;
                margin: -100px auto 0;
                z-index: 10;
            }
        }

        @media (max-width: 575px) {
            .btn {
                padding: 10px 20px;
            }
        }

        /* CONTEUDO DO EVENTO - MOBILE FIRST */
        .expo-page {
            background-color: #ffffff;
        }

        .event-section {
            padding: 46px 0;
        }

        .event-section.event-soft-bg {
            background: linear-gradient(180deg, #f5f8f9 0%, #edf2f4 100%);
        }

        .event-header {
            margin-bottom: 24px;
        }

        .event-kicker {
            margin: 0 0 10px;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            color: #7f1d1d;
        }

        .event-kicker.event-kicker-light {
            color: rgba(255, 255, 255, 0.86);
        }

        .event-title {
            margin: 0 0 14px;
            font-size: 1.62rem;
            line-height: 1.16;
            color: #111827;
        }

        .event-lead {
            margin: 0;
            color: #4b5563;
            line-height: 1.7;
            font-size: 1rem;
        }

        .event-intro-grid,
        .event-program-grid,
        .event-attractions-grid,
        .event-data-grid,
        .event-goal-grid,
        .event-history-grid,
        .event-map-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .event-shell {
            border-radius: 18px;
            border: 1px solid #e5e8eb;
            background-color: #ffffff;
            box-shadow: 0 16px 36px rgba(12, 20, 27, 0.07);
            padding: 20px;
        }

        .event-shell h3 {
            margin: 0 0 10px;
            font-size: 1.15rem;
            color: #182229;
        }

        .event-shell p {
            margin: 0 0 12px;
            color: #4b5563;
            line-height: 1.68;
        }

        .event-shell p:last-child {
            margin-bottom: 0;
        }

        .event-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        .event-fact-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 10px;
        }

        .event-fact-list li {
            border-left: 3px solid #a40202;
            padding-left: 12px;
            color: #374151;
            line-height: 1.55;
        }

        .event-fact-list strong {
            display: block;
            color: #111827;
            font-size: 0.95rem;
        }

        .metric-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .metric-card {
            border-radius: 14px;
            padding: 14px 12px;
            background: linear-gradient(155deg, #ffffff 0%, #f7fafb 100%);
            border: 1px solid #e3e8eb;
            text-align: center;
        }

        .metric-value {
            display: block;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.42rem;
            line-height: 1.1;
            color: #a40202;
            margin-bottom: 7px;
            font-weight: 700;
        }

        .metric-label {
            font-size: 0.82rem;
            color: #4b5563;
            line-height: 1.42;
        }

        .program-card {
            position: relative;
            overflow: hidden;
        }

        .program-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #a40202, #d97706);
        }

        .program-day {
            margin: 0 0 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.75rem;
            font-weight: 700;
            color: #7f1d1d;
        }

        .program-time {
            margin: 0 0 12px;
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            line-height: 1.1;
        }

        .event-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: grid;
            gap: 9px;
        }

        .event-list li {
            position: relative;
            padding-left: 17px;
            color: #4b5563;
            line-height: 1.5;
        }

        .event-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.57rem;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #a40202;
        }

        .event-list.check-list li::before {
            content: "\2713";
            top: -1px;
            width: auto;
            height: auto;
            border-radius: 0;
            background: transparent;
            font-weight: 700;
            color: #0f766e;
            font-size: 0.95rem;
        }

        .attraction-card i {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            background: rgba(164, 2, 2, 0.1);
            color: #a40202;
            font-size: 1.15rem;
        }

        .event-chip-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .event-chip {
            display: inline-flex;
            align-items: center;
            border-radius: 999px;
            padding: 6px 12px;
            font-size: 0.82rem;
            border: 1px solid #d7dfe4;
            background: #f8fbfc;
            color: #334155;
        }

        .event-audience-title {
            margin: 0 0 14px;
            font-size: 1.02rem;
            color: #1f2937;
            font-weight: 600;
        }

        .audience-bars {
            display: grid;
            gap: 12px;
        }

        .audience-item-head {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 6px;
            font-size: 0.86rem;
            color: #374151;
        }

        .audience-item-head strong {
            color: #111827;
            font-size: 0.87rem;
        }

        .audience-track {
            width: 100%;
            height: 9px;
            border-radius: 999px;
            background: #e5ebef;
            overflow: hidden;
        }

        .audience-fill {
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, #a40202, #d97706);
        }

        .event-goal-summary {
            border-left: 4px solid #0f766e;
            padding-left: 12px;
            margin-bottom: 14px;
            color: #334155;
        }

        .event-timeline {
            list-style: none;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .event-timeline::before {
            content: "";
            position: absolute;
            top: 3px;
            bottom: 3px;
            left: 7px;
            width: 2px;
            background: #d9e2e8;
        }

        .event-timeline li {
            position: relative;
            padding-left: 26px;
            margin-bottom: 14px;
        }

        .event-timeline li:last-child {
            margin-bottom: 0;
        }

        .event-timeline li::before {
            content: "";
            position: absolute;
            left: 2px;
            top: 2px;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: #a40202;
            box-shadow: 0 0 0 3px rgba(164, 2, 2, 0.16);
        }

        .event-timeline-year {
            display: block;
            color: #111827;
            font-weight: 700;
            font-size: 0.92rem;
            margin-bottom: 4px;
        }

        .event-timeline p {
            margin: 0;
            font-size: 0.92rem;
            color: #4b5563;
        }

        .event-map-canvas {
            width: 100%;
            min-height: 300px;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #dbe4ea;
            box-shadow: 0 14px 30px rgba(15, 23, 31, 0.12);
        }

        .event-map-canvas #map {
            width: 100%;
            height: 100%;
            min-height: 300px;
        }

        .event-map-card .btn {
            margin-top: 10px;
        }

        .event-cta-banner {
            border-radius: 20px;
            padding: 24px 20px;
            background: linear-gradient(135deg, #7f1d1d 0%, #a40202 47%, #d97706 100%);
            color: #ffffff;
            box-shadow: 0 18px 36px rgba(125, 17, 12, 0.28);
        }

        .event-cta-banner h2 {
            color: #ffffff;
            margin: 0 0 10px;
            font-size: 1.72rem;
            line-height: 1.14;
        }

        .event-cta-banner p {
            margin: 0;
            color: rgba(255, 255, 255, 0.92);
            line-height: 1.6;
        }

        .event-btn-outline-light {
            border: 2px solid rgba(255, 255, 255, 0.82);
            color: #ffffff;
            background: transparent;
        }

        .event-btn-outline-light:hover {
            background: #ffffff;
            color: #8b1313;
            border-color: #ffffff;
        }

        @media (min-width: 768px) {
            .event-section {
                padding: 60px 0;
            }

            .event-title {
                font-size: 2.15rem;
            }

            .event-intro-grid {
                grid-template-columns: 1.25fr 0.75fr;
                gap: 18px;
            }

            .metric-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 12px;
            }

            .event-program-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 14px;
            }

            .event-attractions-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 14px;
            }

            .event-data-grid,
            .event-goal-grid,
            .event-history-grid,
            .event-map-layout {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 16px;
            }

            .event-cta-banner {
                padding: 34px;
            }

            .event-cta-banner h2 {
                font-size: 2.2rem;
            }
        }

        @media (min-width: 1100px) {
            .event-section {
                padding: 70px 0;
            }

            .metric-grid {
                grid-template-columns: repeat(6, minmax(0, 1fr));
            }

            .event-attractions-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

            .event-map-layout {
                grid-template-columns: 1.25fr 0.75fr;
            }
        }

    .logo-laca {
        height: 80px;
        max-height: 80px;
        transition: height 0.25s ease;
    }
    .logo-brasil-japao {
        height: 80px;
        max-height: 80px;
        transition: height 0.25s ease;
    }
    .logo-prefeitura {
        height: 80px;
        max-height: 80px;
        transition: height 0.25s ease;
    }
    .logo-sebrae {
        height: 50px;
        max-height: 50px;
        margin-left: 10px;
        transition: height 0.25s ease;
    }

    .navbar.main-nav.nav-scrolled .logo-laca,
    .navbar.main-nav.nav-scrolled .logo-brasil-japao,
    .navbar.main-nav.nav-scrolled .logo-prefeitura {
        height: 68px;
    }

    .navbar.main-nav.nav-scrolled .logo-sebrae {
        height: 42px;
    }

    /* POLIMENTO EDITORIAL */
    .event-title {
        letter-spacing: -0.02em;
        text-wrap: balance;
    }

    .event-lead {
        font-size: 1.05rem;
        max-width: 68ch;
    }

    .event-shell {
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }

    .event-shell:hover {
        transform: translateY(-4px);
        border-color: #d5dee5;
        box-shadow: 0 20px 38px rgba(10, 18, 26, 0.11);
    }

    .event-shell p,
    .event-list li {
        font-size: 0.97rem;
    }

    .event-cta-banner p {
        max-width: 64ch;
    }

    /* ANIMACOES SUAVES DE ENTRADA */
    .reveal-on-scroll {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 0.7s ease, transform 0.7s ease;
        transition-delay: var(--reveal-delay, 0ms);
        will-change: opacity, transform;
    }

    .reveal-on-scroll.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 991px) {
        .navbar.main-nav.nav-scrolled .logo-laca,
        .navbar.main-nav.nav-scrolled .logo-brasil-japao,
        .navbar.main-nav.nav-scrolled .logo-prefeitura {
            height: 72px;
        }

        .navbar.main-nav.nav-scrolled .logo-sebrae {
            height: 46px;
        }
    }

    @media (max-width: 575px) {
        .logo-laca,
        .logo-brasil-japao,
        .logo-prefeitura {
            height: 62px;
            max-height: 62px;
        }

        .logo-sebrae {
            height: 38px;
            max-height: 38px;
        }
    }

    @media (max-width: 390px) {
        .navbar .container {
            padding-left: 10px;
            padding-right: 10px;
        }

        .navbar-logos {
            gap: 6px;
        }

        .logo-laca,
        .logo-brasil-japao,
        .logo-prefeitura {
            height: 52px;
            max-height: 52px;
        }

        .logo-sebrae {
            height: 32px;
            max-height: 32px;
            margin-left: 6px;
        }

        .countdown-panel {
            padding: 14px 12px 16px;
            border-radius: 14px;
        }

        .countdown-title {
            font-size: 0.8rem;
            letter-spacing: 0.8px;
        }

        .countdown-wrapper {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px;
        }

        .countdown-item {
            min-height: 64px;
            padding: 8px 6px;
        }

        .countdown-value {
            font-size: 1.22rem;
            margin-bottom: 4px;
        }

        .countdown-label {
            font-size: 0.65rem;
            letter-spacing: 0.8px;
        }

        .event-section {
            padding: 40px 0;
        }

        .event-title {
            font-size: 1.42rem;
            line-height: 1.2;
        }

        .event-lead,
        .event-shell p,
        .event-list li {
            font-size: 0.93rem;
        }

        .event-shell {
            padding: 16px;
            border-radius: 14px;
        }

        .event-actions {
            gap: 8px;
        }

        .event-actions .btn {
            width: 100%;
            text-align: center;
            padding: 11px 14px;
            font-size: 0.92rem;
        }

        .metric-grid {
            grid-template-columns: 1fr;
        }

        .program-time {
            font-size: 1.32rem;
        }

        .event-map-canvas,
        .event-map-canvas #map {
            min-height: 240px;
        }

        .event-cta-banner {
            padding: 20px 14px;
            border-radius: 14px;
        }

        .event-cta-banner h2 {
            font-size: 1.42rem;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .reveal-on-scroll,
        .event-shell,
        .navbar.main-nav,
        .logo-laca,
        .logo-brasil-japao,
        .logo-prefeitura,
        .logo-sebrae {
            transition: none !important;
            transform: none !important;
        }

        .reveal-on-scroll {
            opacity: 1 !important;
        }
    }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar main-nav fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-logos-wrapper">
                <div class="navbar-logos">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/images/logos/Logo_laca.png" alt="LACA" class="logo-laca">
                    </a>

                    <img src="/assets/images/logos/brasil_japao.png" alt="130 Anos de Amizade Brasil & Japão" class="logo-brasil-japao">
                </div>
            </div>

            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-actions">
                <a href="https://assai.pr.gov.br" target="_blank">
                    <img src="/assets/images/logos/GOVERNO/brasao_assai.png" alt="Prefeitura Municipal de Assaí" class="logo-prefeitura">
                </a>
                <a href="https://sebraepr.com.br" target="_blank">
                    <img src="/assets/images/logos/GOVERNO/sebrae_logo.png" alt="Sebrae PR" class="logo-sebrae">
                </a>
                {{-- <a href="{{ route('ideasun.index') }}" class="ticket">
                    <img src="/assets/images/icon/ticket.png" alt="IDEASUN">
                    <span>IDEASUN 2026</span>
                </a> --}}
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="banner" aria-label="Cover Expoasa 2026"></section>

    <section class="countdown-section" aria-label="Contagem regressiva para a Expoasa 2026">
        <div class="container">
            <div class="countdown-panel">
                <p class="countdown-title">Contagem regressiva para a Expoasa 2026</p>

                <div class="countdown-wrapper">
                    <div class="countdown-item">
                        <div class="countdown-value" id="countdown-days">00</div>
                        <div class="countdown-label">Dias</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-value" id="countdown-hours">00</div>
                        <div class="countdown-label">Horas</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-value" id="countdown-minutes">00</div>
                        <div class="countdown-label">Minutos</div>
                    </div>

                    <div class="countdown-item">
                        <div class="countdown-value" id="countdown-seconds">00</div>
                        <div class="countdown-label">Segundos</div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <main class="expo-page">
        <section class="event-section">
            <div class="container">
                <div class="event-intro-grid">
                    <article class="event-shell">
                        <header class="event-header">
                            <p class="event-kicker">80a EXPOASA - Exposicao Regional de Assai</p>
                            <h2 class="event-title">O encontro mais tradicional do agro brasileiro, agora com mais tecnologia, cultura e inovacao</h2>
                            <p class="event-lead">
                                Realizada desde 1935, a EXPOASA e considerada a exposicao agricola mais antiga do Brasil e um simbolo dos lacos entre as comunidades japonesa e brasileira no Parana.
                                Em 2026, o evento amplia seus espacos para conectar produtor, empreendedor, estudante, cooperativas e familias em torno do futuro do agronegocio.
                            </p>
                        </header>

                        <div class="event-actions">
                            <a href="{{ route('credenciamento') }}" class="btn btn-primary">Quero me credenciar</a>
                            <a href="#programacao" class="btn btn-outline">Ver programacao</a>
                        </div>
                    </article>

                    <aside class="event-shell">
                        <h3>Informacoes rapidas</h3>
                        <ul class="event-fact-list">
                            <li>
                                <strong>Data</strong>
                                12, 13 e 14 de junho de 2026
                            </li>
                            <li>
                                <strong>Local</strong>
                                Centro de Eventos Toyosaburo Ikeda, Assai/PR
                            </li>
                            <li>
                                <strong>Publico estimado</strong>
                                7.000 pessoas
                            </li>
                            <li>
                                <strong>Area total</strong>
                                40.000 m2 de estrutura para eventos
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="metric-grid" style="margin-top: 14px;">
                    <div class="metric-card">
                        <span class="metric-value">1935</span>
                        <span class="metric-label">Primeira edicao da EXPOASA</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">R$ 650 mi+</span>
                        <span class="metric-label">VBP regional (DERAL 2025)</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">1.000 m2</span>
                        <span class="metric-label">Exposicao de produtos agro e agroindustria</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">19 cidades</span>
                        <span class="metric-label">Abrangencia regional</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">5.000/dia</span>
                        <span class="metric-label">Publico medio em 2025</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">80a</span>
                        <span class="metric-label">Edicao da EXPOASA em 2026</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="programacao" class="event-section event-soft-bg">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Programacao oficial</p>
                    <h2 class="event-title">Tres dias de experiencias tecnicas, culturais e de conexao com o agro</h2>
                </header>

                <div class="event-program-grid">
                    <article class="event-shell program-card">
                        <p class="program-day">Sexta-feira</p>
                        <p class="program-time">12/06 - 18h as 00h</p>
                        <ul class="event-list">
                            <li>Abertura oficial da 80a EXPOASA</li>
                            <li>Exposicao de produtos agricolas e agroindustria regional</li>
                            <li>Inicio das apresentacoes culturais no palco LED</li>
                            <li>Praca de alimentacao com gastronomia japonesa e brasileira</li>
                        </ul>
                    </article>

                    <article class="event-shell program-card">
                        <p class="program-day">Sabado</p>
                        <p class="program-time">13/06 - 09h as 00h</p>
                        <ul class="event-list">
                            <li>Oficinas no auditorio tematico</li>
                            <li>Feira do empreendedor rural e rodadas de negocio</li>
                            <li>Paineis sobre agricultura de precisao e agricultura digital</li>
                            <li>HackaSUN, casos de sucesso e programacao cultural</li>
                        </ul>
                    </article>

                    <article class="event-shell program-card">
                        <p class="program-day">Domingo</p>
                        <p class="program-time">14/06 - 09h as 16h</p>
                        <ul class="event-list">
                            <li>Mostra de inovacoes para o agronegocio</li>
                            <li>Atividades com escolas e ecossistema Vale do Sol</li>
                            <li>Exposicao de cultivos alternativos e sustentabilidade</li>
                            <li>Encerramento institucional da 80a edicao</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Destaques 2026</p>
                    <h2 class="event-title">Novos espacos para gerar oportunidades no campo e na cidade</h2>
                </header>

                <div class="event-attractions-grid">
                    <article class="event-shell attraction-card">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h3>Auditorio de oficinas</h3>
                        <p>Capacitacoes praticas sobre diversificacao de cultivos, orgânicos, agricultura de precisao e agricultura digital.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <h3>Feira do empreendedor rural</h3>
                        <p>Espaco para conexao entre produtores, cooperativas, instituicoes financeiras e novos negocios do agro.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        <h3>Inovacao e desafios ODS</h3>
                        <p>Etapa de ideacao com apoio do ONU-Habitat, universidades e Secretaria de Ciencia, Tecnologia e Inovacao.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h3>Gastronomia e cultura</h3>
                        <p>Apresentacoes de Bon Odori, Taiko, Ikebana, Matsuri Dance, Cosplay e culinaria japonesa e brasileira.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section event-soft-bg">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Dados da exposicao</p>
                    <h2 class="event-title">Estrutura, abrangencia e perfil de publico da 80a EXPOASA</h2>
                </header>

                <div class="event-data-grid">
                    <article class="event-shell">
                        <h3>Estrutura e local</h3>
                        <p>A EXPOASA 2026 sera realizada no Centro de Eventos Toyosaburo Ikeda, com 40.000 m2 de area total e espaco dedicado para exposicoes agro, cooperativas, tecnologia e servicos.</p>
                        <div class="event-chip-list" style="margin-top: 12px;">
                            <span class="event-chip">Produtos agricolas</span>
                            <span class="event-chip">Hortifrutigranjeiros</span>
                            <span class="event-chip">Agroindustria regional</span>
                            <span class="event-chip">Maquinario e servicos</span>
                            <span class="event-chip">Cultivos alternativos</span>
                        </div>
                    </article>

                    <article class="event-shell">
                        <h3>Abrangencia regional</h3>
                        <p>A EXPOASA atende Assai e municipios do Norte do Parana, incluindo Nova America da Colina, Jataizinho, Cornelio Procopio, Urai, Londrina, Ibipora, Rolandia, Cambe e outras cidades da regiao.</p>
                        <p>Uma agenda pensada para agricultores familiares, medios e grandes produtores, estudantes, empreendedores e visitantes em geral.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section">
            <div class="container">
                <div class="event-goal-grid">
                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker">Publico esperado</p>
                            <h2 class="event-title" style="font-size: 1.5rem; margin-bottom: 0;">Perfil estimado para 2026</h2>
                        </header>

                        <p class="event-audience-title">Meta total: 7.000 participantes</p>
                        <div class="audience-bars">
                            <div>
                                <div class="audience-item-head">
                                    <strong>Agricultores familiares</strong>
                                    <span>1.500</span>
                                </div>
                                <div class="audience-track"><div class="audience-fill" style="width: 21.4%;"></div></div>
                            </div>
                            <div>
                                <div class="audience-item-head">
                                    <strong>Medios e grandes produtores</strong>
                                    <span>500</span>
                                </div>
                                <div class="audience-track"><div class="audience-fill" style="width: 7.1%;"></div></div>
                            </div>
                            <div>
                                <div class="audience-item-head">
                                    <strong>Visitantes em geral</strong>
                                    <span>5.000</span>
                                </div>
                                <div class="audience-track"><div class="audience-fill" style="width: 71.5%;"></div></div>
                            </div>
                        </div>
                    </article>

                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker">Objetivos da exposicao</p>
                            <h2 class="event-title" style="font-size: 1.5rem; margin-bottom: 0;">Fortalecer o agro com conhecimento, credito e inovacao</h2>
                        </header>

                        <p class="event-goal-summary">
                            Objetivo geral: fortalecer o agronegocio regional apresentando inovacoes, incentivando novos empreendedores e valorizando os talentos da regiao.
                        </p>
                        <ul class="event-list check-list">
                            <li>Diversificacao de cultivos com foco em novas oportunidades de renda.</li>
                            <li>Fomento a cultura de orgânicos e sustentabilidade ambiental.</li>
                            <li>Capacitacao em agricultura de precisao e agricultura digital.</li>
                            <li>Conexao com cooperativas financeiras para acesso a credito e investimento.</li>
                            <li>Debates sobre combate a pragas e uso responsavel de defensivos.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section event-soft-bg">
            <div class="container">
                <div class="event-history-grid">
                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker">Historia e identidade</p>
                            <h2 class="event-title" style="font-size: 1.56rem;">Conheca a historia da colonizacao e das associacoes nipo-brasileiras</h2>
                        </header>

                        <p>
                            A formacao de Assai e do Norte do Parana foi marcada pela imigracao japonesa, pelo cooperativismo e pelo espirito associativo. Com pequenas propriedades, trabalho coletivo e foco em educacao, essa comunidade construiu um legado economico e cultural que segue vivo na EXPOASA.
                        </p>
                        <p>
                            A LACA e outras entidades locais preservam tradicoes, fortalecem o esporte e a cultura e renovam os lacos entre geracoes, conectando passado, presente e futuro do territorio.
                        </p>

                        <div class="event-actions">
                            <a href="/assets/2026/Conheca_Historia.docx" class="btn btn-outline" target="_blank">Ler documento completo</a>
                        </div>
                    </article>

                    <article class="event-shell">
                        <h3>Linha do tempo resumida</h3>
                        <ul class="event-timeline">
                            <li>
                                <span class="event-timeline-year">1930-1935</span>
                                <p>Chegada dos imigrantes japoneses na regiao de Assai e realizacao da primeira EXPOASA.</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">1930-1965</span>
                                <p>Consolidacao das associacoes nipo-brasileiras, cooperativas e redes de ajuda mutua no campo.</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">2020-2022</span>
                                <p>Interrupcao do evento por conta da pandemia da COVID-19.</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">2023-2026</span>
                                <p>Retomada com foco em inovacao, agricultura digital, hackathons e crescimento de publico.</p>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section" id="localizacao">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Como chegar</p>
                    <h2 class="event-title">Centro de Eventos Toyosaburo Ikeda - Assai/PR</h2>
                </header>

                <div class="event-map-layout">
                    <div class="event-map-canvas" aria-label="Mapa da localizacao do evento">
                        <div id="map"></div>
                    </div>

                    <article class="event-shell event-map-card">
                        <h3>Endereco</h3>
                        <p>
                            Avenida Paul Harris, S/N<br>
                            Assai - Parana
                        </p>
                        <p>
                            Estrutura com area para exposicao tecnica, palco cultural, ambientes de inovacao e espacos gastronomicos.
                        </p>
                        <a href="https://maps.google.com/?q=Centro+de+Eventos+Toyosaburo+Ikeda+Assai" target="_blank" class="btn btn-primary">Abrir no Google Maps</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section" style="padding-top: 0;">
            <div class="container">
                <article class="event-cta-banner">
                    <p class="event-kicker event-kicker-light">Participe da 80a EXPOASA</p>
                    <h2>Prepare sua visita e conecte-se ao que move o agro regional</h2>
                    <p>
                        Garanta seu credenciamento e acompanhe as atualizacoes da programacao para viver uma experiencia completa de tecnologia, cultura e desenvolvimento regional.
                    </p>
                    <div class="event-actions" style="margin-top: 18px;">
                        <a href="{{ route('credenciamento') }}" class="btn btn-light">Credenciamento</a>
                        <a href="https://www.instagram.com/expoasa_assai/" target="_blank" class="btn event-btn-outline-light">Instagram oficial</a>
                    </div>
                </article>
            </div>
        </section>
    </main>


    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">

                <div class="social-links">
                    <a href="https://www.instagram.com/expoasa_assai/" class="social-link" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/expoasa" class="social-link" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" class="social-link" target="_blank">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p><a href="#">LACA</a> &copy; 2026 Todos os direitos reservados.</p>
                    </div>

                    <div class="col-md-6 text-right">
                        <a href="#" class="back-to-top">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACeD0S9I3kp8gXgUrczVtA6IBPLaZkzZ0"></script>

    <script>
        $(document).ready(function() {
            // Contador regressivo
            function updateCountdown() {
                const eventDate = new Date('2026-06-12T19:00:00');
                const now = new Date();
                const diff = eventDate - now;

                if (diff <= 0) {
                    $('#countdown-days').text('00');
                    $('#countdown-hours').text('00');
                    $('#countdown-minutes').text('00');
                    $('#countdown-seconds').text('00');
                    return;
                }

                const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                $('#countdown-days').text(days < 10 ? '0' + days : days);
                $('#countdown-hours').text(hours < 10 ? '0' + hours : hours);
                $('#countdown-minutes').text(minutes < 10 ? '0' + minutes : minutes);
                $('#countdown-seconds').text(seconds < 10 ? '0' + seconds : seconds);
            }

            setInterval(updateCountdown, 1000);
            updateCountdown();

            // Abas da programação
            if ($('.schedule-tab').length) {
                $('.schedule-tab').click(function() {
                    const tabId = $(this).data('tab');

                    $('.schedule-tab').removeClass('active');
                    $(this).addClass('active');

                    $('.schedule-day').hide();
                    $('#' + tabId).fadeIn();
                });
            }

            // Popup para imagens
            if ($('.arena-image').length) {
                $('.arena-image').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    zoom: {
                        enabled: true,
                        duration: 300
                    }
                });
            }

            // Voltar ao topo
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
            });

            // Inicializar mapa
            function initMap() {
                const mapElement = document.getElementById('map');
                if (!mapElement) {
                    return;
                }

                const location = {lat: -23.3693, lng: -50.8456};
                const map = new google.maps.Map(mapElement, {
                    center: location,
                    zoom: 15,
                    styles: [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#333333"}, {"lightness": 40}]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [{"color": "#fefefe"}]
                        }
                    ]
                });

                const marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: 'Centro de Eventos Toyosaburo Ikeda'
                });
            }

            initMap();
        });
    </script>

    <script>
        // Menu hamburger e responsividade
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarActions = document.querySelector('.navbar-actions');
            const navbar = document.querySelector('.navbar.main-nav');

            if (navbarToggler && navbarActions) {
                navbarToggler.addEventListener('click', function() {
                    this.classList.toggle('active');
                    navbarActions.classList.toggle('show');
                });
            }

            // Navbar sticky com acabamento institucional
            function updateNavbarState() {
                if (!navbar) {
                    return;
                }

                if (window.scrollY > 32) {
                    navbar.classList.add('nav-scrolled');
                } else {
                    navbar.classList.remove('nav-scrolled');
                }
            }

            updateNavbarState();
            window.addEventListener('scroll', updateNavbarState);

            // Revela secoes e cards de forma progressiva
            const revealTargets = document.querySelectorAll('.countdown-panel, .event-section, .event-shell, .event-cta-banner');

            revealTargets.forEach(function(el, index) {
                el.classList.add('reveal-on-scroll');
                el.style.setProperty('--reveal-delay', Math.min((index % 6) * 70, 280) + 'ms');
            });

            if (!('IntersectionObserver' in window)) {
                revealTargets.forEach(function(el) {
                    el.classList.add('is-visible');
                });
                return;
            }

            const revealObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            });

            revealTargets.forEach(function(el) {
                revealObserver.observe(el);
            });
        });
    </script>
</body>
</html>
