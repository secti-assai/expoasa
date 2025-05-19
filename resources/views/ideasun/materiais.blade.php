<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materiais de Apoio - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Estilos para a página de materiais */
        .materiais-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(94, 8, 2, 0.9));
            min-height: 100vh;
            position: relative;
        }
        
        .materiais-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.15;
            z-index: 0;
        }
        
        .materiais-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .materiais-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .materiais-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .materiais-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 20px;
        }
        
        /* Filtro de categorias */
        .category-filter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .category-btn {
            background-color: #f1f1f1;
            border: none;
            padding: 8px 15px;
            margin: 5px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .category-btn:hover {
            background-color: #e0e0e0;
        }
        
        .category-btn.active {
            background-color: #e62b1e;
            color: #fff;
        }
        
        /* Cards de materiais */
        .material-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .material-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }
        
        .material-header {
            padding: 15px 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
        }
        
        .material-title {
            font-weight: 600;
            font-size: 1.1rem;
            color: #333;
            display: flex;
            align-items: center;
        }
        
        .material-title i {
            margin-right: 10px;
            color: #e62b1e;
        }
        
        .material-body {
            padding: 20px;
        }
        
        .material-description {
            color: #555;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        
        .material-category {
            display: inline-block;
            background-color: #f1f1f1;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.8rem;
            color: #555;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        
        .material-footer {
            padding: 0 20px 20px;
        }
        
        .btn-download {
            background-color: #e62b1e;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-download i {
            margin-right: 5px;
        }
        
        .btn-download:hover {
            background-color: #d01c11;
            color: #fff;
            transform: translateY(-2px);
        }
        
        /* Estado vazio */
        .empty-state {
            text-align: center;
            padding: 50px 0;
        }
        
        .empty-state i {
            font-size: 4rem;
            color: #ccc;
            margin-bottom: 20px;
        }
        
        .empty-state h3 {
            color: #555;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        .empty-state p {
            color: #777;
        }

        /* Melhorias para a página de materiais */
        .material-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            border: none;
        }

        .material-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .material-card .card-img-top {
            height: 180px;
            object-fit: cover;
        }

        .material-card .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #e62b1e;
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .download-btn {
            background-color: #e62b1e;
            color: white;
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.2);
        }

        .download-btn:hover {
            background-color: #d81d11;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 43, 30, 0.3);
            color: white;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="materiais-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="materiais-card">
                        <div class="materiais-header">
                            <h2>Materiais de Apoio</h2>
                            <p>Acesse os materiais disponíveis para apoiar a participação da sua equipe no IDEASUN.</p>
                        </div>
                        
                        @if(count($materiais) > 0)
                            <div class="category-filter">
                                <button class="category-btn active" data-category="all">Todos</button>
                                <button class="category-btn" data-category="guia">Guias</button>
                                <button class="category-btn" data-category="template">Templates</button>
                                <button class="category-btn" data-category="exemplo">Exemplos</button>
                                <button class="category-btn" data-category="video">Vídeos</button>
                            </div>
                            
                            <div class="row">
                                @foreach($materiais as $material)
                                    <div class="col-md-6 material-item-wrapper" data-category="{{ $material->categoria }}">
                                        <div class="material-item">
                                            <div class="material-header">
                                                <div class="material-title">
                                                    @php
                                                        $icones = [
                                                            'guia' => 'fa-book',
                                                            'template' => 'fa-file-text-o',
                                                            'exemplo' => 'fa-lightbulb-o',
                                                            'video' => 'fa-play-circle-o'
                                                        ];
                                                        $icone = $icones[$material->categoria] ?? 'fa-file-o';
                                                    @endphp
                                                    <i class="fa {{ $icone }}"></i>
                                                    {{ $material->titulo }}
                                                </div>
                                            </div>
                                            <div class="material-body">
                                                <p class="material-description">{{ $material->descricao }}</p>
                                                <div>
                                                    <span class="material-category">{{ ucfirst($material->categoria) }}</span>
                                                    @foreach(explode(',', $material->tags) as $tag)
                                                        <span class="material-category">{{ trim($tag) }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="material-footer">
                                                <a href="{{ $material->url }}" class="btn btn-download" target="_blank">
                                                    <i class="fa fa-download"></i> Baixar Material
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="empty-state">
                                <i class="fa fa-folder-open-o"></i>
                                <h3>Nenhum material disponível</h3>
                                <p>Os materiais de apoio serão disponibilizados em breve.</p>
                            </div>
                        @endif
                        
                        <div class="text-center mt-5">
                            <a href="{{ route('ideasun.index') }}" class="btn btn-outline-secondary">
                                <i class="fa fa-arrow-left mr-2"></i>Voltar para o Início
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('ideasun.partials.footer')

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Filtro de categorias
            $('.category-btn').click(function() {
                var category = $(this).data('category');
                
                // Ativar botão atual
                $('.category-btn').removeClass('active');
                $(this).addClass('active');
                
                // Filtrar itens
                if (category === 'all') {
                    $('.material-item-wrapper').show();
                } else {
                    $('.material-item-wrapper').hide();
                    $('.material-item-wrapper[data-category="' + category + '"]').show();
                }
            });
        });
    </script>
</body>
</html>