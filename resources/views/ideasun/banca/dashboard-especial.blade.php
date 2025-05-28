<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Especial - IDEASUN</title>
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    @include('ideasun.partials.navbar')

    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4"><i class="fa fa-star mr-2"></i>Avaliação Especial</h2>
                    <p class="text-muted">Avalie as equipes classificadas para a EXPOASA.</p>
                </div>
            </div>

            @if($equipesNaoAvaliadas->count() > 0)
                <div class="row">
                    @foreach($equipesNaoAvaliadas as $equipe)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5>{{ $equipe->nome }}</h5>
                                    <p><strong>Integrantes:</strong> {{ $equipe->membros->pluck('nome')->implode(', ') }}</p>
                                    <a href="{{ route('ideasun.banca.avaliar', ['equipe_id' => $equipe->id]) }}" class="btn btn-primary">
                                        Avaliar
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info">
                    <i class="fa fa-info-circle mr-2"></i>Todas as equipes foram avaliadas!
                </div>
            @endif

            <div class="row mt-4">
                <div class="col-12">
                    <h4>Avaliações Realizadas</h4>
                    @if($avaliacoes->count() > 0)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Equipe</th>
                                    <th>Pontuação</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($avaliacoes as $avaliacao)
                                    <tr>
                                        <td>{{ $avaliacao->equipe_nome }}</td>
                                        <td>{{ $avaliacao->nota_total }}/100</td>
                                        <td>{{ \Carbon\Carbon::parse($avaliacao->created_at)->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-warning">
                            <i class="fa fa-info-circle mr-2"></i>Você ainda não realizou nenhuma avaliação.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('ideasun.partials.footer')
</body>
</html>