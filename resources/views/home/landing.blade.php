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
            min-height: 600px;
            background-image: url('/assets/img/expoasa_bg.jpg');
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
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(164, 2, 2, 0.7));
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .banner-logo {
            width: 300px;
            margin-bottom: 30px;
        }

        .countdown-wrapper {
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .countdown-item {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid rgba(255, 255, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--white);
        }

        .countdown-value {
            font-size: 1.8rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 5px;
        }

        .countdown-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            opacity: 0.8;
        }

        .banner-actions {
            margin-top: 20px;
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
        }

        @media (max-width: 767px) {
            .banner {
                height: 90vh; /* Ajusta a altura em telas menores */
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

            .banner-logo {
                width: 250px;
            }

            .countdown-item {
                width: 70px;
                height: 70px;
            }

            .countdown-value {
                font-size: 1.5rem;
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

            .banner-logo {
                width: 200px;
            }

            .countdown-wrapper {
                gap: 10px;
            }

            .countdown-item {
                width: 60px;
                height: 60px;
            }

            .countdown-value {
                font-size: 1.2rem;
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
            .banner-logo {
                width: 180px;
            }

            .countdown-item {
                width: 55px;
                height: 55px;
            }

            .countdown-value {
                font-size: 1.1rem;
            }

            .btn {
                padding: 10px 20px;
            }
        }

    .logo-brasil-japao {
        height: 80px;       /* aumente o tamanho conforme desejar */
        max-height: 80px;
    }
    .logo-prefeitura {
        height: 80px;       /* aumente o tamanho conforme desejar */
        max-height: 80px;
    }
    .logo-sebrae {
        height: 50px;       /* aumente o tamanho conforme desejar */
        max-height: 50px;
        margin-left: 10px;
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
                        <img src="/assets/img/logo_laca.png" alt="LACA">
                    </a>

                    <img src="/assets/img/brasil_japao.png" alt="130 Anos de Amizade Brasil & Japão" class="logo-brasil-japao">
                </div>
            </div>

            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-actions">
                <a href="https://assai.pr.gov.br" target="_blank">
                    <img src="/assets/img/logos/Logo_Prefeitura.jpg" alt="Prefeitura Municipal de Assaí" class="logo-prefeitura">
                </a>
                <a href="https://sebraepr.com.br" target="_blank">
                    <img src="/assets/img/logos/Logo_Sebrae.png" alt="Sebrae PR" class="logo-sebrae">
                </a>
                {{-- <a href="{{ route('ideasun.index') }}" class="ticket">
                    <img src="/assets/images/icon/ticket.png" alt="IDEASUN">
                    <span>IDEASUN 2026</span>
                </a> --}}
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="banner" style="background-image: url('/assets/img/expoasa_bg.jpg');">
        <div class="banner-content">
            <img src="/assets/img/expoasa.png" alt="80ª Expoasa" class="banner-logo">

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
    </section>


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
            $('.schedule-tab').click(function() {
                const tabId = $(this).data('tab');

                $('.schedule-tab').removeClass('active');
                $(this).addClass('active');

                $('.schedule-day').hide();
                $('#' + tabId).fadeIn();
            });

            // Popup para imagens
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

            // Voltar ao topo
            $('.back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
            });

            // Inicializar mapa
            function initMap() {
                const location = {lat: -23.3693, lng: -50.8456};
                const map = new google.maps.Map(document.getElementById('map'), {
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

            navbarToggler.addEventListener('click', function() {
                this.classList.toggle('active');
                navbarActions.classList.toggle('show');
            });

            // Ajustar altura da navbar no scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar.main-nav');
                if (window.scrollY > 50) {
                    navbar.style.padding = '8px 0';
                } else {
                    navbar.style.padding = '12px 0';
                }
            });
        });
    </script>
</body>
</html>
