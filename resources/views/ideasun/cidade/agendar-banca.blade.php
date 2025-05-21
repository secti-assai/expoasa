<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Banca - IDEASUN</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">

    <style>
        /* Estilos gerais */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Estilos do card principal */
        .banca-section {
            padding: 120px 0;
            background: linear-gradient(135deg, rgba(94, 8, 2, 0.95), rgba(0, 0, 0, 0.9));
            min-height: 100vh;
            position: relative;
            z-index: 0;
        }

        .banca-section::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/ideasun.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.15;
            z-index: -1;
        }

        .banca-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            padding: 40px;
            position: relative;
            z-index: 1;
        }

        .banca-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #9c27b0;
            border-radius: 15px 15px 0 0;
        }

        .banca-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .banca-header h2 {
            color: #333;
            font-size: 2.2rem;
            font-weight: 700;
        }

        .banca-header h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            background: #9c27b0;
            margin: 15px auto 20px;
        }

        /* Estilos específicos para a seleção de datas */
        .calendario-container {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: none;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #9c27b0;
            box-shadow: 0 0 0 0.2rem rgba(156, 39, 176, 0.15);
        }

        /* Estilos para os horários */
        .horarios-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 20px;
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
            display: block;
            padding: 15px;
            text-align: center;
            background-color: #f8f9fa;
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .horario-option input[type="radio"]:checked + label {
            background-color: rgba(156, 39, 176, 0.1);
            border-color: #9c27b0;
            box-shadow: 0 5px 10px rgba(156, 39, 176, 0.1);
        }

        .horario-option label:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para o botão de agendar */
        .btn-primary {
            background-color: #9c27b0;
            border-color: #9c27b0;
            border-radius: 50px;
            padding: 12px 35px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(156, 39, 176, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #7b1fa2;
            border-color: #7b1fa2;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(156, 39, 176, 0.4);
        }

        .btn-primary:disabled {
            background-color: #d5a6e6;
            border-color: #d5a6e6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
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
            border: 3px solid rgba(156, 39, 176, 0.2);
            border-radius: 50%;
            border-top-color: #9c27b0;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Nota informativa */
        .nota-info {
            background-color: #f8f9f9;
            border-left: 4px solid #9c27b0;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }

        /* Estilos para alertas */
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

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border-left: 4px solid #ffc107;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        /* Informações da cidade */
        .cidade-info {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid #9c27b0;
        }

        .equipes-container {
            margin-bottom: 30px;
        }

        .equipe-item {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .equipe-item h5 {
            margin-bottom: 8px;
            color: #333;
        }

        .badge {
            padding: 5px 12px;
            border-radius: 30px;
            font-weight: 500;
        }

        .badge-primary {
            background-color: #9c27b0;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="banca-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="banca-card">
                        <!-- Logo após o início do card da banca -->
                        <div class="dashboard-card">
                            <div class="dashboard-header">
                                <h2><i class="fa fa-calendar-check-o mr-2"></i>Agendamento de Banca</h2>
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
                        </div>

                        <div class="cidade-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><i class="fa fa-building mr-2"></i>{{ $cidade->nome }} - {{ $cidade->estado }}</h5>
                                    <p><strong>Responsável:</strong> {{ $cidade->representante_nome }}</p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <p><strong>Equipes registradas:</strong> {{ count($cidade->equipes) }}</p>
                                    <p><strong>ID da Cidade:</strong> {{ $cidade->cidade_id }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="equipes-container">
                            <h4 class="mb-3"><i class="fa fa-users mr-2"></i>Suas Equipes</h4>

                            @if(count($cidade->equipes) > 0)
                                <div class="row">
                                    @foreach($cidade->equipes as $equipe)
                                        <div class="col-md-6 mb-3">
                                            <div class="equipe-item">
                                                <h5>{{ $equipe->nome }}</h5>
                                                <p class="mb-1"><span class="badge badge-primary">{{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}</span></p>
                                                <small class="text-muted">{{ $equipe->instituicao }}</small>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    <i class="fa fa-exclamation-triangle mr-2"></i> Você ainda não possui equipes registradas. Registre suas equipes antes de agendar a banca.
                                </div>
                            @endif
                        </div>

                        @if(count($cidade->equipes) > 0)
                            @if($cidade->banca_agendada)
                                <div class="alert alert-success">
                                    <h5 class="mb-2"><i class="fa fa-calendar-check-o mr-2"></i>Banca Já Agendada</h5>
                                    <p class="mb-1"><strong>Data:</strong> {{ \Carbon\Carbon::parse($cidade->banca_agendada)->format('d/m/Y') }}</p>
                                    <p class="mb-1"><strong>Horário:</strong> {{ \Carbon\Carbon::parse($cidade->banca_agendada)->format('H:i') }}</p>
                                    <p class="mb-0"><strong>Local:</strong> Auditório Principal - CEEP - R. Edgar Bardal, s/n - Assaí, PR, 86220-000</p>
                                </div>

                                <!-- Exibir avaliadores cadastrados -->
                                <div class="calendario-container mt-4">
                                    <h4 class="mb-3"><i class="fa fa-users mr-2"></i>Avaliadores Cadastrados</h4>

                                    @if($cidade->avaliadores->count() > 0)
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>CPF</th>
                                                        <th>Telefone</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cidade->avaliadores as $avaliador)
                                                        <tr>
                                                            <td>{{ $avaliador->nome }}</td>
                                                            <td>{{ substr($avaliador->cpf, 0, 3) . '.' . substr($avaliador->cpf, 3, 3) . '.' . substr($avaliador->cpf, 6, 3) . '-' . substr($avaliador->cpf, 9, 2) }}</td>
                                                            <td>{{ $avaliador->telefone }}</td>
                                                            <td>
                                                                @if($avaliador->ativo)
                                                                    <span class="badge badge-success">Ativo</span>
                                                                @else
                                                                    <span class="badge badge-danger">Inativo</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="alert alert-info mt-3">
                                            <i class="fa fa-info-circle mr-2"></i>
                                            <strong>Informação:</strong> Os avaliadores acima terão acesso ao sistema para avaliar projetos de outras cidades.
                                            A senha inicial é os 6 primeiros dígitos do CPF.
                                        </div>
                                    @else
                                        <div class="alert alert-warning">
                                            <i class="fa fa-exclamation-triangle mr-2"></i>
                                            Nenhum avaliador cadastrado. Entre em contato com o suporte.
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-3">
                                    <form action="{{ route('ideasun.cidade.cancelar-banca') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja cancelar o agendamento da banca? Isso também removerá os avaliadores cadastrados.');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="fa fa-calendar-times-o mr-2"></i>Cancelar Agendamento
                                        </button>
                                    </form>
                                </div>
                            @else
                                <form action="{{ route('ideasun.cidade.salvar-banca') }}" method="POST" id="formBanca">
                                    @csrf
                                    <div class="calendario-container">
                                        <h4 class="mb-3"><i class="fa fa-calendar mr-2"></i>Data da Banca</h4>

                                        <div id="calendario-info"></div>

                                        <h4 class="mb-3"><i class="fa fa-calendar mr-2"></i>Selecione uma Data</h4>

                                        <div class="form-group">
                                            <label for="data_banca">Data para Apresentação</label>
                                            <select class="form-control" id="data_banca" name="data_banca" required>
                                                <option value="">Selecione uma data</option>
                                                @foreach($diasDisponiveis as $data => $label)
                                                    <option value="{{ $data }}">{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div id="horarios_container">
                                            <div class="text-center text-muted py-4">
                                                <i class="fa fa-calendar-o fa-3x mb-3"></i>
                                                <p>Selecione uma data para ver os horários disponíveis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="calendario-container mt-4">
                                        <h4 class="mb-3"><i class="fa fa-users mr-2"></i>Cadastro de Avaliadores</h4>
                                        <p>Informe os dados de 5 avaliadores que representarão sua cidade na banca de avaliação de outra cidade:</p>

                                        @for($i = 1; $i <= 5; $i++)
                                            <div class="card mb-4">
                                                <div class="card-header bg-light">
                                                    <h5 class="mb-0">Avaliador {{ $i }}</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="avaliador_nome_{{ $i }}">Nome Completo <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="avaliador_nome_{{ $i }}"
                                                                       name="avaliadores[{{ $i-1 }}][nome]" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="avaliador_cpf_{{ $i }}">CPF <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control cpf-mask" id="avaliador_cpf_{{ $i }}"
                                                                       name="avaliadores[{{ $i-1 }}][cpf]" placeholder="000.000.000-00" required>
                                                                <small class="form-text text-muted">A senha inicial será os 6 primeiros dígitos do CPF.</small>
                                                                <!-- A mensagem de erro será adicionada aqui pelo JavaScript -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="avaliador_telefone_{{ $i }}">Telefone <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control telefone-mask" id="avaliador_telefone_{{ $i }}"
                                                                       name="avaliadores[{{ $i-1 }}][telefone]" placeholder="(00) 00000-0000" required>
                                                                <!-- A mensagem de erro será adicionada aqui pelo JavaScript -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                        <div class="alert alert-info">
                                            <i class="fa fa-info-circle mr-2"></i>
                                            <strong>Importante:</strong> Os avaliadores cadastrados receberão acesso ao sistema para avaliar os projetos de outra cidade. A senha inicial será os 6 primeiros dígitos do CPF informado.
                                        </div>
                                    </div>

                                    <!-- Botão de agendamento movido para cá, depois dos avaliadores -->
                                    <div class="text-center mt-4 mb-4">
                                        <button type="submit" class="btn btn-primary btn-agendar" id="btnAgendar" disabled>
                                            <i class="fa fa-calendar-check-o mr-2"></i>Confirmar Agendamento
                                        </button>
                                    </div>
                                </form>

                                <div class="alert alert-info mt-3">
                                    <i class="fa fa-info-circle mr-2"></i>
                                    <strong>Verificação:</strong> Ao clicar em "Confirmar Agendamento", todos os 5 avaliadores serão cadastrados.
                                    Certifique-se de que todas as informações estão corretas.
                                </div>

                                <div class="nota-info">
                                    <h5 class="mb-2"><i class="fa fa-info-circle mr-2"></i>Informações Importantes</h5>
                                    <ul class="mb-0">
                                        <li>O agendamento da banca é obrigatório para todas as cidades participantes.</li>
                                        <li>Cada cidade terá um período de aproximadamente 4 horas para apresentação de todas as suas equipes.</li>
                                        <li>Certifique-se de que todas as suas equipes tenham enviado suas apresentações antes do prazo: 23 de maio.</li>
                                        <li>Em caso de atraso, a cidade poderá perder sua vez e sua vaga na Ideasun.</li>
                                    </ul>
                                </div>
                            @endif
                        @else
                            <div class="text-center mt-4">
                                <a href="{{ route('ideasun.equipe.gerenciar') }}" class="btn btn-primary">
                                    <i class="fa fa-users mr-2"></i>Registrar Equipes
                                </a>
                            </div>
                        @endif

                        <div class="text-center mt-4">
                            <a href="{{ route('ideasun.cidade.dashboard') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-left mr-2"></i>Voltar ao Dashboard
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
            // Configurar o datepicker para mostrar apenas as datas de 28 a 30 de maio
            var dataMinima = new Date(2025, 4, 28); // Mês é 0-indexed (4 = maio)
            var dataMaxima = new Date(2025, 4, 30);
            /*
            $('#data_banca').datepicker({
                format: 'yyyy-mm-dd',
                startDate: dataMinima,
                endDate: dataMaxima,
                autoclose: true,
                language: 'pt-BR'
            });
            */
            // Adicionar texto informativo sobre o período de agendamento
            $('#calendario-info').html(`
                <div class="alert alert-info">
                    <i class="fa fa-info-circle mr-2"></i>
                    <strong>Período de Agendamento:</strong> As bancas estão disponíveis apenas
                    entre os dias 28 e 30 de maio de 2025.
                </div>
            `);

            // Quando uma data for selecionada
            $('#data_banca').change(function() {
                var data = $(this).val();
                console.log('Data selecionada:', data); // Debug

                if (!data) {
                    $('#horarios_container').html('<div class="text-center text-muted py-4"><i class="fa fa-calendar-o fa-3x mb-3"></i><p>Selecione uma data para ver os horários disponíveis</p></div>');
                    $('#btnAgendar').prop('disabled', true);
                    return;
                }

                // Mostrar indicador de carregamento
                $('#horarios_container').html('<div class="loading-container"><div class="loading-spinner"></div></div>');
                $('#btnAgendar').prop('disabled', true);

                // Fazer requisição AJAX para obter horários disponíveis
                var url = '{{ route("ideasun.cidade.banca-horarios") }}';
                console.log('URL da requisição:', url); // Debug

                $.ajax({
                    url: url,
                    type: 'GET',
                    data: { data: data },
                    dataType: 'json',
                    success: function(response) {
                        console.log('Resposta recebida:', response); // Debug
                        if (response.horarios && response.horarios.length > 0) {
                            var html = '<div class="horarios-grid">';

                            response.horarios.forEach(function(opcao) {
                                var horario = opcao.horario;
                                var periodo = opcao.periodo;

                                html += '<div class="horario-option">';
                                html += '<input type="radio" name="horario" id="horario_' +
                                        horario.replace(/[\s:-]/g, '') + '" value="' +
                                        horario + '" required>';
                                html += '<label for="horario_' + horario.replace(/[\s:-]/g, '') + '">' +
                                        horario + '<small class="d-block mt-2 text-muted">' +
                                        periodo + '</small></label>';
                                html += '</div>';
                            });

                            html += '</div>';
                            $('#horarios_container').html(html);

                            // Quando um horário for selecionado, verifica todos os campos para habilitar o botão
                            $('input[name="horario"]').change(function() {
                                verificarFormulario();
                            });
                        } else {
                            $('#horarios_container').html('<div class="alert alert-warning"><i class="fa fa-exclamation-triangle mr-2"></i>Não há horários disponíveis para esta data.</div>');
                            $('#btnAgendar').prop('disabled', true);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Erro na requisição AJAX:', status, error);
                        console.error('Resposta completa:', xhr.responseText);
                        $('#horarios_container').html('<div class="alert alert-danger"><i class="fa fa-times-circle mr-2"></i>Erro ao carregar horários. Por favor, tente novamente.</div>');
                        $('#btnAgendar').prop('disabled', true);
                    }
                });
            });

            // Funções existentes para CPF e telefone
            $('.cpf-mask').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.substr(0, 11);
                }

                if (value.length > 9) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3, 3) + '.' + value.substr(6, 3) + '-' + value.substr(9));
                } else if (value.length > 6) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3, 3) + '.' + value.substr(6));
                } else if (value.length > 3) {
                    $(this).val(value.substr(0, 3) + '.' + value.substr(3));
                } else {
                    $(this).val(value);
                }

                // Verificar duplicidades após editar CPF
                verificarCpfsDuplicados();
                // Verificar se o botão deve ser habilitado depois de editar CPF
                verificarFormulario();
            });

            // Aplicar máscara aos campos de telefone
            $('.telefone-mask').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');

                if (value.length > 11) {
                    value = value.substr(0, 11);
                }

                var formatted = '';

                if (value.length > 0) {
                    formatted = '(' + value.substring(0, 2);

                    if (value.length > 2) {
                        if (value.length > 7) {
                            // Formato (XX) XXXXX-XXXX para celular
                            formatted += ') ' + value.substring(2, 7) + '-' + value.substring(7, 11);
                        } else {
                            // Formato (XX) XXXX-XXXX para telefone fixo
                            formatted += ') ' + value.substring(2, 6) + '-' + value.substring(6, 10);
                        }
                    } else {
                        formatted += ')';
                    }
                }

                $(this).val(formatted);

                // Verificar duplicidades após editar telefone
                verificarTelefonesDuplicados();
                // Verificar se o botão deve ser habilitado depois de editar telefone
                verificarFormulario();
            });

            // Nova função para verificar CPFs duplicados
            function verificarCpfsDuplicados() {
                const cpfs = [];
                let duplicados = false;

                // Coletar todos os CPFs preenchidos
                for (let i = 1; i <= 5; i++) {
                    const cpfField = $(`#avaliador_cpf_${i}`);
                    const cpf = cpfField.val().replace(/\D/g, '');

                    if (cpf.length === 11) {
                        if (cpfs.includes(cpf)) {
                            duplicados = true;
                            $(`#avaliador_cpf_${i}`).addClass('is-invalid');

                            // Adicionar mensagem de erro se não existir
                            if ($(`#cpf-error-${i}`).length === 0) {
                                $(`#avaliador_cpf_${i}`).after(`<div id="cpf-error-${i}" class="text-danger">CPF duplicado. Cada avaliador deve ter um CPF único.</div>`);
                            }
                        } else {
                            cpfs.push(cpf);
                            $(`#avaliador_cpf_${i}`).removeClass('is-invalid');
                            $(`#cpf-error-${i}`).remove();
                        }
                    }
                }

                return !duplicados;
            }

            // Nova função para verificar telefones duplicados
            function verificarTelefonesDuplicados() {
                const telefones = [];
                let duplicados = false;

                // Coletar todos os telefones preenchidos
                for (let i = 1; i <= 5; i++) {
                    const telefoneField = $(`#avaliador_telefone_${i}`);
                    const telefone = telefoneField.val().replace(/\D/g, '');

                    if (telefone.length >= 10) {
                        if (telefones.includes(telefone)) {
                            duplicados = true;
                            $(`#avaliador_telefone_${i}`).addClass('is-invalid');

                            // Adicionar mensagem de erro se não existir
                            if ($(`#telefone-error-${i}`).length === 0) {
                                $(`#avaliador_telefone_${i}`).after(`<div id="telefone-error-${i}" class="text-danger">Telefone duplicado. Cada avaliador deve ter um telefone único.</div>`);
                            }
                        } else {
                            telefones.push(telefone);
                            $(`#avaliador_telefone_${i}`).removeClass('is-invalid');
                            $(`#telefone-error-${i}`).remove();
                        }
                    }
                }

                return !duplicados;
            }

            // Verificar campos quando os nomes forem editados
            $('input[id^="avaliador_nome_"]').on('input', function() {
                verificarFormulario();
            });

            // Modificar a função de verificação do formulário
            function verificarFormulario() {
                console.log('Verificando formulário...');

                let horarioSelecionado = $('input[name="horario"]:checked').val() ? true : false;
                console.log('Horário selecionado:', horarioSelecionado);

                let avaliadoresValid = true;

                // Verificar os 5 avaliadores
                for (let i = 1; i <= 5; i++) {
                    const nome = $(`#avaliador_nome_${i}`).val() || '';
                    const cpf = $(`#avaliador_cpf_${i}`).val() || '';
                    const telefone = $(`#avaliador_telefone_${i}`).val() || '';

                    console.log(`Avaliador ${i}:`, { nome, cpf, telefone });

                    if (!nome.trim() || cpf.replace(/\D/g, '').length !== 11 || telefone.replace(/\D/g, '').length < 10) {
                        avaliadoresValid = false;
                        console.log(`Avaliador ${i} inválido`);
                        break;
                    }
                }

                // Verificar se há CPFs ou telefones duplicados
                const cpfsUnicos = verificarCpfsDuplicados();
                const telefonesUnicos = verificarTelefonesDuplicados();

                console.log('Avaliadores válidos:', avaliadoresValid);
                console.log('CPFs únicos:', cpfsUnicos);
                console.log('Telefones únicos:', telefonesUnicos);

                // Habilitar ou desabilitar o botão
                $('#btnAgendar').prop('disabled', !(horarioSelecionado && avaliadoresValid && cpfsUnicos && telefonesUnicos));
            }

            // Modificar o handler de submit para verificar duplicidades
            $('#formBanca').on('submit', function(e) {
                if (!$('input[name="horario"]:checked').val()) {
                    e.preventDefault();
                    alert('Por favor, selecione um horário para o agendamento.');
                    return false;
                }

                // Verificação dos avaliadores
                let avaliadoresValid = true;

                for (let i = 1; i <= 5; i++) {
                    const nome = $(`#avaliador_nome_${i}`).val().trim();
                    const cpf = $(`#avaliador_cpf_${i}`).val().replace(/\D/g, '');
                    const telefone = $(`#avaliador_telefone_${i}`).val().replace(/\D/g, '');

                    if (!nome || cpf.length !== 11 || telefone.length < 10) {
                        avaliadoresValid = false;
                        break;
                    }
                }

                if (!avaliadoresValid) {
                    e.preventDefault();
                    alert('Por favor, preencha corretamente os dados dos 5 avaliadores (nome, CPF e telefone).');
                    return false;
                }

                // Verificar CPFs duplicados
                if (!verificarCpfsDuplicados()) {
                    e.preventDefault();
                    alert('Existem CPFs duplicados no formulário. Cada avaliador deve ter um CPF único.');
                    return false;
                }

                // Verificar telefones duplicados
                if (!verificarTelefonesDuplicados()) {
                    e.preventDefault();
                    alert('Existem telefones duplicados no formulário. Cada avaliador deve ter um telefone único.');
                    return false;
                }

                return true;
            });

            // Inicialização: verificar duplicidades
            verificarCpfsDuplicados();
            verificarTelefonesDuplicados();
            verificarFormulario();
        });
    </script>
</body>
</html>