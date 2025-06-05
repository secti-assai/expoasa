<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/dishes/show.blade.php -->
@extends('ryori.layouts.main')

@section('title', $dish->name)

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card card-ryori">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <div class="dish-image-container">
                                @if($dish->image_path)
                                    <img src="{{ $dish->image_path }}" alt="{{ $dish->name }}" class="img-fluid rounded">
                                @else
                                    <img src="/assets/img/dish-placeholder.jpg" alt="{{ $dish->name }}" class="img-fluid rounded">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h1 class="dish-title">{{ $dish->name }}</h1>
                            
                            <div class="mb-4">
                                <p class="dish-description">{{ $dish->description }}</p>
                            </div>
                            
                            <div class="dish-info">
                                @if($dish->restaurant_name)
                                <div class="dish-info-item">
                                    <div class="dish-info-icon">
                                        <i class="fas fa-store"></i>
                                    </div>
                                    <div>
                                        <strong>Restaurante:</strong> {{ $dish->restaurant_name }}
                                    </div>
                                </div>
                                @endif
                                
                                @if($dish->chef_name)
                                <div class="dish-info-item">
                                    <div class="dish-info-icon">
                                        <i class="fas fa-user-chef"></i>
                                    </div>
                                    <div>
                                        <strong>Chef:</strong> {{ $dish->chef_name }}
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            <div class="mt-4">
                                <a href="{{ route('ryori.vote.index') }}?prato={{ $dish->id }}" class="btn btn-ryori">
                                    <i class="fas fa-star me-2"></i> Votar neste prato
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('ryori.dishes.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i> Voltar para a lista
                        </a>
                        <a href="{{ route('ryori.vote.index') }}" class="btn btn-outline-ryori">
                            <i class="fas fa-vote-yea me-2"></i> Ir para votação
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-css')
.dish-image-container {
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.dish-title {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--ryori-primary);
}

.dish-description {
    font-size: 1.1rem;
    line-height: 1.6;
    color: var(--ryori-text);
}

.dish-info {
    margin-top: 1.5rem;
}

.dish-info-item {
    display: flex;
    align-items: center;
    margin-bottom: 0.75rem;
}

.dish-info-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(191, 0, 0, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    color: var(--ryori-primary);
}

.btn-ryori {
    background: var(--ryori-gradient);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-ryori:hover {
    background: linear-gradient(135deg, var(--ryori-dark), var(--ryori-primary));
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(191, 0, 0, 0.3);
}

.btn-outline-ryori {
    border: 1px solid var(--ryori-primary);
    color: var(--ryori-primary);
    background: transparent;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-outline-ryori:hover {
    background-color: var(--ryori-primary);
    color: white;
}

.card-ryori {
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
}
@endsection