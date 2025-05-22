<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>79ª EXPOASA - Exposição Regional de Assaí</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #a40202;
            --primary-light: #c41010;
            --primary-dark: #8a0202;
            --secondary-color: #0a4b0f;
            --secondary-light: #14701c;
            --secondary-dark: #073a0c;
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
            background-color: var(--bg-light);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--text-color);
        }

        .japanese-text {
            font-family: 'Noto Sans JP', sans-serif;
        }

        /* HEADER & NAVBAR */
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
            gap: 15px;
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

        .navbar-toggler.active .navbar-toggler-icon {
            background-color: transparent;
        }

        .navbar-toggler.active .navbar-toggler-icon::before {
            transform: rotate(45deg);
            top: 0;
        }

        .navbar-toggler.active .navbar-toggler-icon::after {
            transform: rotate(-45deg);
            bottom: 0;
        }

        /* BANNER SECTION */
        .banner {
            position: relative;
            height: 100vh;
            min-height: 600px;
            background-image: url('/assets/img/expoasa_bg.jpg');
            background-color: #222; /* Cor de fallback */
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
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .banner-title {
            color: var(--white);
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .banner-subtitle {
            color: var(--white);
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 800px;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 255, 255, 0.5);
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

        .banner-cta {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid var(--secondary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin: 0 10px;
        }

        .banner-cta:hover {
            background-color: var(--secondary-light);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .banner-cta.cta-outline {
            background-color: transparent;
            border: 2px solid white;
        }

        .banner-cta.cta-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        /* ABOUT SECTION */
        .section {
            padding: var(--section-spacing) 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.2rem;
            font-weight: 700;
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
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: var(--text-light);
        }

        .accent {
            color: var(--primary-color);
        }

        .accent-secondary {
            color: var(--secondary-color);
        }

        .about-image {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            position: relative;
            height: 100%;
            max-height: 450px;
            transition: all 0.4s ease;
            transform: perspective(1000px) rotateY(-3deg);
        }

        .about-image:hover {
            transform: perspective(1000px) rotateY(0deg);
            box-shadow: 0 18px 35px rgba(164, 2, 2, 0.2);
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            vertical-align: middle;
        }

        .image-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.5), transparent);
            color: white;
            padding: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .image-caption i {
            margin-right: 6px;
            font-size: 0.8rem;
        }

        .about-image:hover .image-caption {
            opacity: 1;
        }

        .about-content {
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            height: 100%;
            border-left: 4px solid var(--primary-color);
            transition: all 0.3s ease;
        }

        .about-content:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
            transform: translateY(-5px);
        }

        .content-title {
            font-size: 1.6rem;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        .content-title:after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60%;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }

        .content-text p {
            margin-bottom: 15px;
            color: var(--text-color);
            line-height: 1.8;
            font-size: 1rem;
        }

        .content-text strong {
            font-weight: 600;
            color: #333;
        }

        .about-action {
            margin-top: 25px;
        }

        .about-action .btn {
            padding: 12px 25px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .about-action .btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .about-action .btn:hover i {
            transform: translateX(5px);
        }

        /* INFO BOXES SECTION */
        .info-boxes {
            background-color: #fff;
            padding: 40px 0;
        }

        .info-box {
            background-color: #fff;
            border-radius: var(--card-radius);
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-top: 3px solid var(--primary-color);
        }

        .info-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .info-box.green {
            border-top-color: var(--secondary-color);
        }

        .info-box-title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info-box-title i {
            font-size: 2rem;
            margin-right: 15px;
            color: var(--primary-color);
            background-color: rgba(164, 2, 2, 0.1);
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .info-box.green .info-box-title i {
            color: var(--secondary-color);
            background-color: rgba(10, 75, 15, 0.1);
        }

        .info-box-title h3 {
            font-size: 1.3rem;
            margin: 0;
            font-weight: 600;
            color: var(--text-color);
        }

        .info-box-content p {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .info-box-content ul {
            padding-left: 15px;
            margin-bottom: 0;
        }

        .info-box-content li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            list-style: none;
        }

        .info-box-content li:before {
            content: "\f00c";
            font-family: FontAwesome;
            position: absolute;
            left: 0;
            top: 0;
            font-size: 0.8rem;
            color: var(--primary-color);
        }

        .info-box.green .info-box-content li:before {
            color: var(--secondary-color);
        }

        /* EVENTOS SECTION */
        .events-section {
            background: linear-gradient(rgba(164, 2, 2, 0.9), rgba(164, 2, 2, 0.9)),
                        url('/assets/images/background/japanese-pattern.jpg');
            background-attachment: fixed;
            color: white;
            padding: 70px 0;
        }

        .events-section .section-title h2 {
            color: white;
        }

        .events-section .section-title p {
            color: rgba(255, 255, 255, 0.8);
        }

        .event-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--card-radius);
            overflow: hidden;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .event-card-header {
            position: relative;
            height: 180px;
            overflow: hidden;
        }

        .event-card-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .event-card:hover .event-card-header img {
            transform: scale(1.1);
        }

        .event-card-body {
            padding: 20px;
            flex-grow: 1;
        }

        .event-card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 600;
            color: white;
        }

        .event-card-desc {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 15px;
        }

        .event-meta {
            display: flex;
            align-items: center;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 10px;
        }

        .event-meta i {
            margin-right: 5px;
            width: 16px;
        }

        .event-meta span {
            margin-right: 15px;
        }

        .btn-learn-more {
            background-color: transparent;
            border: 1px solid white;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: auto;
        }

        .btn-learn-more:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        /* GALERIA SECTION */
        .gallery-section {
            background-color: var(--bg-light);
            padding: 70px 0;
        }

        .gallery-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .gallery-filter {
            padding: 8px 20px;
            background-color: white;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .gallery-filter.active {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
        }

        .gallery-filter:hover:not(.active) {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            border-radius: var(--card-radius);
            overflow: hidden;
            position: relative;
            height: 250px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-item-overlay {
            opacity: 1;
        }

        .gallery-item-overlay h4 {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        .gallery-item-overlay p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            margin: 0;
        }

        /* PROGRAMAÇÃO SECTION */
        .schedule-section {
            background-color: #fff;
            padding: 70px 0;
        }

        .schedule-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .schedule-tab {
            padding: 12px 25px;
            background-color: var(--bg-light);
            border-radius: var(--card-radius);
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .schedule-tab.active {
            background-color: var(--primary-color);
            color: white;
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
            background-color: white;
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .schedule-day {
            display: none;
        }

        .schedule-day.active {
            display: block;
        }

        .schedule-header {
            display: grid;
            grid-template-columns: 100px 1fr 150px;
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            font-weight: 500;
        }

        .schedule-item {
            display: grid;
            grid-template-columns: 100px 1fr 150px;
            padding: 20px;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
            align-items: center;
        }

        .schedule-item:hover {
            background-color: var(--bg-light);
        }

        .schedule-item:last-child {
            border-bottom: none;
        }

        .schedule-time {
            color: var(--primary-color);
            font-weight: 500;
        }

        .schedule-event h4 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .schedule-event p {
            font-size: 0.9rem;
            color: var(--text-light);
            margin: 0;
        }

        .schedule-location {
            display: flex;
            align-items: center;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .schedule-location i {
            margin-right: 5px;
            color: var(--primary-color);
        }

        /* PARCEIROS SECTION */
        .partners-section {
            background-color: var(--bg-light);
            padding: 70px 0;
        }

        .partner-categories {
            margin-top: 40px;
        }

        .partner-category {
            margin-bottom: 40px;
        }

        .partner-category h3 {
            font-size: 1.3rem;
            text-align: center;
            margin-bottom: 25px;
            color: var(--text-color);
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .partner-category h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50%;
            height: 2px;
            background-color: var(--primary-color);
        }

        .partner-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .partner-item {
            background-color: white;
            padding: 20px;
            border-radius: var(--card-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            width: 180px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .partner-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .partner-item img {
            max-width: 80%;
            max-height: 80%;
            filter: grayscale(100%);
            transition: all 0.3s ease;
            opacity: 0.7;
        }

        .partner-item:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* LOCAL SECTION */
        .location-section {
            padding: 0;
            position: relative;
        }

        .map-container {
            height: 500px;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        .location-info {
            position: absolute;
            top: 50px;
            left: 50px;
            background-color: var(--primary-color);
            color: white;
            padding: 30px;
            border-radius: var(--card-radius);
            width: 350px;
            max-width: 90%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .location-info h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .location-details {
            margin-bottom: 20px;
        }

        .location-detail {
            display: flex;
            margin-bottom: 15px;
        }

        .location-detail i {
            margin-right: 10px;
            margin-top: 3px;
            font-size: 1.2rem;
        }

        .location-detail-content {
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .location-detail-content strong {
            display: block;
            margin-bottom: 5px;
        }

        /* OBJETIVOS E RESULTADOS */
        .objetivos-section {
            background: linear-gradient(rgba(10, 75, 15, 0.9), rgba(10, 75, 15, 0.9)),
                      url('/assets/images/background/pattern-dots.png');
            background-attachment: fixed;
            color: white;
            padding: 70px 0;
        }

        .objetivos-section .section-title h2 {
            color: white;
        }

        .objetivos-section .section-title p {
            color: rgba(255, 255, 255, 0.8);
        }

        .objetivos-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .objetivos-box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: var(--card-radius);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            height: 100%;
        }

        .objetivos-box h3 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.5rem;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .objetivos-list {
            padding-left: 0;
            margin-bottom: 0;
        }

        .objetivos-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
            list-style: none;
        }

        .objetivos-list li::before {
            content: "\f00c";
            font-family: FontAwesome;
            position: absolute;
            left: 0;
            top: 0;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* CTA SECTION */
        .cta-section {
            background-color: var(--primary-color);
            color: white;
            padding: 70px 0;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            color: white;
            margin-bottom: 20px;
        }

        .cta-content p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-cta {
            background-color: white;
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            border: 2px solid white;
        }

        .btn-cta:hover {
            background-color: transparent;
            color: white;
            transform: translateY(-3px);
        }

        .btn-cta i {
            margin-right: 8px;
        }

        .btn-cta.outline {
            background-color: transparent;
            color: white;
        }

        .btn-cta.outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* FOOTER */
        .footer {
            background: url('/assets/images/background/japanese-pattern-light.jpg');
            color: var(--text-color);
            padding: 60px 0 0;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            z-index: 0;
        }

        .footer-content {
            position: relative;
            z-index: 1;
        }

        .footer-logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .footer-logo img {
            height: 80px;
            margin-bottom: 20px;
        }

        .footer-tagline {
            font-size: 0.95rem;
            color: var(--text-light);
            max-width: 500px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .social-links {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: white;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-link:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
            color: white;
            box-shadow: 0 5px 15px rgba(164, 2, 2, 0.3);
        }

        .footer-columns {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
            display: inline-block;
        }

        .footer-column h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-menu {
            padding-left: 0;
        }

        .footer-menu li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer-menu li a {
            color: var(--text-color);
            text-decoration: none;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
        }

        .footer-menu li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-menu li a i {
            margin-right: 8px;
            font-size: 0.8rem;
            color: var(--primary-color);
        }

        .footer-contact-info {
            padding-left: 0;
        }

        .footer-contact-info li {
            list-style: none;
            margin-bottom: 15px;
            display: flex;
        }

        .footer-contact-info li i {
            margin-right: 10px;
            margin-top: 5px;
            color: var(--primary-color);
        }

        .footer-newsletter p {
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .footer-form {
            display: flex;
        }

        .footer-form input {
            flex-grow: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 30px 0 0 30px;
            outline: none;
            font-size: 0.9rem;
        }

        .footer-form button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 30px 30px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .footer-form button:hover {
            background-color: var(--primary-light);
        }

        .footer-bottom {
            background-color: #f8f8f8;
            padding: 20px 0;
            border-top: 1px solid #eee;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .footer-bottom-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .copyright {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .copyright a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
        }

        .footer-bottom-links a {
            color: var(--text-light);
            font-size: 0.9rem;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-bottom-links a:hover {
            color: var(--primary-color);
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 40px;
            height: 40px;
            background-color: var(--primary-color);
            color: white;
            border-radius: var(--card-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-light);
            transform: translateY(-5px);
            color: white;
        }

        /* NAVBAR MOBILE IMPROVEMENTS */
        @media (max-width: 767px) {
            .navbar.main-nav {
                padding: 10px 0;
                height: auto;
                background-color: rgba(255, 255, 255, 0.95);
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
            
            .navbar-logos-wrapper {
                max-width: 75%; /* Reduzir para dar mais espaço */
            }
            
            .navbar-logos img {
                height: 40px; /* Reduzir o tamanho dos logos */
                max-height: 40px;
            }
            
            .logo-brasil-japao {
                height: 38px;
                margin-left: 5px;
            }
            
            /* Ajustar posição do botão hamburguer */
            .navbar-toggler {
                margin-right: 15px; /* Distância da borda direita */
                padding: 8px;
                border-radius: 5px;
                background-color: rgba(255, 255, 255, 0.9);
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            
            /* Melhorar o visual do menu dropdown mobile */
            .navbar-actions.show {
                padding: 15px;
                border-radius: 0 0 10px 10px;
                margin-top: 5px;
            }
        }

        /* RESPONSIVIDADE */
        @media (max-width: 991px) {
            .navbar-toggler {
                display: block;
                margin-left: 15px;
            }

            .navbar-logos-wrapper {
                max-width: 85%;
            }

            .navbar-actions {
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: rgba(255, 255, 255, 0.98);
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                display: none;
                flex-direction: column;
                align-items: center;
                z-index: 99;
            }

            .navbar-actions.show {
                display: flex;
            }

            .countdown-item {
                width: 70px;
                height: 70px;
            }

            .countdown-value {
                font-size: 1.5rem;
            }

            .objetivos-wrapper {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .location-info {
                top: 20px;
                left: 20px;
                padding: 20px;
                width: 300px;
            }
        }

        @media (max-width: 767px) {
            .navbar-logos-wrapper {
                max-width: 90%;
            }

            .banner {
                height: auto;
                min-height: 85vh;
                padding: 120px 0;
                background-attachment: scroll;
            }

            .banner-logo {
                width: 200px;
            }

            .banner-title {
                font-size: 2rem;
            }

            .banner-subtitle {
                font-size: 1rem;
            }

            .countdown-item {
                width: 60px;
                height: 60px;
            }

            .countdown-value {
                font-size: 1.2rem;
            }

            .countdown-label {
                font-size: 0.7rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .schedule-tab {
                padding: 10px 20px;
                width: calc(50% - 5px);
            }

            .schedule-header {
                grid-template-columns: 80px 1fr;
            }

            .schedule-item {
                grid-template-columns: 80px 1fr;
            }

            .schedule-location {
                display: none;
            }

            .location-info {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                margin: 0;
                border-radius: 0;
            }

            .map-container {
                height: 350px;
            }

            .footer-bottom-content {
                flex-direction: column;
                gap: 15px;
            }

            .gallery-item {
                height: 200px;
            }
        }

        @media (max-width: 575px) {
            .countdown-wrapper {
                gap: 10px;
            }

            .countdown-item {
                width: 50px;
                height: 50px;
            }

            .countdown-value {
                font-size: 1.1rem;
            }

            .countdown-label {
                font-size: 0.6rem;
            }

            .banner-cta {
                display: block;
                margin: 10px auto;
                max-width: 200px;
            }

            .schedule-tab {
                width: 100%;
                margin-bottom: 10px;
            }

            .info-box-title {
                flex-direction: column;
                text-align: center;
            }

            .info-box-title i {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .footer-form {
                flex-direction: column;
            }

            .footer-form input {
                border-radius: 30px;
                margin-bottom: 10px;
            }

            .footer-form button {
                border-radius: 30px;
                padding: 10px;
            }

            .footer-bottom-links {
                flex-direction: column;
                gap: 10px;
            }

            .back-to-top {
                right: 15px;
                bottom: 15px;
            }
        }

        /* Japonês */
        .japanese-accent {
            font-family: 'Noto Sans JP', sans-serif;
            color: var(--primary-color);
            font-weight: 500;
        }

        .logo-brasil-japao {
            height: 70px;
            max-height: 70px;
        }

        .logo-prefeitura {
            height: 60px;
            max-height: 60px;
            margin-right: 10px;
        }

        .logo-sebrae {
            height: 40px;
            max-height: 40px;
        }

        @media (max-width: 991px) {
            .logo-brasil_japao {
                height: 60px;
            }
            
            .logo-prefeitura, .logo-sebrae {
                height: 50px;
            }
        }

        @media (max-width: 767px) {
            .logo-brasil_japao {
                height: 50px;
            }
            
            .logo-prefeitura, .logo-sebrae {
                height: 40px;
            }
        }

        /* NOVO ESTILO - CRESCIMENTO DO EVENTO */
        /* Estilo para a seção de crescimento */
        .growth-section {
            position: relative;
            padding: 100px 0;
            color: #fff;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .growth-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.05)' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.5;
    z-index: -1;
}

.growth-section .section-title h2::after {
    background-color: rgba(255, 255, 255, 0.5);
}

.accent-light {
    color: #ffcc00;
    font-weight: 700;
}

.growth-content {
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 20px;
    padding: 40px;
    margin-top: 40px;
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.growth-header {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}

.growth-icon {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    margin-right: 20px;
    border: 2px solid rgba(255, 255, 255, 0.2);
}

.growth-icon i {
    font-size: 24px;
    color: #ffcc00;
}

.growth-header h3 {
    margin: 0;
    font-size: 28px;
    letter-spacing: 1px;
}

.growth-text p {
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 25px;
}

.highlight {
    color: #ffcc00;
    font-weight: 600;
}

.awards-container {
    display: flex;
    margin: 35px 0;
    background: rgba(255, 255, 255, 0.05);
    padding: 25px;
    border-radius: 15px;
    border-left: 4px solid #ffcc00;
}

.awards-icon {
    flex-shrink: 0;
    margin-right: 20px;
}

.awards-icon i {
    font-size: 40px;
    color: #ffcc00;
}

.awards-text p {
    margin: 0;
    font-size: 18px;
}

.achievements {
    margin-bottom: 35px;
}

.achievement-item {
    display: flex;
    margin-bottom: 20px;
    transition: transform 0.3s;
}

.achievement-item:hover {
    transform: translateX(10px);
}

.achievement-icon {
    width: 50px;
    height: 50px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    flex-shrink: 0;
}

.achievement-icon i {
    color: #ffcc00;
    font-size: 20px;
}

.achievement-text h4 {
    color: #fff;
    margin-top: 0;
    margin-bottom: 15px;
    font-size: 18px;
}

.achievement-list {
    padding: 0;
    margin: 0;
    list-style: none;
}

.achievement-list li {
    padding: 8px 0;
    margin: 0;
    position: relative;
    padding-left: 30px;
    transition: transform 0.3s;
}

.achievement-list li:hover {
    transform: translateX(5px);
}

.achievement-list li i {
    color: #ffcc00;
    position: absolute;
    left: 0;
    top: 10px;
}

.growth-divider {
    height: 2px;
    background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.2), transparent);
    margin: 30px 0;
}

.growth-highlight {
    background: rgba(255, 255, 255, 0.08);
    padding: 25px;
    border-radius: 15px;
    border-left: 4px solid #ffcc00;
    margin-bottom: 35px;
}

.growth-highlight p {
    margin: 0;
    font-style: italic;
    font-size: 18px;
}

.growth-feature {
    display: flex;
    margin-bottom: 30px;
    background: rgba(255, 255, 255, 0.04);
    padding: 25px;
    border-radius: 15px;
    transition: all 0.3s;
}

.growth-feature:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateY(-5px);
}

.growth-feature-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    flex-shrink: 0;
}

.growth-feature-icon i {
    font-size: 24px;
    color: #ffcc00;
}

.growth-feature-content p {
    margin: 0 0 15px 0;
}

.feature-special {
    background-image: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 204, 0, 0.1) 100%);
    border: 1px solid rgba(255, 204, 0, 0.2);
}

.stats-container {
    display: flex;
    gap: 30px;
    margin-top: 20px;
}

.stat-item {
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 15px 25px;
    min-width: 120px;
    transition: transform 0.3s;
}

.stat-item:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.15);
}

.stat-number {
    display: block;
    font-size: 36px;
    font-weight: 700;
    color: #ffcc00;
    line-height: 1;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
}

/* Adicione no seu bloco de estilos: */

/* Classes de visibilidade responsiva */
.desktop-only {
    display: inline-block;
}

.mobile-only {
    display: none;
}

.jp-friendship {
    color: #a40202;
    font-weight: 700;
    font-family: 'Noto Sans JP', sans-serif;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 15px;
    background: rgba(255, 204, 0, 0.1);
    border: 1px solid rgba(164, 2, 2, 0.2);
}

.logo-text-mobile {
    display: none;
    font-weight: bold;
    font-size: 18px;
    color: #a40202;
}

/* Banner ajustado para evitar sobreposição com navbar */
@media (max-width: 767px) {
    .desktop-only {
        display: none;
    }
    
    .mobile-only {
        display: inline-block;
    }
    
    .logo-main {
        display: none;
    }
    
    .logo-text-mobile {
        display: inline-block;
    }
    
    /* Ajuste no espaçamento do banner para não cortar a logo */
    .banner {
        padding-top: 100px; /* Aumentar o padding superior */
        padding-bottom: 60px;
        background-attachment: scroll; /* Para melhor compatibilidade mobile */
    }
    
    /* Ajuste no container do banner logo */
    .banner-logo {
        width: 180px;
        margin-bottom: 20px;
    }
    
    /* Melhoria para o contador regressivo em mobile */
    .countdown-wrapper {
        background: rgba(0, 0, 0, 0.4);
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
}

/* Adicione ao seu bloco de estilos: */

@media (max-width: 767px) {
    .navbar-actions.show {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        width: calc(100% - 30px);
        margin: 0 15px;
        padding: 15px;
        border-radius: 10px;
        background: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-actions a {
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        transition: all 0.3s;
        text-decoration: none;
        color: #333;
        font-size: 14px;
        font-weight: 500;
    }
    
    .navbar-actions a:hover {
        background: rgba(164, 2, 2, 0.05);
    }
    
    .navbar-actions a.ticket {
        grid-column: span 2;
        background: #a40202;
        color: white;
    }
    
    .navbar-actions a img {
        height: 30px;
        display: block;
        margin: 0 auto 5px;
    }
}

/* Responsividade */
@media (max-width: 991px) {
    .growth-section {
        padding: 70px 0;
    }
    
    .growth-content {
        padding: 30px;
    }
    
    .stats-container {
        flex-wrap: wrap;
    }
    
    .stat-item {
        flex: 1;
        min-width: 100px;
    }
}

@media (max-width: 767px) {
    .growth-section {
        padding: 50px 0;
    }
    
    .growth-content {
        padding: 25px;
        margin-top: 30px;
    }
    
    .growth-header {
        flex-direction: column;
        text-align: center;
    }
    
    .growth-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .awards-container {
        flex-direction: column;
        text-align: center;
    }
    
    .awards-icon {
        margin-right: 0;
        margin-bottom: 15px;
    }
    
    .achievement-item {
        flex-direction: column;
    }
    
    .achievement-icon {
        margin-right: 0;
        margin-bottom: 15px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .achievement-text {
        text-align: center;
    }
    
    .growth-feature {
        flex-direction: column;
        text-align: center;
    }
    
    .growth-feature-icon {
        margin-right: 0;
        margin-bottom: 15px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .stats-container {
        justify-content: center;
    }
}

/* Animações para elementos da seção */
[data-aos] {
    opacity: 0;
    transition: all 0.8s;
}

[data-aos="fade-up"] {
    transform: translateY(50px);
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

[data-aos-delay="100"] {
    transition-delay: 0.1s;
}

[data-aos-delay="200"] {
    transition-delay: 0.2s;
}

[data-aos-delay="300"] {
    transition-delay: 0.3s;
}

[data-aos-delay="400"] {
    transition-delay: 0.4s;
}

[data-aos-delay="500"] {
    transition-delay: 0.5s;
}

[data-aos-delay="600"] {
    transition-delay: 0.6s;
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
                        <img src="/assets/img/logo_laca.png" alt="LACA" class="logo-main">
                        <!-- Logo menor para mobile -->
                    </a>
                    <!-- Nas telas maiores mostra a imagem, nas pequenas mostra texto -->
                    <img src="/assets/img/brasil_japao.png" alt="130 Anos de Amizade Brasil & Japão" class="logo-brasil-japao desktop-only">
                    <span class="mobile-only jp-friendship">79ª EXPOASA</span>
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
                <a href="{{ route('ideasun.index') }}" class="ticket">
                    <img src="/assets/images/icon/ticket.png" alt="IDEASUN">
                    <span>IDEASUN 2025</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="banner">
        <div class="banner-content">
            <img src="/assets/img/expoasa.png" alt="79ª Expoasa" class="banner-logo">

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

            <div class="banner-actions">
                <a href="#about" class="banner-cta">Saiba Mais</a>
                <a href="#schedule" class="banner-cta cta-outline">Programação</a>
            </div>
        </div>
    </section>
    
    <!-- ABOUT -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-title">
                <h2>Sobre a <span class="accent">EXPOASA</span></h2>
                <p>Conheça a Exposição Regional de Assaí, uma tradição cultural e agrícola que une o Brasil e o Japão.</p>
            </div>

            <div class="row align-items-center about-row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="about-image">
                        <img src="/assets/images/expo_2024/expo_182.jpg" alt="EXPOASA" class="img-fluid">
                        <div class="image-caption">
                            <i class="fa fa-camera"></i>
                            78ª Exposição Agrícola Regional de Assaí
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="content-title">79ª EXPOASA</h3>
                        <div class="content-text">
                            <p>A exposição japonesa mais antiga do Brasil, será realizada nos dias 6, 7 e 8 de junho de 2025, no Centro de Eventos Toyosaburo Ikeda, em Assaí (PR). Promovido pela LACA, com apoio do Governo Municipal e do Sebrae, o evento reúne colônias japonesas para celebrar a cultura, o agronegócio e a tecnologia, destacando a importância das tradições nipônicas na região.    </p>
                            <div class="about-action">
                                <a href="#features" class="btn btn-primary">
                                    <span>Descubra os Destaques</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CRESCIMENTO DO EVENTO - Versão Aprimorada com Correções -->
    <section class="section growth-section" style="background: linear-gradient(rgba(164, 2, 2, 0.9), rgba(164, 2, 2, 0.95)), url('/assets/images/expo_2024/expo_182.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="text-white">O Crescimento da <span class="accent-light">EXPOASA</span></h2>
                <p class="text-white">Uma exposição que se renova e expande seu alcance a cada ano</p>
            </div>

            <div class="growth-content" style="background-color: rgba(0, 0, 0, 0.35); border: 1px solid rgba(255, 255, 255, 0.15); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);">
                <div class="growth-header" data-aos="fade-up">
                    <div class="growth-icon" style="background: rgba(255, 255, 255, 0.15); border: 2px solid #ffcc00;">
                        <i class="fa fa-line-chart" style="color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);"></i>
                    </div>
                    <h3 class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-weight: 700;">SOBRE O CRESCIMENTO DO EVENTO</h3>
                </div>

                <div class="growth-text" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-white" style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); line-height: 1.8; font-size: 1.05rem; letter-spacing: 0.3px;">Nos últimos anos, Assaí veio se tornando uma referência mundial em educação e inovação, construindo um novo arranjo de desenvolvimento local. Este modelo premiado, chamado de <span class="highlight" style="color: #ff3; font-weight: 600; text-shadow: 0 0 5px rgba(255, 255, 0, 0.3);">Vale do Sol</span>, representa uma gestão pública repleta de boas-práticas, com fortes parcerias com o setor privado e com as universidades.</p>
                    
                    <div class="awards-container" data-aos="fade-up" data-aos-delay="200" style="background: linear-gradient(135deg, rgba(255, 204, 0, 0.15), rgba(255, 0, 0, 0.15)); border-left: 4px solid #ffcc00; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);">
                        <div class="awards-icon">
                            <i class="fa fa-trophy" style="color: #ffcc00; font-size: 45px; text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);"></i>
                        </div>
                        <div class="awards-text">
                            <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-size: 1.1rem;">Em apenas dois anos, Assaí ganhou <span class="highlight" style="color: #ff3; font-weight: 700;">24 prêmios</span>, eleita uma das <span class="highlight" style="color: #ff3; font-weight: 700;">7 comunidades mais inteligentes do mundo</span>, ganhadora do melhor modelo de educação empreendedora do Brasil, assumindo um protagonismo internacional com representação em importantes governanças.</p>
                        </div>
                    </div>
                    
                    <!-- SEÇÃO DE RECONHECIMENTOS INTERNACIONAIS CORRIGIDA -->
                    <div class="achievements" data-aos="fade-up" data-aos-delay="300" style="padding: 25px; background: linear-gradient(135deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 128, 0.2)); border-radius: 15px; margin: 35px 0; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 204, 0, 0.2);">
                        <div style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div style="width: 60px; height: 60px; min-width: 60px; background: rgba(255, 204, 0, 0.2); border-radius: 50%; border: 2px solid #ffcc00; display: flex; align-items: center; justify-content: center; margin-right: 15px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);">
                                <i class="fa fa-globe" style="color: #ffcc00; font-size: 28px; text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);"></i>
                            </div>
                            <h4 style="color: #fff; margin: 0; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-weight: 700; font-family: 'Noto Sans JP', sans-serif; font-size: 22px; letter-spacing: 0.5px;">Reconhecimentos Internacionais</h4>
                        </div>
                        
                        <div style="margin-left: 10px; position: relative;">
                            <!-- Linha vertical dourada -->
                            <div style="position: absolute; left: 19.5px; top: 0; bottom: 0; width: 3px; background-color: #ffcc00; z-index: 1;"></div>
                            
                            <!-- Item 1 - Removido o ícone, mantido apenas o texto -->
                            <div style="display: flex; margin-bottom: 20px; position: relative; z-index: 2;">
                                <div style="width: 40px; height: 40px; min-width: 40px; margin-right: 15px; display: flex; align-items: center; justify-content: center;">
                                    <!-- Espaço vazio onde estava o ícone -->
                                </div>
                                <div style="background: rgba(0, 0, 0, 0.3); padding: 15px; border-radius: 10px; flex-grow: 1; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                    <p style="margin: 0; color: #fff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Membro do <span style="color: #ffcc00; font-weight: 600; background: rgba(0, 0, 0, 0.2); padding: 2px 10px; border-radius: 4px; margin-left: 5px;">Cities Coalition for Digital Rights</span></p>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div style="display: flex; margin-bottom: 20px; position: relative; z-index: 2;">
                                <div style="width: 40px; height: 40px; min-width: 40px; margin-right: 15px; display: flex; align-items: center; justify-content: center;">
                                    <!-- Espaço vazio onde estava o ícone -->
                                </div>
                                <div style="background: rgba(0, 0, 0, 0.3); padding: 15px; border-radius: 10px; flex-grow: 1; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                    <p style="margin: 0; color: #fff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Membro do <span style="color: #ffcc00; font-weight: 600; background: rgba(0, 0, 0, 0.2); padding: 2px 10px; border-radius: 4px; margin-left: 5px;">Cities of Services na Johns Hopkins University</span></p>
                                </div>
                            </div>
                            
                            <!-- Item 3 -->
                            <div style="display: flex; margin-bottom: 20px; position: relative; z-index: 2;">
                                <div style="width: 40px; height: 40px; min-width: 40px; margin-right: 15px; display: flex; align-items: center; justify-content: center;">
                                    <!-- Espaço vazio onde estava o ícone -->
                                </div>
                                <div style="background: rgba(0, 0, 0, 0.3); padding: 15px; border-radius: 10px; flex-grow: 1; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                    <p style="margin: 0; color: #fff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Membro do <span style="color: #ffcc00; font-weight: 600; background: rgba(0, 0, 0, 0.2); padding: 2px 10px; border-radius: 4px; margin-left: 5px;">Network Cities da Bloomberg</span></p>
                                </div>
                            </div>
                            
                            <!-- Item 4 -->
                            <div style="display: flex; margin-bottom: 20px; position: relative; z-index: 2;">
                                <div style="width: 40px; height: 40px; min-width: 40px; margin-right: 15px; display: flex; align-items: center; justify-content: center;">
                                    <!-- Espaço vazio onde estava o ícone -->
                                </div>
                                <div style="background: rgba(0, 0, 0, 0.3); padding: 15px; border-radius: 10px; flex-grow: 1; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                    <p style="margin: 0; color: #fff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Membro da <span style="color: #ffcc00; font-weight: 600; background: rgba(0, 0, 0, 0.2); padding: 2px 10px; border-radius: 4px; margin-left: 5px;">Urban95 da Fundação Van Leer</span></p>
                                </div>
                            </div>
                            
                            <!-- Item 5 -->
                            <div style="display: flex; position: relative; z-index: 2;">
                                <div style="width: 40px; height: 40px; min-width: 40px; margin-right: 15px; display: flex; align-items: center; justify-content: center;">
                                    <!-- Espaço vazio onde estava o ícone -->
                                </div>
                                <div style="background: rgba(0, 0, 0, 0.3); padding: 15px; border-radius: 10px; flex-grow: 1; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);">
                                    <p style="margin: 0; color: #fff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Membro do <span style="color: #ffcc00; font-weight: 600; background: rgba(0, 0, 0, 0.2); padding: 2px 10px; border-radius: 4px; margin-left: 5px;">Fórum Nacional de Inovação</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="growth-divider" style="height: 3px; background: linear-gradient(to right, transparent, rgba(255, 204, 0, 0.5), transparent); margin: 35px 0;"></div>
                
                <div class="growth-highlight" data-aos="fade-up" data-aos-delay="400" style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.15), rgba(0, 0, 128, 0.15)); border-left: 4px solid #ffcc00; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25); transform: translateX(5px);">
                    <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-style: italic; font-size: 1.15rem; font-weight: 500;">Mediante as comprovações supracitadas, Assaí tornou-se um destino das cidades pequenas brasileiras, interessadas em entender a metodologia do Vale do Sol.</p>
                </div>
                
                <div class="growth-feature" data-aos="fade-up" data-aos-delay="500" style="background: linear-gradient(135deg, rgba(164, 2, 2, 0.6), rgba(0, 0, 100, 0.2)); border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);">
                    <div class="growth-feature-icon" style="background: rgba(255, 255, 255, 0.15); border: 2px solid #ffcc00;">
                        <i class="fa fa-rocket" style="color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);"></i>
                    </div>
                    <div class="growth-feature-content">
                        <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-size: 1.05rem; letter-spacing: 0.3px;">Com o fortalecimento da imagem da cidade, a EXPOASA decolou para outros horizontes: utilizar o evento para transferir conhecimentos e desenvolver as políticas públicas da região. Para tanto, o processo de inovação ganhou espaço, no ano passado, transformando a EXPOASA no palco do <span class="highlight" style="color: #ff3; font-weight: 700; background: rgba(0, 0, 0, 0.2); padding: 2px 8px; border-radius: 4px;">IDEASUN</span> – hackathon para promover o desenvolvimento das soft skills dos alunos assaienses.</p>
                    </div>
                </div>
                
                <div class="growth-feature feature-special" data-aos="fade-up" data-aos-delay="600" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.05)' fill-rule='evenodd'/%3E%3C/svg%3E'), linear-gradient(135deg, rgba(255, 204, 0, 0.1) 0%, rgba(255, 0, 0, 0.2) 100%); border: 1px solid rgba(255, 204, 0, 0.3); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);">
                    <div class="growth-feature-icon" style="background: rgba(255, 255, 255, 0.15); border: 2px solid #ffcc00;">
                        <i class="fa fa-lightbulb-o" style="color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);"></i>
                    </div>
                    <div class="growth-feature-content">
                        <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-size: 1.05rem; letter-spacing: 0.3px;">O voo da inovação foi tão exitoso que, nesta Edição de 2025, o evento terá a <span class="highlight" style="color: #ff3; font-weight: 700; background: rgba(0, 0, 0, 0.2); padding: 2px 8px; border-radius: 4px;">Arena do Conhecimento</span>: um ambiente voltado para as universidades, setor privado e cidades da região interessadas em trocas de conhecimentos.</p>
                        
                        <div class="stats-container" style="margin-top: 25px; gap: 35px;">
                            <div class="stat-item" style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.3), rgba(0, 0, 128, 0.3)); border: 1px solid rgba(255, 204, 0, 0.3); transform: translateY(-5px); position: relative;">
                                <span class="stat-number" style="font-size: 40px; color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.3); font-weight: 800; font-family: 'Noto Sans JP', sans-serif;">11</span>
                                <span class="stat-label" style="color: rgba(255, 255, 255, 0.9); font-weight: 500; letter-spacing: 1px;">Universidades<br>confirmadas</span>
                                <div style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: #ffcc00; transform: rotate(45deg);"></div>
                            </div>
                            <div class="stat-item" style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.3), rgba(0, 0, 128, 0.3)); border: 1px solid rgba(255, 204, 0, 0.3); transform: translateY(-5px); position: relative;">
                                <span class="stat-number" style="font-size: 40px; color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.3); font-weight: 800; font-family: 'Noto Sans JP', sans-serif;">30+</span>
                                <span class="stat-label" style="color: rgba(255, 255, 255, 0.9); font-weight: 500; letter-spacing: 1px;">Cidades<br>participantes</span>
                                <div style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: #ffcc00; transform: rotate(45deg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INFO BOXES -->
    <!-- CORREÇÃO DA SEÇÃO DE INFORMAÇÕES DO EVENTO (COM LOCAL DO EVENTO NA MESMA LINHA) -->
    <section id="features" class="section info-boxes">
        <div class="container">
            <div class="section-title">
                <h2>Informações do <span class="accent">Evento</span></h2>
                <p>Confira as principais informações sobre a 79ª EXPOASA</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-calendar"></i>
                            <h3>Data da Abertura Oficial</h3>
                        </div>
                        <div class="info-box-content">
                            <p>A cerimônia de abertura oficial da 79ª EXPOASA acontecerá no dia:</p>
                            <ul>
                                <li>6 de junho de 2025 às 19:00hs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-clock-o"></i>
                            <h3>Horários de Funcionamento</h3>
                        </div>
                        <div class="info-box-content">
                            <p>O evento estará aberto ao público nos seguintes horários:</p>
                            <ul>
                                <li>Dias 6 e 7 de junho: 9:00hs às 00:00hs</li>
                                <li>Dia 8 de junho: 9:00hs às 16:00hs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-users"></i>
                            <h3>Estimativa de Público</h3>
                        </div>
                        <div class="info-box-content">
                            <p>A expectativa de visitantes para a 79ª edição da EXPOASA é de:</p>
                            <ul>
                                <li>Dias 6 e 7 de junho: 8.000 pessoas</li>
                                <li>Dia 8 de junho: 2.000 pessoas</li>
                                <li>Total: mais de 10.000 visitantes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-4">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-user-circle"></i>
                            <h3>Público-Alvo</h3>
                        </div>
                        <div class="info-box-content">
                            <p>O evento abrange um público diversificado, incluindo:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Visitantes adeptos da cultura japonesa</li>
                                        <li>Japoneses da região</li>
                                        <li>Agricultores da região</li>
                                        <li>Prefeitos Paranaenses</li>
                                        <li>Secretários Municipais de Educação</li>
                                        <li>Autoridades do Governo do Estado do Paraná</li>
                                        <li>Empresários de Tecnologia e do Agronegócio</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Professores e Alunos de 15 cidades</li>
                                        <li>Alunos de 07 Universidades da região</li>
                                        <li>Famílias dos alunos das instituições de ensino</li>
                                        <li>Engenheiros e Agrônomos</li>
                                        <li>Associados da Integrada</li>
                                        <li>Associados da Cocamar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-4">
                    <div class="info-box" style="background: linear-gradient(135deg, rgba(164, 2, 2, 0.05), rgba(255, 204, 0, 0.1)); border-top: 3px solid var(--primary-color); position: relative; overflow: hidden;">
                        <div class="info-box-title">
                            <i class="fa fa-map-marker" style="background-color: rgba(164, 2, 2, 0.1);"></i>
                            <h3>Local do Evento</h3>
                        </div>
                        <div class="info-box-content">
                            <div style="display: flex; flex-wrap: wrap; gap: 20px; align-items: flex-start;">
                                <div style="flex: 1; min-width: 250px;">
                                    <p style="font-weight: 500; color: #444; margin-bottom: 15px;">
                                        A 79ª EXPOASA será realizada no <span style="color: var(--primary-color); font-weight: 600;">Centro de Eventos Toyosaburo Ikeda</span>, localizado em Assaí, Paraná.
                                    </p>
                                    <div style="background-color: #f9f9f9; border-radius: 8px; padding: 15px; border-left: 3px solid var(--primary-color); margin-bottom: 15px;">
                                        <p style="margin-bottom: 8px; font-size: 0.95rem;"><i class="fa fa-map-pin" style="color: var(--primary-color); margin-right: 8px;"></i> <strong>Endereço:</strong> Avenida Paul Harris, S/N, Assaí, Paraná</p>
                                        <p style="margin-bottom: 0; font-size: 0.95rem;"><i class="fa fa-tag" style="color: var(--primary-color); margin-right: 8px;"></i> <strong>CEP:</strong> 86220-000</p>
                                    </div>
                                    <!-- BOTÃO COMO CHEGAR MODERNIZADO -->
                                    <div style="margin-top: 15px; display: flex; align-items: center;">
                                        <a href="https://maps.app.goo.gl/VMiKEB5NxdVM8ni6A" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #a40202, #c41010); color: white; text-decoration: none; padding: 10px 18px; border-radius: 30px; font-size: 0.9rem; font-weight: 500; transition: all 0.3s ease; box-shadow: 0 4px 10px rgba(164, 2, 2, 0.3); border: none; text-transform: uppercase; letter-spacing: 0.5px;">
                                            <i class="fa fa-map-marker" style="font-size: 16px;"></i>
                                            <span>Como Chegar</span>
                                        </a>
                                        <div style="flex-grow: 1; text-align: right; margin-right: 10px;">
                                            <img src="/assets/images/icon/map-pin.svg" alt="Localização" style="height: 28px; opacity: 0.5;">
                                        </div>
                                    </div>
                                </div>
                                <div style="flex: 1; min-width: 250px;">
                                    <p style="font-weight: 500; color: #444; margin-bottom: 12px;">
                                        O local oferece ampla estrutura para:
                                    </p>
                                    <ul style="list-style: none; padding-left: 5px; margin-bottom: 0;">
                                        <li style="margin-bottom: 8px; display: flex; align-items: flex-start;">
                                            <span>Recepção de expositores e visitantes</span>
                                        </li>
                                        <li style="margin-bottom: 8px; display: flex; align-items: flex-start;">
                                            <span>Áreas específicas para exposição agrícola</span>
                                        </li>
                                        <li style="margin-bottom: 8px; display: flex; align-items: flex-start;">
                                            <span>Espaços para apresentações culturais</span>
                                        </li>
                                        <li style="margin-bottom: 0; display: flex; align-items: flex-start;">
                                            <span>Praça de gastronomia e muito mais</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Decoração de fundo -->
                        <div style="position: absolute; right: -15px; bottom: -15px; opacity: 0.1; z-index: 0;">
                            <i class="fa fa-map-o" style="font-size: 120px; color: var(--primary-color);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GASTRONOMIA -->
    <section class="section events-section">
        <div class="container">
            <div class="section-title">
                <h2>Gastronomia <span class="japanese-accent" style="color: #ffcc00; background-color: rgba(0, 0, 0, 0.3); padding: 2px 10px; border-radius: 4px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">料理</span></h2>
                <p>Uma experiência única da culinária japonesa e brasileira</p>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="event-card">
                        <div class="event-card-body">
                            <h3 class="event-card-title">SOBRE A NOSSA RICA GASTRONOMIA</h3>
                            <p class="event-card-desc">No eixo da gastronomia, a EXPOASA também se destaca. O evento reúne a culinária japonesa, lanches e muito churrasco. Nesta Edição 2025, teremos a renomada culinária da Hachimitsu, trazendo pâtisserie e a gastronomia japonesa para alegrar os mais de 10.000 visitantes previstos para o evento.</p>
                            <p class="event-card-desc">A LACA não fica para trás! Anualmente, as mulheres da LACA (Fujinkai <span class="japanese-accent" style="color: #ffcc00; background-color: rgba(0, 0, 0, 0.3); padding: 2px 10px; border-radius: 4px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">婦人会</span>) preparam com muito carinho o famoso Udon (<span class="japanese-accent" style="color: #ffcc00; background-color: rgba(0, 0, 0, 0.3); padding: 2px 10px; border-radius: 4px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">饂飩</span>) – considerado
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-card-header">
                            <img src="/assets/images/expo_2024/expo_170.jpg" alt="Concurso Gastronômico">
                        </div>
                        <div class="event-card-body">
                            <h3 class="event-card-title">Concurso Gastronômico: RYOTO 2025</h3>
                            <p class="event-card-desc">Nesta Edição, o evento contará com um concurso gastronômico, denominado RYOTO. Será a primeira edição de um concurso que veio para ficar.</p>
                            <p class="event-card-desc">A votação será realizada pelos visitantes do evento, durante os três dias. No dia 8 de junho, será computado os votos e gerado a classificação de cada expositor gastronômico. O prato ganhador receberá um prêmio de R$ 1.000,00 (mil reais), além de ser convidado para participar do Festival Gastronômico, em outubro.</p>
                            <div class="event-meta">
                                <i class="fa fa-calendar"></i>
                                <span>6-8 de junho</span>
                                <i class="fa fa-map-marker"></i>
                                <span>Arena Gastronômica</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="event-card">
                        <div class="event-card-header">
                            <img src="/assets/images/expo_2024/expo_167.jpg" alt="Culinária Japonesa">
                        </div>
                        <div class="event-card-body">
                            <h3 class="event-card-title">Culinária Japonesa Tradicional</h3>
                            <p class="event-card-desc">Desfrute de pratos tradicionais japoneses preparados com técnicas autênticas e ingredientes de qualidade. A EXPOASA oferece uma oportunidade única de experimentar a verdadeira culinária japonesa sem sair do Brasil.</p>
                            <p class="event-card-desc">Entre os destaques estão o Udon preparado pelas senhoras da LACA, sushi, temaki, yakisoba, tempurá e muitas outras iguarias que representam o melhor da gastronomia nipônica.</p>
                            <div class="event-meta">
                                <i class="fa fa-calendar"></i>
                                <span>6-8 de junho</span>
                                <i class="fa fa-map-marker"></i>
                                <span>Praça de Alimentação</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CULTURA JAPONESA -->
    <section class="section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Cultura Japonesa <span class="japanese-accent">日本文化</span></h2>
                <p>Celebrando as tradições e a herança cultural japonesa</p>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="about-content">
                        <h3>ARENA CULTURAL</h3>
                        <p>Nesta Edição, a EXPOASA será sede do Festival Paranaense de Bon Odori, reunindo 800 japoneses para festejar a cultura japonesa. Além disso, teremos cosplay, desfile de K-pop e muitas atividades no mundo Geek.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-music"></i>
                            <h3>Bon Odori</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Festival tradicional japonês de dança que honra os ancestrais. Na EXPOASA, o evento reunirá 800 dançarinos em uma celebração vibrante e colorida da cultura japonesa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-user-secret"></i>
                            <h3>Cosplay</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Concurso e desfile de cosplay, reunindo entusiastas de anime, mangá e cultura pop japonesa, com premiações para as melhores caracterizações.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-star"></i>
                            <h3>K-Pop</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Apresentações e competições de grupos de K-Pop, com coreografias e músicas que representam um dos maiores fenômenos culturais da Ásia contemporânea.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-bookmark"></i>
                            <h3>Taiko</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Apresentações dos tradicionais tambores japoneses, um espetáculo de percussão que combina música, movimento e espírito marcial.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-paper-plane"></i>
                            <h3>Origami</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Oficinas de origami para todas as idades, ensinando a arte tradicional japonesa de dobrar papel em diversas formas criativas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-language"></i>
                            <h3>Nihongo</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Oficina de introdução à língua japonesa, com noções básicas de escrita, pronúncia e expressões cotidianas para os visitantes interessados em aprender o idioma.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OBJETIVOS E RESULTADOS - COM BACKGROUND ATUALIZADO E TEXTO BRANCO -->
    <section class="objetivos-section" style="background: linear-gradient(rgba(10, 75, 15, 0.85), rgba(10, 75, 15, 0.9)), url('/assets/images/arenas/tenda_conhecimento.jpg'); background-size: cover; background-position: center; background-attachment: fixed; position: relative;">
        <!-- Camada de desfoque adicional para melhorar o contraste -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; backdrop-filter: blur(3px); z-index: 0;"></div>
        
        <div class="container" style="position: relative; z-index: 1;">
            <div class="section-title">
                <h2 style="color: white; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);">Objetivos e <span class="accent" style="color: #ffcc00; text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);">Resultados</span></h2>
                <p style="color: rgba(255, 255, 255, 0.9); text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);">Conheça os propósitos e expectativas da 79ª EXPOASA</p>
            </div>

            <div class="objetivos-wrapper">
                <div class="objetivos-box" style="background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                    <h3 style="color: #ffcc00; text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);">OBJETIVOS DO EVENTO</h3>
                    <ul class="objetivos-list" style="color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);">
                        <li style="color: white;">Promover a vocação da região, demonstrando um novo modelo de desenvolvimento local e regional</li>
                        <li style="color: white;">Apresentar a cultura japonesa</li>
                        <li style="color: white;">Promover capacitações, transferindo conhecimento para os residentes da região do Norte Central</li>
                        <li style="color: white;">Promover o networking entre um público bastante heterogêneo (agricultores, empresários, professores, alunos, startups, autoridades)</li>
                        <li style="color: white;">Promover as ações de inovação que impulsionaram Assaí para uma das cidades mais inteligentes do mundo, por conta do seu processo educacional de formação e retenção de talentos</li>
                        <li style="color: white;">Promover o letramento de gestão antecipatória, orientada a impacto social</li>
                    </ul>
                </div>

                <div class="objetivos-box" style="background-color: rgba(255, 255, 255, 0.15); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);">
                    <h3 style="color: #ffcc00; text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);">RESULTADOS ESPERADOS</h3>
                    <ul class="objetivos-list" style="color: white; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);">
                        <li style="color: white;">Mais de 10.000 visitantes, durante os três dias de evento</li>
                        <li style="color: white;">Mais de 20 projetos de extensão das universidades</li>
                        <li style="color: white;">Diversos cursos de gestão, agronegócios e tecnologia</li>
                        <li style="color: white;">Movimentação de R$ 500 mil reais no setor gastronômico</li>
                        <li style="color: white;">Pelo menos, 15 cidades contagiadas por novos métodos de governabilidade</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAMAÇÃO (SCHEDULE) -->
    <section id="schedule" class="section schedule-section">
        <div class="container">
            <div class="section-title">
                <h2>Programação do <span class="accent">Evento</span></h2>
                <p>Confira os principais destaques dos três dias de evento</p>
            </div>

            <div class="schedule-tabs" id="schedule-tabs">
                <div class="schedule-tab active" data-day="day1">
                    <h4>Dia 1</h4>
                    <span>6 de Junho</span>
                </div>
                <div class="schedule-tab" data-day="day2">
                    <h4>Dia 2</h4>
                    <span>7 de Junho</span>
                </div>
                <div class="schedule-tab" data-day="day3">
                    <h4>Dia 3</h4>
                    <span>8 de Junho</span>
                </div>
            </div>

            <div class="schedule-content">
                <div id="day1" class="schedule-day active">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local</div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">09:00</div>
                        <div class="schedule-event">
                            <h4>Abertura da Feira</h4>
                            <p>Início das atividades e abertura dos estandes</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Centro de Eventos
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">10:30</div>
                        <div class="schedule-event">
                            <h4>Início do IDEASUN</h4>
                            <p>Abertura do hackathon inter-regional do Norte do Paraná</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Arena do Conhecimento
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">14:00</div>
                        <div class="schedule-event">
                            <h4>Mostra Agrícola</h4>
                            <p>Apresentação dos melhores produtos agrícolas da região</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Pavilhão Agrícola
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">16:00</div>
                        <div class="schedule-event">
                            <h4>Workshop de Inovação</h4>
                            <p>Apresentação de projetos inovadores em parceria com o CREA-PR</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Auditório Principal
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">19:00</div>
                        <div class="schedule-event">
                            <h4>Cerimônia de Abertura Oficial</h4>
                            <p>Cerimônia oficial com autoridades e convidados especiais</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Palco Principal
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">21:00</div>
                        <div class="schedule-event">
                            <h4>Apresentação Cultural</h4>
                            <p>Show de taiko e dança tradicional japonesa</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Palco Principal
                        </div>
                    </div>
                </div>

                <div id="day2" class="schedule-day">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local</div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">09:00</div>
                        <div class="schedule-event">
                            <h4>Abertura da Feira</h4>
                            <p>Início das atividades do segundo dia</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Centro de Eventos
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">10:00</div>
                        <div class="schedule-event">
                            <h4>Seminário de Crédito</h4>
                            <p>Apresentação de linhas de crédito e campanhas institucionais</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Sala de Conferências
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">14:00</div>
                        <div class="schedule-event">
                            <h4>Apresentação das Cooperativas Mirins</h4>
                            <p>Exposição de projetos das Escolas Rural Padre França e Rotary</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Arena do Conhecimento
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">16:00</div>
                        <div class="schedule-event">
                            <h4>Competição de K-Pop</h4>
                            <p>Apresentações de grupos de dança K-Pop</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Palco Cultural
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">19:00</div>
                        <div class="schedule-event">
                            <h4>Festival de Bon Odori</h4>
                            <p>Grande apresentação do Festival Paranaense de Bon Odori</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Arena Cultural
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">21:30</div>
                        <div class="schedule-event">
                            <h4>Apresentação Musical</h4>
                            <p>Show com artistas regionais</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Palco Principal
                        </div>
                    </div>
                </div>

                <div id="day3" class="schedule-day">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local</div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">09:00</div>
                        <div class="schedule-event">
                            <h4>Abertura da Feira</h4>
                            <p>Início das atividades do último dia</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Centro de Eventos
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">10:00</div>
                        <div class="schedule-event">
                            <h4>Assinatura de Acordo CREA-PR</h4>
                            <p>Assinatura do acordo de cooperação técnica entre o Presidente Clodomir Ascari, o Prefeito Michel Ângelo Bomtempo e o Prefeito Geri Dutra</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Auditório Principal
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">13:00</div>
                        <div class="schedule-event">
                            <h4>Premiação RYOTO 2025</h4>
                            <p>Divulgação e premiação do melhor prato do concurso gastronômico</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Arena Gastronômica
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">14:30</div>
                        <div class="schedule-event">
                            <h4>Premiação do IDEASUN</h4>
                            <p>Apresentação final e premiação dos melhores projetos do hackathon</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Arena do Conhecimento
                        </div>
                    </div>

                    <div class="schedule-item">
                        <div class="schedule-time">15:30</div>
                        <div class="schedule-event">
                            <h4>Encerramento Oficial</h4>
                            <p>Cerimônia de encerramento da 79ª EXPOASA</p>
                        </div>
                        <div class="schedule-location">
                            <i class="fa fa-map-marker"></i> Palco Principal
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ATIVIDADES E PARCEIROS -->
    <section class="section partners-section">
        <div class="container">
            <div class="section-title">
                <h2>Atividades <span class="accent">Especiais</span></h2>
                <p>Conheça as principais iniciativas que fazem parte da 79ª EXPOASA</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-graduation-cap"></i>
                            <h3>Arena do Conhecimento</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Um ambiente voltado para as universidades, setor privado e cidades da região interessadas em trocas de conhecimentos, com 11 universidades e mais de 30 cidades confirmadas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-lightbulb-o"></i>
                            <h3>IDEASUN</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Primeiro hackathon inter-regional do Norte do Paraná, realizado com 15 cidades da região do Sebrae PR, focado no desenvolvimento de soluções para desafios locais.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-briefcase"></i>
                            <h3>Feira do Microempreendedor</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Espaço organizado pelo Sebrae PR para incentivar e fortalecer a participação dos MEIs da região em eventos que promovam cultura e economia criativa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-handshake-o"></i>
                            <h3>Feira da Empregabilidade</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Espaço da Agência do Trabalhador de Assaí que promoverá vagas de emprego durante o evento, transformando a EXPOASA em uma fonte geradora de oportunidades para a região.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-heartbeat"></i>
                            <h3>Ação Social da Saúde</h3>
                        </div>
                        <div class="info-box-content">
                            <p>A Equipe de Saúde do Município de Assaí promoverá atendimento de saúde preventiva para todos os visitantes e apresentará os projetos de inovação praticados na saúde pública municipal.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-newspaper-o"></i>
                            <h3>JORNAL ASAHI</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Uma imprensa formada por estudantes que promoverá a cobertura do evento ao vivo, de maneira lúdica e divertida, integrando o produto jornalístico com as redes sociais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAPA / LOCALIZAÇÃO
    <section class="location-section">
        <div class="map-container">
            <div id="map"></div>
        </div>

        <div class="location-info">
            <h3>Centro de Eventos Toyosaburo Ikeda</h3>
            
            <div class="location-details">
                <div class="location-detail">
                    <i class="fa fa-map-marker"></i>
                    <div class="location-detail-content">
                        <strong>Endereço</strong>
                        Avenida Paul Harris, S/N
                        <br>Assaí - Paraná, 86220-000
                    </div>
                </div>
                
                <div class="location-detail">
                    <i class="fa fa-calendar"></i>
                    <div class="location-detail-content">
                        <strong>Data do Evento</strong>
                        06 a 08 de junho de 2025
                    </div>
                </div>
                
                <div class="location-detail">
                    <i class="fa fa-clock-o"></i>
                    <div class="location-detail-content">
                        <strong>Horário de Funcionamento</strong>
                        09h às 00h (Dias 6 e 7)<br>
                        09h às 16h (Dia 8)
                    </div>
                </div>
            </div>
            
            <a href="https://maps.app.goo.gl/VMiKEB5NxdVM8ni6A" target="_blank" class="btn btn-light mt-2 w-100">Como Chegar</a>
        </div>
    </section>
    -->

    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Venha Participar da EXPOASA 2025!</h2>
                <p>A maior e mais tradicional exposição japonesa do Brasil espera por você para três dias de cultura, gastronomia, tecnologia e muito mais.</p>
                
                <div class="cta-buttons">
                    <a href="{{ route('ideasun.index') }}" class="btn-cta">
                        <i class="fa fa-ticket"></i>
                        Inscreva-se no IDEASUN
                    </a>
                    <a href="#schedule" class="btn-cta outline">
                        <i class="fa fa-calendar"></i>
                        Ver Programação Completa
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <div class="copyright">
                        &copy; 2025 EXPOASA - Todos os direitos reservados | Desenvolvido com ❤️ por <a href="#">VDS</a>
                    </div>
                    <div class="footer-bottom-links">
                        <a href="#">Termos de Uso</a>
                        <a href="#">Política de Privacidade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

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
                const eventDate = new Date("June 6, 2025 09:00:00").getTime();
                const now = new Date().getTime();
                const distance = eventDate - now;

                // Se a data já passou, mostra zeros
                if (distance < 0) {
                    $("#countdown-days").text('00');
                    $("#countdown-hours").text('00');
                    $("#countdown-minutes").text('00');
                    $("#countdown-seconds").text('00');
                    return;
                }

                // Cálculo de tempo otimizado
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Atualizar os elementos com formatação padronizada
                $("#countdown-days").text(days < 10 ? '0' + days : days);
                $("#countdown-hours").text(hours < 10 ? '0' + hours : hours);
                $("#countdown-minutes").text(minutes < 10 ? '0' + minutes : minutes);
                $("#countdown-seconds").text(seconds < 10 ? '0' + seconds : seconds);
            }

            // Inicializa o contador e define o intervalo de atualização
            updateCountdown();
            setInterval(updateCountdown, 1000);
            
            // Abas da programação
            $('.schedule-tab').click(function() {
                $('.schedule-tab').removeClass('active');
                $(this).addClass('active');
                
                const tabId = $(this).data('day');
                $('.schedule-day').removeClass('active');
                $('#' + tabId).addClass('active');
            });
            
            // Scroll suave para os links de âncora
            $('a[href^="#"]').on('click', function (event) {
                let target = $(this.getAttribute('href'));
                
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });
            
            // Botão voltar ao topo
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#back-to-top').addClass('visible');
                } else {
                    $('#back-to-top').removeClass('visible');
                }
            });
            
            $('#back-to-top').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
            });
            
            // Inicializar mapa
            function initMap() {
                // Coordenadas do Centro de Eventos precisas
                const location = {lat: -23.3721, lng: -50.8438};
                
                // Opções do mapa otimizadas para mobile e desktop
                const mapOptions = {
                    center: location,
                    zoom: 15,
                    mapTypeControl: false,
                    fullscreenControl: true,
                    streetViewControl: false,
                    scrollwheel: false,
                    styles: [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#444444"}]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [{"color": "#f2f2f2"}]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [{"saturation": -100}, {"lightness": 45}]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [{"visibility": "simplified"}]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [{"color": "#a40202"}, {"visibility": "on"}]
                        }
                    ]
                };
                
                // Verifica se o elemento existe antes de inicializar
                const mapElement = document.getElementById("map");
                if (!mapElement) return;
                
                const map = new google.maps.Map(mapElement, mapOptions);
                
                // Marcador com animação suave
                const marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    title: "Centro de Eventos Toyosaburo Ikeda",
                    animation: google.maps.Animation.DROP,
                    icon: {
                        url: '/assets/images/icon/map-marker.png',
                        scaledSize: new google.maps.Size(40, 40)
                    }
                });
                
                // Informação do local com design melhorado
                const infoContent = `
                    <div class="map-info-window">
                        <h5>Centro de Eventos Toyosaburo Ikeda</h5>
                        <p>Avenida Paul Harris, S/N<br>Assaí - PR, 86220-000</p>
                        <a href="https://maps.app.goo.gl/VMiKEB5NxdVM8ni6A" target="_blank" class="btn-directions">
                            <i class="fa fa-directions"></i> Como Chegar
                        </a>
                    </div>
                `;
                
                const infowindow = new google.maps.InfoWindow({
                    content: infoContent,
                    maxWidth: 300
                });
                
                // Abre a janela de informações ao clicar no marcador
                marker.addListener("click", () => {
                    infowindow.open(map, marker);
                });
                
                // Centraliza o mapa ao redimensionar a janela
                google.maps.event.addDomListener(window, 'resize', function() {
                    map.setCenter(location);
                });
            }
            
            // Carrega o mapa de forma assíncrona para melhor performance
            document.addEventListener('DOMContentLoaded', function() {
                // Carrega o mapa apenas quando visível no viewport para economizar recursos
                const mapObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            setTimeout(initMap, 500);
                            mapObserver.unobserve(entry.target);
                        }
                    });
                }, {threshold: 0.1});
                
                const mapContainer = document.querySelector('.map-container');
                if (mapContainer) {
                    mapObserver.observe(mapContainer);
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menu hamburger com melhor acessibilidade
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarActions = document.querySelector('.navbar-actions');
            
            navbarToggler.addEventListener('click', function() {
                this.classList.toggle('active');
                navbarActions.classList.toggle('show');
                
                // Melhora a acessibilidade
                const expanded = this.classList.contains('active');
                this.setAttribute('aria-expanded', expanded);
                navbarActions.setAttribute('aria-hidden', !expanded);
            });
            
            // Ajusta altura da navbar no scroll com otimização de performance
            let lastScrollTop = 0;
            const navbar = document.querySelector('.navbar.main-nav');
            
            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                
                // Verifica a direção do scroll para melhor UX
                if (scrollTop > lastScrollTop && scrollTop > 100) {
                    // Scroll para baixo
                    navbar.classList.add('navbar-compact');
                } else {
                    // Scroll para cima
                    navbar.classList.remove('navbar-compact');
                }
                
                // Efeito de transparência ao topo
                if (scrollTop < 50) {
                    navbar.classList.add('navbar-top');
                } else {
                    navbar.classList.remove('navbar-top');
                }
                
                lastScrollTop = scrollTop;
            }, {passive: true}); // Melhoria de performance
        });
    </script>

    <script>
        $(document).ready(function() {
            // Sistema de filtragem da galeria otimizado
            $('.gallery-filter').on('click', function() {
                const filter = $(this).data('filter');
                
                // Atualiza classe ativa
                $('.gallery-filter').removeClass('active');
                $(this).addClass('active');
                
                // Anima os itens com fade para melhor UX
                if (filter === 'all') {
                    $('.gallery-item').fadeIn(300);
                } else {
                    $('.gallery-item').hide();
                    $('.gallery-item[data-category="' + filter + '"]').fadeIn(300);
                }
                
                // Recalcula o layout para evitar quebras visuais
                setTimeout(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 350);
                
                return false;
            });
            
            // Inicialização do lightbox para imagens com lazy loading
            $('.gallery-item').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    tPrev: 'Anterior',
                    tNext: 'Próxima',
                    tCounter: '%curr% de %total%'
                },
                image: {
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                }
            });
        });
    </script>

    <script>
    // Animações de entrada dos elementos ao scroll
    document.addEventListener('DOMContentLoaded', function() {
        // Configura o observador de interseção para animações
        const animateObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    animateObserver.unobserve(entry.target);
                }
            });
        }, {threshold: 0.1, rootMargin: '0px 0px -100px 0px'});
        
        // Seleciona todos os elementos para animar
        const animateElements = document.querySelectorAll('.fade-in, .fade-up, .fade-right, .fade-left');
        animateElements.forEach(element => {
            animateObserver.observe(element);
        });
        
        // Lazy loading para imagens
        const lazyObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    
                    if (src) {
                        img.src = src;
                        img.removeAttribute('data-src');
                        img.classList.add('loaded');
                        lazyObserver.unobserve(img);
                    }
                }
            });
        }, {threshold: 0.1, rootMargin: '200px'});
        
        // Aplica lazy loading em todas as imagens com data-src
        document.querySelectorAll('img[data-src]').forEach(img => {
            lazyObserver.observe(img);
        });
    });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
            duration: 800,
            once: true
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar.main-nav');
            const navbarToggler = document.querySelector('.navbar-toggler');
            
            // Fechar o menu ao clicar em um link
            document.querySelectorAll('.navbar-actions a').forEach(link => {
                link.addEventListener('click', function() {
                    const navbarActions = document.querySelector('.navbar-actions');
                    navbarActions.classList.remove('show');
                    navbarToggler.classList.remove('active');
                });
            });
            
            // Fechar o menu ao clicar fora dele
            document.addEventListener('click', function(event) {
                const isClickInsideNavbar = navbar.contains(event.target);
                const navbarActions = document.querySelector('.navbar-actions');
                
                if (!isClickInsideNavbar && navbarActions.classList.contains('show')) {
                    navbarActions.classList.remove('show');
                    navbarToggler.classList.remove('active');
                }
            });
            
            // Ajustar altura do banner conforme altura da navbar
            function adjustBannerPadding() {
                const banner = document.querySelector('.banner');
                if (banner) {
                    const navbarHeight = navbar.offsetHeight;
                    banner.style.paddingTop = (navbarHeight + 30) + 'px';
                }
            }
            
            // Executar no carregamento e redimensionamento
            adjustBannerPadding();
            window.addEventListener('resize', adjustBannerPadding);
        });
    </script>
    </body>
</html>