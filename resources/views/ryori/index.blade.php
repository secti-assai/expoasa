@extends('ryori.layouts.main')

@section('title', 'Concurso Gastronômico')

@section('content')
    <!-- Hero Section - Design Renovado -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <span class="hero-tag">Concurso Gastronômico 2025</span>
                    <h1 class="hero-title">RYORI <span class="year-badge">2025</span></h1>
                    <p class="hero-subtitle">Tradição e Sabor no maior evento gastronômico da EXPOASA</p>
                    <div class="hero-actions">
                        <a href="{{ route('ryori.vote.index') }}" class="btn btn-vote-primary">
                            <i class="fas fa-star me-2"></i> Vote Agora
                        </a>
                        <a href="{{ route('ryori.about') }}" class="btn btn-outline-light hero-secondary-btn">
                            <i class="fas fa-info-circle me-2"></i> Saiba Mais
                        </a>
                        <a href="{{ route('ryori.auth.login') }}" class="btn btn-outline-light hero-secondary-btn">
                            <i class="fas fa-lock me-2"></i> Área Admin
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-image-container">
                        <img src="/assets/images/ryori/ryori.png" alt="Pratos RYORI" class="hero-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section - Renovado -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-image-wrapper">
                        <img src="/assets/images/expo_2024/expo_185.jpg" alt="RYORI 2025" class="about-image">
                        <div class="about-image-accent"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <span class="section-subtitle">Sobre o Evento</span>
                        <h2 class="section-title">O que é o RYORI?</h2>
                    </div>
                    <p class="lead-text">O <strong>RYORI</strong> é o principal concurso gastronômico da <strong>EXPOASA</strong>, reunindo sabores, criatividade e tradição.</p>
                    
                    <p class="about-description">Em 2025, o concurso celebra a diversidade gastronômica, unindo pratos da culinária japonesa, nipo-brasileira e também delícias de outras tradições. Uma verdadeira festa de sabores e experiências culinárias.</p>
                    
                    <div class="about-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Premiação</h4>
                                <p>Prêmios para os melhores pratos</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Participação</h4>
                                <p>Aberto ao público</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Dishes - Design Renovado -->
    <section class="dishes-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Delícias em Competição</span>
                <h2 class="section-title">Pratos Participantes</h2>
            </div>
            
            <div class="row">
                @forelse($dishes as $dish)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="dish-card">
                        <div class="dish-image">
                            @if($dish->image_path)
                                <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}">
                            @else
                                <img src="/assets/img/dish-placeholder.jpg" alt="{{ $dish->name }}">
                            @endif
                            @if($dish->category)
                                <span class="dish-category">{{ $dish->category }}</span>
                            @endif
                        </div>
                        <div class="dish-content">
                            <h3 class="dish-title">{{ $dish->name }}</h3>
                            <p class="dish-description">{{ Str::limit($dish->description, 80) }}</p>
                            
                            @if($dish->restaurant_name)
                                <div class="dish-restaurant">
                                    <i class="fas fa-utensils"></i> {{ $dish->restaurant_name }}
                                </div>
                            @endif
                            
                            <a href="{{ route('ryori.dishes.show', $dish->id) }}" class="dish-link">
                                <span>Ver Detalhes</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="empty-state">
                        <div class="empty-icon"><i class="fas fa-utensils"></i></div>
                        <h3>Pratos em Preparação</h3>
                        <p>Em breve os pratos participantes do concurso serão divulgados. Fique ligado!</p>
                    </div>
                </div>
                @endforelse
            </div>
            
            @if(count($dishes) > 0)
            <div class="text-center mt-5">
                <a href="{{ route('ryori.dishes.index') }}" class="btn btn-outline-ryori btn-lg">
                    <i class="fas fa-th-list me-2"></i> Ver Todos os Pratos
                </a>
            </div>
            @endif
        </div>
    </section>

    <!-- Voting Process - Renovado -->
    <section class="voting-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Participe da Escolha</span>
                <h2 class="section-title">Como Votar</h2>
            </div>
            
            <div class="voting-process">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Experimente os Pratos</h3>
                    <p>Visite os restaurantes participantes e experimente os deliciosos pratos do concurso.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Escolha seu Favorito</h3>
                    <p>Decida qual prato mais agradou seu paladar e merece o título de campeão.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Vote Online</h3>
                    <p>Acesse nosso sistema de votação, preencha seus dados e vote no seu prato favorito.</p>
                </div>
            </div>
            
            <div class="voting-cta">
                <a href="{{ route('ryori.vote.index') }}" class="btn btn-vote-large">
                    <span class="vote-text">Votar Agora</span>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Timeline - Renovado -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-subtitle">Programação</span>
                <h2 class="section-title">Cronograma do Evento</h2>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">
                        <span class="date">06</span>
                        <span class="month">JUN</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-flag-checkered"></i>
                        </div>
                        <h3>Abertura</h3>
                        <p>Abertura do concurso e votação do público em geral</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">
                        <span class="date">06-08</span>
                        <span class="month">JUN</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3>Degustação e Votação</h3>
                        <p>Período de degustação e votação do público</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">
                        <span class="date">08</span>
                        <span class="month">JUN</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h3>Contagem dos Votos e Avaliação Final</h3>
                        <p>Contagem final dos votos, apuração dos resultados e avaliação final.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">
                        <span class="date">08</span>
                        <span class="month">JUN</span>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3>Premiação</h3>
                        <p>Cerimônia de premiação e encerramento do evento</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section - Renovado -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-wrapper">
                <div class="cta-content">
                    <h2>Seu voto é decisivo!</h2>
                    <p>Participe do RYORI 2025 e ajude a escolher os melhores pratos da região. Uma experiência gastronômica que você não pode perder!</p>
                </div>
                <div class="cta-action">
                    <a href="{{ route('ryori.vote.index') }}" class="btn btn-vote-primary btn-lg">
                        <i class="fas fa-star me-2"></i> Quero Votar
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom-css')
:root {
    --ryori-primary: #BF0000;
    --ryori-secondary: #FF4D4D;
    --ryori-accent: #FFB74D;
    --ryori-dark: #8B0000;
    --ryori-light: #FFF0F0;
    --ryori-text: #333333;
    --ryori-text-light: #777777;
    --ryori-gradient: linear-gradient(135deg, var(--ryori-primary), var(--ryori-dark));
}

