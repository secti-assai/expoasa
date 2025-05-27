<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Avaliadores - Admin IDEASUN</title>
    
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
            vertical-align: middle;
        }
        
        .data-table tr:hover {
            background-color: #f9f9f9;
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
        
        .tab-pane {
            padding: 25px 0;
        }
        
        .nivel-badge {
            font-size: 0.85rem;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
        }
        
        .nivel-1 {
            background-color: #e9ecef;
            color: #495057;
        }
        
        .nivel-2 {
            background-color: #cff4fc;
            color: #055160;
        }
        
        .nivel-3 {
            background-color: #d1e7dd;
            color: #0a3622;
        }
        
        .tipo-badge {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 3px 6px;
            border-radius: 3px;
            background-color: #f8f9fa;
            color: #495057;
        }
        
        .actions-col {
            width: 150px;
        }
        
        .status-indicator {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }
        
        .status-active {
            background-color: #28a745;
        }
        
        .status-inactive {
            background-color: #dc3545;
        }
        
        .tipo-municipal { background-color: #e9ecef; }
        .tipo-regional { background-color: #fff3cd; }
        .tipo-repescagem { background-color: #d1e7dd; }
        .tipo-especial { background-color: #cff4fc; }
        
        .nivel-heading {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background: #f8f9fa;
            border-radius: 6px;
            margin-bottom: 15px;
            border-left: 4px solid #3f51b5;
        }
        
        .filtro-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .filtro-btn {
            background-color: #f8f9fa;
            border: 1px solid #eee;
            border-radius: 50px;
            padding: 8px 15px;
            font-size: 0.9rem;
            color: #495057;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filtro-btn:hover,
        .filtro-btn.active {
            background-color: #3f51b5;
            border-color: #3f51b5;
            color: #fff;
        }
        
        .form-section {
            background-color: #f9f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid #3f51b5;
        }
        
        .form-section-title {
            margin-bottom: 15px;
            color: #3f51b5;
            font-weight: 600;
        }
        
        .input-error {
            border-color: #dc3545;
        }
        
        .required-indicator {
            color: #dc3545;
        }
        
        .debug-info {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin-top: 20px;
            font-family: monospace;
            font-size: 12px;
        }
    </style>
</head>
<body class="body-wrapper">

    @include('ideasun.partials.navbar')

    <section class="admin-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('ideasun.admin.dashboard') }}" class="back-btn">
                        <i class="fa fa-arrow-left mr-2"></i> Voltar para Dashboard
                    </a>
                    
                    <h1 class="mb-4">Gerenciamento de Avaliadores</h1>
                    
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
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <i class="fa fa-exclamation-triangle mr-2"></i>Foram encontrados erros no formulário:
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-12">
                    <div class="admin-card">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab">
                                    <i class="fa fa-list mr-2"></i>Listar Avaliadores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="create-tab" data-toggle="tab" href="#create" role="tab">
                                    <i class="fa fa-plus-circle mr-2"></i>Adicionar Avaliador
                                </a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <!-- Tab: Listar Avaliadores -->
                            <div class="tab-pane fade show active" id="list" role="tabpanel">
                                <div class="filtro-container">
                                    <button type="button" class="filtro-btn active" data-nivel="todos">Todos</button>
                                    <button type="button" class="filtro-btn" data-nivel="1">Nível 1 (Municipal)</button>
                                    <button type="button" class="filtro-btn" data-nivel="2">Nível 2 (Repescagem)</button>
                                    <button type="button" class="filtro-btn" data-nivel="3">Nível 3 (Especial)</button>
                                </div>
                                
                                <div class="search-box mb-4">
                                    <i class="fa fa-search"></i>
                                    <input type="text" id="searchAvaliadores" class="form-control" placeholder="Buscar avaliadores por nome, CPF, cidade...">
                                </div>
                                
                                @if(count($avaliadores) > 0)
                                    @foreach($avaliadores as $nivel => $avaliadoresNivel)
                                        <div class="nivel-group" data-nivel="{{ $nivel }}">
                                            <div class="nivel-heading">
                                                <h4 class="mb-0">
                                                    <i class="fa fa-users mr-2"></i>
                                                    Avaliadores Nível {{ $nivel }}
                                                    <span class="badge badge-primary ml-2">{{ count($avaliadoresNivel) }}</span>
                                                </h4>
                                            </div>
                                            
                                            <div class="table-responsive">
                                                <table class="data-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>CPF</th>
                                                            <th>Telefone</th>
                                                            <th>Cidade</th>
                                                            <th>Tipo</th>
                                                            <th>Status</th>
                                                            <th class="actions-col">Ações</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($avaliadoresNivel as $avaliador)
                                                            <tr>
                                                                <td>
                                                                    {{ $avaliador->nome }}
                                                                    <span class="nivel-badge nivel-{{ $avaliador->nivel }} ml-2">Nível {{ $avaliador->nivel }}</span>
                                                                </td>
                                                                <td>{{ $avaliador->cpf }}</td>
                                                                <td>{{ $avaliador->telefone }}</td>
                                                                <td>{{ $avaliador->cidade->nome }}</td>
                                                                <td>
                                                                    <span class="tipo-badge tipo-{{ $avaliador->tipo }}">
                                                                        {{ ucfirst($avaliador->tipo) }}
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <span class="status-indicator {{ $avaliador->ativo ? 'status-active' : 'status-inactive' }}"></span>
                                                                    {{ $avaliador->ativo ? 'Ativo' : 'Inativo' }}
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-sm btn-info edit-avaliador" 
                                                                            data-id="{{ $avaliador->id }}"
                                                                            data-nome="{{ $avaliador->nome }}"
                                                                            data-cpf="{{ $avaliador->cpf }}"
                                                                            data-telefone="{{ $avaliador->telefone }}"
                                                                            data-cidade="{{ $avaliador->cidade_id }}"
                                                                            data-nivel="{{ $avaliador->nivel }}"
                                                                            data-tipo="{{ $avaliador->tipo }}"
                                                                            data-ativo="{{ $avaliador->ativo }}">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>
                                                                        
                                                                        <a href="{{ route('ideasun.admin.alternar-status-avaliador', $avaliador->id) }}" 
                                                                           class="btn btn-sm {{ $avaliador->ativo ? 'btn-warning' : 'btn-success' }}"
                                                                           onclick="return confirm('Deseja {{ $avaliador->ativo ? 'desativar' : 'ativar' }} este avaliador?')">
                                                                            <i class="fa {{ $avaliador->ativo ? 'fa-ban' : 'fa-check' }}"></i>
                                                                        </a>
                                                                        
                                                                        <form action="{{ route('ideasun.admin.excluir-avaliador', $avaliador->id) }}" method="POST" style="display: inline;">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                                                onclick="return confirm('Tem certeza que deseja excluir este avaliador? Esta ação não poderá ser desfeita.')">
                                                                                <i class="fa fa-trash"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle mr-2"></i>
                                        Nenhum avaliador cadastrado no sistema.
                                    </div>
                                @endif
                            </div>
                            
                            <!-- Tab: Adicionar Avaliador -->
                            <div class="tab-pane fade" id="create" role="tabpanel">
                                <h4 class="mb-3">Adicionar Novo Avaliador</h4>
                                
                                <form action="{{ route('ideasun.admin.salvar-avaliador') }}" method="POST" id="avaliadorForm">
                                    @csrf
                                    <input type="hidden" name="avaliador_id" id="avaliador_id" value="{{ old('avaliador_id') }}">
                                    
                                    <div class="form-section">
                                        <h5 class="form-section-title">Dados Pessoais</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Nome Completo <span class="required-indicator">*</span></label>
                                                    <input type="text" class="form-control {{ $errors->has('nome') ? 'input-error' : '' }}" 
                                                           id="nome" name="nome" value="{{ old('nome') }}" required>
                                                    @if ($errors->has('nome'))
                                                        <small class="text-danger">{{ $errors->first('nome') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cpf">CPF <span class="required-indicator">*</span></label>
                                                    <input type="text" class="form-control cpf-mask {{ $errors->has('cpf') ? 'input-error' : '' }}" 
                                                           id="cpf" name="cpf" value="{{ old('cpf') }}" required>
                                                    @if ($errors->has('cpf'))
                                                        <small class="text-danger">{{ $errors->first('cpf') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telefone">Telefone <span class="required-indicator">*</span></label>
                                                    <input type="text" class="form-control telefone-mask {{ $errors->has('telefone') ? 'input-error' : '' }}" 
                                                           id="telefone" name="telefone" value="{{ old('telefone') }}" required>
                                                    @if ($errors->has('telefone'))
                                                        <small class="text-danger">{{ $errors->first('telefone') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cidade_id">Cidade <span class="required-indicator">*</span></label>
                                                    <select class="form-control {{ $errors->has('cidade_id') ? 'input-error' : '' }}" 
                                                            id="cidade_id" name="cidade_id" required>
                                                        <option value="">Selecione uma cidade</option>
                                                        @foreach($cidades as $cidade)
                                                            <option value="{{ $cidade->id }}" {{ old('cidade_id') == $cidade->id ? 'selected' : '' }}>
                                                                {{ $cidade->nome }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('cidade_id'))
                                                        <small class="text-danger">{{ $errors->first('cidade_id') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-section">
                                        <h5 class="form-section-title">Tipo e Nível de Acesso</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nivel">Nível <span class="required-indicator">*</span></label>
                                                    <select class="form-control {{ $errors->has('nivel') ? 'input-error' : '' }}" 
                                                            id="nivel" name="nivel" required>
                                                        <option value="1" {{ old('nivel') == 1 ? 'selected' : '' }}>Nível 1 - Avaliador Municipal</option>
                                                        <option value="2" {{ old('nivel') == 2 ? 'selected' : '' }}>Nível 2 - Avaliador de Repescagem</option>
                                                        <option value="3" {{ old('nivel') == 3 ? 'selected' : '' }}>Nível 3 - Avaliador Especial</option>
                                                    </select>
                                                    @if ($errors->has('nivel'))
                                                        <small class="text-danger">{{ $errors->first('nivel') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tipo">Tipo <span class="required-indicator">*</span></label>
                                                    <select class="form-control {{ $errors->has('tipo') ? 'input-error' : '' }}" 
                                                            id="tipo" name="tipo" required>
                                                        <option value="municipal" {{ old('tipo') == 'municipal' ? 'selected' : '' }}>Municipal</option>
                                                        <option value="regional" {{ old('tipo') == 'regional' ? 'selected' : '' }}>Regional</option>
                                                        <option value="repescagem" {{ old('tipo') == 'repescagem' ? 'selected' : '' }}>Repescagem</option>
                                                        <option value="especial" {{ old('tipo') == 'especial' ? 'selected' : '' }}>Especial</option>
                                                    </select>
                                                    @if ($errors->has('tipo'))
                                                        <small class="text-danger">{{ $errors->first('tipo') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="ativo" name="ativo" 
                                                      {{ old('ativo') !== null ? 'checked' : 'checked' }}>
                                                <label class="custom-control-label" for="ativo">Avaliador Ativo</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group" id="resetSenhaGroup" style="display: none;">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="resetar_senha" name="resetar_senha" 
                                                  {{ old('resetar_senha') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="resetar_senha">Redefinir senha para os 6 primeiros dígitos do CPF</label>
                                        </div>
                                    </div>
                                    
                                    <div class="alert alert-info" id="senhaInfoAlert">
                                        <i class="fa fa-info-circle mr-2"></i>
                                        <strong>Informação:</strong> A senha inicial será os 6 primeiros dígitos do CPF.
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" id="submitBtn">
                                            <i class="fa fa-save mr-2"></i>Salvar Avaliador
                                        </button>
                                        <button type="button" class="btn btn-secondary ml-2" id="cancelEditBtn" style="display: none;">
                                            <i class="fa fa-times mr-2"></i>Cancelar Edição
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <h5><i class="fa fa-lightbulb-o mr-2"></i>Sobre os Níveis de Avaliadores</h5>
                        <p>Os avaliadores são classificados em diferentes níveis com base em suas funções:</p>
                        <ul>
                            <li><strong>Nível 1 (Municipal):</strong> Avaliadores que participam das bancas municipais e avaliam equipes de outras cidades.</li>
                            <li><strong>Nível 2 (Repescagem):</strong> Avaliadores que participam da fase de repescagem, avaliando equipes que não foram selecionadas inicialmente.</li>
                            <li><strong>Nível 3 (Especial):</strong> Avaliadores com permissões especiais, como avaliação de equipes na fase final da EXPOASA.</li>
                        </ul>
                        <p>Todos os avaliadores recebem acesso ao sistema com o CPF como login e os 6 primeiros dígitos do CPF como senha inicial.</p>
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
            // Verificar se há erros e mostrar a aba correta
            @if($errors->any() || session('error'))
                $('#create-tab').tab('show');
            @endif
            
            // Verificar se estamos em modo de edição
            @if(old('avaliador_id'))
                $('#resetSenhaGroup').show();
                $('#senhaInfoAlert').hide();
                $('#cancelEditBtn').show();
                $('#submitBtn').html('<i class="fa fa-save mr-2"></i>Atualizar Avaliador');
            @endif
            
            // Aplicar máscaras de CPF e telefone
            $('.cpf-mask').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.substring(0, 11);
                }
                
                if (value.length <= 3) {
                    $(this).val(value);
                } else if (value.length <= 6) {
                    $(this).val(value.substring(0, 3) + '.' + value.substring(3));
                } else if (value.length <= 9) {
                    $(this).val(value.substring(0, 3) + '.' + value.substring(3, 6) + '.' + value.substring(6));
                } else {
                    $(this).val(value.substring(0, 3) + '.' + value.substring(3, 6) + '.' + 
                        value.substring(6, 9) + '-' + value.substring(9));
                }
            });
            
            $('.telefone-mask').on('input', function() {
                let value = $(this).val().replace(/\D/g, '');
                if (value.length > 11) {
                    value = value.substring(0, 11);
                }
                
                if (value.length <= 2) {
                    $(this).val(value);
                } else if (value.length <= 6) {
                    $(this).val('(' + value.substring(0, 2) + ') ' + value.substring(2));
                } else if (value.length <= 10) {
                    $(this).val('(' + value.substring(0, 2) + ') ' + value.substring(2, 6) + '-' + value.substring(6));
                } else {
                    $(this).val('(' + value.substring(0, 2) + ') ' + value.substring(2, 7) + '-' + value.substring(7));
                }
            });
            
            // Preservar tab ativa ao recarregar
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                localStorage.setItem('activeAvaliadorTab', $(e.target).attr('href'));
            });
            
            const activeTab = localStorage.getItem('activeAvaliadorTab');
            if (activeTab && !@json($errors->any()) && !@json(session('error'))) {
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
            
            // Busca de avaliadores
            $('#searchAvaliadores').on('keyup', function() {
                const value = $(this).val().toLowerCase();
                $('.data-table tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
                
                // Verificar se há avaliadores visíveis em cada grupo
                $('.nivel-group').each(function() {
                    const visibleRows = $(this).find('tbody tr:visible').length;
                    $(this).toggle(visibleRows > 0);
                });
            });
            
            // Filtrar por nível
            $('.filtro-btn').click(function() {
                $('.filtro-btn').removeClass('active');
                $(this).addClass('active');
                
                const nivel = $(this).data('nivel');
                
                if (nivel === 'todos') {
                    $('.nivel-group').show();
                } else {
                    $('.nivel-group').hide();
                    $(`.nivel-group[data-nivel="${nivel}"]`).show();
                }
            });
            
            // Editar avaliador
            $('.edit-avaliador').click(function() {
                const id = $(this).data('id');
                const nome = $(this).data('nome');
                const cpf = $(this).data('cpf');
                const telefone = $(this).data('telefone');
                const cidade = $(this).data('cidade');
                const nivel = $(this).data('nivel');
                const tipo = $(this).data('tipo');
                const ativo = $(this).data('ativo');
                
                // Preencher o formulário
                $('#avaliador_id').val(id);
                $('#nome').val(nome);
                $('#cpf').val(formatarCPF(cpf));
                $('#telefone').val(telefone);
                $('#cidade_id').val(cidade);
                $('#nivel').val(nivel);
                $('#tipo').val(tipo);
                $('#ativo').prop('checked', ativo == 1);
                
                // Mostrar/ocultar elementos
                $('#resetSenhaGroup').show();
                $('#senhaInfoAlert').hide();
                $('#cancelEditBtn').show();
                $('#submitBtn').html('<i class="fa fa-save mr-2"></i>Atualizar Avaliador');
                
                // Mudar para a aba de criação
                $('#create-tab').tab('show');
            });
            
            // Cancelar edição
            $('#cancelEditBtn').click(function() {
                // Limpar formulário
                $('#avaliadorForm')[0].reset();
                $('#avaliador_id').val('');
                
                // Ocultar/mostrar elementos
                $('#resetSenhaGroup').hide();
                $('#senhaInfoAlert').show();
                $('#cancelEditBtn').hide();
                $('#submitBtn').html('<i class="fa fa-save mr-2"></i>Salvar Avaliador');
            });
            
            // Atualizar nível com base no tipo
            $('#tipo').change(function() {
                const tipo = $(this).val();
                
                switch(tipo) {
                    case 'municipal':
                    case 'regional':
                        $('#nivel').val(1);
                        break;
                    case 'repescagem':
                        $('#nivel').val(2);
                        break;
                    case 'especial':
                        $('#nivel').val(3);
                        break;
                }
            });
            
            // Atualizar tipo com base no nível
            $('#nivel').change(function() {
                const nivel = $(this).val();
                
                switch(nivel) {
                    case '1':
                        if ($('#tipo').val() === 'repescagem' || $('#tipo').val() === 'especial') {
                            $('#tipo').val('municipal');
                        }
                        break;
                    case '2':
                        $('#tipo').val('repescagem');
                        break;
                    case '3':
                        $('#tipo').val('especial');
                        break;
                }
            });
            
            // Verificar o formulário antes de enviar
            $('#avaliadorForm').on('submit', function(e) {
                // Remover pontuações do CPF antes de enviar
                const cpfInput = $('#cpf');
                cpfInput.val(cpfInput.val().replace(/\D/g, ''));
                
                // Verificar se o CPF tem 11 dígitos
                if (cpfInput.val().length !== 11) {
                    e.preventDefault();
                    alert('O CPF deve ter 11 dígitos.');
                    cpfInput.val(formatarCPF(cpfInput.val())); // Reformatar CPF para visualização
                    return false;
                }
                
                return true;
            });
            
            // Funções utilitárias
            function formatarCPF(cpf) {
                cpf = cpf.replace(/\D/g, '');
                if (cpf.length <= 3) {
                    return cpf;
                } else if (cpf.length <= 6) {
                    return cpf.substring(0, 3) + '.' + cpf.substring(3);
                } else if (cpf.length <= 9) {
                    return cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + cpf.substring(6);
                } else {
                    return cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + 
                        cpf.substring(6, 9) + '-' + cpf.substring(9, 11);
                }
            }
        });
    </script>
</body>
</html>