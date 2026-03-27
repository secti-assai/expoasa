<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - RYORI Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .sidebar { background-color: #333; color: white; min-height: 100vh; }
        .sidebar a { color: white; text-decoration: none; display: block; padding: 10px; margin-bottom: 5px; }
        .sidebar a:hover, .sidebar a.active { background-color: #BF0000; }
        .content { padding: 20px; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <h3 class="mb-4">RYORI Admin</h3>
                <nav>
                    <a href="{{ route('ryori.admin.dishes') }}" class="{{ request()->routeIs('ryori.admin.dishes*') ? 'active' : '' }}">
                        <i class="fas fa-utensils me-2"></i> Pratos
                    </a>
                    <a href="{{ route('ryori.admin.results') }}" class="{{ request()->routeIs('ryori.admin.results') ? 'active' : '' }}">
                        <i class="fas fa-chart-bar me-2"></i> Resultados
                    </a>
                    <a href="{{ route('ryori.admin.voting_period.form') }}" class="{{ request()->routeIs('ryori.admin.voting_period.*') ? 'active' : '' }}">
                        <i class="fas fa-clock me-2"></i> Período de Votação
                    </a>
                    <a href="{{ route('ryori.auth.logout') }}">
                        <i class="fas fa-sign-out-alt me-2"></i> Sair
                    </a>
                </nav>
            </div>
            
            <!-- Content -->
            <div class="col-md-10 content">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
                <h2 class="mb-3">@yield('title')</h2>
                @yield('content')
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>