@extends('ryori.layouts.main')

@section('title', 'Sobre o Concurso')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-4" style="color: var(--primary-color);">Sobre o RYORI</h2>
                
                <div class="card card-ryori mb-5">
                    <div class="card-body">
                        <h3 class="mb-3">A História do Concurso</h3>
                        <p>O <strong>RYORI</strong> (料理), que significa "culinária" em japonês, é o principal concurso gastronômico da <strong>EXPOASA</strong>, surgido da rica tradição culinária japonesa presente em Assaí desde a chegada dos primeiros imigrantes à região.</p>
                        
                        <p>Em 2025, o concurso celebra sua 1ª edição com uma grande diversidade gastronômica, unindo pratos da culinária japonesa, nipo-brasileira e também delícias de outras tradições, como churrascos, lanches, sobremesas e pratos temáticos.</p>
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
                        <p>O RYORI 2025 oferece as seguintes premiações:</p>
                        
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