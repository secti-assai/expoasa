<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Equipe - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1;
            opacity: 0.1;
        }
        
        .avaliacao-section {
            padding: 60px 0;
        }
        
        .avaliacao-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .avaliacao-header {
            background: #f8f9fa;
            border-radius: 10px 10px 0 0;
            padding: 15px 30px;
            margin: -30px -30px 30px;
            border-bottom: 1px solid #eee;
        }
        
        .avaliacao-header h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #3f51b5;
            margin-bottom: 0;
        }
        
        .equipe-info {
            background: #f0f8ff;
            border-left: 4px solid #3f51b5;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        
        .badge {
            font-size: 0.9rem;
            padding: 8px 12px;
        }
        
        .modalidade-badge {
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 12px;
        }
        
        .modalidade-educacao_especial { background-color: #ff9800; }
        .modalidade-fundamental_1 { background-color: #4caf50; }
        .modalidade-fundamental_2 { background-color: #2196f3; }
        .modalidade-medio_tecnico { background-color: #9c27b0; }
        .modalidade-superior { background-color: #f44336; }
        
        .criterio-card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        
        .rating input {
            display: none;
        }
        
        .rating label {
            cursor: pointer;
            width: 40px;
            height: 40px;
            margin: 0 5px;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
            color: #666;
            font-weight: 600;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .rating input:checked ~ label,
        .rating label:hover,
        .rating input:checked + label:hover {
            background: #3f51b5;
            color: white;
        }
        
        .rating label:hover ~ label {
            background: #d4d4d4;
        }
        
        .rating input:checked ~ label:hover ~ label {
            background: #3f51b5;
            opacity: 0.8;
        }
        
        .apresentacao-container {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .btn-primary {
            background: #3f51b5;
            border-color: #3f51b5;
        }
        
        .btn-primary:hover {
            background: #303f9f;
            border-color: #303f9f;
        }
        
        .btn-outline-secondary {
            color: #6c757d;
            border-color: #6c757d;
        }
        
        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }
        
        .range-container {
            margin-bottom: 20px;
        }
        
        .range-container label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-range {
            height: 6px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .form-range:hover {
            opacity: 1;
        }
        
        .form-range::-webkit-slider-thumb {
            background: #3f51b5;
        }
        
        .form-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3f51b5;
            cursor: pointer;
        }
        
        .nota-input {
            width: 70px;
            text-align: center;
            font-weight: 600;
            color: #3f51b5;
        }
        
        .pontuacao-total-container {
            background-color: #e8eaf6;
            border-color: #c5cae9;
            border-radius: 10px;
            padding: 15px 20px;
            text-align: center;
        }
        
        .pontuacao-total-container h5 {
            margin-bottom: 0;
            color: #3f51b5;
        }
        
        #pontuacao-total {
            font-size: 1.2em;
            font-weight: 700;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="avaliacao-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="avaliacao-card">
                        <div class="avaliacao-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2><i class="fa fa-star mr-2"></i>Avaliação de Projeto</h2>
                                <div>
                                    <a href="{{ route('ideasun.banca.dashboard') }}" class="btn btn-outline-secondary">
                                        <i class="fa fa-arrow-left mr-2"></i>Voltar
                                    </a>
                                </div>
                            </div>
                        </div>
                        
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
                        
                        <div class="equipe-info">
                            <h4>{{ $equipe->nome }}</h4>
                            <p>
                                <span class="badge badge-secondary">{{ $equipe->cidade->nome }}</span>
                                <span class="badge modalidade-badge modalidade-{{ $equipe->modalidade }}">
                                    {{ $equipe->getModalidadeNome() }}
                                </span>
                                <span class="badge badge-info">{{ $equipe->instituicao }}</span>
                            </p>
                            
                            <h5 class="mt-3 mb-2">Resumo do Projeto</h5>
                            <p>{{ $equipe->resumo_ideia ?? 'Sem descrição disponível.' }}</p>
                        </div>
                        
                        @if($equipe->apresentacao_path)
                            <div class="apresentacao-container">
                                <h5><i class="fa fa-file-pdf-o mr-2"></i>Apresentação do Projeto</h5>
                                
                                @if(pathinfo($equipe->apresentacao_path, PATHINFO_EXTENSION) == 'pdf')
                                    <div class="embed-responsive embed-responsive-16by9 mt-3">
                                        <iframe class="embed-responsive-item" src="{{ asset($equipe->apresentacao_path) }}"></iframe>
                                    </div>
                                @else
                                    <div class="text-center mt-3">
                                        <a href="{{ asset($equipe->apresentacao_path) }}" class="btn btn-primary" target="_blank">
                                            <i class="fa fa-download mr-2"></i>Baixar Apresentação
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="alert alert-warning mb-4">
                                <i class="fa fa-exclamation-triangle mr-2"></i>
                                Esta equipe ainda não enviou a apresentação do projeto.
                            </div>
                        @endif
                        
                        <form action="{{ route('ideasun.banca.avaliar.salvar') }}" method="POST">
                            @csrf
                            <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                            
                            <h4 class="mb-3">Critérios de Avaliação</h4>
                            
                            <div class="criterio-card">
                                <h5>A. Criatividade e Inovação</h5>
                                <p class="text-muted">Avalie o quanto o projeto é original, inovador e criativo na sua abordagem e solução.</p>
                                
                                <div class="range-container mb-3">
                                    <label for="A_criatividade_inovacao">Pontuação (0-25):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range flex-grow-1 me-2" id="A_criatividade_inovacao_range" 
                                               min="0" max="25" step="1" value="{{ old('A_criatividade_inovacao', 0) }}">
                                        <input type="number" class="form-control nota-input" id="A_criatividade_inovacao" 
                                               name="A_criatividade_inovacao" min="0" max="25" 
                                               value="{{ old('A_criatividade_inovacao', 0) }}" required>
                                    </div>
                                </div>
                                
                                @error('A_criatividade_inovacao')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="criterio-card">
                                <h5>B. Qualidade da Apresentação do Projeto</h5>
                                <p class="text-muted">Avalie a clareza, organização e qualidade da apresentação do projeto.</p>
                                
                                <div class="range-container mb-3">
                                    <label for="B_qualidade_apresentacao">Pontuação (0-25):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range flex-grow-1 me-2" id="B_qualidade_apresentacao_range" 
                                               min="0" max="25" step="1" value="{{ old('B_qualidade_apresentacao', 0) }}">
                                        <input type="number" class="form-control nota-input" id="B_qualidade_apresentacao" 
                                               name="B_qualidade_apresentacao" min="0" max="25" 
                                               value="{{ old('B_qualidade_apresentacao', 0) }}" required>
                                    </div>
                                </div>
                                
                                @error('B_qualidade_apresentacao')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="criterio-card">
                                <h5>C. Impacto da Ideia na Sociedade</h5>
                                <p class="text-muted">Avalie o potencial de impacto social ou ambiental do projeto.</p>
                                
                                <div class="range-container mb-3">
                                    <label for="C_impacto_sociedade">Pontuação (0-25):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range flex-grow-1 me-2" id="C_impacto_sociedade_range" 
                                               min="0" max="25" step="1" value="{{ old('C_impacto_sociedade', 0) }}">
                                        <input type="number" class="form-control nota-input" id="C_impacto_sociedade" 
                                               name="C_impacto_sociedade" min="0" max="25" 
                                               value="{{ old('C_impacto_sociedade', 0) }}" required>
                                    </div>
                                </div>
                                
                                @error('C_impacto_sociedade')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="criterio-card">
                                <h5>D. Aderência da Ideia aos ODS</h5>
                                <p class="text-muted">Avalie o quanto o projeto está alinhado com os Objetivos de Desenvolvimento Sustentável da ONU.</p>
                                
                                <div class="range-container mb-3">
                                    <label for="D_aderencia_ODS">Pontuação (0-25):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range flex-grow-1 me-2" id="D_aderencia_ODS_range" 
                                               min="0" max="25" step="1" value="{{ old('D_aderencia_ODS', 0) }}">
                                        <input type="number" class="form-control nota-input" id="D_aderencia_ODS" 
                                               name="D_aderencia_ODS" min="0" max="25" 
                                               value="{{ old('D_aderencia_ODS', 0) }}" required>
                                    </div>
                                </div>
                                
                                @error('D_aderencia_ODS')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="pontuacao-total-container alert alert-info mt-4">
                                <h5>Pontuação Total: <span id="pontuacao-total">0</span>/100 pontos</h5>
                            </div>
                            
                            <div class="form-group mt-4">
                                <label for="comentarios"><strong>Comentários e Feedback</strong></label>
                                <textarea class="form-control" id="comentarios" name="comentarios" rows="4" placeholder="Deixe comentários construtivos para a equipe...">{{ old('comentarios') }}</textarea>
                                <small class="form-text text-muted">Opcional, mas recomendado para justificar sua avaliação.</small>
                            </div>
                            
                            <div class="alert alert-warning mt-4">
                                <i class="fa fa-exclamation-triangle mr-2"></i>
                                <strong>Atenção:</strong> Após confirmar sua avaliação, ela não poderá mais ser alterada.
                            </div>
                            
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-check-circle mr-2"></i>Confirmar Avaliação
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Nova seção: Tabela de Avaliações -->
                <div class="col-md-12 mt-5">
                    <div class="avaliacao-card">
                        <div class="avaliacao-header">
                            <h2><i class="fa fa-list mr-2"></i>Tabela de Avaliações</h2>
                        </div>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Equipe</th>
                                    <th>Cidade</th>
                                    <th>Modalidade</th>
                                    <th>Pontuação Total</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody id="avaliacoes-table">
                                @foreach($avaliacoes as $avaliacao)
                                    <tr>
                                        <td>{{ $avaliacao->equipe_nome }}</td>
                                        <td>{{ $avaliacao->cidade_nome }}</td>
                                        <td>
                                            <span class="badge modalidade-badge modalidade-{{ $avaliacao->modalidade }}">
                                                {{ getModalidadeNome($avaliacao->modalidade) }}
                                            </span>
                                        </td>
                                        <td><strong>{{ $avaliacao->nota_total }}/100</strong></td>
                                        <td>{{ \Carbon\Carbon::parse($avaliacao->created_at)->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Seção: Critérios de Avaliação Detalhados -->
                <div class="col-md-12 mt-5">
                    <div class="card mb-4">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Critérios de Avaliação</h5>
                        </div>
                        <div class="card-body">
                            <p>Cada projeto deve ser avaliado em quatro critérios principais:</p>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Critério</th>
                                            <th>Pontuação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A. Criatividade e Inovação</td>
                                            <td>0 a 25 pontos</td>
                                        </tr>
                                        <tr>
                                            <td>B. Qualidade da apresentação do projeto</td>
                                            <td>0 a 25 pontos</td>
                                        </tr>
                                        <tr>
                                            <td>C. Impacto da ideia na sociedade</td>
                                            <td>0 a 25 pontos</td>
                                        </tr>
                                        <tr>
                                            <td>D. Aderência da Ideia ao(s) ODS</td>
                                            <td>0 a 25 pontos</td>
                                        </tr>
                                        <tr class="table-primary">
                                            <td><strong>Total de Pontos Possíveis – TPP</strong></td>
                                            <td><strong>0 a 100 pontos</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
            // Sincronizar sliders com inputs numéricos e calcular total
            function setupSliders() {
                const criterios = [
                    'A_criatividade_inovacao',
                    'B_qualidade_apresentacao',
                    'C_impacto_sociedade',
                    'D_aderencia_ODS'
                ];
                
                criterios.forEach(function(criterio) {
                    const slider = $(`#${criterio}_range`);
                    const input = $(`#${criterio}`);
                    
                    // Slider muda o input
                    slider.on('input', function() {
                        input.val(this.value);
                        calcularTotal();
                    });
                    
                    // Input muda o slider
                    input.on('input', function() {
                        let value = parseInt(this.value);
                        
                        if (isNaN(value)) value = 0;
                        if (value < 0) value = 0;
                        if (value > 25) value = 25;
                        
                        this.value = value;
                        slider.val(value);
                        calcularTotal();
                    });
                });
                
                // Calcular total inicial
                calcularTotal();
            }
            
            // Calcular a pontuação total
            function calcularTotal() {
                const criterios = [
                    'A_criatividade_inovacao',
                    'B_qualidade_apresentacao',
                    'C_impacto_sociedade',
                    'D_aderencia_ODS'
                ];
                
                let total = 0;
                criterios.forEach(function(criterio) {
                    let valor = parseInt($(`#${criterio}`).val()) || 0;
                    total += valor;
                });
                
                $('#pontuacao-total').text(total);
            }
            
            // Inicializar os sliders
            setupSliders();
            
            // Verificar se todos os critérios foram preenchidos antes de permitir envio
            $('form').on('submit', function(e) {
                const criterios = [
                    'A_criatividade_inovacao',
                    'B_qualidade_apresentacao',
                    'C_impacto_sociedade',
                    'D_aderencia_ODS'
                ];
                
                let allValid = true;
                
                criterios.forEach(function(criterio) {
                    const value = $(`#${criterio}`).val();
                    if (value === '' || value === null) {
                        allValid = false;
                    }
                });
                
                if (!allValid) {
                    e.preventDefault();
                    alert('Por favor, avalie todos os critérios antes de prosseguir.');
                    return false;
                }
                
                return confirm('Tem certeza que deseja enviar esta avaliação? Ela não poderá ser alterada posteriormente.');
            });
        });
    </script>
</body>
</html>