<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincular Banca - Admin IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        .admin-section {
            min-height: 100vh;
            background: #f8f9fa;
            padding-top: 90px;
            padding-bottom: 40px;
        }
        
        .admin-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
            margin-bottom: 30px;
        }
        
        .card-header {
            margin: -25px -25px 25px -25px;
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
        }
        
        .banca-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #3f51b5;
        }
        
        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.75rem;
            margin-right: 5px;
            margin-bottom: 5px;
            display: inline-block;
        }
        
        .bg-info {
            background-color: #2196f3 !important;
            color: #fff;
        }
        
        .cidade-option {
            background-color: #fff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .cidade-option:hover {
            border-color: #3f51b5;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .cidade-option.selected {
            border-color: #3f51b5;
            border-width: 2px;
            background-color: #f0f3ff;
        }
        
        .cidade-option .form-check {
            padding-left: 0;
        }
        
        .cidade-option .form-check-input {
            margin-top: 0.3rem;
        }
        
        .cidade-option label {
            cursor: pointer;
            display: block;
            width: 100%;
            padding-left: 30px;
            position: relative;
        }
        
        .cidade-option label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            border: 2px solid #3f51b5;
            border-radius: 3px;
        }
        
        .cidade-option input[type="checkbox"]:checked + label::after {
            content: "\f00c";
            font-family: 'FontAwesome';
            position: absolute;
            left: 3px;
            top: 50%;
            transform: translateY(-50%);
            color: #3f51b5;
            font-size: 12px;
        }
        
        .cidade-option input[type="checkbox"] {
            display: none;
        }
        
        .cidade-info {
            flex-grow: 1;
        }
        
        .equipes-count {
            margin-left: auto;
            padding-left: 20px;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            color: #6c757d;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .back-btn:hover {
            color: #3f51b5;
            text-decoration: none;
        }
        
        .btn-primary {
            background-color: #3f51b5;
            border-color: #3f51b5;
        }
        
        .btn-primary:hover {
            background-color: #303f9f;
            border-color: #303f9f;
        }
        
        .search-box {
            position: relative;
            margin-bottom: 20px;
        }
        
        .search-box input {
            padding-left: 40px;
            border-radius: 50px;
            border: 1px solid #eee;
            padding: 10px 20px 10px 40px;
            width: 100%;
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('ideasun.admin.bancas') }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar para Gerenciamento de Bancas
                    </a>
                    
                    <h1 class="mb-4">Vincular Banca a Cidades</h1>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fa fa-check-circle mr-2"></i>{{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            <i class="fa fa-exclamation-triangle mr-2"></i>{{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="admin-card">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0"><i class="fa fa-link mr-2"></i>Vincular Banca de {{ $bancaCidade->nome }}</h4>
                        </div>
                        
                        <div class="banca-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Informações da Banca</h5>
                                    <p>
                                        <strong>Cidade:</strong> {{ $bancaCidade->nome }} - {{ $bancaCidade->estado }}<br>
                                        <strong>Avaliadores Cadastrados:</strong> {{ $bancaCidade->avaliadores->count() }}<br>
                                        <strong>Data de Agendamento:</strong> 
                                        @if($bancaCidade->banca_agendada)
                                            {{ \Carbon\Carbon::parse($bancaCidade->banca_agendada)->format('d/m/Y H:i') }}
                                        @else
                                            <span class="text-warning">Não agendada</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5>Avaliadores</h5>
                                    <ul>
                                        @foreach($bancaCidade->avaliadores as $avaliador)
                                            <li>{{ $avaliador->nome }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <form action="{{ route('ideasun.admin.bancas.salvar-vinculos') }}" method="POST">
                            @csrf
                            <input type="hidden" name="banca_cidade_id" value="{{ $bancaCidade->id }}">
                            
                            <h5 class="mb-4">Selecione as cidades que esta banca irá avaliar:</h5>
                            
                            <div class="search-box">
                                <i class="fa fa-search"></i>
                                <input type="text" id="searchCidades" class="form-control" placeholder="Buscar cidades...">
                            </div>
                            
                            <div class="cidades-list">
                                @forelse($cidadesDisponiveis as $cidade)
                                    <div class="cidade-option {{ in_array($cidade->id, $cidadesVinculadasIds) ? 'selected' : '' }}">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="cidade_{{ $cidade->id }}" 
                                                   name="cidades_avaliadas[]" value="{{ $cidade->id }}"
                                                   {{ in_array($cidade->id, $cidadesVinculadasIds) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cidade_{{ $cidade->id }}">
                                                <div class="cidade-info">
                                                    <strong>{{ $cidade->nome }}</strong>
                                                    <span class="d-block text-muted">{{ $cidade->estado }}</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="equipes-count">
                                            <span class="badge bg-info">{{ $cidade->equipes->count() }} equipes</span>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle mr-2"></i>
                                        Não há cidades disponíveis para vinculação.
                                    </div>
                                @endforelse
                            </div>
                            
                            <div class="form-group mt-4 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-save mr-2"></i>Salvar Vinculações
                                </button>
                            </div>
                        </form>
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
            // Alternar classe selected ao clicar na div
            $('.cidade-option').click(function(e) {
                // Ignorar o clique se vier diretamente do checkbox
                if ($(e.target).is('input[type="checkbox"]')) {
                    return;
                }
                
                const checkbox = $(this).find('input[type="checkbox"]');
                checkbox.prop('checked', !checkbox.prop('checked'));
                $(this).toggleClass('selected', checkbox.prop('checked'));
            });
            
            // Alternar classe selected quando o checkbox é alterado diretamente
            $('.cidade-option input[type="checkbox"]').change(function() {
                $(this).closest('.cidade-option').toggleClass('selected', $(this).prop('checked'));
            });
            
            // Busca
            $("#searchCidades").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $(".cidade-option").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
</html>