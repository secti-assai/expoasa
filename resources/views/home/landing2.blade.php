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
                        <img src="/assets/images/logos/logo_laca.png" alt="LACA" class="logo-main desktop-only">
                    </a>
                    <!-- Apenas na versão desktop -->
                    <img src="/assets/images/logos/brasil_japao.png" alt="130 Anos de Amizade Brasil & Japão" class="logo-brasil-japao desktop-only">
                    <!-- Apenas na versão mobile -->
                    <span class="mobile-only jp-friendship">
                        <img src="/assets/images/logos/logo_laca.png" alt="LACA" class="mobile-logo">
                        80ª EXPOASA
                    </span>
                </div>
            </div>

            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-actions">
                <a href="https://www.assai.pr.gov.br/" target="_blank">
                    <img src="/assets/images/logos/logomarca.png" alt="Prefeitura Municipal de Assaí" class="logo-prefeitura">
                </a>
                <a href="https://sebraepr.com.br" target="_blank">
                    <img src="/assets/images/logos/GOVERNO/sebrae_logo.png" alt="Sebrae PR" class="logo-sebrae">
                </a>
                <a href="{{ route('inscricoes') }}" class="ticket">
                    <i class="fa fa-ticket" style="margin-right: 8px;"></i>
                    <span>INSCRIÇÕES</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- BANNER -->
    <section class="banner">
        <div class="banner-content">
            <img src="/assets/images/logos/expo80.png" alt="80ª Expoasa" class="banner-logo">

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
                        <img src="/assets/images/logos/expoasa.png" alt="EXPOASA" class="img-fluid">
                        <div class="image-caption">
                            <i class="fa fa-camera"></i>
                            80ª Exposição Agrícola Regional de Assaí
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="content-title">80ª EXPOASA</h3>
                        <div class="content-text">
                            <p>A 80ª EXPOASA – Exposição Agrícola Regional de Assaí será realizada no Centro de Eventos Toyosaburo Ikeda, em Assaí, no Norte do Paraná, nos dias 12, 13 e 14 de junho de 2026. Iniciada em 1935, a EXPOASA consolidou-se como uma das exposições agrícolas mais tradicionais do Brasil, marcada pelo desenvolvimento da agricultura regional e pela forte contribuição da colônia japonesa na formação econômica, social e cultural do município.</p>
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
                            <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-size: 1.1rem;">Nos últimos três anos, Assaí foi agraciada com <span class="highlight" style="color: #ff3; font-weight: 700;">33 prêmios</span> em gestão pública e, nos anos de 2024 e 2025, foi reconhecida globalmente ao figurar entre as <span class="highlight" style="color: #ff3; font-weight: 700;">7 Comunidades Mais Inteligentes do Mundo (Top7 Intelligent Communities)</span>.</p>
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
                        <p class="text-white" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); font-size: 1.05rem; letter-spacing: 0.3px;">Com o fortalecimento da imagem da cidade, a EXPOASA decolou para outros horizontes: utilizar o evento para transferir conhecimentos e desenvolver as políticas públicas da região. O evento também conta com iniciativas de inovação, como o IDEASUN.</p>
                    </div>
                </div>

                <div style="position: absolute; top: -8px; right: -8px; width: 20px; height: 20px; background: #ffcc00; transform: rotate(45deg);"></div>
            </div>
            <div class="stat-item" style="background: linear-gradient(135deg, rgba(255, 0, 0, 0.3), rgba(0, 0, 128, 0.3)); border: 1px solid rgba(255, 204, 0, 0.3); transform: translateY(-5px); position: relative;">
                <span class="stat-number" style="font-size: 40px; color: #ffcc00; text-shadow: 0 0 10px rgba(255, 204, 0, 0.3); font-weight: 800; font-family: 'Noto Sans JP', sans-serif;">26+</span>
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
                <p>Confira as principais informações sobre a 80ª EXPOASA</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-calendar"></i>
                            <h3>Data da Abertura Oficial</h3>
                        </div>
                        <div class="info-box-content">
                            <p>A cerimônia de abertura oficial da 80ª EXPOASA acontecerá no dia:</p>
                            <ul>
                                <li>12 de junho de 2026 às 19:00hs</li>
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
                            <p>O evento estará aberto ao público nos seguintes horários por arena:</p>
                            <ul>
                                <li>Arena do Conhecimento: 12 e 13/06 (09:00 às 19:00) | 14/06 (09:00 às 16:00)</li>
                                <li>Arena Cultural: 12/06 (18:00 às 00:00) | 13/06 (11:00 às 00:00) | 14/06 (11:00 às 16:00)</li>
                                <li>Arena Agro: 12/06 (18:00 às 00:00) | 13/06 (09:00 às 00:00) | 14/06 (09:00 às 16:00)</li>
                                <li>Praça de Alimentação: 12/06 (18:00 às 00:00) | 13/06 (11:00 às 00:00) | 14/06 (11:00 às 16:00)</li>
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
                            <p>Resultados esperados para a edição 2026:</p>
                            <ul>
                                <li>Total: mais de 10.000 visitantes</li>
                                <li>Presença de mais de 26 cidades no evento</li>
                                <li>03 âncoras gastronômicas</li>
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
                                        <li>Professores e alunos de mais de 26 cidades</li>
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
                                        A 80ª EXPOASA será realizada no <span style="color: var(--primary-color); font-weight: 600;">Centro de Eventos Toyosaburo Ikeda</span>, localizado em Assaí, Paraná.
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="28" style="opacity: 0.5; fill: currentColor;" aria-label="Localização" focusable="false">
                                                <path d="M12 2C7.03 2 3 6.03 3 11c0 5.25 7.11 11.36 7.41 11.61.35.29.83.29 1.18 0C13.89 22.36 21 16.25 21 11c0-4.97-4.03-9-9-9zm0 18.88C9.14 18.09 5 14.19 5 11c0-3.87 3.13-7 7-7s7 3.13 7 7c0 3.19-4.14 7.09-7 9.88z"></path>
                                                <circle cx="12" cy="11" r="3.2"></circle>
                                            </svg>
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
                                        <li style="margin-bottom: 8; display: flex; align-items: flex-start;">
                                            <span>Praça de gastronomia e muito mais</span>
                                        </li>
                                        <li style="margin-bottom: 0; display: flex; align-items: flex-start;">
                                            <span>Espaço Kids com atividades para crianças</span>
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
                    <span>12 de Junho</span>
                </div>
                <div class="schedule-tab" data-day="day2">
                    <h4>Dia 2</h4>
                    <span>13 de Junho</span>
                </div>
                <div class="schedule-tab" data-day="day3">
                    <h4>Dia 3</h4>
                    <span>14 de Junho</span>
                </div>
            </div>

            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="arena-conhecimento">Arena do Conhecimento</button>
                <button class="filter-btn" data-filter="arena-agro">Arena Agro</button>
                <button class="filter-btn" data-filter="arena-cultural">Arena Cultural</button>
                <button class="filter-btn" data-filter="praca-alimentacao">Praça de Alimentação</button>
                <button class="filter-btn" data-filter="destaques">Destaques</button>
            </div>

            <div class="schedule-content">
                <div id="day1" class="schedule-day active">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local / Categoria</div>
                    </div>

                    <div class="schedule-item filter-item arena-conhecimento">
                        <div class="schedule-time">09:00 - 19:00</div>
                        <div class="schedule-event">
                            <h4>Programação Técnica e Inovação</h4>
                            <p>Palestras, workshops e atividades da Arena do Conhecimento.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena do Conhecimento</div>
                    </div>

                    <div class="schedule-item filter-item arena-agro">
                        <div class="schedule-time">18:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Negócios e Networking do Agro</h4>
                            <p>Empresas, cooperativas e instituições do setor agro regional.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Agro</div>
                    </div>

                    <div class="schedule-item filter-item arena-cultural">
                        <div class="schedule-time">18:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Programação Cultural</h4>
                            <p>Apresentações e oficinas com valorização da cultura nipo-brasileira.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Cultural</div>
                    </div>

                    <div class="schedule-item filter-item praca-alimentacao">
                        <div class="schedule-time">18:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Praças de Alimentação</h4>
                            <p>Culinária asiática, brasileira e opções ligadas à cultura rural.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Praça de Alimentação</div>
                    </div>

                    <div class="schedule-item filter-item destaques highlight">
                        <div class="schedule-time">19:00</div>
                        <div class="schedule-event">
                            <h4>Abertura Oficial da 80ª EXPOASA</h4>
                            <p>Cerimônia oficial no Centro de Eventos Toyosaburo Ikeda.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Evento Oficial</div>
                    </div>
                </div>

                <div id="day2" class="schedule-day">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local / Categoria</div>
                    </div>

                    <div class="schedule-item filter-item arena-conhecimento">
                        <div class="schedule-time">09:00 - 19:00</div>
                        <div class="schedule-event">
                            <h4>Arena do Conhecimento</h4>
                            <p>Formação, inovação e conexão entre jovens talentos, universidades e empresas.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena do Conhecimento</div>
                    </div>

                    <div class="schedule-item filter-item arena-agro">
                        <div class="schedule-time">09:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Exposição e Negócios do Agro</h4>
                            <p>Ambiente para networking e oportunidades de negócios no agronegócio.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Agro</div>
                    </div>

                    <div class="schedule-item filter-item arena-cultural highlight">
                        <div class="schedule-time">11:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Festival de Bon Odori</h4>
                            <p>Grande celebração da cultura nipo-brasileira na programação cultural.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Cultural</div>
                    </div>

                    <div class="schedule-item filter-item praca-alimentacao">
                        <div class="schedule-time">11:00 - 00:00</div>
                        <div class="schedule-event">
                            <h4>Gastronomia do Evento</h4>
                            <p>Experiências gastronômicas nas praças principal e agro.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Praça de Alimentação</div>
                    </div>
                </div>

                <div id="day3" class="schedule-day">
                    <div class="schedule-header">
                        <div>Horário</div>
                        <div>Atividade</div>
                        <div>Local / Categoria</div>
                    </div>

                    <div class="schedule-item filter-item destaques">
                        <div class="schedule-time">Manhã</div>
                        <div class="schedule-event">
                            <h4>1ª Corrida da EXPOASA</h4>
                            <p>Atividade especial das celebrações das 80 edições do evento.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Programação Especial</div>
                    </div>

                    <div class="schedule-item filter-item arena-conhecimento">
                        <div class="schedule-time">09:00 - 16:00</div>
                        <div class="schedule-event">
                            <h4>Encerramento das Atividades Técnicas</h4>
                            <p>Último dia de palestras e ações de conhecimento e inovação.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena do Conhecimento</div>
                    </div>

                    <div class="schedule-item filter-item arena-agro">
                        <div class="schedule-time">09:00 - 16:00</div>
                        <div class="schedule-event">
                            <h4>Encerramento da Arena Agro</h4>
                            <p>Finalização das exposições e conexões de negócios do setor.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Agro</div>
                    </div>

                    <div class="schedule-item filter-item arena-cultural">
                        <div class="schedule-time">11:00 - 16:00</div>
                        <div class="schedule-event">
                            <h4>Programação Cultural de Encerramento</h4>
                            <p>Apresentações finais e atividades culturais do evento.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Arena Cultural</div>
                    </div>

                    <div class="schedule-item filter-item praca-alimentacao">
                        <div class="schedule-time">11:00 - 16:00</div>
                        <div class="schedule-event">
                            <h4>Praça de Alimentação</h4>
                            <p>Último dia para aproveitar os estandes gastronômicos.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Praça de Alimentação</div>
                    </div>

                    <div class="schedule-item filter-item destaques highlight">
                        <div class="schedule-time">Encerramento</div>
                        <div class="schedule-event">
                            <h4>Resultado do Prato Expoasa 2026</h4>
                            <p>Anúncio oficial do ganhador do concurso gastronômico.</p>
                        </div>
                        <div class="schedule-location"><i class="fa fa-map-marker"></i> Evento Oficial</div>
                    </div>
                </div>
            </div>

            <div class="schedule-info">
                <div class="alert alert-info">
                    <i class="fa fa-info-circle"></i> <strong>Nota:</strong> A programação pode sofrer alterações. Confira as atualizações no local do evento.
                </div>
                <div class="schedule-legend">
                    <span class="legend-item"><span class="legend-color highlight"></span> Evento em destaque</span>
                    {{-- <span class="legend-item"><a href="{{ route('ideasun.index') }}">Programação detalhada do IDEASUN <i class="fa fa-arrow-right"></i></a></span> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ATIVIDADES E PARCEIROS -->
    <section class="section partners-section">
        <div class="container">
            <div class="section-title">
                <h2>Atividades <span class="accent">Especiais</span></h2>
                <p>Conheça as principais iniciativas que fazem parte da 80ª EXPOASA</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-graduation-cap"></i>
                            <h3>Arena do Conhecimento</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Reunirá atividades de formação e inovação, com palestras, workshops e realização do Hackasun, conectando jovens talentos, universidades, produtores e empresas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-lightbulb-o"></i>
                            <h3>Arena Agro</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Espaço de negócios e networking, reunindo grandes empresas do setor, cooperativas agropecuárias e cooperativas de crédito da região.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-briefcase"></i>
                            <h3>Arena Cultural</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Valoriza as raízes da imigração japonesa em Assaí e recebe o tradicional Festival de Bon Odori, oficinas culturais e apresentações artísticas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-handshake-o"></i>
                            <h3>Praças de Alimentação</h3>
                        </div>
                        <div class="info-box-content">
                            <p>A Praça Principal reúne culinária asiática e brasileira; a Praça Agro oferece churrasco e opções ligadas à cultura rural.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fa fa-heartbeat"></i>
                            <h3>1ª Corrida da EXPOASA</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Realizada no domingo como parte das celebrações das 80 edições do evento, promovendo esporte, integração e participação da comunidade.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box green">
                        <div class="info-box-title">
                            <i class="fa fa-newspaper-o"></i>
                            <h3>Cooperativa Mirim</h3>
                        </div>
                        <div class="info-box-content">
                            <p>Iniciativa em parceria entre o Município de Assaí e o Sicoob, com educação financeira e cooperativismo voltados às novas gerações.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARD DO CONCURSO GASTRONÔMICO PRATO EXPOASA -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="info-box special-feature" style="background: linear-gradient(135deg, rgba(164, 2, 2, 0.05), rgba(255, 204, 0, 0.1)); border-top: 3px solid var(--primary-color);">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 text-center mb-4 mb-md-0">
                        <div class="feature-icon" style="width: 120px; height: 120px; border-radius: 50%; background-color: rgba(164, 2, 2, 0.1); display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                            <i class="fa fa-cutlery" style="font-size: 48px; color: #a40202;"></i>
                        </div>
                        <h3 class="mt-3" style="color: #a40202; font-family: 'Noto Sans JP', sans-serif;">PRATO EXPOASA 2026</h3>
                        <span class="badge" style="background-color: #a40202; color: white; font-size: 14px;">Concurso Gastronômico</span>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="info-box-content">
                            <h4 style="font-size: 1.5rem; margin-bottom: 15px;">Concurso Gastronômico da Exposição Regional</h4>
                            <p>Cada estande gastronômico colocará um prato para concorrer à premiação. A votação será realizada pelos visitantes por meio do aplicativo do evento. No dia 14 de junho (domingo), será anunciado o ganhador do Prato Expoasa 2026.</p>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5><i class="fa fa-calendar mr-2" style="color: #a40202;"></i> Programação</h5>
                                    <ul>
                                        <li><strong>12/06:</strong> Votação dos visitantes pelo aplicativo</li>
                                        <li><strong>13/06:</strong> Votação dos visitantes pelo aplicativo</li>
                                        <li><strong>14/06:</strong> Anúncio do ganhador do Prato Expoasa 2026</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('ryori.index') }}" class="btn btn-outline-primary ml-3">
                                    <i class="fa fa-pencil-square-o mr-2"></i> Acessar votação
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
                            12 a 14 de junho de 2026
                        </div>
                    </div>
                    
                    <div class="location-detail">
                        <i class="fa fa-clock-o"></i>
                        <div class="location-detail-content">
                            <strong>Horário de Funcionamento</strong>
                            12/06: 18h às 00h<br>
                            13/06: 09h às 00h | 14/06: 09h às 16h
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
                <p>Instituição responsável pela organização da 80ª EXPOASA</p>
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
                <p>Conheça as instituições responsáveis pela realização da 80ª EXPOASA</p>
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
                <p>Confira as empresas e instituições que apoiam a realização da 80ª EXPOASA</p>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="info-box" style="height: 100%;">
                        <div class="info-box-title">
                            <i class="fa fa-trophy"></i>
                            <h3>Pacote Ouro</h3>
                        </div>
                        <div class="info-box-content">
                            <p><strong>R$ 50.000,00</strong></p>
                            <p>Inclui visibilidade premium, ativações e presença estratégica no evento.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="info-box green" style="height: 100%;">
                        <div class="info-box-title">
                            <i class="fa fa-certificate"></i>
                            <h3>Pacote Prata</h3>
                        </div>
                        <div class="info-box-content">
                            <p><strong>R$ 30.000,00</strong></p>
                            <p>Pacote com exposição de marca e participação nas ações institucionais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="info-box" style="height: 100%;">
                        <div class="info-box-title">
                            <i class="fa fa-star"></i>
                            <h3>Pacote Bronze</h3>
                        </div>
                        <div class="info-box-content">
                            <p><strong>R$ 15.000,00</strong></p>
                            <p>Opção de entrada para participação comercial e fortalecimento de marca.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PATROCINADORES OURO -->
            <div class="category-container">
                <h3 class="category-title">Patrocinadores Ouro</h3>
                <p class="category-description">Principais apoiadores que tornam possível a realização deste evento</p>

                <div class="sponsors-row">
                    <div class="sponsor-item">
                        <img src="/assets/images/logos/PATROCINIOS/logo-idr.webp" alt="IDR Paraná" class="sponsor-logo">
                    </div>
                    <div class="sponsor-item">
                        <img src="/assets/images/logos/PATROCINIOS/seab.png" alt="SEAB" class="sponsor-logo">
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
                <h2>Venha Participar da EXPOASA 2026!</h2>
                <p>A maior e mais tradicional exposição japonesa do Brasil espera por você para três dias de cultura, gastronomia, tecnologia e muito mais.</p>

                <div class="cta-buttons">
                    {{-- <a href="{{ route('ideasun.index') }}" class="btn-cta">
                    <i class="fa fa-ticket"></i>
                    Inscreva-se no IDEASUN
                    </a> --}}
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
                        &copy; 2026 EXPOASA - Todos os direitos reservados | Desenvolvido com ❤️ por <a href="https://valedosol.assai.pr.gov.br">VDS</a>
                    </div>
                    <div class="footer-bottom-links">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.sponsor-logo').forEach(function(image) {
                function applyFallback() {
                    const card = image.closest('.sponsor-item');
                    if (!card || card.classList.contains('fallback')) {
                        return;
                    }

                    const sponsorName = (image.getAttribute('alt') || 'Parceiro').trim();
                    card.classList.add('fallback');
                    image.remove();

                    const label = document.createElement('span');
                    label.className = 'sponsor-fallback-name';
                    label.textContent = sponsorName;
                    card.appendChild(label);
                }

                image.addEventListener('error', applyFallback);

                if (image.complete && image.naturalWidth === 0) {
                    applyFallback();
                }
            });
        });
    </script>
</body>

</html>