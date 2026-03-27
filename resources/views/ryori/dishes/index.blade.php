<!-- filepath: /home/kawan/Documents/VDS/expoasa-server/expoasa/resources/views/ryori/dishes/index.blade.php -->
@extends('ryori.layouts.main')

@section('title', 'Pratos Participantes')

@section('custom-css')
.dish-card {
transition: all 0.3s ease;
}

.dish-image-container {
height: 220px;
position: relative;
overflow: hidden;
background-color: #f4f4f4; /* Fundo cinza claro para preencher os espaços */
display: flex;
align-items: center;
justify-content: center;
padding: 10px;
}

.dish-image {
max-width: 100%;
max-height: 100%;
width: auto !important;
height: auto !important;
object-fit: contain !important;
transition: transform 0.5s ease;
}

.dish-card:hover .dish-image {
transform: scale(1.05);
}

.dish-rating {
position: absolute;
top: 10px;
right: 10px;
background-color: var(--primary-color);
color: white;
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
font-weight: bold;
box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.dish-category {
position: absolute;
top: 10px;
left: 10px;
padding: 0.25rem 0.75rem;
border-radius: 50px;
font-size: 0.8rem;
background-color: rgba(0,0,0,0.6);
color: white;
}
@endsection

@section('content')
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 mb-3">Pratos Participantes</h1>
        <p class="lead mb-0">Conheça os deliciosos pratos que estão competindo no Prato Expoasa 2026</p>
    </div>
</section>

<div class="container py-5">
    <div class="row" id="dishes-container">
        @forelse($dishes as $dish)
        <div class="col-md-6 col-lg-4 mb-4 dish-item">
            <div class="card card-ryori dish-card h-100">
                <div class="position-relative dish-image-container">
                    @if($dish->image_path)
                    <img src="{{ $dish->image_path }}" class="dish-image" alt="{{ $dish->name }}">
                    @else
                    <img src="/assets/img/dish-placeholder.jpg" class="dish-image" alt="{{ $dish->name }}">
                    @endif

                    @if($dish->category)
                    <div class="dish-category">{{ $dish->category }}</div>
                    @endif
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $dish->name }}</h5>
                    <p class="card-text">{{ Str::limit($dish->description, 100) }}</p>

                    @if($dish->restaurant_name)
                    <p class="mb-3 text-muted">
                        <i class="fas fa-utensils me-1"></i> {{ $dish->restaurant_name }}
                    </p>
                    @endif

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('ryori.dishes.show', $dish->id) }}" class="btn btn-sm btn-outline-ryori">
                            <i class="fas fa-eye me-1"></i> Ver Detalhes
                        </a>
                        <a href="{{ route('ryori.vote.index') }}" class="btn btn-sm btn-ryori">
                            <i class="fas fa-star me-1"></i> Votar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center py-5">
                <i class="fas fa-info-circle fa-3x mb-3 text-primary"></i>
                <h4>Nenhum prato cadastrado ainda</h4>
                <p class="mb-0">Em breve os pratos participantes do concurso serão divulgados. Fique ligado!</p>
            </div>
        </div>
        @endforelse
    </div>

    @if(count($dishes) > 9)
    <div class="text-center mt-4">
        <button id="load-more" class="btn btn-outline-ryori">
            <i class="fas fa-plus me-2"></i> Carregar Mais
        </button>
    </div>
    @endif
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load More functionality
        const loadMoreButton = document.getElementById('load-more');
        let currentItem = 9;
        const dishes = document.querySelectorAll('.dish-item');

        loadMoreButton.addEventListener('click', function() {
            const nextItems = Array.from(dishes).slice(currentItem, currentItem + 3);
            nextItems.forEach(item => {
                item.style.display = 'block';
            });
            currentItem += nextItems.length;

            if (currentItem >= dishes.length) {
                this.style.display = 'none';
            }
        });
    });
</script>
@endsection