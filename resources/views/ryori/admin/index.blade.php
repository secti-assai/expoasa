<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/index.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <!-- Stats Cards -->
    <div class="row mb-5">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ $totalDishes }}</h3>
                        <p>Pratos Cadastrados</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.dishes') }}">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon orange">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ $totalVotes }}</h3>
                        <p>Votos Recebidos</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.votes') }}">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ count($dishes) > 0 ? $dishes->first()->votes_count : 0 }}</h3>
                        <p>Votos no Líder</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.results') }}">Ver Resultados <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon blue">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ now()->diffInDays(now()->setDate(2025, 6, 8)) }}</h3>
                        <p>Dias Restantes</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <span>Encerramento: 08/06/2025</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- Top Dishes -->
        <div class="col-lg-8 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fas fa-crown me-2"></i>Pratos Mais Votados</h5>
                </div>
                <div class="card-body">
                    @if(count($dishes) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Posição</th>
                                        <th>Prato</th>
                                        <th>Restaurante</th>
                                        <th>Categoria</th>
                                        <th>Votos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dishes->take(5) as $index => $dish)
                                        <tr>
                                            <td>
                                                <div class="ranking-badge {{ $index < 3 ? 'top-'.($index+1) : '' }}">
                                                    {{ $index + 1 }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="dish-mini-thumb me-2">
                                                        @if($dish->image_path)
                                                            <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}">
                                                        @else
                                                            <i class="fas fa-image"></i>
                                                        @endif
                                                    </div>
                                                    {{ $dish->name }}
                                                </div>
                                            </td>
                                            <td>{{ $dish->restaurant_name }}</td>
                                            <td>
                                                <span class="badge rounded-pill bg-light text-dark">
                                                    {{ $dish->category ?? 'Sem categoria' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="votes-badge">
                                                    {{ $dish->votes_count }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-center mt-3">
                            <a href="{{ route('ryori.admin.results') }}" class="btn btn-outline-primary btn-sm">
                                Ver Classificação Completa
                            </a>
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-trophy fa-3x mb-3"></i>
                            <h4>Sem resultados ainda</h4>
                            <p>Os resultados aparecerão aqui quando houver votos.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fas fa-bolt me-2"></i>Ações Rápidas</h5>
                </div>
                <div class="card-body">
                    <div class="quick-actions">
                        <a href="{{ route('ryori.admin.dishes.create') }}" class="quick-action-btn">
                            <i class="fas fa-plus-circle"></i>
                            <span>Adicionar Prato</span>
                        </a>
                        
                        <a href="{{ route('ryori.admin.votes') }}" class="quick-action-btn">
                            <i class="fas fa-list-alt"></i>
                            <span>Ver Votos</span>
                        </a>
                        
                        <a href="{{ route('ryori.admin.results') }}" class="quick-action-btn">
                            <i class="fas fa-chart-bar"></i>
                            <span>Resultados</span>
                <!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/admin/index.blade.php -->
@extends('ryori.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <!-- Stats Cards -->
    <div class="row mb-5">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ $totalDishes }}</h3>
                        <p>Pratos Cadastrados</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.dishes') }}">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon orange">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ $totalVotes }}</h3>
                        <p>Votos Recebidos</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.votes') }}">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon green">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ count($dishes) > 0 ? $dishes->first()->votes_count : 0 }}</h3>
                        <p>Votos no Líder</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <a href="{{ route('ryori.admin.results') }}">Ver Resultados <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="stats-icon blue">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stats-info">
                        <h3>{{ now()->diffInDays(now()->setDate(2025, 6, 8)) }}</h3>
                        <p>Dias Restantes</p>
                    </div>
                </div>
                <div class="stats-card-footer">
                    <span>Encerramento: 08/06/2025</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <!-- Top Dishes -->
        <div class="col-lg-8 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fas fa-crown me-2"></i>Pratos Mais Votados</h5>
                </div>
                <div class="card-body">
                    @if(count($dishes) > 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Posição</th>
                                        <th>Prato</th>
                                        <th>Restaurante</th>
                                        <th>Categoria</th>
                                        <th>Votos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dishes->take(5) as $index => $dish)
                                        <tr>
                                            <td>
                                                <div class="ranking-badge {{ $index < 3 ? 'top-'.($index+1) : '' }}">
                                                    {{ $index + 1 }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="dish-mini-thumb me-2">
                                                        @if($dish->image_path)
                                                            <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}">
                                                        @else
                                                            <i class="fas fa-image"></i>
                                                        @endif
                                                    </div>
                                                    {{ $dish->name }}
                                                </div>
                                            </td>
                                            <td>{{ $dish->restaurant_name }}</td>
                                            <td>
                                                <span class="badge rounded-pill bg-light text-dark">
                                                    {{ $dish->category ?? 'Sem categoria' }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="votes-badge">
                                                    {{ $dish->votes_count }}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="text-center mt-3">
                            <a href="{{ route('ryori.admin.results') }}" class="btn btn-outline-primary btn-sm">
                                Ver Classificação Completa
                            </a>
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-trophy fa-3x mb-3"></i>
                            <h4>Sem resultados ainda</h4>
                            <p>Os resultados aparecerão aqui quando houver votos.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0"><i class="fas fa-bolt me-2"></i>Ações Rápidas</h5>
                </div>
                <div class="card-body">
                    <div class="quick-actions">
                        <a href="{{ route('ryori.admin.dishes.create') }}" class="quick-action-btn">
                            <i class="fas fa-plus-circle"></i>
                            <span>Adicionar Prato</span>
                        </a>
                        
                        <a href="{{ route('ryori.admin.votes') }}" class="quick-action-btn">
                            <i class="fas fa-list-alt"></i>
                            <span>Ver Votos</span>
                        </a>
                        
                        <a href="{{ route('ryori.admin.results') }}" class="quick-action-btn">
                            <i class="fas fa-chart-bar"></i>
                            <span>Resultados</span>
                