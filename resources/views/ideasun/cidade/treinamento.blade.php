<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Treinamento - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    
    <style>
        /* Estilos do card principal */
        .treinamento-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .treinamento-section::before {
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
        
        .treinamento-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }
        
        .treinamento-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #e62b1e;
            border-radius: 15px 15px 0 0;
        }
        
        .treinamento-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .treinamento-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }
        
        .treinamento-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #e62b1e;
            margin: 15px auto 20px;
        }
        
        /* Estilizando select */
        .custom-select-container {
            position: relative;
            margin-bottom: 30px;
        }
        
        .custom-select-container select {
            appearance: none;
            -webkit-appearance: none;
            padding: 15px 20px;
            background-color: #f9f9f9;
            border: 1px solid #e1e1e1;
            border-radius: 10px;
            font-size: 1rem;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .custom-select-container select:hover,
        .custom-select-container select:focus {
            border-color: #e62b1e;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.1);
            outline: none;
        }
        
        .custom-select-container::after {
            content: "\f107";
            font-family: 'FontAwesome';
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #e62b1e;
            font-size: 1.2rem;
            pointer-events: none;
        }
        
        /* Estilizando o container de horários */
        .horarios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .horario-option {
            position: relative;
        }
        
        .horario-option input[type="radio"] {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .horario-option label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px 15px;
            border-radius: 10px;
            background-color: #f9f9f9;
            border: 1px solid #e1e1e1;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            font-weight: 600;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        .horario-option label::before {
            content: "\f017";
            font-family: 'FontAwesome';
            font-size: 1.5rem;
            color: #777;
            margin-bottom: 8px;
            transition: all 0.3s ease;
        }
        
        .horario-option input[type="radio"]:checked + label {
            background-color: rgba(230, 43, 30, 0.05);
            border-color: #e62b1e;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.15);
            transform: translateY(-3px);
        }
        
        .horario-option input[type="radio"]:checked + label::before {
            color: #e62b1e;
        }
        
        /* Horários específicos */
        .horario-option input[value="09:00"] + label::before {
            content: "\f185"; /* ícone de sol */
        }
        
        .horario-option input[value="10:00"] + label::before {
            content: "\f185"; /* ícone de sol */
        }
        
        .horario-option input[value="11:00"] + label::before {
            content: "\f185"; /* ícone de sol */
        }
        
        .horario-option input[value="14:00"] + label::before {
            content: "\f186"; /* ícone de lua (substituindo por tarde) */
        }
        
        .horario-option input[value="15:00"] + label::before {
            content: "\f186"; /* ícone de lua (substituindo por tarde) */
        }
        
        .horario-option input[value="16:00"] + label::before {
            content: "\f186"; /* ícone de lua (substituindo por tarde) */
        }
        
        /* Remova qualquer estilo específico para o período noturno e ajuste apenas para manhã e tarde */
        /* Ajuste apenas os ícones para manhã e tarde */
        .horario-option input[value="Manhã"] + label::before,
        .horario-option label[for="periodo_Manhã"] i {
            content: "\f185"; /* ícone de sol */
            color: #f39c12;
        }
        
        .horario-option input[value="Tarde"] + label::before,
        .horario-option label[for="periodo_Tarde"] i {
            content: "\f186"; /* ícone de nuvem */
            color: #3498db;
        }
        
        /* Animação de loading */
        .loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150px;
        }
        
        .loading-spinner {
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 3px solid rgba(230, 43, 30, 0.2);
            border-radius: 50%;
            border-top-color: #e62b1e;
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Melhorando a nota informativa */
        .nota-info {
            background-color: #f8f9fa;
            border-left: 4px solid #e62b1e;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
            position: relative;
        }
        
        .nota-info::before {
            content: "\f05a";
            font-family: 'FontAwesome';
            position: absolute;
            left: -12px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #e62b1e;
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }
        
        /* Botão de agendamento */
        .btn-agendar {
            background-color: #e62b1e;
            border-color: #e62b1e;
            border-radius: 50px;
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(230, 43, 30, 0.3);
            transition: all 0.3s ease;
            margin-top: 30px;
        }
        
        .btn-agendar:hover {
            background-color: #d01c11;
            border-color: #d01c11;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 43, 30, 0.4);
        }
        
        .btn-agendar:disabled {
            background-color: #f1a7a2;
            border-color: #f1a7a2;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        /* Categoria de distância */
        .distancia-badge {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .distancia-1 { 
            background-color: #d4edda; 
            color: #155724; 
            border: 1px solid #c3e6cb;
        }
        
        .distancia-2 { 
            background-color: #fff3cd; 
            color: #856404; 
            border: 1px solid #ffeeba;
        }
        
        .distancia-3 { 
            background-color: #f8d7da; 
            color: #721c24; 
            border: 1px solid #f5c6cb;
        }
        
        /* Mensagens */
        .alert {
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            border: none;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }
        
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-left: 4px solid #ffc107;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="treinamento-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="treinamento-card">
                        <div class="treinamento-header">
                            <h2>Agendar Treinamento</h2>
                            <p>Selecione uma data e horário disponíveis para o treinamento da sua equipe.</p>
                            
                            @php
                                $categoriaNomes = [
                                    1 => 'Cidade Próxima', 
                                    2 => 'Cidade de Média Distância', 
                                    3 => 'Cidade de Longa Distância'
                                ];
                                $categoriaClasses = [
                                    1 => 'distancia-1', 
                                    2 => 'distancia-2', 
                                    3 => 'distancia-3'
                                ];
                                $categoriaIcones = [
                                    1 => 'fa-car',
                                    2 => 'fa-bus',
                                    3 => 'fa-truck'
                                ];
                            @endphp
                            
                            <div class="distancia-badge {{ $categoriaClasses[$cidade->distancia_categoria] }}">
                                <i class="fa {{ $categoriaIcones[$cidade->distancia_categoria] }}"></i> {{ $categoriaNomes[$cidade->distancia_categoria] }}
                            </div>
                        </div>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <i class="fa fa-exclamation-circle"></i> {{ session('error') }}
                            </div>
                        @endif
                        
                        @if(count($diasDisponiveis) > 0)
                            <form action="{{ route('ideasun.cidade.agendar') }}" method="POST" id="formTreinamento">
                                @csrf
                                <div class="form-group">
                                    <label for="data_treinamento" class="font-weight-bold mb-2">Selecione uma data para o treinamento:</label>
                                    <div class="custom-select-container">
                                        <select class="form-control" id="data_treinamento" name="data" required>
                                            <option value="">Escolha uma data disponível</option>
                                            @foreach($diasDisponiveis as $data)
                                                <option value="{{ $data }}">{{ \Carbon\Carbon::parse($data)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($data)->translatedFormat('l') }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group mt-4">
                                    <label class="font-weight-bold mb-3">Selecione um período para o treinamento:</label>
                                    <div id="periodos_container">
                                        <div class="text-center text-muted py-4">
                                            <i class="fa fa-calendar-o fa-3x mb-3"></i>
                                            <p>Selecione uma data para ver os períodos disponíveis</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="nota-info">
                                    <h5 class="mb-2"><i class="fa fa-info-circle mr-2"></i>Informações</h5>
                                    <p class="mb-2">Os treinamentos acontecem em dois períodos:</p>
                                    <ul>
                                        <li><strong>Manhã:</strong> Das 09:00 às 12:00</li>
                                        <li><strong>Tarde:</strong> Das 14:00 às 17:00</li>
                                    </ul>
                                    <p class="mb-0">No dia do treinamento, devem estar presente o secretário da educação, os diretores e os professsores que irão acompanhar os estudantes na formação da equipe.</p>

                                </div>
                                
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-danger btn-agendar" id="btnAgendar" disabled>
                                        <i class="fa fa-calendar-check-o mr-2"></i>Confirmar Agendamento
                                    </button>
                                </div>
                            </form>
                        @else
                            <div class="alert alert-warning">
                                <i class="fa fa-exclamation-triangle mr-2"></i> Não há datas disponíveis para agendamento no momento.
                                Por favor, entre em contato com a equipe organizadora.
                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('ideasun.cidade.dashboard') }}" class="btn btn-secondary btn-lg">
                                    <i class="fa fa-arrow-left mr-2"></i> Voltar
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        $(document).ready(function() {
            // Quando uma data for selecionada
            $('#data_treinamento').change(function() {
                var data = $(this).val();
                if (!data) {
                    $('#periodos_container').html('<div class="text-center text-muted py-4"><i class="fa fa-calendar-o fa-3x mb-3"></i><p>Selecione uma data para ver os períodos disponíveis</p></div>');
                    $('#btnAgendar').prop('disabled', true);
                    return;
                }
                
                // Mostrar indicador de carregamento
                $('#periodos_container').html('<div class="loading-container"><div class="loading-spinner"></div></div>');
                $('#btnAgendar').prop('disabled', true);
                
                console.log("Solicitando períodos para a data: " + data);
                
                // Fazer requisição AJAX para obter períodos disponíveis
                $.ajax({
                    url: '{{ route("ideasun.cidade.periodos") }}',
                    type: 'GET',
                    data: { data: data },
                    dataType: 'json',
                    success: function(response) {
                        console.log("Resposta recebida:", response);
                        
                        if (response.periodos && response.periodos.length > 0) {
                            var html = '<div class="horarios-grid">';
                            
                            response.periodos.forEach(function(periodo) {
                                // Definir ícones para os períodos (apenas manhã e tarde)
                                var icone = periodo === 'Manhã' ? 'fa-sun-o' : 'fa-cloud';
                                
                                html += '<div class="horario-option">';
                                html += '<input type="radio" name="periodo" id="periodo_' + periodo + '" value="' + periodo + '" required>';
                                html += '<label for="periodo_' + periodo + '">';
                                html += '<i class="fa ' + icone + '"></i>';
                                html += '<strong class="d-block mt-2">' + periodo + '</strong>';
                                html += '</label>';
                                html += '</div>';
                            });
                            
                            html += '</div>';
                            $('#periodos_container').html(html);
                            
                            // Habilitar o botão de agendamento quando um período for selecionado
                            $('input[name="periodo"]').change(function() {
                                $('#btnAgendar').prop('disabled', false);
                            });
                            
                        } else {
                            $('#periodos_container').html('<div class="alert alert-warning"><i class="fa fa-exclamation-triangle mr-2"></i>Não há períodos disponíveis para esta data.</div>');
                            $('#btnAgendar').prop('disabled', true);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Erro AJAX:", status, error);
                        console.error("Resposta:", xhr.responseText);
                        
                        var errorMsg = 'Erro ao carregar períodos. Por favor, tente novamente.';
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            errorMsg = xhr.responseJSON.error;
                        }
                        $('#periodos_container').html('<div class="alert alert-danger"><i class="fa fa-times-circle mr-2"></i>' + errorMsg + '</div>');
                        $('#btnAgendar').prop('disabled', true);
                    }
                });
            });
            
            // Validar formulário antes de enviar
            $('#formTreinamento').submit(function(e) {
                if (!$('input[name="periodo"]:checked').length) {
                    e.preventDefault();
                    
                    var alertHtml = '<div class="alert alert-danger"><i class="fa fa-times-circle mr-2"></i>Por favor, selecione um período antes de confirmar o agendamento.</div>';
                    
                    // Adicionar alerta se não existir
                    if ($('.alert-danger').length === 0) {
                        $(this).prepend(alertHtml);
                    }
                    
                    // Animar para chamar atenção
                    $('html, body').animate({
                        scrollTop: $('.alert-danger').offset().top - 100
                    }, 500);
                }
            });
        });
    </script>
</body>
</html>