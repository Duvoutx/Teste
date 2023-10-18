<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <?php
    session_start(); //Inicia uma nova sessão ou resume uma sessão existente
    if ((!isset($_SESSION['Nome']) == true) and (!isset($_SESSION['senha']) == true)) {
        session_unset(); //remove todas as variáveis de sessão
        echo "<script>
                    alert('Esta página só pode ser acessada por usuário logado');
                    window.location.href = 'exemplo.html';
                    </script>";
    }
    $logado = $_SESSION['Nome'];
    ?>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Bem vindo ao Lan House's</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <span class="fs-4">Lan House's</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="maquinasLogado.php">Maquinas</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="contactLogado.php">Contato</a>
                    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="Gerencia.php">Gerenciar</a>
                    <a class="py-2 link-body-emphasis text-decoration-none" href="logout.php">Sair</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Preços</h1>
                <p class="fs-5 text-body-secondary">Venha dar uma olhada em nossos valores, cada aparelho tem seu preço baseado
                    na qualidade e potência.</p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Xbox One</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$5<small class="text-body-secondary fw-light">/Hora</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Até 2 jogadores</li>
                                <li>500 tipos de jogos</li>
                                <li>Acesso a Internet</li>
                                <li>3 maquinas disponíveis</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">PS5</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$10<small class="text-body-secondary fw-light">/Hora</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Até 4 jogadores</li>
                                <li>250 tipos de jogos</li>
                                <li>Acesso a Internet</li>
                                <li>3 maquinas disponíveis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                        <div class="card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">PC</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">R$8<small class="text-body-secondary fw-light">/Hora</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Até 5 jogadores</li>
                                <li>5000 tipos de jogos</li>
                                <li>Acesso a Internet e LAN</li>
                                <li>3 maquinas disponíveis</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Compare os planos</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <th style="width: 22%;">Xbox One</th>
                            <th style="width: 22%;">PS5</th>
                            <th style="width: 22%;">PC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">144Hz</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">144Fps</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>

                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <th scope="row" class="text-start">Jogos pagos e gratuítos</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start">Discord</th>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                            <td><svg class="bi" width="24" height="24">
                                    <use xlink:href="#check" />
                                </svg></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </main>

        <footer class="pt-3 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2">
                </div>
                <div class="col-6 col-md">
                    <h5>Diverção</h5>
                </div>
                <div class="col-6 col-md">
                    <h5>Sempre</h5>
                </div>
                <div class="col-6 col-md">
                    <h5>Garantida</h5>
                </div>
            </div>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <Style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: 0;
        }

        body {
            background-image: url(img/nuvens.jpg);
            background-size: cover;
        }
    </Style>
</body>

</html>