/* Hero Section */
.hero-section {
    background: var(--ryori-gradient);
    padding: 120px 0 100px;
    color: white;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('/assets/images/ryori/pattern-bg.png');
    background-repeat: repeat;
    opacity: 0.1;
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
}

.hero-tag {
    display: inline-block;
    background-color: rgba(255,255,255,0.2);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 20px;
    backdrop-filter: blur(5px);
}

.hero-title {
    font-size: 4rem;
    font-weight: 800;
    margin-bottom: 20px;
    letter-spacing: -1px;
}

.year-badge {
    font-size: 0.5em;
    vertical-align: top;
    background: var(--ryori-accent);
    color: var(--ryori-dark);
    padding: 5px 10px;
    border-radius: 8px;
    margin-left: 10px;
}

.hero-subtitle {
    font-size: 1.4rem;
    font-weight: 300;
    margin-bottom: 30px;
    opacity: 0.9;
}

.hero-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.hero-image-container {
    position: relative;
    z-index: 2;
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));
    animation: float 6s ease-in-out infinite;
}

.hero-image {
    border-radius: 20px;
    border: 5px solid rgba(255,255,255,0.3);
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

.btn-vote-primary {
    background-color: white;
    color: var(--ryori-primary);
    font-weight: 600;
    padding: 12px 30px;
    border-radius: 50px;
    border: none;
    box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.btn-vote-primary:hover {
    background-color: var(--ryori-accent);
    color: var(--ryori-dark);
    transform: translateY(-3px);
    box-shadow: 0 12px 20px rgba(0,0,0,0.2);
}

.hero-secondary-btn {
    font-weight: 500;
    padding: 12px 30px;
    border-radius: 50px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: all 0.3s ease;
}

.hero-secondary-btn:hover {
    background-color: rgba(255,255,255,0.1);
    border-color: white;
    transform: translateY(-3px);
}

/* About Section */
.about-section {
    padding: 100px 0;
    background-color: white;
}

.about-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.about-image {
    width: 100%;
    border-radius: 20px;
    transition: transform 0.5s ease;
}

.about-image-wrapper:hover .about-image {
    transform: scale(1.05);
}

.about-image-accent {
    position: absolute;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: var(--ryori-gradient);
    bottom: -30px;
    right: -30px;
    z-index: -1;
    opacity: 0.8;
}

.section-header {
    margin-bottom: 30px;
}

.section-subtitle {
    display: inline-block;
    color: var(--ryori-primary);
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 10px;
}

.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--ryori-text);
    margin-bottom: 20px;
    position: relative;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 0;
    width: 60px;
    height: 4px;
    background: var(--ryori-primary);
    border-radius: 2px;
}

