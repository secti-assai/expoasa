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
            --green-expoasa-400: #2d6a4f;
            --green-expoasa-500: #1b4332;
            --green-expoasa-600: #081c15;
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
            width: 100%;
            position: relative;
            background-color: #081c15; /* Prevent white flashes on mobile transitions */
        }
        
        html {
            overflow-x: hidden;
            width: 100%;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--text-color);
        }

        /* HEADER & NAVBAR - Estilos movidos para o bloco principal de design */

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
            background-color: var(--green-expoasa-500, #1b4332);
            color: #ffffff !important;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            float: right;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(0,0,0,0.25);
            text-decoration: none;
            z-index: 1000;
        }

        .back-to-top i {
            color: #ffffff !important;
            font-size: 1.4rem;
            display: block;
        }

        .back-to-top:hover {
            background-color: var(--green-expoasa-400, #2d6a4f);
            transform: translateY(-5px);
            color: #ffffff !important;
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
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
            position: relative;
            isolation: isolate;
        }

        .event-section.event-soft-bg {
            background: linear-gradient(180deg, #f5f8f9 0%, #edf2f4 100%);
        }

        .event-section.event-color-cream {
            background: linear-gradient(180deg, #fff8ec 0%, #fffefb 100%);
        }

        .event-section.event-color-mint {
            background: linear-gradient(180deg, #ecf8f1 0%, #f9fffc 100%);
        }

        .event-section.event-color-ice {
            background: linear-gradient(180deg, #eff6fb 0%, #f9fcff 100%);
        }

        .event-section.event-section-photo {
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .event-section.event-section-photo::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(9, 16, 24, 0.74), rgba(19, 39, 36, 0.57));
            z-index: -1;
        }

        .event-photo-lantern {
            background-image: url('/assets/images/fotos/Expoasa%20(2).jpg');
        }

        .event-photo-harvest {
            background-image: url('/assets/images/fotos/expo_458.jpg');
        }

        .event-photo-taiko {
            background-image: url('/assets/images/fotos/expo_444.jpg');
        }

        .event-section.event-section-photo .event-kicker,
        .event-section.event-section-photo .event-title,
        .event-section.event-section-photo .event-lead {
            color: #ffffff;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        .event-section.event-section-photo .event-shell {
            background-color: rgba(255, 255, 255, 0.93);
            border-color: rgba(255, 255, 255, 0.34);
        }

        .event-photo-strip {
            margin-top: 18px;
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .event-photo-card {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            min-height: 180px;
            box-shadow: 0 12px 24px rgba(15, 23, 42, 0.12);
        }

        .event-photo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }

        .event-photo-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(8, 13, 23, 0.4), rgba(8, 13, 23, 0.05));
        }

        .event-photo-card:hover img {
            transform: scale(1.04);
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
            gap: 20px;
            align-items: start;
            width: 100%;
        }

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

        .event-metric-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
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

            .event-photo-strip {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 12px;
            }

            .event-photo-card {
                min-height: 220px;
            }

            .event-title {
                font-size: 2.15rem;
            }

            .event-intro-grid {
                grid-template-columns: 1.25fr 0.75fr;
                gap: 30px;
            }

            .event-program-grid,
            .event-photo-strip {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .event-attractions-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .event-data-grid,
            .event-goal-grid,
            .event-history-grid,
            .event-map-layout {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }
            .metric-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
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

            .event-photo-card {
                min-height: 250px;
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
        height: 70px;
        width: auto;
        max-width: 100%;
        flex-shrink: 1;
        transition: var(--nav-transition);
        filter: drop-shadow(0 2px 8px rgba(0,0,0,0.2));
    }
    .logo-prefeitura {
        height: 70px;
        width: auto;
        max-width: 100%;
        flex-shrink: 1;
        transition: var(--nav-transition);
    }

    .nav-scrolled .logo-laca,
    .nav-scrolled .logo-prefeitura {
        height: 52px;
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

        /* Legacy Mobile Media Queries Removed */

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
            padding: 18px;
            border-radius: 14px;
            width: 100%;
            min-width: 0;
            overflow: hidden;
        }

        .event-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            width: 100%;
        }

        .event-actions .btn {
            width: 100%;
            text-align: center;
            padding: 11px 14px;
            font-size: 0.92rem;
        }

        .metric-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        
        @media (max-width: 400px) {
            .metric-grid {
                grid-template-columns: 1fr;
            }
        }

        .program-time {
            font-size: 1.32rem;
        }

        .event-map-canvas,
        .event-map-canvas #map,
        .event-map-container {
            min-height: 350px;
            height: 100%;
        }

        .event-cta-banner {
            padding: 20px 14px;
            border-radius: 14px;
        }

        .event-cta-banner h2 {
            font-size: 1.42rem;
        }

        .event-photo-card {
            min-height: 150px;
        }
    }

    /* EXPERIENCIA PREMIUM - HEADER + HERO */
    html {
        scroll-behavior: smooth;
    }

    :root {
        --header-offset: 100px;
        --green-expoasa: #1B4332;
        --green-expoasa-950: #081C15;
        --green-expoasa-400: #74C69D;
        --nav-transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body {
        background: #f3f7f9;
        scroll-padding-top: var(--header-offset);
    }

    /* GLASSMORPHISM NAVBAR */
    .site-header.navbar.main-nav {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(25px);
        -webkit-backdrop-filter: blur(25px);
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        padding: 24px 0;
        transition: var(--nav-transition);
        box-shadow: none;
        width: 100%;
        left: 0;
        right: 0;
    }

    .site-header.navbar.main-nav.nav-scrolled {
        background: rgba(8, 28, 21, 0.92); /* Green 950 */
        padding: 12px 0;
        border-bottom-color: rgba(255, 255, 255, 0.1);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    /* RESTRUCTURED NAVBAR LAYOUT */
    .nav-left {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-right {
        display: flex;
        align-items: center;
    }

    @media (max-width: 991px) {
        .nav-left {
            gap: 12px;
        }
        
        .site-header .container {
            justify-content: center; /* Centraliza os logos no mobile */
        }
    }

    .site-nav-links {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .site-nav-links a {
        position: relative;
        padding: 10px 18px;
        color: #ffffff;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: var(--nav-transition);
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    /* EXPANDING UNDERLINE EFFECT */
    .site-nav-links a span {
        position: relative;
        z-index: 1;
    }

    .site-nav-links a::after {
        content: '';
        position: absolute;
        bottom: 6px;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--green-expoasa-400);
        transition: var(--nav-transition);
        transform: translateX(-50%);
        border-radius: 2px;
    }

    .site-nav-links a:hover::after {
        width: 60%;
    }

    .site-nav-links a:hover {
        color: var(--green-expoasa-400);
    }

    /* MOBILE BOTTOM NAVIGATION */
    .mobile-bottom-nav {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(8, 28, 21, 0.95);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        display: flex;
        justify-content: space-around;
        padding: 12px 5px;
        z-index: 1000;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 -5px 25px rgba(0, 0, 0, 0.3);
    }

    .mobile-bottom-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.65rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        gap: 5px;
        transition: var(--nav-transition);
        min-width: 60px;
    }

    .mobile-bottom-item i {
        font-size: 1.4rem;
        margin-bottom: 2px;
    }

    .mobile-bottom-item:hover, .mobile-bottom-item.active {
        color: var(--green-expoasa-400);
    }

    /* MOBILE DRAWER MENU */
    .mobile-drawer {
        position: fixed;
        top: 0;
        right: -100%;
        width: 85%;
        max-width: 400px;
        height: 100%;
        background: var(--green-expoasa-950);
        z-index: 2000;
        transition: right 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 100px 40px;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .mobile-drawer.active {
        right: 0;
    }

    /* BODY SPACING FOR BOTTOM NAV */
    @media (max-width: 991px) {
        body {
            padding-bottom: 80px;
        }
    }

    .drawer-link {
        color: #ffffff;
        font-size: 1.5rem;
        font-weight: 700;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .drawer-link:hover {
        color: var(--green-expoasa-400);
    }

    .drawer-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        backdrop-filter: blur(8px);
        z-index: 1999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s ease;
    }

    .drawer-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .site-nav-links a:hover {
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
    }

    .nav-scrolled .site-nav-links a:hover {
        background: rgba(16, 69, 45, 0.06);
        color: #0c5d3a;
    }

    .site-partners {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .site-partners .btn {
        white-space: nowrap;
        padding: 10px 16px;
        font-size: 0.84rem;
    }

    /* Legacy Navbar Actions Removed */

    .hero-panel {
        position: relative;
        min-height: 100svh;
        display: flex;
        align-items: center;
        padding: calc(var(--header-offset) + 18px) 0 38px;
        overflow: hidden;
        color: #ffffff;
        scroll-snap-align: start;
        scroll-snap-stop: always;
    }

    .hero-kenburns {
        position: absolute;
        inset: 0;
        z-index: -3;
    }

    .hero-layer {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        opacity: 1;
    }

    .hero-layer-a {
        background-image: url('/assets/2026/fundo.png');
        background-size: cover;
        background-position: center center;
        background-color: #0a1513;
    }

    .hero-layer-b {
        display: none;
    }

    .hero-layer-c {
        display: none;
    }

    .hero-gradient {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 18% 22%, rgba(255, 197, 73, 0.22), transparent 44%),
            radial-gradient(circle at 84% 18%, rgba(10, 102, 66, 0.32), transparent 42%),
            linear-gradient(180deg, rgba(9, 15, 23, 0.45) 0%, rgba(9, 15, 23, 0.74) 62%, rgba(9, 15, 23, 0.9) 100%);
        z-index: -2;
    }

    .hero-brand-container {
        position: relative;
        z-index: 5;
        text-align: center;
        width: 100%;
        margin-top: -60px; /* Sobe a logo e o conteúdo central */
    }

    .hero-main-logo {
        max-width: 240px;
        width: 100%;
        height: auto;
        filter: drop-shadow(0 15px 45px rgba(0,0,0,0.6));
    }

    .hero-brand-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .hero-countdown {
        display: flex !important;
        justify-content: center;
        gap: 12px;
        margin-top: 25px;
        position: relative;
        z-index: 20;
        opacity: 1 !important;
        visibility: visible !important;
    }

    .countdown-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 65px;
        background: rgba(255, 255, 255, 0.06);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        padding: 10px 4px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
    }

    .countdown-value {
        font-size: 1.6rem;
        font-weight: 800;
        line-height: 1;
        color: #ffffff;
        font-variant-numeric: tabular-nums;
    }

    .countdown-label {
        font-size: 0.6rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-top: 5px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 600;
    }

    @media (min-width: 992px) {
        .hero-main-logo {
            max-width: min(85vw, 540px);
            max-height: 50vh;
            width: auto;
            object-fit: contain;
        }
        .hero-countdown {
            gap: 20px;
            margin-top: clamp(20px, 4vh, 45px);
        }
        .countdown-item {
            min-width: clamp(80px, 8vw, 110px);
            padding: clamp(10px, 1.5vh, 18px) 10px;
        }
        .countdown-value {
            font-size: clamp(1.8rem, 3.5vw, 2.8rem);
        }
        .countdown-label {
            font-size: 0.75rem;
        }
        .metric-grid {
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
        }
    }

    /* Ajustes específicos para telas de baixa altura (Laptops 768p) */
    @media (min-width: 992px) and (max-height: 820px) {
        .hero-main-logo {
            max-width: 380px;
        }
        .hero-countdown {
            margin-top: 15px;
        }
        .countdown-item {
            min-width: 85px;
            padding: 8px 5px;
        }
        .countdown-value {
            font-size: 1.8rem;
        }
        .hero-brand-container {
            margin-bottom: 10px;
        }
        .hero-scroll-indicator {
            bottom: 20px;
        }
    }

    .hero-content {
        width: 100%;
        max-width: 980px;
    }

    .hero-eyebrow {
        margin: 0 0 10px;
        text-transform: uppercase;
        letter-spacing: 1.4px;
        font-size: 0.82rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.86);
    }

    .hero-title {
        margin: 0;
        color: #ffffff;
        font-size: clamp(2rem, 6.2vw, 4.7rem);
        line-height: 0.98;
        letter-spacing: -0.03em;
        max-width: 12ch;
        text-wrap: balance;
        text-shadow: 0 6px 26px rgba(0, 0, 0, 0.34);
    }

    .hero-subtitle {
        margin: 16px 0 0;
        max-width: 64ch;
        color: rgba(255, 255, 255, 0.9);
        font-size: clamp(0.98rem, 2.1vw, 1.2rem);
        line-height: 1.65;
    }

    .hero-actions {
        margin-top: 18px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .hero-actions .btn {
        min-width: 190px;
    }

    .hero-schedule-glass {
        background: rgba(15, 23, 42, 0.3);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6);
        max-width: 900px;
        width: 100%;
        margin: 0 auto;
        animation: fadeInUp 1s ease-out;
    }

    .hero-schedule-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .hero-schedule-header h2 {
        font-size: 1.8rem;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .hero-schedule-header p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 1rem;
    }

    .hero-schedule-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .hero-schedule-item {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: transform 0.3s ease, background 0.3s ease;
    }

    .hero-schedule-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.1);
    }

    .hsi-day {
        display: block;
        font-weight: 700;
        color: #fff;
        font-size: 1.1rem;
        margin-bottom: 5px;
    }

    .hsi-date {
        display: block;
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.9rem;
        margin-bottom: 10px;
    }

    .hsi-time {
        display: inline-block;
        background: rgba(164, 2, 2, 0.8);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        color: #fff;
    }

    .hero-scroll-indicator {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        color: #fff;
        text-decoration: none;
        z-index: 10;
        transition: opacity 0.3s;
    }

    .hero-scroll-indicator:hover {
        opacity: 0.8;
        color: #fff;
    }

    .hsi-text {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        opacity: 0.9;
    }

    .hsi-icon {
        font-size: 22px;
        animation: heroBounce 2s infinite;
    }

    @keyframes heroBounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
        40% {transform: translateY(-10px);}
        60% {transform: translateY(-5px);}
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

    @media (max-width: 767px) {
        .hero-schedule-grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }
        .hero-schedule-glass {
            padding: 25px;
            margin: 0 15px;
        }
        .hero-schedule-header h2 {
            font-size: 1.4rem;
        }
    }

    .expo-page {
        /* scroll-snap removido para navegação mais fluida */
    }

    .event-section {
        padding: 90px 0;
        display: flex;
        align-items: center;
        position: relative;
    }

    .event-section > .container {
        width: 100%;
    }


    @keyframes cueBounce {
        0%, 100% {
            transform: translateY(0);
            opacity: 0.78;
        }
        50% {
            transform: translateY(5px);
            opacity: 1;
        }
    }

    @media (min-width: 1100px) {
        .site-nav-links {
            display: flex;
        }

        .site-header .navbar-toggler {
            display: none;
        }
    }

    @media (max-width: 1099px) {
        .nav-center {
            display: none;
        }
        .logo-laca, .logo-prefeitura {
            height: 48px;
        }
    }

    @media (max-width: 767px) {
        .hero-panel {
            height: calc(100svh - 65px);
            min-height: 520px;
            padding-top: calc(var(--header-offset) + 12px);
            margin-bottom: 0;
        }

        .event-section {
            padding: 55px 0;
        }

        .hero-actions .btn {
            width: 100%;
            min-width: 0;
        }

        .hero-countdown {
            margin-top: 18px;
            padding: 13px;
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
    <nav class="navbar main-nav site-header fixed-top" role="banner">
        <div class="container d-flex align-items-center">
            
            <!-- COLUNA ESQUERDA: LOGOS AGRUPADOS -->
            <div class="nav-left">
                <a class="navbar-brand p-0 m-0" href="#topo" aria-label="Voltar ao topo">
                    <img src="/assets/images/logos/Logo_laca.png" alt="LACA" class="logo-laca">
                </a>
                <img src="/assets/images/logos/GOVERNO/brasao_assai.png" alt="Prefeitura de Assaí" class="logo-prefeitura">
            </div>

            <!-- COLUNA DIREITA: NAVEGAÇÃO (Desktop) -->
            <div class="nav-right d-none d-lg-flex">
                <div class="site-nav-links" role="navigation" aria-label="Menu Principal">
                    <a href="#horarios"><span>Horários</span></a>
                    <a href="#historia"><span>História</span></a>
                    <a href="#localizacao"><span>Localização</span></a>
                    <a href="javascript:void(0)" class="open-credenciamento-popup"><span>Credenciamento</span></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MOBILE BOTTOM NAVIGATION (App-like UX) -->
    <div class="mobile-bottom-nav d-lg-none">
        <a href="#topo" class="mobile-bottom-item">
            <i class="fa fa-home"></i>
            <span>Início</span>
        </a>
        <a href="#horarios" class="mobile-bottom-item">
            <i class="fa fa-clock-o"></i>
            <span>Horários</span>
        </a>
        <a href="#localizacao" class="mobile-bottom-item">
            <i class="fa fa-map-marker"></i>
            <span>Mapa</span>
        </a>
        <a href="javascript:void(0)" class="mobile-bottom-item" id="mobile-menu-open">
            <i class="fa fa-bars"></i>
            <span>Menu</span>
        </a>
    </div>

    <!-- MOBILE DRAWER -->
    <div class="drawer-overlay" id="drawer-overlay"></div>
    <div class="mobile-drawer" id="mobile-drawer">
        <h2 style="color: var(--green-expoasa-400); font-size: 1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">Menu</h2>
        <a href="#topo" class="drawer-link">Início</a>
        <a href="#horarios" class="drawer-link">Horários</a>
        <a href="#historia" class="drawer-link">História</a>
        <a href="#localizacao" class="drawer-link">Localização</a>
        <a href="javascript:void(0)" class="drawer-link open-credenciamento-popup" style="color: var(--green-expoasa-400)">Credenciamento</a>
        
        <div style="margin-top: auto; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px;">
            <p style="color: rgba(255,255,255,0.5); font-size: 0.8rem;">80ª EXPOASA © 2026</p>
        </div>
    </div>

    <!-- HERO -->
    <section id="topo" class="hero-panel" aria-label="Hero da Expoasa 2026">
        <div class="hero-kenburns" aria-hidden="true">
            <div class="hero-layer hero-layer-a"></div>
        </div>
        <div class="hero-gradient" aria-hidden="true"></div>
 
        <div class="container hero-brand-container">
            <div class="hero-brand-wrapper">
                <img src="/assets/2026/logo_ap.png" alt="80ª EXPOASA" class="hero-main-logo">
                
                <div class="hero-countdown" aria-label="Contador regressivo para o evento">
                    <div class="countdown-item">
                        <span id="countdown-days" class="countdown-value">00</span>
                        <span class="countdown-label">Dias</span>
                    </div>
                    <div class="countdown-item">
                        <span id="countdown-hours" class="countdown-value">00</span>
                        <span class="countdown-label">Horas</span>
                    </div>
                    <div class="countdown-item">
                        <span id="countdown-minutes" class="countdown-value">00</span>
                        <span class="countdown-label">Min</span>
                    </div>
                    <div class="countdown-item">
                        <span id="countdown-seconds" class="countdown-value">00</span>
                        <span class="countdown-label">Seg</span>
                    </div>
                </div>
            </div>
        </div>

        <a href="#proximo" class="hero-scroll-indicator">
            <span class="hsi-text">Explore o Evento</span>
            <i class="fa fa-angle-down hsi-icon" aria-hidden="true"></i>
        </a>
    </section>

    <main class="expo-page" id="proximo">
        <section class="event-section event-color-cream">
            <div class="container">
                <div class="event-intro-grid">
                    <article class="event-shell">
                        <header class="event-header">
                            <p class="event-kicker">80ª EXPOASA - Proposta Técnica</p>
                            <h2 class="event-title">Exposição Agrícola Regional de Assaí</h2>
                            <p class="event-lead">
                                A EXPOASA é um evento voltado para o agronegócio, sendo a sua primeira edição realizada no ano de 1935. Considerada a mais antiga do Brasil, surge do esforço dos primeiros imigrantes japoneses que colonizaram Assaí em 1930.
                            </p>
                        </header>

                        <div class="event-actions">
                            <a href="{{ route('credenciamento') }}" class="btn btn-primary">Quero me credenciar</a>
                            <a href="#programacao" class="btn btn-outline">Ver programacao</a>
                        </div>
                    </article>

                    <aside class="event-shell">
                        <h3>Informações Principais</h3>
                        <ul class="event-fact-list">
                            <li>
                                <strong>Data Oficial</strong>
                                12 a 14 de Junho de 2026
                            </li>
                            <li>
                                <strong>Localização</strong>
                                Centro de Eventos Toyosaburo Ikeda, Assaí/PR
                            </li>
                            <li>
                                <strong>Público Estimado</strong>
                                7.000 pessoas (Agricultores e Visitantes)
                            </li>
                            <li>
                                <strong>Infraestrutura</strong>
                                40.000 m² de área total para eventos
                            </li>
                        </ul>
                    </aside>
                </div>

                <div class="metric-grid" style="margin-top: 14px;">
                    <div class="metric-card">
                        <span class="metric-value">1935</span>
                        <span class="metric-label">Primeira edição realizada</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">R$ 650 mi+</span>
                        <span class="metric-label">VBP Agropecuário Regional</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">1.000 m²</span>
                        <span class="metric-label">Área para produtos agrícolas e hortifrúti</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">19 cidades</span>
                        <span class="metric-label">Abrangência Regional</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">5.000+</span>
                        <span class="metric-label">Pessoas/dia na 79ª edição</span>
                    </div>
                    <div class="metric-card">
                        <span class="metric-value">80ª</span>
                        <span class="metric-label">Edição em 2026</span>
                    </div>
                </div>

                <div class="event-photo-strip">
                    <figure class="event-photo-card">
                        <img src="/assets/images/fotos/Expoasa%20(2).jpg" alt="Bon Odori na EXPOASA">
                    </figure>
                    <figure class="event-photo-card">
                        <img src="/assets/images/fotos/Expoasa%20(1).jpg" alt="Mostra de produtos agricolas na EXPOASA">
                    </figure>
                    <figure class="event-photo-card">
                        <img src="/assets/images/fotos/Expoasa%20(3).jpg" alt="Apresentacao de Taiko na EXPOASA">
                    </figure>
                </div>
            </div>
        </section>

        <section id="horarios" class="event-section event-section-photo event-photo-lantern">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Horários de Funcionamento</p>
                    <h2 class="event-title">Acompanhe a 80ª EXPOASA em Assaí</h2>
                </header>

                <div class="event-program-grid">
                    <article class="event-shell program-card">
                        <p class="program-day">Dia 12/06</p>
                        <p class="program-time">18h às 00h</p>
                    </article>

                    <article class="event-shell program-card">
                        <p class="program-day">Dia 13/06</p>
                        <p class="program-time">09h às 00h</p>
                    </article>

                    <article class="event-shell program-card">
                        <p class="program-day">Dia 14/06</p>
                        <p class="program-time">09h às 16h</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section event-color-mint">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Destaques 2026</p>
                    <h2 class="event-title">Novos espaços temáticos e infraestrutura expandida</h2>
                </header>

                <div class="event-attractions-grid">
                    <article class="event-shell attraction-card">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <h3>TV Web e Palco LED</h3>
                        <p>Cobertura por TV Web e palco com painéis de LED para apresentação da cultura japonesa, palestras temáticas e telão exclusivo para a Copa do Mundo.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h3>Auditório de Oficinas</h3>
                        <p>Novo espaço temático dedicado para oficinas e capacitação técnica de produtores rurais.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                        <h3>HackaSUN e ODS</h3>
                        <p>Apresentação de soluções inovadoras (HackaSUN) e Etapa de Ideação da Jornada dos Desafios ODS com apoio da ONU-Habitat.</p>
                    </article>

                    <article class="event-shell attraction-card">
                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                        <h3>Cultura e Gastronomia</h3>
                        <p>Atrações culturais como Bon Odori, Taikô, Ikebana, Matsuri Dance e Cosplay. Ambiente dedicado para expor a gastronomia japonesa e brasileira.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section event-section-photo event-photo-harvest">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Dados da exposicao</p>
                    <h2 class="event-title">Estrutura, abrangencia e perfil de publico da 80a EXPOASA</h2>
                </header>

                <div class="event-data-grid">
                    <article class="event-shell">
                        <h3>Estrutura e Local</h3>
                        <p>A EXPOASA 2026 será realizada no Centro de Eventos Toyosaburo Ikeda (40.000 m²). Mil metros quadrados estão reservados para a exposição de produtos agrícolas, hortifrutigranjeiros e da agroindústria regional, incluindo a divulgação de cultivos alternativos (bambu) e polpas de frutas.</p>
                        <div class="event-chip-list" style="margin-top: 12px;">
                            <span class="event-chip">Cooperativas Agrícolas</span>
                            <span class="event-chip">Cooperativas Financeiras</span>
                            <span class="event-chip">Setor do Agronegócio</span>
                            <span class="event-chip">Maquinário Pesado</span>
                            <span class="event-chip">Soluções Escolares</span>
                        </div>
                    </article>

                    <article class="event-shell">
                        <h3>Abrangência Regional</h3>
                        <p>O evento reúne as cidades de Assaí, Nova América da Colina, Jataizinho, São Sebastião da Amoreira, Santa Cecília do Pavão, Santo Antônio do Paraíso, Nova Santa Bárbara, Cornélio Procópio, Congonhinhas, Nova Fátima, Sertaneja, Rancho Alegre, Uraí, São Jerônimo da Serra, Sapopema, Londrina, Ibiporã, Rolândia e Cambé.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section">
            <div class="container">
                <div class="event-goal-grid">
                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker">Público Estimado</p>
                            <h2 class="event-title" style="font-size: 1.5rem; margin-bottom: 0;">Perfil esperado para 2026</h2>
                        </header>

                        <p class="event-audience-title">Público total: 7.000 pessoas</p>
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
                                    <strong>Médios e grandes produtores</strong>
                                    <span>500</span>
                                </div>
                                <div class="audience-track"><div class="audience-fill" style="width: 7.1%;"></div></div>
                            </div>
                            <div>
                                <div class="audience-item-head">
                                    <strong>Visitantes</strong>
                                    <span>5.000</span>
                                </div>
                                <div class="audience-track"><div class="audience-fill" style="width: 71.5%;"></div></div>
                            </div>
                        </div>
                    </article>

                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker">Objetivos Oficiais</p>
                            <h2 class="event-title" style="font-size: 1.5rem; margin-bottom: 0;">Fortalecer o agronegócio regional</h2>
                        </header>

                        <p class="event-goal-summary">
                            Fortalecer o agronegócio da região apresentando inovações, divulgando a qualidade dos cultivos, incentivando novos empreendedores e apresentando os talentos intelectuais.
                        </p>
                        <ul class="event-list check-list">
                            <li>Abordar com mais ênfase o tema da “diversificação de cultivos”.</li>
                            <li>Abordar a cultura dos orgânicos.</li>
                            <li>Capacitar os agricultores para o uso da Agricultura de Precisão e Agricultura Digital.</li>
                            <li>Viabilizar capacidade financeira para o investimento em tecnologia.</li>
                            <li>Promover debates para combate às pragas e uso responsável de defensivos agrícolas.</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section id="historia" class="event-section event-section-photo event-photo-taiko">
            <div class="container">
                <div class="event-history-grid">
                    <article class="event-shell">
                        <header class="event-header" style="margin-bottom: 12px;">
                            <p class="event-kicker" style="color: #000000;">História e Identidade</p>
                            <h2 class="event-title" style="font-size: 1.56rem; color: #000000;">O Papel das Associações Nipo-Brasileiras</h2>
                        </header>

                        <p>
                            A história de Assaí é vinculada às ações da BRATAC - companhia colonizadora de capital japonês que, na década de 1930, adquiriu a "Colônia Três Barras". Imigrantes japoneses, em sua maioria residentes em São Paulo, adquiriram pequenos lotes para iniciar uma nova etapa de trabalho.
                        </p>
                        <p>
                            Foram fundadas associações focadas na união de pessoas e famílias para concretizar sonhos. Hoje, estas associações estão vinculadas à LACA (Liga das Associações Culturais de Assaí) e à SAMA (Sociedade de Amigos de Assaí), preservando tradições como o Taikô, Ikebana, Bon Odori e esportes como o Beisebol e Gateball.
                        </p>

                        <div class="event-actions">
                            <a href="/assets/2026/Conheca_Historia.docx" class="btn btn-outline" target="_blank">Ler documento completo</a>
                        </div>
                    </article>

                    <article class="event-shell">
                        <h3>Fatos Históricos</h3>
                        <ul class="event-timeline">
                            <li>
                                <span class="event-timeline-year">1930</span>
                                <p>Início da colonização da região de Assaí pelos primeiros imigrantes japoneses.</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">1935</span>
                                <p>Realização da primeira edição da EXPOASA, a exposição agrícola mais antiga do Brasil.</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">1934-1965</span>
                                <p>Funcionamento da Cooperativa Agrícola Três Barras, baseada na ideologia GAT ("Gozar a Terra").</p>
                            </li>
                            <li>
                                <span class="event-timeline-year">2023</span>
                                <p>Retomada do evento após interrupção devido à pandemia, com foco em agricultura digital.</p>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="event-section event-color-ice" id="localizacao">
            <div class="container">
                <header class="event-header">
                    <p class="event-kicker">Como chegar</p>
                    <h2 class="event-title">Centro de Eventos Toyosaburo Ikeda - Assai/PR</h2>
                </header>

                <div class="event-map-layout">
                    <div class="event-map-canvas" aria-label="Mapa da localizacao do evento">
                        <div id="map" class="event-map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7121!2d-50.8499!3d-23.3774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ebf10d54f590f7%3A0xc66085a86a635848!2sCentro%20de%20Eventos%20Toyosaburo%20Ikeda!5e0!3m2!1spt-BR!2sbr!4v1714151000000!5m2!1spt-BR!2sbr" 
                                width="100%" 
                                height="100%" 
                                style="border:0; border-radius: 12px;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
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

        <section class="event-section" style="padding-top: 0; padding-bottom: 45px;">
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
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
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

            // Controle do Navbar no scroll
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.navbar.main-nav').addClass('nav-scrolled');
                } else {
                    $('.navbar.main-nav').removeClass('nav-scrolled');
                }
            });

            setInterval(updateCountdown, 1000);
            updateCountdown();

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

            // Fallback para mapa (uso via Iframe mantido no HTML)
            function initMap() {
                const mapElement = document.getElementById('map');
                if (!mapElement) {
                    console.warn('Elemento de mapa nao encontrado.');
                    return;
                }
            }

            initMap();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarActions = document.querySelector('.navbar-actions');
            const navbar = document.querySelector('.navbar.main-nav');

            function syncHeaderOffset() {
                if (!navbar) {
                    return;
                }

                const currentHeight = Math.ceil(navbar.getBoundingClientRect().height);
                document.documentElement.style.setProperty('--header-offset', currentHeight + 'px');
            }

            if (navbarToggler && navbarActions) {
                navbarToggler.addEventListener('click', function() {
                    this.classList.toggle('active');
                    navbarActions.classList.toggle('show');
                    syncHeaderOffset();
                });
            }

            const mobileMenuOpen = document.getElementById('mobile-menu-open');
            const mobileMenuTrigger = document.getElementById('mobile-menu-trigger');
            const mobileDrawer = document.getElementById('mobile-drawer');
            const drawerOverlay = document.getElementById('drawer-overlay');
            const drawerLinks = document.querySelectorAll('.drawer-link');

            function toggleDrawer() {
                mobileDrawer.classList.toggle('active');
                drawerOverlay.classList.toggle('active');
                document.body.style.overflow = mobileDrawer.classList.contains('active') ? 'hidden' : '';
            }

            if (mobileMenuOpen) mobileMenuOpen.addEventListener('click', toggleDrawer);
            if (mobileMenuTrigger) mobileMenuTrigger.addEventListener('click', toggleDrawer);
            if (drawerOverlay) drawerOverlay.addEventListener('click', toggleDrawer);
            
            drawerLinks.forEach(link => {
                link.addEventListener('click', () => {
                    toggleDrawer();
                });
            });

            function updateNavbarState() {
                if (!navbar) return;

                if (window.scrollY > 80) {
                    navbar.classList.add('nav-scrolled');
                } else {
                    navbar.classList.remove('nav-scrolled');
                }
            }

            updateNavbarState();
            window.addEventListener('scroll', updateNavbarState, { passive: true });
            window.addEventListener('resize', syncHeaderOffset);

            if (window.gsap && window.ScrollTrigger && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                gsap.registerPlugin(ScrollTrigger);

                const revealNodes = gsap.utils.toArray('.hero-scroll-indicator, .event-header, .event-shell, .metric-card, .event-photo-card, .event-cta-banner, .event-map-canvas');

                gsap.from('.hero-main-logo', {
                    y: 20,
                    autoAlpha: 0,
                    duration: 1,
                    ease: 'power2.out'
                });

                gsap.from('.hero-countdown', {
                    y: 20,
                    autoAlpha: 0,
                    duration: 1,
                    delay: 0.3,
                    ease: 'power2.out'
                });

                gsap.from(revealNodes.slice(0, 1), {
                    y: 28,
                    autoAlpha: 0,
                    duration: 0.9,
                    ease: 'power3.out',
                    stagger: 0.1
                });

                revealNodes.slice(2).forEach(function(el) {
                    gsap.from(el, {
                        y: 36,
                        autoAlpha: 0,
                        duration: 0.85,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: el,
                            start: 'top 84%',
                            once: true,
                            fastScrollEnd: true
                        }
                    });
                });

                gsap.to('.hero-layer-a', {
                    scale: 1.18,
                    yPercent: -6,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: '#topo',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: 1.2
                    }
                });

                gsap.to('.hero-brand-container', {
                    yPercent: -10,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: '#topo',
                        start: 'top top',
                        end: 'bottom top',
                        scrub: 0.7
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const credBtns = document.querySelectorAll('a[href*="credenciamento"], .open-credenciamento-popup');
            
            credBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Credenciamento 2026',
                        text: 'O link para o credenciamento oficial será divulgado em breve. Fique atento às nossas redes sociais!',
                        icon: 'info',
                        confirmButtonColor: '#1B4332',
                        confirmButtonText: 'Entendido',
                        background: '#ffffff',
                        customClass: {
                            popup: 'premium-popup'
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
