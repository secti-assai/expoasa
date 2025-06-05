<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/auth/login.blade.php -->
@extends('ryori.layouts.main')

@section('title', 'Login - Área Administrativa')

@section('content')
<section class="auth-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="auth-card">
                    <div class="auth-header text-center">
                        <img src="/assets/images/ryori/ryori-logo.png" alt="RYORI Logo" class="auth-logo">
                        <h2>Acesso Administrativo</h2>
                        <p>Entre com suas credenciais para gerenciar o concurso gastronômico</p>
                    </div>
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('ryori.auth.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <button class="btn btn-outline-secondary toggle-password" type="button">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Lembrar acesso</label>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i> Entrar
                            </button>
                        </div>
                    </form>
                    
                    <div class="auth-footer text-center mt-4">
                        <p>Para acessar o painel administrativo, use as credenciais fornecidas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('custom-css')
:root {
    --auth-bg: #FFF0F0;
    --auth-border: #FFD6D6;
}

.auth-section {
    background: var(--ryori-gradient);
    padding: 100px 0;
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
}

.auth-section::before {
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

.auth-card {
    background: white;
    border-radius: 15px;
    padding: 40px;
    box-shadow: 0 15px 50px rgba(0,0,0,0.1);
    position: relative;
    z-index: 2;
    border-top: 5px solid var(--ryori-primary);
}

.auth-logo {
    height: 70px;
    margin-bottom: 20px;
}

.auth-header {
    margin-bottom: 30px;
}

.auth-header h2 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--ryori-primary);
    margin-bottom: 10px;
}

.auth-header p {
    color: var(--ryori-text-light);
    margin-bottom: 0;
}

.form-label {
    font-weight: 600;
    color: var(--ryori-text);
}

.input-group-text {
    background-color: var(--auth-bg);
    border-color: var(--auth-border);
    color: var(--ryori-primary);
}

.form-control {
    border-color: var(--auth-border);
    padding: 12px 15px;
}

.form-control:focus {
    border-color: var(--ryori-primary);
    box-shadow: 0 0 0 0.2rem rgba(187, 0, 0, 0.15);
}

.btn-primary {
    background: var(--ryori-gradient);
    border: none;
    padding: 12px;
    font-weight: 600;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #8B0000, #BF0000);
}

.toggle-password {
    border-color: var(--auth-border);
}

.toggle-password:hover {
    background-color: var(--auth-bg);
}

.auth-footer a {
    color: var(--ryori-primary);
    font-weight: 600;
    text-decoration: none;
}

.auth-footer a:hover {
    text-decoration: underline;
}
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    });
</script>
@endsection