.section-header.text-center .section-title::after {
    left: 50%;
    transform: translateX(-50%);
}

.lead-text {
    font-size: 1.2rem;
    color: var(--ryori-text);
    margin-bottom: 20px;
    font-weight: 500;
}

.about-description {
    color: var(--ryori-text-light);
    margin-bottom: 30px;
    line-height: 1.7;
}

.about-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
}

.feature-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--ryori-light);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ryori-primary);
    font-size: 1.2rem;
}

.feature-text h4 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: var(--ryori-text);
}

.feature-text p {
    font-size: 0.9rem;
    color: var(--ryori-text-light);
    margin: 0;
}

/* Dishes Section */
.dishes-section {
    padding: 100px 0;
    background-color: #f9f9f9;
    position: relative;
}

.dishes-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to bottom, white, transparent);
}

.dish-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.dish-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.dish-image {
    height: 220px;
    position: relative;
    overflow: hidden;
}

.dish-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.dish-card:hover .dish-image img {
    transform: scale(1.1);
}

.dish-category {
    position: absolute;
    top: 15px;
    right: 15px;
    background: var(--ryori-primary);
    color: white;
    padding: 5px 15px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    z-index: 1;
}

.dish-content {
    padding: 25px;
}

.dish-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--ryori-text);
}

.dish-description {
    color: var(--ryori-text-light);
    margin-bottom: 20px;
    font-size: 0.95rem;
    line-height: 1.6;
}

.dish-restaurant {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--ryori-primary);
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 20px;
}

.dish-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    color: var(--ryori-text);
    font-weight: 600;
    border-top: 1px solid rgba(0,0,0,0.05);
    text-decoration: none;
    transition: all 0.3s ease;
}

.dish-link:hover {
    color: var(--ryori-primary);
}

.dish-link i {
    transition: transform 0.3s ease;
}

.dish-link:hover i {
    transform: translateX(5px);
}

.empty-state {
    background: white;
    border-radius: 15px;
    padding: 60px 30px;
    text-align: center;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

.empty-icon {
    width: 80px;
    height: 80px;
    background: var(--ryori-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: var(--ryori-primary);
}

.empty-state h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--ryori-text);
}

.empty-state p {
    color: var(--ryori-text-light);
    max-width: 500px;
    margin: 0 auto;
}

/* Voting Process */
.voting-section {
    padding: 100px 0;
    background-color: white;
}

.voting-process {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin: 50px 0;
    position: relative;
}

.voting-process::before {
    content: '';
    position: absolute;
    top: 60px;
    left: 30px;
    right: 30px;
    height: 2px;
    background: #eee;
    z-index: 0;
}

.process-step {
    position: relative;
    z-index: 1;
    flex: 1;
    min-width: 250px;
    text-align: center;
    padding: 0 20px;
}

