@extends('ryori.layouts.main')

@section('title', 'Sobre o Concurso')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4" style="color: var(--primary-color);">Sobre o Prato Expoasa 2026</h2>
                
                <div class="card card-ryori mb-5">
                    <div class="card-body">
                        <h3 class="mb-3">A História do Concurso</h3>
                        <p>O <strong>Prato Expoasa 2026</strong> é o concurso gastronômico da exposição regional, em que cada estande gastronômico apresenta um prato para concorrer à premiação.</p>
                        
                        <p>A votação é realizada pelos visitantes por meio do aplicativo do evento, e no dia 14 de junho (domingo) é anunciado o ganhador do Prato Expoasa 2026.</p>
                    </div>
                </div>
                
                <div class="card card-ryori mb-5">
                    <div class="card-body">
                        <h3 class="mb-3">Objetivos do Concurso</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Valorizar a gastronomia local e regional</li>
                            <li class="list-group-item">Promover a culinária japonesa e nipo-brasileira</li>
                            <li class="list-group-item">Incentivar a criatividade e inovação na gastronomia</li>
                            <li class="list-group-item">Fortalecer o turismo gastronômico na região</li>
                            <li class="list-group-item">Preservar a tradição culinária dos imigrantes japoneses</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card card-ryori mb-5">
                    <div class="card-body">
                        <h3 class="mb-3">Premiação</h3>
                        <p>O Prato Expoasa 2026 oferece as seguintes premiações:</p>
                        
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="p-3 rounded" style="background-color: #FFD700;">
                                    <h4>1º Lugar</h4>
                                    <p class="mb-0">R$ 1.000,00</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="p-3 rounded" style="background-color: #C0C0C0;">
                                    <h4>2º Lugar</h4>
                                    <p class="mb-0">R$ 500,00</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection