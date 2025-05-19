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
            @if (session('error'))
            <div class="alert alert-danger" style="margin-top: 10px">
                {{ session('error') }}
            </div>
            @endif

            <div class="row" style="margin: 20px 0 0 0">

                <div class="col-md-7 col-lg-8">
                    <form action="{{route('sortear')}}" method="post" id="formPre">
                        @csrf()

                        <div class="shadow-sm rounded my-4 p-4">
                            <h4 class="text-center">O SORTEADO FOI:</h4>

                            <table style="margin: 50px auto">
                                <tbody>
                                    @foreach ($resultados as $resultado)
                                    <tr>
                                        <td class="text-center"><h6>CPF Nº {{ substr($resultado->cpf, 0,3) }}.XXX.XXX-XX</h6></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><h1>{{ $resultado->nome }}</h1></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td class="text-center"><a href="/sorteio">Voltar</a></td>
                                    </tr>
                                </tbody>
                            </table>

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

</body>

</html>