.step-number {
    width: 40px;
    height: 40px;
    background: var(--ryori-primary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin: 0 auto 30px;
    position: relative;
    z-index: 2;
}

.step-icon {
    width: 100px;
    height: 100px;
    background: white;
    border: 2px solid var(--ryori-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 2rem;
    color: var(--ryori-primary);
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.process-step:hover .step-icon {
    background: var(--ryori-primary);
    color: white;
    transform: translateY(-5px);
}

.process-step h3 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--ryori-text);
}

.process-step p {
    color: var(--ryori-text-light);
    font-size: 0.95rem;
    line-height: 1.6;
}

.voting-cta {
    text-align: center;
    margin-top: 50px;
}

.btn-vote-large {
    background: var(--ryori-gradient);
    color: white;
    border: none;
    padding: 18px 40px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 15px;
    box-shadow: 0 10px 20px rgba(187, 0, 0, 0.3);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-vote-large::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, transparent, rgba(255,255,255,0.2), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.btn-vote-large:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(187, 0, 0, 0.4);
    color: white;
}

.btn-vote-large:hover::after {
    transform: translateX(100%);
}

.vote-text {
    position: relative;
    z-index: 1;
}

/* Timeline Section */
.timeline-section {
    padding: 100px 0;
    background-color: #f9f9f9;
    position: relative;
}

.timeline {
    margin-top: 50px;
    position: relative;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background: rgba(0,0,0,0.1);
    transform: translateX(-1px);
}

.timeline-item {
    display: flex;
    margin-bottom: 50px;
    position: relative;
}

.timeline-item:nth-child(odd) {
    flex-direction: row-reverse;
}

.timeline-date {
    width: 120px;
    height: 120px;
    background: var(--ryori-primary);
    color: white;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    z-index: 1;
    flex-shrink: 0;
    position: relative;
    left: -60px;
}

.timeline-item:nth-child(odd) .timeline-date {
    left: 60px;
}

.timeline-date .date {
    font-size: 2rem;
    font-weight: 700;
    line-height: 1;
}

.timeline-date .month {
    font-size: 1rem;
    font-weight: 500;
    opacity: 0.8;
}

.timeline-content {
    background: white;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    width: calc(50% - 100px);
    position: relative;
}

.timeline-icon {
    width: 60px;
    height: 60px;
    background: var(--ryori-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--ryori-primary);
    font-size: 1.5rem;
    margin-bottom: 20px;
}

.timeline-content h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--ryori-text);
}

.timeline-content p {
    color: var(--ryori-text-light);
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

/* CTA Section */
.cta-section {
    padding: 80px 0;
    background: var(--ryori-gradient);
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url('/assets/images/ryori/pattern-bg.png');
    background-repeat: repeat;
    opacity: 0.1;
    z-index: 1;
}

.cta-wrapper {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    position: relative;
    z-index: 2;
    border: 1px solid rgba(255,255,255,0.2);
}

.cta-content {
    flex: 1;
    min-width: 300px;
}

.cta-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
}

.cta-content p {
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0;
}

.cta-action {
    flex-shrink: 0;
}

/* Responsive Adjustments */
@media (max-width: 991px) {
    .hero-section {
        padding: 80px 0;
    }
    
    .hero-title {
        font-size: 3rem;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .about-features {
        grid-template-columns: 1fr;
    }
    
    .voting-process::before {
        display: none;
    }
    
    .process-step {
        margin-bottom: 40px;
    }
    
    .timeline::before {
        left: 30px;
    }
    
    .timeline-item,
    .timeline-item:nth-child(odd) {
        flex-direction: row;
    }
    
    .timeline-date {
        width: 60px;
        height: 60px;
        left: 0;
    }
    
    .timeline-item:nth-child(odd) .timeline-date {
        left: 0;
    }
    
    .timeline-date .date {
        font-size: 1rem;
    }
    
    .timeline-date .month {
        font-size: 0.7rem;
    }
    
    .timeline-content {
        width: calc(100% - 90px);
        margin-left: 30px;
    }
    
    .cta-wrapper {
        padding: 40px;
        text-align: center;
        justify-content: center;
    }
    
    .cta-content h2 {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    .hero-section {
        padding: 60px 0;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: stretch;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .about-section,
    .dishes-section,
    .voting-section,
    .timeline-section {
        padding: 60px 0;
    }
    
    .cta-wrapper {
        padding: 30px;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
    }
}

/* Animation */
.pulse-button {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(187, 0, 0, 0.7);
    }
    70% {
        box-shadow: 0 0 0 15px rgba(187, 0, 0, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(187, 0, 0, 0);
    }
}

.hero-actions {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
    justify-content: center;
}
@endsection