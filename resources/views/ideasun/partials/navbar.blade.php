<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('ideasun.index') }}">
                <img src="/assets/img/logos/Logo_Landing_Ideasun.png" alt="Logo IDEASUN" class="logo-main">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('ideasun.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('ideasun.index') }}">Início</a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('inicio') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('inicio') }}">Expoasa</a>
                    </li>

                    <!-- Menu para equipes -->
                    @if(Session::has('cidade_id_para_equipe') || Session::has('equipe_id'))
                        <li class="nav-item {{ request()->routeIs('ideasun.equipe.gerenciar') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('ideasun.equipe.gerenciar') }}">Dashboard</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('ideasun.materiais') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('ideasun.materiais') }}">Materiais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ideasun.logout') }}">Sair</a>
                        </li>

                    @elseif(Session::has('cidade_id'))
                    <!-- Menu para cidades -->
                    <li class="nav-item {{ request()->routeIs('ideasun.cidade.dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('ideasun.cidade.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ideasun.cidade.logout') }}">Sair</a>
                    </li>

                    @else
                    <!-- Menu para usuários não logados -->
                    <li class="nav-item {{ request()->routeIs('ideasun.login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('ideasun.login') }}">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<style>
    /* Tema atualizado para combinar com a logo e elementos vermelhos */
    .header {
        background: linear-gradient(90deg, #004AAD 0%, #0E57B3 100%);
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        border-bottom: 3px solid #CF3232; /* Linha sutil de cor vermelha para combinar com elementos do site */
    }

    .navbar {
        padding: 12px 0;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .logo-main {
        height: 40px;
        filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.2));
    }

    .brand-text {
        margin-left: 10px;
        font-weight: 600;
        color: #fff;
        font-size: 1.2rem;
    }

    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.6);
        background-color: rgba(255, 255, 255, 0.1);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .nav-item {
        margin: 0 5px;
        position: relative;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.9);
        padding: 8px 15px;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #fff;
        background-color: rgba(207, 50, 50, 0.3); /* Hover com tom vermelho para combinar com o tema */
        transform: translateY(-2px);
    }

    .nav-item.active .nav-link {
        color: #fff;
        font-weight: 600;
        background-color: rgba(207, 50, 50, 0.5); /* Vermelho mais intenso para item ativo */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    /* Efeito de destaque para item ativo */
    .nav-item.active::after {
        content: '';
        position: absolute;
        bottom: -7px;
        left: 50%;
        transform: translateX(-50%);
        width: 20px;
        height: 3px;
        background-color: #FFC45D; /* Cor amarela/laranja similar ao "SUN" da logo */
        border-radius: 10px;
    }

    /* Responsividade aprimorada */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background-color: #004AAD;
            margin-top: 10px;
            padding: 15px;
            border-radius: 5px;
            border-left: 3px solid #CF3232;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .nav-item.active::after {
            bottom: auto;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 80%;
        }
        
        .nav-item {
            margin: 5px 0;
        }
    }

    /* Animação de carregamento para elementos da navbar */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .navbar-nav .nav-item {
        animation: fadeIn 0.4s ease forwards;
        animation-delay: calc(0.1s * var(--animation-order, 0));
        opacity: 0;
    }
    
    .navbar-nav .nav-item:nth-child(1) { --animation-order: 1; }
    .navbar-nav .nav-item:nth-child(2) { --animation-order: 2; }
    .navbar-nav .nav-item:nth-child(3) { --animation-order: 3; }
    .navbar-nav .nav-item:nth-child(4) { --animation-order: 4; }
    .navbar-nav .nav-item:nth-child(5) { --animation-order: 5; }
</style>
