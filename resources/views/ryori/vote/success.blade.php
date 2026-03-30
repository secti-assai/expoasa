<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/vote/success.blade.php -->
@extends('ryori.layouts.main')

@section('title', 'Voto Registrado')

@section('custom-css')
.success-animation {
    margin: 0 auto;
    width: 150px;
    height: 150px;
    position: relative;
}

.checkmark {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    stroke-width: 5;
    stroke: var(--primary-color);
    stroke-miterlimit: 10;
    animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
    box-shadow: 0 0 0 15px rgba(211, 0, 0, 0.1);
}

.checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 5;
    stroke-miterlimit: 10;
    stroke: var(--primary-color);
    fill: none;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
}

.checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }
    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0 0 0 100px rgba(211, 0, 0, 0.1);
    }
}

.confetti {
    position: absolute;
    width: 10px;
    height: 10px;
    background-color: #f69;
    animation: confetti 5s ease-in-out -2s infinite;
    transform-origin: center;
    opacity: 0;
}

.confetti:nth-child(1) {
    background-color: #D30000;
    left: 10%;
    animation-delay: 0;
}

.confetti:nth-child(2) {
    background-color: #FFCB05;
    left: 20%;
    animation-delay: -5s;
}

.confetti:nth-child(3) {
    background-color: #D30000;
    left: 30%;
    animation-delay: -3s;
}

.confetti:nth-child(4) {
    background-color: #FFCB05;
    left: 40%;
    animation-delay: -2.5s;
}

.confetti:nth-child(5) {
    background-color: #D30000;
    left: 50%;
    animation-delay: -4s;
}

.confetti:nth-child(6) {
    background-color: #FFCB05;
    left: 60%;
    animation-delay: -6s;
}

.confetti:nth-child(7) {
    background-color: #D30000;
    left: 70%;
    animation-delay: -1.5s;
}

.confetti:nth-child(8) {
    background-color: #FFCB05;
    left: 80%;
    animation-delay: -2s;
}

.confetti:nth-child(9) {
    background-color: #D30000;
    left: 90%;
    animation-delay: -3.5s;
}

.confetti:nth-child(10) {
    background-color: #FFCB05;
    left: 100%;
    animation-delay: -2.5s;
}

@keyframes confetti {
    0% {
        transform: rotateZ(15deg) rotateY(0deg) translate(0, 0);
        opacity: 1;
    }
    25% {
        transform: rotateZ(5deg) rotateY(360deg) translate(-5vw, 20vh);
    }
    50% {
        transform: rotateZ(15deg) rotateY(720deg) translate(5vw, 60vh);
    }
    75% {
        transform: rotateZ(5deg) rotateY(1080deg) translate(-10vw, 80vh);
    }
    100% {
        transform: rotateZ(15deg) rotateY(1440deg) translate(10vw, 110vh);
        opacity: 0;
    }
}
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card card-ryori p-4 p-md-5">
                    <div class="card-body text-center">
                        <div class="position-relative mb-5">
                            <div class="success-animation">
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                </svg>
                            </div>
                            
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                        </div>
                        
                        <h2 class="mb-4" style="color: var(--primary-color);">Voto Registrado com Sucesso!</h2>
                        
                        <p class="lead mb-4">Obrigado por participar do concurso gastronômico Prato Expoasa 2026!</p>
                        <p class="mb-5">Seu voto foi registrado e será contabilizado na apuração final. O anúncio do ganhador será no dia 14 de junho de 2026.</p>
                        
                        <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                            <a href="{{ route('ryori.index') }}" class="btn btn-ryori">
                                <i class="fas fa-home me-2"></i> Voltar para Página Inicial
                            </a>
                            <a href="{{ route('ryori.dishes.index') }}" class="btn btn-outline-ryori">
                                <i class="fas fa-utensils me-2"></i> Ver Outros Pratos
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card card-ryori mt-4">
                    <div class="card-body text-center">
                        <h5 class="mb-3">Compartilhe sua participação!</h5>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-sm btn-outline-primary rounded-circle" data-bs-toggle="tooltip" data-bs-title="Compartilhar no Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-info rounded-circle" data-bs-toggle="tooltip" data-bs-title="Compartilhar no Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-danger rounded-circle" data-bs-toggle="tooltip" data-bs-title="Compartilhar no Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-success rounded-circle" data-bs-toggle="tooltip" data-bs-title="Compartilhar no WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection