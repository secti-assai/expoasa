@extends('ryori.layouts.main')

@section('title', 'Votação Prato Expoasa 2026')

@section('custom-css')
/* Estilos aprimorados para a página de votação */
:root {
    --ryori-primary-light: rgba(191, 0, 0, 0.1);
    --ryori-primary: #BF0000;
    --ryori-secondary: #FF4D4D;
    --ryori-dark: #8B0000;
}

.hero-section {
    background: linear-gradient(rgba(139, 0, 0, 0.85), rgba(191, 0, 0, 0.75)), 
                url('/assets/images/ryori/hero-bg.jpg');
    background-size: cover;
    background-position: center;
    padding: 80px 0;
    color: white;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('/assets/images/ryori/pattern.png');
    opacity: 0.1;
    z-index: 0;
}

.hero-section .container {
    position: relative;
    z-index: 1;
}

.hero-title {
    font-weight: 800;
    margin-bottom: 1rem;
    letter-spacing: -0.5px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.hero-subtitle {
    font-size: 1.25rem;
    opacity: 0.9;
    max-width: 600px;
    margin: 0 auto;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

/* Card de votação melhorado */
.card-ryori {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    margin-bottom: 30px;
}

/* Processo de votação */
.vote-process-card {
    position: relative;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
}

.voting-steps {
    counter-reset: step;
    position: relative;
}

.voting-steps::before {
    content: '';
    position: absolute;
    top: 40px;
    bottom: 0;
    left: 17px;
    width: 2px;
    background: #eee;
    z-index: 0;
}

.voting-step {
    position: relative;
    padding-left: 60px;
    margin-bottom: 2.5rem;
    z-index: 1;
}

.voting-step:last-child {
    margin-bottom: 0;
}

.voting-step::before {
    counter-increment: step;
    content: counter(step);
    position: absolute;
    left: 0;
    top: 0;
    width: 35px;
    height: 35px;
    background: linear-gradient(135deg, var(--ryori-primary), var(--ryori-dark));
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 3px 10px rgba(191, 0, 0, 0.2);
}

/* Seleção de pratos - LAYOUT EM GRID APLICADO */
.dish-options {
    padding: 0;
    margin: 0;
}

.dish-radio-card {
    position: relative;
    border: 3px solid transparent;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
    background: #fff;
    display: flex;
    flex-direction: column;
}

.dish-radio-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    border-color: rgba(191, 0, 0, 0.3);
}

.form-check-input:checked + .form-check-label .dish-radio-card {
    border-color: #BF0000;
    box-shadow: 0 10px 30px rgba(191, 0, 0, 0.2);
    background-color: #FFF9F9;
}

.dish-selection-indicator {
    position: absolute;
    top: 10px;
    right: 10px;
    background: white;
    border: 2px solid #BF0000;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: transparent;
    font-size: 16px;
    transition: all 0.2s ease;
    z-index: 2;
}

.form-check-input:checked + .form-check-label .dish-selection-indicator {
    background-color: #BF0000;
    color: white;
    transform: scale(1.1);
}

/* CORREÇÃO DO CORTE DA IMAGEM */
.dish-image-container {
    height: 200px;
    position: relative;
    overflow: hidden;
    background-color: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.dish-image-container img {
    max-width: 100%;
    max-height: 100%;
    width: auto !important;
    height: auto !important;
    object-fit: contain !important;
    transition: transform 0.5s ease;
}

.dish-radio-card:hover .dish-image-container img {
    transform: scale(1.05);
}

.dish-content {
    padding: 20px;
    position: relative;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.dish-title {
    font-size: 1.15rem;
    font-weight: 700;
    margin-bottom: 8px;
    color: #333;
}

.dish-description {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 12px;
    line-height: 1.5;
    flex-grow: 1;
}

.dish-meta {
    display: flex;
    align-items: center;
    color: #888;
    font-size: 0.85rem;
    margin-top: auto;
    padding-top: 10px;
    border-top: 1px solid #eee;
}

.dish-meta i {
    margin-right: 5px;
    color: var(--ryori-primary);
}

.dish-category-badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: rgba(191, 0, 0, 0.9);
    color: white;
    font-weight: 500;
    font-size: 0.75rem;
    padding: 5px 12px;
    border-radius: 20px;
    z-index: 2;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* Botão confirmar - DESTACADO */
.confirmation-section {
    position: sticky;
    bottom: 20px;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
    border: 1px solid rgba(191, 0, 0, 0.1);
    z-index: 100;
}

.btn-ryori {
    background: linear-gradient(135deg, #BF0000, #8B0000);
    color: white;
    border: none;
    border-radius: 30px;
    padding: 15px 30px;
    font-weight: 600;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(191, 0, 0, 0.3);
    z-index: 1;
    width: 100%;
}

.btn-ryori::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: all 0.6s ease;
    z-index: -1;
}

.btn-ryori:hover:not(:disabled) {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(191, 0, 0, 0.4);
    color: white;
}

.btn-ryori:hover:not(:disabled)::before {
    left: 100%;
}

.btn-ryori:disabled {
    background: #e0e0e0;
    color: #888;
    cursor: not-allowed;
    box-shadow: none;
}

/* Animações e efeitos */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
}

.pulse {
    animation: pulse 2s infinite;
}

.selected-dish-info {
    display: none;
    padding: 15px 20px;
    border-radius: 10px;
    background-color: #FFF9F9;
    border-left: 5px solid #BF0000;
    margin-bottom: 25px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
}

@media (max-width: 767px) {
    .voting-step {
        padding-left: 50px;
    }
    
    .hero-section {
        padding: 60px 0;
    }
    
    .card-ryori .card-body {
        padding: 20px;
    }
}
@endsection

@section('content')
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title display-4 mb-3">Vote no Melhor Prato Expoasa 2026</h1>
            <p class="hero-subtitle">Participe do concurso gastronômico oficial da EXPOASA 2026 e escolha o seu prato favorito</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="card card-ryori">
                    <div class="card-body vote-process-card">
                        <h3 class="text-center mb-5">Como funciona a votação</h3>
                        
                        <div class="voting-steps">
                            <div class="voting-step">
                                <h5>Preencha seus dados</h5>
                                <p>Informe seu nome completo e CPF para validarmos seu voto. Cada pessoa pode votar apenas uma vez.</p>
                            </div>
                            
                            <div class="voting-step">
                                <h5>Escolha seu prato favorito</h5>
                                <p>Selecione entre os pratos participantes aquele que você mais gostou e deseja premiar.</p>
                            </div>
                            
                            <div class="voting-step">
                                <h5>Confirme seu voto</h5>
                                <p>Revise suas informações, envie seu voto e faça parte da escolha do melhor prato Prato Expoasa 2026.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form action="{{ route('ryori.vote.store') }}" method="POST" class="needs-validation" id="voteForm" novalidate>
                    @csrf
                    
                    <div class="card card-ryori">
                        <div class="card-header bg-primary text-white p-3">
                            <h4 class="mb-0"><i class="fas fa-user-circle me-2"></i> 1. Seus dados</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <label for="name" class="form-label fw-bold">Nome completo</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Digite seu nome completo" required>
                                        @error('name')
                                            <div class="invalid-feedback d-block text-danger fw-bold"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="cpf" class="form-label fw-bold">CPF</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        <input type="text" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf" value="{{ old('cpf') }}" maxlength="14" placeholder="000.000.000-00" required onkeyup="maskCPF(this)">
                                        @error('cpf')
                                            <div class="invalid-feedback d-block text-danger fw-bold"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
                                        @enderror
                                    </div>
                                    <small class="text-muted mt-1 d-block"><i class="fas fa-lock me-1"></i> Você só pode votar uma vez com o mesmo CPF</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card card-ryori">
                        <div class="card-header bg-primary text-white p-3">
                            <h4 class="mb-0"><i class="fas fa-utensils me-2"></i> 2. Escolha seu prato favorito</h4>
                        </div>
                        <div class="card-body p-4">
                            <div class="selected-dish-info" id="selectedDishInfo">
                                <i class="fas fa-check-circle me-2 text-success"></i> 
                                Você selecionou: <strong id="selectedDishName" class="text-danger"></strong>
                            </div>
                            
                            <div class="row dish-options">
                                @forelse($dishes as $dish)
                                    <div class="col-md-6 col-lg-4 mb-4">
                                        <div class="form-check p-0 h-100">
                                            <input class="form-check-input visually-hidden dish-radio" 
                                                type="radio" name="dish_id" id="dish{{ $dish->id }}" 
                                                value="{{ $dish->id }}" 
                                                {{ old('dish_id') == $dish->id ? 'checked' : '' }} 
                                                required>
                                            <label class="form-check-label w-100 h-100" for="dish{{ $dish->id }}">
                                                <div class="dish-radio-card">
                                                    <div class="dish-selection-indicator">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    
                                                    @if($dish->category)
                                                        <div class="dish-category-badge">{{ $dish->category }}</div>
                                                    @endif
                                                    
                                                    <div class="dish-image-container">
                                                        @if($dish->image_path)
                                                            <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}">
                                                        @else
                                                            <img src="/assets/images/ryori/dish-placeholder.jpg" alt="{{ $dish->name }}">
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="dish-content">
                                                        <h5 class="dish-title">{{ $dish->name }}</h5>
                                                        <p class="dish-description">{{ Str::limit($dish->description, 100) }}</p>
                                                        
                                                        @if($dish->restaurant_name)
                                                            <div class="dish-meta">
                                                                <i class="fas fa-store"></i>
                                                                <span>{{ $dish->restaurant_name }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <div class="alert alert-info p-4 text-center">
                                            <i class="fas fa-info-circle fa-2x mb-3"></i>
                                            <h5>Nenhum prato disponível</h5>
                                            <p class="mb-0">Os pratos participantes serão adicionados em breve. Volte mais tarde!</p>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                            
                            @error('dish_id')
                                <div class="alert alert-danger mt-3 fw-bold"><i class="fas fa-exclamation-circle me-1"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="confirmation-section" id="confirmationSection">
                        @if(isset(
                        $votingOpen) && !$votingOpen)
                            <div class="alert alert-warning text-center mb-3">
                                <i class="fas fa-clock me-2"></i>
                                A votação não está disponível neste momento.
                                @if(isset($votingPeriod) && $votingPeriod)
                                    <br>
                                    <small>Período definido: {{ $votingPeriod->start_datetime ? \Carbon\Carbon::parse($votingPeriod->start_datetime)->format('d/m/Y H:i') : '?' }} até {{ $votingPeriod->end_datetime ? \Carbon\Carbon::parse($votingPeriod->end_datetime)->format('d/m/Y H:i') : '?' }}</small>
                                @endif
                            </div>
                        @endif
                        <button type="submit" class="btn btn-ryori" id="submitVoteBtn" @if(isset($votingOpen) && !$votingOpen) disabled @endif>
                            <i class="fas fa-paper-plane me-2"></i> Confirmar Meu Voto
                        </button>
                        <div class="text-center mt-3">
                            <small class="text-muted">Ao votar, você concorda com os <a href="{{ route('ryori.about') }}" class="text-danger">termos do concurso</a> Prato Expoasa 2026.</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    // Máscara para CPF
    function maskCPF(input) {
        let value = input.value.replace(/\D/g, '');
        
        if (value.length <= 11) {
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d)/, '$1.$2');
            value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }
        
        input.value = value;
    }
    
    // Controle Inteligente do Formulário
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('voteForm');
        const radios = document.querySelectorAll('.dish-radio');
        const nameInput = document.getElementById('name');
        const cpfInput = document.getElementById('cpf');
        const selectedDishInfo = document.getElementById('selectedDishInfo');
        const selectedDishName = document.getElementById('selectedDishName');
        const voteReadyAlert = document.getElementById('voteReadyAlert');
        const submitBtn = document.getElementById('submitVoteBtn');
        
        // Função que verifica se tudo foi preenchido e libera o botão
        function updateFormState() {
            let formValid = true;
            let dishSelected = false;
            
            // Checa Nome
            if (nameInput.value.trim().length < 3) formValid = false;
            
            // Checa CPF (11 números = 14 caracteres com máscara)
            if (cpfInput.value.length !== 14) formValid = false;
            
            // Checa Rádio
            radios.forEach(radio => {
                if (radio.checked) dishSelected = true;
            });
            
            if (!dishSelected) formValid = false;
            
            // Habilita ou desabilita o botão
            if (formValid) {
                submitBtn.removeAttribute('disabled');
                submitBtn.classList.add('pulse');
                voteReadyAlert.classList.remove('d-none');
            } else {
                submitBtn.setAttribute('disabled', 'true');
                submitBtn.classList.remove('pulse');
                voteReadyAlert.classList.add('d-none');
            }
        }
        
        // Verifica no carregamento (caso volte a página com dados salvos)
        updateFormState();
        
        // Eventos de clique nas opções de pratos
        radios.forEach(radio => {
            // Se já vier marcado (erro de validação do Laravel)
            if (radio.checked) {
                const label = radio.nextElementSibling;
                const title = label.querySelector('.dish-title');
                selectedDishName.textContent = title ? title.textContent : 'Prato selecionado';
                selectedDishInfo.style.display = 'block';
            }
            
            radio.addEventListener('change', function() {
                const label = this.nextElementSibling;
                const title = label.querySelector('.dish-title');
                
                selectedDishName.textContent = title ? title.textContent : 'Prato selecionado';
                selectedDishInfo.style.display = 'block';
                
                updateFormState();
                
                // Rola a página suavemente para o botão se já tiver preenchido nome e CPF
                if(nameInput.value.length > 2 && cpfInput.value.length === 14) {
                    document.getElementById('confirmationSection').scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'center' 
                    });
                }
            });
        });
        
        // Ouve a digitação nos campos de texto
        nameInput.addEventListener('input', updateFormState);
        cpfInput.addEventListener('input', updateFormState);
        
        // Força validação visual ao tentar submeter
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
</script>
@endsection