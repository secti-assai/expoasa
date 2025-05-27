<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - IDEASUN</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.css" rel="stylesheet">
    
    <style>
        /* Dashboard layout and styles */
        .admin-section {
            min-height: 100vh;
            background: #f8f9fa;
            padding-top: 90px;
            padding-bottom: 40px;
        }
        
        .admin-sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100%;
            border-radius: 10px;
            padding: 20px 0;
            position: sticky;
            top: 100px;
        }
        
        .admin-sidebar .nav-link {
            color: rgba(255,255,255,0.75);
            padding: 12px 20px;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            color: #fff;
            background-color: rgba(255,255,255,0.1);
            border-left-color: #e62b1e;
        }
        
        .admin-sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        
        .admin-content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
            padding: 25px;
            min-height: 80vh;
        }
        
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .admin-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #343a40;
            margin: 0;
        }
        
        .admin-stat-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #e62b1e;
            transition: all 0.3s ease;
        }
        
        .admin-stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .admin-stat-card .stat-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(230, 43, 30, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .admin-stat-card .stat-icon i {
            font-size: 24px;
            color: #e62b1e;
        }
        
        .admin-stat-card h5 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }
        
        .admin-stat-card p {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            color: #e62b1e;
        }
        
        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .data-table th {
            background-color: #f8f9fa;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            color: #555;
            border-bottom: 2px solid #eee;
        }
        
        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #333;
        }
        
        .data-table tr:hover {
            background-color: #f8f9fa;
        }
        
        .data-table .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.75rem;
        }
        
        .tab-content {
            padding: 20px 0;
        }
        
        .nav-tabs {
            border-bottom: 1px solid #eee;
            margin-bottom: 20px;
        }
        
        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #555;
            font-weight: 600;
            padding: 10px 20px;
        }
        
        .nav-tabs .nav-link:hover,
        .nav-tabs .nav-link.active {
            border-color: #e62b1e;
            color: #e62b1e;
            background-color: transparent;
        }
        
        #calendar {
            margin-top: 20px;
            height: 600px;
        }
        
        .calendar-event {
            padding: 5px;
            font-size: 12px;
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
        
        .status-pill {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 5px;
        }
        
        .status-pending {
            background-color: #ffc107;
        }
        
        .status-confirmed {
            background-color: #28a745;
        }
        
        .status-canceled {
            background-color: #dc3545;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991px) {
            .admin-sidebar {
                margin-bottom: 30px;
                position: static;
                height: auto;
            }
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 col-xl-2">
                    <div class="admin-sidebar">
                        <div class="sidebar-logo mb-4 text-center">
                            <img src="/assets/images/ideasun-logo.png" alt="IDEASUN" height="60">
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#dashboard">
                                    <i class="fa fa-dashboard"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#cidades">
                                    <i class="fa fa-building"></i> Cidades
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#equipes">
                                    <i class="fa fa-users"></i> Equipes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#calendar-tab">
                                    <i class="fa fa-calendar"></i> Calendário
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ideasun.admin.bancas') }}">
                                    <i class="fa fa-gavel"></i> Gerenciar Bancas
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ideasun.admin.gerenciar-avaliadores') }}">
                                    <i class="fa fa-user-circle"></i> Gerenciar Avaliadores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ideasun.admin.repescagem') }}">
                                    <i class="fa fa-refresh"></i> Repescagem
                                </a>
                            </li>
                            <li class="nav-item mt-5">
                                <a class="nav-link text-danger" href="{{ route('ideasun.admin.logout') }}">
                                    <i class="fa fa-sign-out"></i> Sair
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class="col-lg-9 col-xl-10">
                    <div class="admin-content">
                        <div class="tab-content">
                            <!-- Dashboard Overview -->
                            <div class="tab-pane fade show active" id="dashboard">
                                <div class="admin-header">
                                    <h2 class="admin-title">Painel de Controle</h2>
                                    <span class="badge bg-primary text-white p-2">Administrador</span>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="admin-stat-card">
                                            <div class="stat-icon">
                                                <i class="fa fa-building"></i>
                                            </div>
                                            <h5>Cidades Cadastradas</h5>
                                            <p>{{ $cidadesCount }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="admin-stat-card">
                                            <div class="stat-icon">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <h5>Equipes Registradas</h5>
                                            <p>{{ $equipesCount }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="admin-stat-card">
                                            <div class="stat-icon">
                                                <i class="fa fa-calendar-check-o"></i>
                                            </div>
                                            <h5>Agendamentos</h5>
                                            <p>{{ $agendamentosCount }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Cidades Recentes</h5>
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Cidade</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($cidadesRecentes as $cidade)
                                                            <tr>
                                                                <td>{{ $cidade->cidade_id }}</td>
                                                                <td>{{ $cidade->nome }}</td>
                                                                <td>
                                                                    @if($cidade->treinamento_agendado)
                                                                        <span class="badge bg-success text-white">Treinamento Agendado</span>
                                                                    @elseif($cidade->treinamento_requerido)
                                                                        <span class="badge bg-warning text-dark">Aguardando Agendamento</span>
                                                                    @else
                                                                        <span class="badge bg-info text-white">Cadastro Completo</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="3" class="text-center">Nenhuma cidade cadastrada recentemente</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0">Próximos Treinamentos</h5>
                                            </div>
                                            <div class="card-body p-0">
                                                <table class="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Cidade</th>
                                                            <th>Data</th>
                                                            <th>Horário</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($proximosTreinamentos as $cidade)
                                                            <tr>
                                                                <td>{{ $cidade->nome }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('d/m/Y') }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($cidade->treinamento_agendado)->format('H:i') }}</td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="3" class="text-center">Nenhum treinamento agendado</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <!-- ... outros cards existentes ... -->
                                    
                                    <div class="col-md-4">
                                        <div class="admin-stat-card">
                                            <div class="stat-icon">
                                                <i class="fa fa-refresh"></i>
                                            </div>
                                            <h5>Equipes em Repescagem</h5>
                                            <p>{{ \App\Models\Equipe::where('expoasa', false)->count() }}</p>
                                            <a href="{{ route('ideasun.admin.repescagem') }}" class="btn btn-sm btn-outline-primary mt-2">
                                                Gerenciar <i class="fa fa-arrow-right ml-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Cidades Tab -->
                            <div class="tab-pane fade" id="cidades">
                                <div class="admin-header">
                                    <h2 class="admin-title">Cidades Cadastradas</h2>
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exportModal">
                                            <i class="fa fa-download mr-2"></i>Exportar
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="search-box mb-4">
                                    <i class="fa fa-search"></i>
                                    <input type="text" id="cidadeSearch" placeholder="Buscar cidade..." class="form-control">
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="data-table" id="cidadesTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Estado</th>
                                                <th>Representante</th>
                                                <th>Categoria</th>
                                                <th>Modalidades</th>
                                                <th>Status</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cidades as $cidade)
                                                <tr>
                                                    <td>{{ $cidade->cidade_id }}</td>
                                                    <td>{{ $cidade->nome }}</td>
                                                    <td>{{ $cidade->estado }}</td>
                                                    <td>{{ $cidade->representante_nome }}</td>
                                                    <td>{{ $cidade->distancia_categoria }}</td>
                                                    <td>
                                                        @foreach($cidade->modalidades as $modalidade)
                                                            <span class="badge bg-secondary text-white">
                                                                {{ ucfirst(str_replace('_', ' ', $modalidade)) }}
                                                            </span>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @if($cidade->treinamento_agendado)
                                                            <span class="status-pill status-confirmed"></span> Treinamento Agendado
                                                        @elseif($cidade->treinamento_requerido)
                                                            <span class="status-pill status-pending"></span> Aguardando Agendamento
                                                        @else
                                                            <span class="status-pill status-confirmed"></span> Cadastro Completo
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-info" onclick="viewCidadeDetails('{{ $cidade->id }}')">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                        <a href="{{ route('ideasun.admin.cidade.avaliacoes', $cidade->id) }}" class="btn btn-info mr-2 mb-2">
                                                            <i class="fa fa-star mr-2"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Equipes Tab -->
                            <div class="tab-pane fade" id="equipes">
                                <div class="admin-header">
                                    <h2 class="admin-title">Equipes Registradas</h2>
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exportModal">
                                            <i class="fa fa-download mr-2"></i>Exportar
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="search-box mb-4">
                                    <i class="fa fa-search"></i>
                                    <input type="text" id="equipeSearch" placeholder="Buscar equipe..." class="form-control">
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="data-table" id="equipesTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Cidade</th>
                                                <th>Modalidade</th>
                                                <th>Instituição</th>
                                                <th>Membros</th>
                                                <th>Apresentação</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($equipes as $equipe)
                                                <tr>
                                                    <td>{{ $equipe->equipe_id }}</td>
                                                    <td>{{ $equipe->nome }}</td>
                                                    <td>{{ $equipe->cidade->nome }}</td>
                                                    <td>
                                                        <span class="badge bg-primary text-white">
                                                            {{ ucfirst(str_replace('_', ' ', $equipe->modalidade)) }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $equipe->instituicao }}</td>
                                                    <td>{{ $equipe->estudantes_count ?? 0 }}</td>
                                                    <td>
                                                        @if($equipe->apresentacao_path)
                                                            <span class="badge bg-success text-white">Enviada</span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">Pendente</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-info" onclick="viewEquipeDetails('{{ $equipe->equipe_id }}')">
                                                            <i class="fa fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- Calendar Tab -->
                            <div class="tab-pane fade" id="calendar-tab">
                                <div class="admin-header">
                                    <h2 class="admin-title">Calendário de Eventos</h2>
                                    
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm" id="calendarTreinamentos">Treinamentos</button>
                                        <button class="btn btn-outline-secondary btn-sm" id="calendarBancas">Bancas</button>
                                        <button class="btn btn-outline-secondary btn-sm active" id="calendarTodos">Todos</button>
                                    </div>
                                </div>
                                
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Export Modal -->
    <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-labelledby="exportModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exportModalLabel">Exportar Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Selecione o formato de exportação:</p>
                    
                    <div class="list-group">
                        <a href="{{ route('ideasun.admin.export', ['type' => 'cidades', 'format' => 'excel']) }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-file-excel-o mr-2 text-success"></i> Excel - Lista de Cidades
                        </a>
                        <a href="{{ route('ideasun.admin.export', ['type' => 'equipes', 'format' => 'excel']) }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-file-excel-o mr-2 text-success"></i> Excel - Lista de Equipes
                        </a>
                        <a href="{{ route('ideasun.admin.export', ['type' => 'agendamentos', 'format' => 'excel']) }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-file-excel-o mr-2 text-success"></i> Excel - Agendamentos
                        </a>
                        <a href="{{ route('ideasun.admin.export', ['type' => 'all', 'format' => 'pdf']) }}" class="list-group-item list-group-item-action">
                            <i class="fa fa-file-pdf-o mr-2 text-danger"></i> PDF - Relatório Completo
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    @include('ideasun.partials.footer')

    <!-- JAVASCRIPTS -->
    <script src="/plugins/jquery/jquery.js"></script>
    <script src="/plugins/popper/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.min.js"></script>
    <script src="/js/custom.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa o FullCalendar
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listMonth'
                },
                locale: 'pt-br',
                events: @json($eventos),
                eventClassNames: function(arg) {
                    return [ 'calendar-event' ];
                },
                eventClick: function(info) {
                    alert(info.event.title + '\n' + 
                          'Tipo: ' + info.event.extendedProps.tipo + '\n' + 
                          'Cidade: ' + info.event.extendedProps.cidade);
                }
            });
            calendar.render();
            
            // Filtros do calendário
            document.getElementById('calendarTreinamentos').addEventListener('click', function() {
                calendar.getEvents().forEach(function(event) {
                    if(event.extendedProps.tipo === 'treinamento') {
                        event.setProp('display', 'auto');
                    } else {
                        event.setProp('display', 'none');
                    }
                });
                
                // Atualizar estado dos botões
                document.querySelectorAll('#calendar-tab .btn-group button').forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
            
            document.getElementById('calendarBancas').addEventListener('click', function() {
                calendar.getEvents().forEach(function(event) {
                    if(event.extendedProps.tipo === 'banca') {
                        event.setProp('display', 'auto');
                    } else {
                        event.setProp('display', 'none');
                    }
                });
                
                // Atualizar estado dos botões
                document.querySelectorAll('#calendar-tab .btn-group button').forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
            
            document.getElementById('calendarTodos').addEventListener('click', function() {
                calendar.getEvents().forEach(function(event) {
                    event.setProp('display', 'auto');
                });
                
                // Atualizar estado dos botões
                document.querySelectorAll('#calendar-tab .btn-group button').forEach(function(btn) {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
            });
            
            // Busca nas tabelas
            $("#cidadeSearch").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $("#cidadesTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            
            $("#equipeSearch").on("keyup", function() {
                const value = $(this).val().toLowerCase();
                $("#equipesTable tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            
            // Preservar a tab ativa ao recarregar
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                localStorage.setItem('activeAdminTab', $(e.target).attr('href'));
            });
            
            const activeTab = localStorage.getItem('activeAdminTab');
            if(activeTab){
                $('.nav-link[href="' + activeTab + '"]').tab('show');
            }
        });
        
        // Funções para visualizar detalhes
        function viewCidadeDetails(cidadeId) {
            window.location.href = "{{ url('ideasun/admin/cidade') }}/" + cidadeId;
        }

        function viewEquipeDetails(equipeId) {
            window.location.href = "{{ url('ideasun/admin/equipe') }}/" + equipeId;
        }
    </script>
</body>
</html>