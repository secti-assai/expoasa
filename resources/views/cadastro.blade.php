<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expoasa 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Themefisher Font -->
    <link href="/plugins/themefisher-font/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="/plugins/slick/slick.css" rel="stylesheet">
    <link href="/plugins/slick/slick-theme.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="/assets/favicon/favicon.ico">

</head>

<body>

    <!--========================================
        =            Navigation Section            =
        =========================================-->

        <nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
            <div class="container-fluid p-0">

                <!-- logo -->
                <a class="navbar-brand" href="/credenciamento">
                    <img src="/assets/img/logo_laca.png" alt="Liga das Associações Culturais de Assaí - LACA">
                </a>

                <a class="navbar-pg" href="https://www.gov.br/cultura/pt-br/assuntos/lei-paulo-gustavo" target="_blank">
                    <img src="/assets/images/horizontal_preferencial.png" alt="Logo Lei Paulo Gustavo">
                </a>

            </div>

        </nav>

        <!--====  End of Navigation Section  ====-->

        <div class="container" style="margin: 150px auto">
            <div class="row">
                <div class="text-center">
                    <img src="/assets/img/logo_expoasa.png" alt="78ª Expoasa" class="d-block mx-auto mb-4" style="width: 30%">

                    <h2>Cadastro de Premiações</h2>
                    <p class="lead">Preencha o Formulário abaixo e concorra a diversos prêmios durante o evento.</p>
                </div>
            </div>

            @if (session('error'))
            <div class="alert alert-danger" style="margin-top: 10px">
                {{ session('error') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" style="margin-top: 10px">
                {{ session('success') }}
            </div>
            @endif

            <div class="row" style="margin: 20px 0 0 0">

                <div class="col-md-7 col-lg-8">
                    <form action="{{route('create')}}" method="post" id="formPre">
                        @csrf()
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="txtNome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control uppercase" id="txtNome" name="txtNome" placeholder="" value="" required>
                            </div>

                            <div class="col-12">
                                <label for="txtCPF" class="form-label">CPF <span class="text-body-secondary">(Apenas os números)</span></label>
                                <input type="text" class="form-control" id="txtCPF" name="txtCPF" placeholder="">
                            </div>

                            <div class="col-12">
                                <label for="txtEnd" class="form-label">Endereço</label>
                                <input type="text" class="form-control uppercase" id="txtEnd" name="txtEnd" placeholder="" required>
                            </div>

                            <div class="col-12">
                                <label for="txtCidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control uppercase" id="txtCidade" name="txtCidade" placeholder="" required>
                            </div>

                            <div class="col-12">
                                <label for="txtContato" class="form-label">Contato</label>
                                <input type="text" class="form-control" id="txtContato" name="txtContato" placeholder="" required>
                            </div>

                            <div class="col-12">
                                <label for="txtNascimento" class="form-label">Data de Nascimento</label>
                                <input type="text" class="form-control" id="txtNascimento" name="txtNascimento" placeholder="" required>
                            </div>

                            <hr class="my-4">

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="txtLGPD" name="txtLGPD">
                                <label class="form-check-label" for="txtLGPD">Este cadastro visa registrar a manifestação livre, informada e inequívoca pela qual o Titular concorda com o tratamento de seus dados pessoais para finalidade específica, em conformidade com a Lei nº 13.709 – Lei Geral de Proteção de Dados Pessoais (LGPD).</label>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar na Premiação</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div id="messageBox" class="modal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content ">
                <div class="modal-header bg-danger text-white">
                  <h5 class="modal-title">ERRO NO ENVIO DO FORMULÁRIO</h5>
                  <button type="button" class="btn-close" onclick="$('#messageBox').hide();" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" onclick="$('#messageBox').hide();">Fechar</button>
                </div>
              </div>
            </div>
    </div>





    <!-- JAVASCRIPTS -->
    <!-- jQuey -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Popper js -->
    <script src="plugins/popper/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Smooth Scroll -->
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <!-- Isotope -->
    <script src="plugins/isotope/mixitup.min.js"></script>
    <!-- Magnific Popup -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- SyoTimer -->
    <script src="plugins/syotimer/jquery.syotimer.min.js"></script>

    <script src="{{ asset('plugins/jquery/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('plugins/maskedinput/jquery-maskedinput.js') }}"></script>
    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function () {
            $("#txtCPF").mask("999.999.999-99", {reverse: true});
            $("#txtContato").mask("(99) 99999-9999");
            $("#txtNascimento").mask("99/99/9999");
        });
    </script>

<script type="text/javascript">

    $( document ).ready( function () {
        $( "#formPre" ).validate( {
            errorContainer: "#messageBox",
            errorLabelContainer: "#messageBox .modal-body",
            wrapper: "li",
            rules: {
                txtNome: "required",
                txtCPF: "required",
                txtEnd: "required",
                txtCidade: "required",
                txtContato: "required",
                txtNascimento: "required",
                txtLGPD: "required"
            },
            messages: {
                txtNome: "Informe seu Nome Completo",
                txtCPF: "Informe seu CPF",
                txtEnd: "Informe seu Endereço",
                txtCidade: "Informe sua Cidade",
                txtContato: "Informe um celular para contato",
                txtNascimento: "Informe sua Data de Nascimento.",
                txtLGPD: "Confirme seu consentimento com a LGPD"
            }
        });

    });

    </script>

</body>

</html>
