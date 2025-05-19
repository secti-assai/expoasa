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
    /* Tema simplificado */
    .header {
        background-color: #1a73e8;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar {
        padding: 10px 0;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .logo-main {
        height: 40px;
        /* Removido o filtro para permitir a logo colorida */
    }

    .brand-text {
        margin-left: 10px;
        font-weight: 600;
        color: #fff;
        font-size: 1.2rem;
    }

    .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    .nav-item {
        margin: 0 5px;
    }

    .nav-link {
        color: rgba(255, 255, 255, 0.9);
        padding: 8px 12px;
        border-radius: 4px;
    }

    .nav-link:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .nav-item.active .nav-link {
        color: #fff;
        font-weight: 600;
        background-color: rgba(255, 255, 255, 0.15);
    }

    /* Responsividade simplificada */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background-color: #1a73e8;
            padding: 10px;
            border-radius: 0 0 4px 4px;
        }
    }
</style>
