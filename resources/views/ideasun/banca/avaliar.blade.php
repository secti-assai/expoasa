<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação de Projeto - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        :root {
            --primary-color: #3f51b5;
            --primary-dark: #303f9f;
            --primary-light: #e8eaf6;
            --primary-very-light: #f5f7ff;
            --success-color: #4caf50;
            --warning-color: #ff9800;
            --danger-color: #f44336;
            --info-color: #2196f3;
            --dark-text: #333;
            --light-text: #757575;
            --border-color: #e0e0e0;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            color: var(--dark-text);
        }
        
        .avaliacao-section {
            padding: 60px 0;
            min-height: calc(100vh - 200px);
        }
        
        .avaliacao-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 30px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .avaliacao-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
        
        .avaliacao-header {
            background: var(--primary-very-light);
            border-radius: 12px 12px 0 0;
            padding: 20px 30px;
            margin: -30px -30px 30px;
            border-bottom: 1px solid var(--border-color);
            position: relative;
        }
        
        .avaliacao-header:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(to right, var(--primary-color), var(--info-color));
            border-radius: 0 0 12px 12px;
        }
        
        .avaliacao-header h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0;
        }
        
        .equipe-info {
            background: var(--primary-very-light);
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        
        .equipe-info:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transform: translateY(-2px);
        }
        
        .badge {
            font-size: 0.8rem;
            padding: 6px 12px;
            border-radius: 50px;
            font-weight: 500;
            margin-right: 5px;
            margin-bottom: 5px;
            display: inline-block;
        }
        
        .badge-secondary {
            background-color: #6c757d;
        }
        
        .badge-info {
            background-color: var(--info-color);
        }
        
        .modalidade-badge {
            font-size: 0.75rem;
            padding: 5px 10px;
            border-radius: 50px;
        }
        
        .modalidade-educacao_especial { background-color: #ff9800; color: #fff; }
        .modalidade-fundamental_1 { background-color: #4caf50; color: #fff; }
        .modalidade-fundamental_2 { background-color: #2196f3; color: #fff; }
        .modalidade-medio_tecnico { background-color: #9c27b0; color: #fff; }
        .modalidade-superior { background-color: #f44336; color: #fff; }
        
        .criterio-card {
            background: #fbfbfb;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }
        
        .criterio-card:hover {
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .criterio-card h5 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 1.1rem;
        }
        
        .criterio-card p.text-muted {
            margin-bottom: 20px;
            color: var(--light-text);
            font-size: 0.95rem;
        }
        
        .apresentacao-container {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 1px solid var(--border-color);
        }
        
        .range-container {
            margin-bottom: 20px;
            position: relative;
        }
        
        .range-container label {
            margin-bottom: 10px;
            font-weight: 500;
            display: block;
            color: var(--dark-text);
        }
        
        .form-range {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: #e0e0e0;
            outline: none;
            padding: 0;
            margin: 10px 0;
        }
        
        .form-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        
        .form-range::-webkit-slider-thumb:hover {
            transform: scale(1.1);
            background: var(--primary-dark);
        }
        
        .form-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border: none;
            border-radius: 50%;
            background: var(--primary-color);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        
        .form-range::-moz-range-thumb:hover {
            transform: scale(1.1);
            background: var(--primary-dark);
        }
        
        .nota-input {
            width: 70px;
            text-align: center;
            font-weight: 600;
            color: var(--primary-color);
            padding: 8px 0;
            border: 1px solid var(--border-color);
            border-radius: 5px;
        }
        
        .nota-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(63, 81, 181, 0.25);
        }
        
        .d-flex.align-items-center {
            gap: 15px;
        }
        
        .pontuacao-total-container {
            background-color: var(--primary-light);
            border: 1px solid var(--primary-color);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin: 30px 0;
            position: relative;
            overflow: hidden;
        }
        
        .pontuacao-total-container:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;
            background: linear-gradient(to right, var(--primary-color), var(--info-color));
        }
        
        .pontuacao-total-container h5 {
            margin-bottom: 0;
            color: var(--primary-dark);
            font-weight: 600;
        }
        
        #pontuacao-total {
            font-size: 1.5em;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .btn {
            padding: 12px 24px;
            font-weight: 500;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }
        
        .btn::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255,255,255,0.1);
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn:hover::after {
            width: 100%;
        }
        
        .btn-primary {
            background: var(--primary-color);
            color: white;
            box-shadow: 0 4px 10px rgba(63, 81, 181, 0.3);
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(63, 81, 181, 0.4);
        }
        
        .btn-outline-secondary {
            color: #6c757d;
            border: 1px solid #6c757d;
            background: transparent;
        }
        
        .btn-outline-secondary:hover {
            background-color: #6c757d;
            color: white;
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .table {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            border: none;
        }
        
        .table thead {
            background-color: var(--primary-color);
            color: white;
        }
        
        .table thead th {
            border: none;
            padding: 15px;
            font-weight: 500;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
        }
        
        .table tbody tr:hover {
            background-color: rgba(63, 81, 181, 0.05);
        }
        
        .table tbody td {
            padding: 12px 15px;
            vertical-align: middle;
            border-top: 1px solid #f0f0f0;
        }
        
        .alert {
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            border: none;
            position: relative;
        }
        
        .alert-warning {
            background-color: #fff8e1;
            color: #ff8f00;
            border-left: 4px solid #ff8f00;
        }
        
        .alert-success {
            background-color: #e8f5e9;
            color: #2e7d32;
            border-left: 4px solid #2e7d32;
        }
        
        .alert-danger {
            background-color: #ffebee;
            color: #c62828;
            border-left: 4px solid #c62828;
        }
        
        .alert i {
            margin-right: 10px;
        }
        
        .form-group textarea {
            border-radius: 8px;
            resize: none;
            border: 1px solid var(--border-color);
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(63, 81, 181, 0.25);
        }
        
        .text-danger {
            color: var(--danger-color) !important;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .card-header {
            background-color: var(--primary-very-light);
            border-bottom: 1px solid var(--border-color);
            padding: 15px 20px;
        }
        
        .card-header h5 {
            margin-bottom: 0;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .card-body {
            padding: 20px;
        }
        
        /* Estilo para o botão de submissão */
        .submit-btn-container {
            text-align: center;
            margin-top: 30px;
            position: relative;
        }
        
        .submit-btn-container:before {
            content: '';
            position: absolute;
            top: -15px;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--border-color), transparent);
        }
    </style>
</head>
<body>

    @include('ideasun.partials.navbar')

    <section class="avaliacao-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="avaliacao-card shadow">
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
                            <div class="badges-container mb-2">
                                <span class="badge badge-secondary">{{ $equipe->cidade->nome }}</span>
                                <span class="badge modalidade-badge modalidade-{{ $equipe->modalidade }}">
                                    {{ $equipe->getModalidadeNome() }}
                                </span>
                                <span class="badge badge-info">{{ $equipe->instituicao }}</span>
                            </div>
                            
                            <h5 class="mt-4 mb-2">Resumo do Projeto</h5>
                            <p>{{ $equipe->resumo_ideia ?? 'Sem descrição disponível.' }}</p>
                        </div>
                        
                        @if($equipe->apresentacao_path)
                            <div class="apresentacao-container">
                                <h5 class="mb-3"><i class="fa fa-file-pdf-o mr-2"></i>Apresentação do Projeto</h5>
                                
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
                        
                        <form action="{{ route('ideasun.banca.avaliar.salvar') }}" method="POST" id="avaliacaoForm">
                            @csrf
                            <input type="hidden" name="equipe_id" value="{{ $equipe->id }}">
                            
                            <h4 class="mb-4">Critérios de Avaliação</h4>
                            
                            <div class="criterio-card">
                                <h5>A. Criatividade e Inovação</h5>
                                <p class="text-muted">Avalie o quanto o projeto é original, inovador e criativo na sua abordagem e solução.</p>
                                
                                <div class="range-container mb-3">
                                    <label for="A_criatividade_inovacao">Pontuação (0-25):</label>
                                    <div class="d-flex align-items-center">
                                        <input type="range" class="form-range flex-grow-1" id="A_criatividade_inovacao_range" 
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
                                        <input type="range" class="form-range flex-grow-1" id="B_qualidade_apresentacao_range" 
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
                                        <input type="range" class="form-range flex-grow-1" id="C_impacto_sociedade_range" 
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
                                        <input type="range" class="form-range flex-grow-1" id="D_aderencia_ODS_range" 
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
                            
                            <div class="pontuacao-total-container">
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
                            
                            <div class="submit-btn-container">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-check-circle mr-2"></i>Confirmar Avaliação
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Tabela de Avaliações Anteriores -->
                <div class="col-lg-10 mx-auto mt-4">
                    <div class="avaliacao-card shadow">
                        <div class="avaliacao-header">
                            <h2><i class="fa fa-list mr-2"></i>Minhas Avaliações</h2>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Equipe</th>
                                        <th>Cidade</th>
                                        <th>Modalidade</th>
                                        <th>Pontuação</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($avaliacoes as $avaliacao)
                                        <tr>
                                            <td>{{ $avaliacao->equipe_nome }}</td>
                                            <td>{{ $avaliacao->cidade_nome }}</td>
                                            <td>
                                                <span class="badge modalidade-badge modalidade-<?php echo e($avaliacao->modalidade); ?>">
                                                    <?php echo e(getModalidadeName($avaliacao->modalidade)); ?>
                                                </span>
                                            </td>
                                            <td><strong>{{ $avaliacao->nota_total }}/100</strong></td>
                                            <td>{{ \Carbon\Carbon::parse($avaliacao->created_at)->format('d/m/Y') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center py-4">Você ainda não realizou nenhuma avaliação.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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
                
                // Mudar a cor baseada na pontuação
                const pontuacaoContainer = $('.pontuacao-total-container');
                
                // Resetar classes
                pontuacaoContainer.removeClass('bg-danger bg-warning bg-info bg-success').addClass('bg-light');
                
                // Aplicar cor baseada na pontuação
                if (total < 40) {
                    pontuacaoContainer.addClass('bg-danger bg-opacity-10 text-danger');
                } else if (total < 60) {
                    pontuacaoContainer.addClass('bg-warning bg-opacity-10 text-warning');
                } else if (total < 80) {
                    pontuacaoContainer.addClass('bg-info bg-opacity-10 text-info');
                } else {
                    pontuacaoContainer.addClass('bg-success bg-opacity-10 text-success');
                }
            }
            
            // Inicializar os sliders
            setupSliders();
            
            // Verificar se todos os critérios foram preenchidos antes de permitir envio
            $('#avaliacaoForm').on('submit', function(e) {
                const criterios = [
                    'A_criatividade_inovacao',
                    'B_qualidade_apresentacao',
                    'C_impacto_sociedade',
                    'D_aderencia_ODS'
                ];
                
                let allValid = true;
                let totalPontos = 0;
                
                criterios.forEach(function(criterio) {
                    const value = $(`#${criterio}`).val();
                    if (value === '' || value === null) {
                        allValid = false;
                    } else {
                        totalPontos += parseInt(value);
                    }
                });
                
                if (!allValid) {
                    e.preventDefault();
                    alert('Por favor, avalie todos os critérios antes de prosseguir.');
                    return false;
                }
                
                return confirm('Tem certeza que deseja enviar esta avaliação com ' + totalPontos + ' pontos? Ela não poderá ser alterada posteriormente.');
            });
        });
    </script>
</body>
</html>