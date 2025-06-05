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
        <link href="/assets/css/landing.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
        <link rel="stylesheet" href="style.css?v=1.1">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- NAVBAR -->
        <nav class="navbar main-nav fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-logos-wrapper">
                    <div class="navbar-logos">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/logo_laca.png" alt="LACA" class="logo-main desktop-only">
                        </a>
                        <!-- Apenas na versão desktop -->
                        <img src="/assets/img/brasil_japao.png" alt="130 Anos de Amizade Brasil & Japão" class="logo-brasil-japao desktop-only">
                        <!-- Apenas na versão mobile -->
                        <span class="mobile-only jp-friendship">
                            <img src="/assets/img/logo_laca_small.png" alt="LACA" class="mobile-logo">
                            79ª EXPOASA
                        </span>
                    </div>
                </div>

                <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-actions">
                    <a href="https://www.assai.pr.gov.br/" target="_blank">
                        <img src="/assets/img/logos/Logo_Prefeitura.jpg" alt="Prefeitura Municipal de Assaí" class="logo-prefeitura">
                    </a>
                    <a href="https://sebraepr.com.br" target="_blank">
                        <img src="/assets/img/logos/Logo_Sebrae.png" alt="Sebrae PR" class="logo-sebrae">
                    </a>
                    <a href="{{ route('inscricoes') }}" class="ticket">
                        <img src="/assets/images/icon/ticket.png" alt="INSCRIÇÕES">
                        <span>INSCRIÇÕES</span>
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

        <!-- PROGRAMAÇÃO (SCHEDULE) - Reorganizada por horário e categoria -->
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

                <div class="filter-tabs">
                    <button class="filter-btn active" data-filter="all">Todos</button>
                    <button class="filter-btn" data-filter="palco">Palco Principal</button>
                    <button class="filter-btn" data-filter="ideasun">Sala de Inovação</button>
                    <button class="filter-btn" data-filter="palestras">Sala de Palestras</button>
                    <button class="filter-btn" data-filter="universidades">Espaço Universidades</button>
                    <button class="filter-btn" data-filter="arena-cultural">Arena Cultural</button>
                </div>

                <div class="schedule-content">
                    <!-- DIA 1 (6 de Junho) -->
                    <div id="day1" class="schedule-day active">
                        <div class="schedule-header">
                            <div>Horário</div>
                            <div>Atividade</div>
                            <div>Local / Categoria</div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Abertura da 79° Expoasa</h4>
                                <p>Início das atividades, abertura dos estandes e início do IDEASUN</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">09h - 13h</div>
                            <div class="schedule-event">
                                <h4>Mentorias Ideasun</h4>
                                <p>Mentorias voltadas para as equipes do Ideasun.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Manhã</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">09h - 10h</div>
                            <div class="schedule-event">
                                <h4>Workshop de Precificação</h4>
                                <p>Aprenda estratégias práticas para definir preços de forma assertiva.</p>
                                <a href="https://forms.gle/RkW1aCq6fJ2xkXgg8" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">10h - 11h</div>
                            <div class="schedule-event">
                                <h4>Gastronomia Afetiva - SENAC</h4>
                                <p>Como a gastronomia vai além do preparo de alimentos e se torna uma poderosa ferramenta de conexão</p>
                                <a href="https://forms.gle/Ndq8R14WnxXUnhBH6" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">11:00</div>
                            <div class="schedule-event">
                                <h4>Fase Final IDEASUN - Ensino Especial</h4>
                                <p>Apresentação e avaliação dos projetos do Ensino Especial</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 13:00 -->
                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Tarde</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">13:00</div>
                            <div class="schedule-event">
                                <h4>Fase Final IDEASUN - Fundamental I</h4>
                                <p>Apresentação e avaliação dos projetos do Ensino Fundamental I</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">13h - 14h</div>
                            <div class="schedule-event">
                                <h4>InteliGente: um guia para o desenvolvimento em Inteligência Artificial</h4>
                                <p>Introdução prática e acessível aos conceitos, ferramentas e aplicações da IA.</p>
                                <a href="https://forms.gle/jK8pVeViqJ4xE1qS6" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 14:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">14h - 15h</div>
                            <div class="schedule-event">
                                <h4>Tecnologia Assistiva na Educação: Caminhos e Possibilidades para a Inclusão</h4>
                                <p>Recursos, estratégias e práticas que promovem a inclusão na educação.</p>
                                <a href="https://forms.gle/yLRY6x5C8sHoKR6w6" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">13h - 15h</div>
                            <div class="schedule-event">
                                <h4>Oficina de Compras Públicas</h4>
                                <p>Descubra como vender para órgãos governamentais.</p>
                                <a href="https://forms.gle/kvpaoGSzZ5BphusS9" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <!-- 15:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">15:00</div>
                            <div class="schedule-event">
                                <h4>Fase Final IDEASUN - Fundamental II</h4>
                                <p>Apresentação e avaliação dos projetos do Ensino Fundamental II</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">15h - 16h</div>
                            <div class="schedule-event">
                                <h4>Engenharia de Prompt com ênfase em Engenharia</h4>
                                <p>Abordagem prática para utilizar inteligência artificial de forma eficiente na solução de problemas da engenharia.</p>
                                <a href="https://forms.gle/HpAh8qnSzie6xqFp6" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">15h - 18h</div>
                            <div class="schedule-event">
                                <h4>Seminário de Crédito</h4>
                                <p>Apresentação de linhas de crédito e campanhas institucionais</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <!-- 16:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">16h - 17h</div>
                            <div class="schedule-event">
                                <h4>Estudo de Caso sobre o CEEP - Projetek UEL</h4>
                                <p>Apresentação de um estudo de caso sobre o CEEP.</p>
                                <a href="https://forms.gle/UmcwRnX4u8og8mgm7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 17:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">17h - 18h</div>
                            <div class="schedule-event">
                                <h4>Jornada Inovadora da Aintec</h4>
                                <p>Apresentação da jornada inovadora da AINTEC Agência de Inovação Tecnológica da UEL.</p>
                                <a href="https://forms.gle/xF8TQamg2aePysvf6" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">17:00</div>
                            <div class="schedule-event">
                                <h4>Fase Final IDEASUN - Ensino Médio / Médio-Técnico</h4>
                                <p>Apresentação e avaliação dos projetos do Ensino Médio e Médio-Técnico</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 18:00 -->
                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">18:00</div>
                            <div class="schedule-event">
                                <h4>Gincana Batalha Pokémon</h4>
                                <p>Atividade do Espaço Cultural Imaginação e Ação</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">18h - 19h</div>
                            <div class="schedule-event">
                                <h4>Empreendedorismo da UFPR</h4>
                                <p>Apresentação de iniciativas empreendedoras promovidas pela instituição.</p>
                                <a href="https://forms.gle/LoRcUVKopNToM8bJA" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 18:30 -->
                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">17h - 21h</div>
                            <div class="schedule-event">
                                <h4>Brincadeiras de Baseball e Atletismo | Joguinhos Tradicionais - OTEDAMA | Escolinha de Origami</h4>
                                <p>Atividades para todas as idades</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <!-- 19:00 -->
                        <div class="schedule-item filter-item palco highlight">
                            <div class="schedule-time">19h</div>
                            <div class="schedule-event">
                                <h4>Cerimônia de Abertura 79ª EXPOASA</h4>
                                <p>Cerimônia oficial de abertura com autoridades e convidados especiais</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Noite</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">19:00</div>
                            <div class="schedule-event">
                                <h4>Perguntas e respostas Pokémon</h4>
                                <p>Atividade do Espaço Cultural Imaginação e Ação</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <!-- 20:00 -->
                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">20h - 21h</div>
                            <div class="schedule-event">
                                <h4>Troca de Cards e Escola Pokémon</h4>
                                <p>Atividade do Espaço Cultural Imaginação e Ação</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <!-- 21:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">21:00</div>
                            <div class="schedule-event">
                                <h4>Matsuri com Grupo Assahi</h4>
                                <p>Apresentação especial do Grupo Assahi com músicas e danças tradicionais</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>
                    </div>

                    <!-- DIA 2 (7 de Junho) -->
                    <div id="day2" class="schedule-day">
                        <div class="schedule-header">
                            <div>Horário</div>
                            <div>Atividade</div>
                            <div>Local / Categoria</div>
                        </div>

                        <!-- 09:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Abertura do 2° dia da 79° Expoasa</h4>
                                <p>Início das atividades do segundo dia</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">09h - 13h</div>
                            <div class="schedule-event">
                                <h4>Mentorias Ideasun</h4>
                                <p>Mentorias voltadas para as equipes do Ideasun.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Manhã</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">09h - 17h</div>
                            <div class="schedule-event">
                                <h4>Mini Golf</h4>
                                <p>Diversão para toda a família com mini golfe</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Brincadeiras de Baseball e Atletismo | Joguinhos Tradicionais - OTEDAMA | Escolinha de Origami</h4>
                                <p>Atividades para todas as idades</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Fase Final IDEASUN - Ensino Superior</h4>
                                <p>Apresentação e avaliação dos projetos do Ensino Superior</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 10:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">10h - 12h</div>
                            <div class="schedule-event">
                                <h4>CREA-PR | Reunião com membros e engenheiros</h4>
                                <p>Reunião exclusiva do CREA-PR para engenheiros e membros.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Apresentação da Cooperativa Mirim</h4>
                                <p>Jovens empreendedores apresentam seus projetos e iniciativas</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 12:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">12:00</div>
                            <div class="schedule-event">
                                <h4>Dança Japonesa de Palco</h4>
                                <p>Apresentações de danças tradicionais japonesas</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Tarde</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <!-- 13:00 -->
                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">13h - 19h</div>
                            <div class="schedule-event">
                                <h4>Projeto Manna</h4>
                                <p>Ecossistema de ensino, pesquisa, extensão e inovação em Tecnologias Exponenciais.</p>
                                <a href="https://forms.gle/wLf6ZN6gxpvs7hbp7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">13h - 14h</div>
                            <div class="schedule-event">
                                <h4>Inovação com Propósito</h4>
                                <p>Ana Paula Cruz compartilha sua trajetória empreendedora à frente da natu.me e da Ecoabea.</p>
                                <a href="https://forms.gle/FDiUSrvnzrSoCUvT8" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 14:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">14:00</div>
                            <div class="schedule-event">
                                <h4>Premiação do IDEASUN</h4>
                                <p>Anúncio dos vencedores do hackathon e entrega dos prêmios</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">14h - 15h</div>
                            <div class="schedule-event">
                                <h4>Os 6 pilares da empregabilidade</h4>
                                <p>Oferece uma abordagem prática e estratégica para se destacar no mercado atual.</p>
                                <a href="https://forms.gle/NU1RnCY5F9XwyBKc7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 15:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">15:00</div>
                            <div class="schedule-event">
                                <h4>Workshop Taiko Yuji</h4>
                                <p>Oficina de percussão com tambores japoneses tradicionais</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">15h - 16h</div>
                            <div class="schedule-event">
                                <h4>Impressão 3D - UNOPAR</h4>
                                <p>Yuri Mendes Mostagi apresenta como a Impressão 3D está transformando o mundo.</p>
                                <a href="https://forms.gle/wADNRarfRZK3WsJq7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 16:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">16:00</div>
                            <div class="schedule-event">
                                <h4>Atividades LACA</h4>
                                <p>Programação especial promovida pela Liga de Amigos da Colônia Assaiense</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">16h - 17h</div>
                            <div class="schedule-event">
                                <h4>Inteligência Artificial: Ferramentas e Possibilidades - UNOPAR</h4>
                                <p>Ana Mauriceia Castellani apresenta o conceito de Inteligência Artificial e suas aplicações práticas no cotidiano.</p>
                                <a href="https://forms.gle/t3tpw54ymmDtYTct8" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 17:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">17h - 18h</div>
                            <div class="schedule-event">
                                <h4>Mercado de Trabalho para pessoas 50+ - UNOPAR</h4>
                                <p>Marcos Tonasse apresenta como o mercado de trabalho tem se transformado para incluir pessoas 50+.</p>
                                <a href="https://forms.gle/iV7CAgGkvq7ZytP69" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 18:00 -->
                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">18h - 19h</div>
                            <div class="schedule-event">
                                <h4>Metaverso e Vida Artificial - UTFPR-CP</h4>
                                <p>Professor Doutor Eduardo Filgueiras Damasceno apresentará sobre o Metaverso e a Vida Artificial.</p>
                                <a href="https://forms.gle/iV7CAgGkvq7ZytP69" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <!-- 19:00 -->
                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Noite</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">19:00</div>
                            <div class="schedule-event">
                                <h4>Festival de Bon Odori</h4>
                                <p>Grande apresentação do Festival Paranaense de Bon Odori</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <!-- 21:00 -->
                        <div class="schedule-item filter-item palco highlight">
                            <div class="schedule-time">21:00</div>
                            <div class="schedule-event">
                                <h4>Concurso Cosplay</h4>
                                <p>Competição de fantasias e caracterizações de personagens de anime e mangá</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>
                    </div>

                    <!-- DIA 3 (8 de Junho) -->
                    <div id="day3" class="schedule-day">
                        <div class="schedule-header">
                            <div>Horário</div>
                            <div>Atividade</div>
                            <div>Local / Categoria</div>
                        </div>

                        <!-- 09:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Abertura do 3° dia da 79° Expoasa</h4>
                                <p>Início das atividades do último dia</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Manhã</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">09h - 13h</div>
                            <div class="schedule-event">
                                <h4>Projeto Manna</h4>
                                <p>Ecossistema de ensino, pesquisa, extensão e inovação em Tecnologias Exponenciais.</p>
                                <a href="https://forms.gle/wLf6ZN6gxpvs7hbp7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <div class="schedule-item filter-item palestras">
                            <div class="schedule-time">09h - 16h</div>
                            <div class="schedule-event">
                                <h4>Workshop de Cidades</h4>
                                <p>Capacitação de gestores públicos, profissionais de TI e cidadãos na construção de cidades mais inteligentes.</p>
                                <a href="https://forms.gle/HefNsEFVKsiAqT7W7" target="_blank" class="btn-register">
                                    <i class="fa fa-file-text-o"></i> Inscrever-se
                                </a>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Palestras
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">09h - 12h</div>
                            <div class="schedule-event">
                                <h4>Campeonato Pokémon</h4>
                                <p>Atividade do Espaço Cultural Imaginação e Ação</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Squid Game Round 79</h4>
                                <p>Competição especial inspirada na famosa série</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural highlight">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>1º Campeonato de Pokémon Card</h4>
                                <p>Competição oficial com cards do popular jogo</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">09h - 12h</div>
                            <div class="schedule-event">
                                <h4>Mini Golf</h4>
                                <p>Diversão para toda a família com mini golfe</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <div class="schedule-item filter-item arena-cultural">
                            <div class="schedule-time">09:00</div>
                            <div class="schedule-event">
                                <h4>Brincadeiras de Baseball e Atletismo | Joguinhos Tradicionais - OTEDAMA | Escolinha de Origami</h4>
                                <p>Atividades para todas as idades</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Arena Cultural
                            </div>
                        </div>

                        <!-- 10:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">10:00</div>
                            <div class="schedule-event">
                                <h4>Workshop Bon Odori Matsuri Dance</h4>
                                <p>Aprenda os passos da tradicional dança do festival</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 11:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">11:00</div>
                            <div class="schedule-event">
                                <h4>Premiação Squid Game Round</h4>
                                <p>Anúncio dos vencedores e entrega dos prêmios</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 12:00 -->
                        <div class="schedule-item filter-item universidades">
                            <div class="schedule-time">Tarde</div>
                            <div class="schedule-event">
                                <h4>Expresso Móvel Sicoob</h4>
                                <p>Projeto educacional móvel que oferece cursos profissionalizantes gratuitos.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Espaço Universidades
                            </div>
                        </div>

                        <!-- 13:00 -->
                        <div class="schedule-item filter-item ideasun">
                            <div class="schedule-time">13h - 15h</div>
                            <div class="schedule-event">
                                <h4>Concurso Gastronômico</h4>
                                <p>Votação que será realizada pela banca qualificada do evento.</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Sala de Inovação
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">13:00</div>
                            <div class="schedule-event">
                                <h4>Workshop Taiko Asahi Wadaiko</h4>
                                <p>Oficina de percussão com tambores japoneses tradicionais</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 14:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">14:00</div>
                            <div class="schedule-event">
                                <h4>Bon Odori Cantado</h4>
                                <p>Apresentação especial da dança tradicional com cantos</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 15:00 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">15:00</div>
                            <div class="schedule-event">
                                <h4>Karaoke</h4>
                                <p>Encerramento com apresentações de karaokê</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <!-- 15:30 -->
                        <div class="schedule-item filter-item palco">
                            <div class="schedule-time">15:30</div>
                            <div class="schedule-event">
                                <h4>Premiação RYORI 2025</h4>
                                <p>Anúncio dos vencedores do concurso gastronômico e entrega do prêmio</p>
                            </div>
                            <div class="schedule-location">
                                <i class="fa fa-map-marker"></i> Palco Principal
                            </div>
                        </div>

                        <div class="schedule-item filter-item palco highlight">
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

                <div class="schedule-info">
                    <div class="alert alert-info">
                        <i class="fa fa-info-circle"></i> <strong>Nota:</strong> A programação pode sofrer alterações. Confira as atualizações no local do evento.
                    </div>
                    <div class="schedule-legend">
                        <span class="legend-item"><span class="legend-color highlight"></span> Evento em destaque</span>
                        <span class="legend-item"><a href="{{ route('ideasun.index') }}">Programação detalhada do IDEASUN <i class="fa fa-arrow-right"></i></a></span>
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

       <!-- CARD DO CONCURSO GASTRONÔMICO RYORI -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="info-box special-feature" style="background: linear-gradient(135deg, rgba(164, 2, 2, 0.05), rgba(255, 204, 0, 0.1)); border-top: 3px solid var(--primary-color);">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 text-center mb-4 mb-md-0">
                            <div class="feature-icon" style="width: 120px; height: 120px; border-radius: 50%; background-color: rgba(164, 2, 2, 0.1); display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="fa fa-cutlery" style="font-size: 48px; color: #a40202;"></i>
                            </div>
                            <h3 class="mt-3" style="color: #a40202; font-family: 'Noto Sans JP', sans-serif;">RYORI 2025</h3>
                            <span class="badge" style="background-color: #a40202; color: white; font-size: 14px;">Concurso Gastronômico</span>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="info-box-content">
                                <h4 style="font-size: 1.5rem; margin-bottom: 15px;">Concurso Gastronômico RYORI</h4>
                                <p>O <strong>RYORI</strong> é o principal concurso gastronômico da <strong>EXPOASA</strong>, reunindo sabores, criatividade e tradição. Em 2025, o concurso traz uma grande diversidade gastronômica, unindo pratos da culinária japonesa, nipo-brasileira e também delícias de outras tradições, como churrascos, lanches, sobremesas e pratos temáticos. Uma verdadeira celebração da gastronomia em todas as suas formas!</p>
                                
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h5><i class="fa fa-calendar mr-2" style="color: #a40202;"></i> Programação</h5>
                                        <ul>
                                            <li><strong>06/06:</strong> Votações do público em geral</li>
                                            <li><strong>07/06:</strong> Votações do público em geral</li>
                                            <li><strong>08/06:</strong> Votação da Banca Avaliadora + Premiação (15h30)</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                    <a href="{{ route('ryori.index') }}" class="btn btn-outline-primary ml-3">
                                        <i class="fa fa-pencil-square-o mr-2"></i> Faça sua votação!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

        <!-- ORGANIZADORES E PATROCINADORES - SEÇÃO REESTRUTURADA -->
        <section class="section organizers-section">
            <div class="container">
                <div class="section-title">
                    <h2>Organizador <span class="accent">Principal</span></h2>
                    <p>Instituição responsável pela organização da 79ª EXPOASA</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 text-center">
                        <img src="/assets/img/logo_laca_small.png" alt="LACA" class="organizer-logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- REALIZAÇÃO -->
        <section class="section sponsors-section">
            <div class="container">
                <div class="section-title">
                    <h2>Realização do <span class="accent">Evento</span></h2>
                    <p>Conheça as instituições responsáveis pela realização da 79ª EXPOASA</p>
                </div>

                <div class="category-container">
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/brasao_assai.png" alt="Prefeitura Municipal de Assaí" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/sebrae_logo.png" alt="Sebrae PR" class="sponsor-logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PATROCINADORES -->
        <section class="section sponsors-section">
            <div class="container">
                <div class="section-title">
                    <h2>Patrocinadores <span class="accent">Oficiais</span></h2>
                    <p>Confira as empresas e instituições que apoiam a realização da 79ª EXPOASA</p>
                </div>

                <!-- PATROCINADORES OURO -->
                <div class="category-container">
                    <h3 class="category-title">Patrocinadores Ouro</h3>
                    <p class="category-description">Principais apoiadores que tornam possível a realização deste evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/logo-idr.webp" alt="SEAB" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/seab.png" alt="IDR Paraná" class="sponsor-logo">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- PATROCINADORES PRATA -->
                <div class="category-container">
                    <h3 class="category-title">Patrocinadores Prata</h3>
                    <p class="category-description">Organizações que contribuem significativamente para o sucesso do evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/creapr.png" alt="CREA-PR" class="sponsor-logo">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- CONECTIVIDADE DO EVENTO -->
                <div class="category-container">
                    <h3 class="category-title">Conectividade do Evento</h3>
                    <p class="category-description">Empresas que fornecem a infraestrutura tecnológica para o evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/logo_ligga.png" alt="LIGGA Telecom" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/compusoft-logo.webp" alt="CompuSoft" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/GOVERNO/brasil-net.png" alt="BrasilNET" class="sponsor-logo">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- EXPOSITORES -->
                <div class="category-container">
                    <h3 class="category-title">Expositores</h3>
                    <p class="category-description">Empresas que apresentam seus produtos e serviços durante o evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/COOPERATIVAS/sicredi-logo.png" alt="SICREDI" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/COOPERATIVAS/sicoob-logo-1.png" alt="SICOOB" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/COOPERATIVAS/logo-integrada.png" alt="INTEGRADA" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/yanmar.png" alt="YANMAR" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/jacto.png" alt="JACTO" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/vence-tudo.png" alt="VENCE TUDO" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/marajo.png" alt="MARAJÓ" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/metronorte.png" alt="METRONORTE" class="sponsor-logo">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- GASTRONOMIA ÂNCORA -->
                <div class="category-container">
                    <h3 class="category-title">Gastronomia Âncora</h3>
                    <p class="category-description">Principais estabelecimentos gastronômicos presentes no evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/hachimitsu.webp" alt="HACHIMITSU" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/rezendog.png" alt="REZENDOG" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/PATROCINIOS/green-acai.png" alt="GREEN AÇAÍ" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/logo-luciano.png" alt="Luciano" class="sponsor-logo">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- MEIS -->
                <div class="category-container">
                    <h3 class="category-title">Microempreendedores Individuais</h3>
                    <p class="category-description">Empreendedores locais que trazem sabor, criatividade e inovação para nosso evento</p>
                    
                    <div class="sponsors-row">
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/logo-yume.png" alt="Yume" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/logo-donmussi.png" alt="Don Mussi" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/logo-sophia.png" alt="Sophia" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/logo-tommy.png" alt="Tommy" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/pastelaria-da-duda.jpeg" alt="Pastelaria da Duda" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/sabor-e-saude.jpeg" alt="Sabor e Saúde" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/sonia-bolos.jpeg" alt="Sonia Bolos" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/amigo_monstro.png" alt="Amigo Monstro" class="sponsor-logo">
                        </div>
                        <div class="sponsor-item">
                            <img src="/assets/images/logos/MEIS/akiba_store.png" alt="Akiba Store" class="sponsor-logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                            <a href="https://valedosol.assai.pr.gov.br">Vale do Sol</a>
                            <a href="https://www.assai.pr.gov.br/">Prefeitura Municipal de Assaí</a>
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
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="/assets/js/landing.js"></script> 
    </body>
</html>