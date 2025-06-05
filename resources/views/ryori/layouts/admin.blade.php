<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RYORI Admin</title>
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --ryori-primary: #BF0000;
            --ryori-secondary: #FF4D4D;
            --ryori-accent: #FFB74D;
            --ryori-dark: #8B0000;
            --ryori-light: #FFF0F0;
            --ryori-text: #333333;
            --ryori-text-light: #777777;
            --ryori-gradient: linear-gradient(135deg, var(--ryori-primary), var(--ryori-dark));
            --sidebar-width: 280px;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: var(--ryori-text);
        }
        
        /* Admin Layout */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .admin-sidebar {
            width: var(--sidebar-width);
            background: var(--ryori-gradient);
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .sidebar-header {
            padding: 25px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .logo-container {
            display: flex;
            align-items: center;
        }
        
        .admin-logo {
            height: 40px;
            margin-right: 10px;
        }
        
        .admin-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
        }
        
        .sidebar-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 5px;
        }
        
        .menu-section {
            padding: 20px 0;
        }
        
        .menu-title {
            padding: 0 25px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            color: rgba(255,255,255,0.7);
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar-menu li {
            margin-bottom: 5px;
        }
        
        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 25px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        
        .sidebar-menu a:hover, .sidebar-menu a.active {
            background: rgba(255,255,255,0.1);
            color: white;
            border-left-color: var(--ryori-accent);
        }
        
        .sidebar-menu i {
            width: 20px;
            margin-right: 10px;
            text-align: center;
        }
        
        /* Main Content */
        .admin-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: all 0.3s ease;
        }
        
        /* Topbar */
        .admin-topbar {
            background: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 900;
        }
        
        .page-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin: 0;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-info {
            margin-right: 15px;
            text-align: right;
        }
        
        .user-name {
            font-weight: 600;
            margin-bottom: 0;
        }
        
        .user-role {
            font-size: 0.8rem;
            color: var(--ryori-text-light);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--ryori-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--ryori-primary);
            font-weight: 600;
            cursor: pointer;
        }
        
        /* Mobile responsive */
        @media (max-width: 991px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            
            .admin-sidebar.show {
                transform: translateX(0);
            }
            
            .admin-content {
                margin-left: 0;
            }
            
            .mobile-toggle {
                display: block;
                margin-right: 15px;
            }
        }
        
        /* Common elements */
        .btn-primary {
            background: var(--ryori-primary);
            border-color: var(--ryori-primary);
        }
        
        .btn-primary:hover {
            background: var(--ryori-dark);
            border-color: var(--ryori-dark);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 20px;
        }
        
        .badge-ryori {
            background: var(--ryori-primary);
            color: white;
        }
        
        .alert-success {
            border-left: 4px solid #28a745;
        }
        
        .alert-danger {
            border-left: 4px solid #dc3545;
        }
        
        .alert-warning {
            border-left: 4px solid #ffc107;
        }
        
        .alert-info {
            border-left: 4px solid #17a2b8;
        }
        
        /* Dropdown */
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        
        .dropdown-item {
            padding: 10px 20px;
        }
        
        .dropdown-item i {
            width: 20px;
            margin-right: 10px;
            text-align: center;
        }
        
        /* Custom Styles */
        @yield('custom-css')
    </style>
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo-container">
                    <img src="/assets/images/ryori/ryori-logo.png" alt="RYORI Admin" class="admin-logo">
                    <h1 class="admin-title">RYORI Admin</h1>
                </div>
                <button class="sidebar-toggle d-lg-none" id="sidebarClose">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="menu-section">
                <h2 class="menu-title">Navegação</h2>
                <ul class="sidebar-menu">
                    <li>
                        <a href="{{ route('ryori.admin.index') }}" class="{{ request()->routeIs('ryori.admin.index') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="menu-section">
                <h2 class="menu-title">Gerenciamento</h2>
                <ul class="sidebar-menu">
                    <li>
                        <a href="{{ route('ryori.admin.dishes') }}" class="{{ request()->routeIs('ryori.admin.dishes*') ? 'active' : '' }}">
                            <i class="fas fa-utensils"></i> Pratos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ryori.admin.votes') }}" class="{{ request()->routeIs('ryori.admin.votes') ? 'active' : '' }}">
                            <i class="fas fa-vote-yea"></i> Votos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('ryori.admin.results') }}" class="{{ request()->routeIs('ryori.admin.results') ? 'active' : '' }}">
                            <i class="fas fa-chart-bar"></i> Resultados
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="menu-section">
                <h2 class="menu-title">Configurações</h2>
                <ul class="sidebar-menu">
                    <li>
                        <a href="#">
                            <i class="fas fa-cog"></i> Configurações
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-users"></i> Usuários
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        
        <!-- Main Content -->
        <div class="admin-content">
            <!-- Topbar -->
            <header class="admin-topbar">
                <div class="d-flex align-items-center">
                    <button class="mobile-toggle d-lg-none me-3" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title">@yield('title')</h1>
                </div>
                
                <div class="user-menu">
                    <div class="user-info">
                        <p class="user-name">Administrador</p>
                        <p class="user-role">Super Admin</p>
                    </div>
                    
                    <div class="dropdown">
                        <div class="user-avatar" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </div>
                        
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user-circle"></i> Meu Perfil
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cog"></i> Configurações
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('ryori.auth.logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="fas fa-sign-out-alt"></i> Sair
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main>
                @if(session('success'))
                    <div class="container mt-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Sidebar toggle
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebarClose = document.getElementById('sidebarClose');
            
            if (sidebarToggle) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }
            
            if (sidebarClose) {
                sidebarClose.addEventListener('click', function() {
                    sidebar.classList.remove('show');
                });
            }
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(event) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnToggle = sidebarToggle && sidebarToggle.contains(event.target);
                
                if (!isClickInsideSidebar && !isClickOnToggle && window.innerWidth < 992) {
                    sidebar.classList.remove('show');
                }
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>