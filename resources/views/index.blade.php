<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=10, minimum-scale=1.0"> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo')</title> 
    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">

    <link rel="stylesheet" href="{{asset('panel/plugins/fontawesome-free/css/all.min.css')}}">

    <script src="{{asset('panel/plugins/cropper/jquery-3.6.1.js')}}"></script>
    <script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="hhttps://cdnjs.com/libraries/jquery.mask"></script>
  
    <!-- Custom fonts for this template--> 
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    {{-- Modal conteúdo aulas --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="/cssp/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head> 

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">
                    <img src="../imgp/logo-site-estudando-musica.png" class="img-fluid float-start mr-auto" 
                    alt="Estudandomusica" width="120" height="100" class="rounded-circle">

                    <form class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100">
                        <ul class="navbar-nav">
                            <li class="nav-item ml-5"><a href="/local-matricula">Matrícula</a></li>
                            <li class="nav-item ml-5"><a href="#">Materiais</a></li>
                            <li class="nav-item ml-5"><a href="/dashboard/homeadmin">Painel</a></li>
                        </ul>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw" style="font-size: 18px;"></i>
                                <!-- Counter - Alerts -->
                                @if (Session::get('lg_permissao09'))
                                    <span class="badge badge-danger badge-counter" style="font-size: 14px;">
                                        {{ $user->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header" style="letter-spacing: 1px; font-size: 12px; font-weight: 400;">
                                    ALERTAS
                                </h6>
                                @if (Session::get('lg_permissao09'))
                                    @foreach (auth::User->unreadNotifications as $notification)
                                        <div class="d-flex flex-row align-items-center mt-2">
                                            <div class="col-1 mt-1 mb-1">
                                                <div class="icon-circle bg-warning" style="width: 24px; height: 24px;">
                                                    <i class="fas fa-exclamation-triangle text-white" style=""></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ml-2" style="color:rgb(0, 0, 0); letter-spacing: 1px; font-size: 14px; font-weight: 400;">
                                                <span>{{ Str::limit($notification->data ['mensagem'], 27) }}</span>
                                            </div>  
                                            <div class="col-2 d-flex p-0">
                                                <a style="font-size: 12px; text-decoration: none;" href="{{ route('markasred', $notification->id) }}">Excluir</a>  
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                    @endforeach
                                @endif
      
                                <a class="dropdown-item text-center small text-gray-500" style="margin-top: -10px;">Total de Alertas</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
   
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none mt-2 d-lg-inline text-gray-400 small">
                                    @auth
                                        <h6>{{ auth()->user()->firstName}}</h6>
                                    @endauth
                                </span>
                                
                                {{-- <h6> Login </h6> --}}
                                @if (Session::get('lg_foto'))
                                <img class="img-profile rounded-circle" src="{{asset('img/alunos')}}/{{ Session::get('lg_nome_foto') }}" style="width: 100%">
                                @else
                                <img class="img-profile rounded-circle" src="{{asset('img/user.png')}}" style="width: 100%;">
                                @endif
                            </a>
                        
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                @auth
                                <a class="dropdown-item" href="/dashboard/homeadmin">
                                    <i class="fas fa-light fa-chart-line fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Meu Painel
                                </a>
                                @else
                                <a class="dropdown-item mb-1" href="/local-matricula">
                                    <i class="far fa-address-card fa-fw mr-2 text-gray-400"></i>
                                    Matrícula
                                </a>
                                @endauth
                                <div class="dropdown-divider"></div>
                                @auth
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fa fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                                @else
                                <a class="dropdown-item" href="/login">
                                    <i class="fas fa-sign-in-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                                    Entrar
                                </a>
                                @endauth
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
            </div>

            {{-- SLIDER --}}
            <main>
                <div class="container-fluid">
                    <div id="mainSlider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#mainSlider" data-slide-to="1"></li>
                            <li data-target="#mainSlider" data-slide-to="2"></li>
                            <li data-target="#mainSlider" data-slide-to="3"></li>
                            <li data-target="#mainSlider" data-slide-to="4"></li>
                            <li data-target="#mainSlider" data-slide-to="5"></li>
                        </ol>
                        {{-- inner --}}
                        <div class="carousel-fade">
                            <div class="carousel-item active">
                                <img src="../imgp/01-teclado-slider-estudando-musica.png" class="d-block w-100" alt="Projeto estudandomusica">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Teclado</h2> --}}
                                    {{-- <p>Do básico ao intermediário</p> --}}
                                    {{-- <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div>
                        
                            <div class="carousel-item">
                                <img src="../imgp/02-violão-slider-estudando-musica.png" class="d-block w-100" alt="Projeto">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Violão</h2>
                                    <p>Do básico ao intermediário</p>
                                    <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="../imgp/03-bateria-slider-estudando-musica.png" class="d-block w-100" alt="Pr">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Teclado</h2> --}}
                                    {{-- <p>Do básico ao intermediário</p> --}}
                                    {{-- <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div> 
                            <div class="carousel-item">
                                <img src="../imgp/04-contra-baixo-slider-estudando-musica.png" class="d-block w-100" alt="Pr">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Teclado</h2> --}}
                                    {{-- <p>Do básico ao intermediário</p> --}}
                                    {{-- <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div> 
                            <div class="carousel-item">
                                <img src="../imgp/05-iniciacao-ao-piano-slider-estudando-musica.png" class="d-block w-100" alt="Pr">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Teclado</h2> --}}
                                    {{-- <p>Do básico ao intermediário</p> --}}
                                    {{-- <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div> 
                            <div class="carousel-item">
                                <img src="../imgp/06-iniciacao-saxofone-slider-estudando-musica.png" class="d-block w-100" alt="Pr">
                                <div class="carousel-caption d-none d-md-block">
                                    {{-- <h2>Curso de Teclado</h2> --}}
                                    {{-- <p>Do básico ao intermediário</p> --}}
                                    {{-- <a href="#" class="main-btn">Ver curso</a> --}}
                                </div>
                            </div> 
                        </div>
                        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </main>

            <div class="text-center mt-5 mb-4">
                <h3>Cursos</h3>
            </div>

            {{-- CARDS --}}
            <div>
                <!-- Conteúdo teclado -->
                <div class="card" style="max-width: 100%; background-color: #AB9988">
                    <div class="row mt-4 ">
                        <div class="col-sm-6 col-12">
                            <img src="../imgi/01-banner-teclado-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                VER CONTEÚDO
                                </button>
                            </div>
                        </div>

                        <div class="content col-sm-6 col-12">
                            <img src="../imgi/ct1.png" class="img-fluid mb-3 rounded" style="float: left;" alt="Imagem responsiva">
                            <div class="content" style="text-align: left;">
                                <div class="table-responsive mb-3">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Curso - Teclado</h5>
                                                </div>
                                                <div class="modal-body mb-3">
                                                    <ul>
                                                        <h4>APOSTILA TECLADO VOL. 01</h4>
                                                        <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                        <li>CONHECENDO O TECLADO</li>
                                                        <li>FORMANDO ACORDES MAIORES</li>
                                                        <li>FORMANDO ACORDES MENORES</li>
                                                        <li>FORMANDO ACORDES COM SÉTIMA</li>
                                                        <li>CAMPO HARMÔNICO (C AO B)</li>
                                                        <li>SEQUENCIAS (C AO B)</li>
                                                        <li>EXERCÍCIOS DE TRANSPOSIÇÃO (C AO B)</li>
                                                        <li>APLICANDO EM MÚSICAS (C AO B)</li>
                                                        <li>TUA GRAÇA ME BASTA (TOM C)</li>
                                                        <li>SONDA-ME (TOM D)</li>
                                                        <li>QUERO SER COMO CRIANÇA (TOM E)</li>
                                                        <li>RARIDADE (TOM F)</li>
                                                        <li>PERTO QUERO ESTAR (TOM G)</li>
                                                        <li>FAZ CHOVER (TOM A)</li>
                                                        <li>DEUS DE ALIANÇA (TOM B)</li>

                                                        <h4 class="mt-2">APOSTILA TECLADO VOL. 02</h4>
                                                        <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                        <li>MONTANDO ACORDES DISSONANTES</li>
                                                        <li>SEQUENCIA DO (C AO B)</li>
                                                        <li>EXERCÍCIOS DE TRANSPOSIÇÃO (C AO B)</li>
                                                        <li>APLICANDO EM MÚSICAS (C AO B)</li>
                                                        <li>TUA GRAÇA ME BASTA (TOM C)</li>
                                                        <li>SONDA-ME USA-ME (TOM D)</li>
                                                        <li>QUERO SER COMO CRIANÇA (TOM E)</li>
                                                        <li>RARIDADE (TOM F)</li>
                                                        <li>LEVA-ME ALÉM (TOM G)</li>
                                                        <li>JOÃO VIU (TOM A)</li>
                                                        <li>EU ME RENDO (TOM B)</li>
                                                        <li>FORMAÇÃO ACORDES COM GRAUS</li>
                                                        <li>CAMPO HARMÔNICO MAIORES / MENORES.</li>
                                                        <li>ESCALAS MAIORES / MENORES.</li>
                                                        <li>EXERCÍCIOS DE TRANSP. (C ao B).</li>
                                                        <li>APLICANDO EM MÚSICAS (C AO B)</li>
                                                        <li>EXERCÍCIOS DEDILHADOS</li>
                                                        <li>APLICANDO EM MÚSICAS (C AO B)</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo violão gospel -->
                <div class="card" style="max-width: 100%;">
                    <div class="row mt-4">
                        <div class="d-none d-md-block d-xxl-none col-md-6">
                            <div class="table-responsive" style="text-align: right">
                                <img src="../imgi/02-banner-aluno-violão-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal2">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3" style="text-align: left">
                                                <ul>
                                                    <h4>APOSTILA OLUME 01:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>FORMAÇÃO DE ACORDES</li>
                                                    <li>MAIORES / MENORES</li>
                                                    <li>SEQUÊNCIA SIMPLIFICADA (C ao B)</li>
                                                    <li>EXERCÍCIOS TRANSP. (C ao B)</li>
                                                    <li>RITMOS: 37</li>
                                                    <li>DEDILHADOS: 10</li>
                                                    <li>MÚSICAS 50</li>

                                                    <h4 class="mt-2">APOSTILA VOLUME 02:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>FORMAÇÃO ACORDES DISSONANTES</li>
                                                    <li>MAIORES / MENORES</li>
                                                    <li>SEQUÊNCIA (C ao B)</li>
                                                    <li>EXERCÍCIOS TRANSP. (C ao B)</li>
                                                    <li>RITMOS: 150 VARIAÇÕES</li>
                                                    <li>DEDILHADOS: 20</li>
                                                    <li>ESTRUTURA ACORDES COM GRAUS</li>
                                                    <li>MÚSICAS: 60</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                VER CONTEÚD02
                                </button>
                                <button type="button" class="btn btn-dark mb-2 d-md-none col-sm-6" data-bs-toggle="modal" data-bs-target="#exampleModal22">
                                VER CONTEÚD03
                                </button>
                            </div>
                            <img src="../imgi/02-banner-violão-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: left;" alt="Imagem responsiva">
                        </div>
                    
                        <div class="d-md-none col-sm-6">
                            <div class="table-responsive" style="text-align: left">
                                <img src="../imgi/02-banner-aluno-violão-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModal22" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal22">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3">
                                                <ul>
                                                    <h4>APOSTILA VOLUME 01:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>FORMAÇÃO DE ACORDES</li>
                                                    <li>MAIORES / MENORES</li>
                                                    <li>SEQUÊNCIA SIMPLIFICADA (C ao B)</li>
                                                    <li>EXERCÍCIOS TRANSP. (C ao B)</li>
                                                    <li>RITMOS: 37</li>
                                                    <li>DEDILHADOS: 10</li>
                                                    <li>MÚSICAS 50</li>

                                                    <h4 class="mt-2">APOSTILA VOLUME 02:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>FORMAÇÃO ACORDES DISSONANTES</li>
                                                    <li>MAIORES / MENORES</li>
                                                    <li>SEQUÊNCIA (C ao B)</li>
                                                    <li>EXERCÍCIOS TRANSP. (C ao B)</li>
                                                    <li>RITMOS: 150 VARIAÇÕES</li>
                                                    <li>DEDILHADOS: 20</li>
                                                    <li>ESTRUTURA ACORDES COM GRAUS</li>
                                                    <li>MÚSICAS: 60</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo bateria -->
                <div class="card" style="max-width: 100%; background-color: #AB9988">
                    <div class="row mt-4 ">
                        <div class="col-sm-6 col-12">
                            <img src="../imgi/03-banner-bateria-estudandomusica.com.br.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                VER CONTEÚDO
                                </button>
                            </div>
                        </div>

                        <div class="content col-sm-6 col-12">
                                <img src="../imgi/03-banner-alunos-bateria.png" class="img-fluid mb-3 rounded" style="float: left;" alt="Imagem responsiva">
                            <div class="content" style="text-align: left;">
                                <div class="table-responsive mb-3">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Curso - Teclado</h5>
                                                </div>
                                                <div class="modal-body mb-3">
                                                    <ul>
                                                        <h4>APOSTILA BATERIA</h4>
                                                        <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                        <li>MAIS DE 1000 EXERCÍCIOS</li>
                                                        <li>MÚSICAS (SEM PARTITURA)</li>
                                                        <li>EXRCÍCIOS DE LEITURA</li>
                                                        <li>MÚSICAS (COM PARTITURAS)</li>
                                                        <h4 class="mt-3">DURAÇÃO 24 MESES</h4>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo contra baixo -->
                <div class="card" style="max-width: 100%;">
                    <div class="row mt-4">
                        <div class="d-none d-md-block d-xxl-none col-md-6">
                            <div class="table-responsive" style="text-align: right">
                                <img src="../imgi/04-banner-alunos-contra-baixo.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal4">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3" style="text-align: left">
                                                <ul>
                                                    <h4>MÉTODO: VOL. 01</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>1. SOBRE O AUTOR</li>
                                                    <li>2. O BAIXO ELÉTRICO</li>
                                                    <li>3. POSIÇÕES PARA TOCAR</li>
                                                    <li>4. AFINANDO COM O CD</li>
                                                    <li>5. AUTO AJUSTE</li>
                                                    <li>6. TÉCNICAS DA MÃO DIREITA</li>
                                                    <li>7. USANDO OS DEDOS</li>
                                                    <li>8. EXERCÍCIOS COM CORDA SOLTA</li>
                                                    <li>8. COMO LER A TABLATURA COM CORDAS SOLTAS</li>
                                                    <li>10. SIMBOLOS MUSICAIS</li>
                                                    <li>11. INDICAÇÕES DE COMPASSO</li>
                                                    <li>12. EXERCÍCIOS COM CORDA SOLTA</li>
                                                    <li>14. O ALFABETO MUSICAL</li>
                                                    <li>14. A MÃO ESQUERDA</li>
                                                    <li>16. NOTAS NA 4ª CORDA</li>
                                                    <li>18. NOTAS NA 3ª CORDA</li>
                                                    <li>20. MOVIN`</li>
                                                    <li>21. TRACKS</li>
                                                    <li>22. NOTAS NA 2ª CORDA</li>
                                                    <li>24. MELODIAS COM AS CORDAS (2ª, 3ª E 4ª)</li>
                                                    <li>25. GO EASY</li>
                                                    <li>26. NOTAS NA 1ª CORDA</li>
                                                    <li>28. MELODIAS COM AS CORDAS 1ª,, 2ª, 3ª E 4ª. </li>
                                                    <li>28. ROCK IT</li>
                                                    <li>28. COUNTRY MAN</li>
                                                    <li>30. COLCHEIAS</li>
                                                    <li>32. MELODIAS EM COLCHEIAS</li>
                                                    <li>32. WALKIN`</li>
                                                    <li>32. SIDEWINDER</li>
                                                    <li>33. HEAVY</li>
                                                    <li>34. INTRODUÇÃO À 5ª POSIÇÃO</li>
                                                    <li>35. NOTAS NA 4ª CORDA</li>
                                                    <li>36. NOTAS NA 3ª CORDA</li>
                                                    <li>37. NOTAS NA 3ª E 4ª CORDA</li>
                                                    <li>38. SOME JAZZ</li>
                                                    <li>38. BAROQUE SONG</li>
                                                    <li>39. NOTAS NA 2ª CORDA</li>
                                                    <li>40. NOTAS NA 1ª CORDA</li>
                                                    <li>41. NOTAS NA 2ª E 1ª CORDA</li>
                                                    <li>42. LIGADURAS</li>
                                                    <li>43. MELODIAS COM AS QUATRO CORDAS</li>
                                                    <li>43. SYNCHO</li>
                                                    <li>44. DANCE WITH ME</li>
                                                    <li>45. AS SEMÍNIMAS PONTILHADAS</li>
                                                    <li>46. QUADRANGLE</li>
                                                    <li>46. WHY NOT?</li>
                                                    <li>47. OH, YES!</li>

                                                    <h4 class="mt-2">MÉTODO: VOL. 02</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>1. REVISÃO DO VOL. 01</li>
                                                    <li>2. INTRODUÇÃO ÀS ESCALAS</li>
                                                    <li>3. ESCALA MAIOR</li>
                                                    <li>4. ARMADURAS</li>
                                                    <li>5. O CICLO DAS QUINTAS (OU QUARTAS)</li>
                                                    <li>6. MANUSEIO ESCALA MAIOR</li>
                                                    <li>7. ESCALA MAIOR NO CICLO DAS QUARTAS</li>
                                                    <li>10. COMBINANDO ESCALAS MAIORES</li>
                                                    <li>12. MELODIAS COM ESCALAS MAIOR</li>
                                                    <li>12. ROCK ON</li>
                                                    <li>12. DA NUT HAT</li>
                                                    <li>13. LIVE AND LEARN</li>
                                                    <li>14. ESCALAS MENORES</li>
                                                    <li>16. MANUSEIO DA ESCALA MENOR NATURAL</li>
                                                    <li>17. ESCALA MENOR NATURAL NO CICLO DAS QUARTAS</li>
                                                    <li>20. COMBINANDO AS ESCALAS MENORES</li>
                                                    <li>22. MELODIAS COM ESCALAS MENORES</li>
                                                    <li>22. JUST WALKING</li>
                                                    <li>22. AI FRESCO</li>
                                                    <li>23. GET DOWN</li>
                                                    <li>24. AS SEMICOLCHEIAS</li>
                                                    <li>25. A PAUSA DA SEMICOLCHEIA</li>
                                                    <li>26. AS SEMICOLCHEIAS NAS CORDAS SOLTAS</li>
                                                    <li>27. SEMICOLCHEIAS SIMPLES</li>
                                                    <li>29. SEMICOLCHEIAS E COLCHEIAS SIMPLES</li>
                                                    <li>31. COMBINANDO AS SEMICOLCHEIAS COM AS COLCHEIAS</li>
                                                    <li>32. COLCHEIA E SEMICOLCHEIA COM TRAVESSÃO</li>
                                                    <li>34. MELODIAS COM SEMICOLCHEIAS</li>
                                                    <li>34. PUNK</li>
                                                    <li>34. REGGAE RHYTHM</li>
                                                    <li>35. SOME FUNK</li>
                                                    <li>36. NOVAS TÉCNICAS PARA TOCAR COM A MÃO DIREITA</li>
                                                    <li>37. SLAPS COM CORDAS SOLTAS</li>
                                                    <li>38. MELODIAS COM O SLAP</li>
                                                    <li>38. THUMPER</li>
                                                    <li>38. SLEDGE HAMMER</li>
                                                    <li>39. O POP</li>
                                                    <li>40. O POP NAS CORDAS SOLTAS</li>
                                                    <li>41. MELODIAS COM POPS</li>
                                                    <li>41. POPPIN</li>
                                                    <li>41. ZIP DOWN</li>
                                                    <li>42. NOVAS TÉCNICAS DA MÃO ESQUERDA</li>
                                                    <li>43. MELODIAS COM HAMMER-NOS</li>
                                                    <li>43. DANCIN` IN THE STREETS</li>
                                                    <li>43. HONDO</li>
                                                    <li>44. PULL-OFFS</li>
                                                    <li>45. MELODIAS COM PULL-OFFS</li>
                                                    <li>45. LOOK OUT</li>
                                                    <li>45. TOO MUCH</li>
                                                    <li>46. REVISÃO 1</li>
                                                    <li>46. LAST CHANCE</li>
                                                    <li>47. REVISÃO 2</li>
                                                    <li>47. FLASH</li>

                                                    <h4 class="mt-2">MÉTODO: VOL. 03.</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>MÉTODO: DAN DEAN VOL. 03</li>
                                                    <li>2. REVISÃO DO LIVRO 2 - CONTECEITOS</li>
                                                    <li>3. ARMADURAS E TONS RELATIVOS MENORES</li>
                                                    <li>4. INTERVALOS</li>
                                                    <li>7. SEGUNDAS MENORES (SEMITONS)</li>
                                                    <li>8. MELODIAS COM SEGUNDAS MENORES (SEMITONS)</li>
                                                    <li>8. NO JOKE</li>
                                                    <li>9. SEGUNDAS MAIORES (TONS)</li>
                                                    <li>10. MELODIAS COM SEGUNDA MAIORES (TONS)</li>
                                                    <li>10. NIGHT WALK</li>
                                                    <li>11. TERCEIRAS (MAIOR E MENOR)</li>
                                                    <li>12. MÚSICAS COM TERCEIRAS</li>
                                                    <li>12. TRI-TUNE</li>
                                                    <li>13. NOVAS NOTAS DA 9ª À 12ª POSIÇÃO</li>
                                                    <li>14. QUARTAS (PERFEITA E AUMENTADA)</li>
                                                    <li>15. MELODIA COM QUARTAS</li>
                                                    <li>15. QUADRA</li>
                                                    <li>16. QUINTAS (PERFEITA E DIMINUTA)</li>
                                                    <li>17. MELODIAS COM QUINTAS PERFEITAS</li>
                                                    <li>17. PENTA PHONICS</li>
                                                    <li>18. SEXTAS (MAIOR E MENOR)</li>
                                                    <li>19. MELODIA COM SEXTAS</li>
                                                    <li>19. BLUE Nº6</li>
                                                    <li>20. SÉTIMAS (MAIOR E MENOR)</li>
                                                    <li>21. MELODIA COM SÉTIMAS MENORES</li>
                                                    <li>21. FUNK SEVEN</li>
                                                    <li>22. OITAVAS</li>
                                                    <li>23. MELODIAS COM OITAVAS</li>
                                                    <li>23. OCTAVE EXPRESS</li>
                                                    <li>24. COMBINANDO O SLAP E O POP</li>
                                                    <li>25. APLICANDO AS TÉCNICAS SLAP / POP</li>
                                                    <li>26. EXERCÍCIOS SLAP / POP</li>
                                                    <li>28. EXERCICIOS SLAP / POP / SLAP</li>
                                                    <li>28. EXERCÍCIOS SLAP / POP / PULL-OFF</li>
                                                    <li>29. EXERCICIOS SLAP / POP / HAMMER-ON</li>
                                                    <li>30. MELODIA # 1 CO SLAP / POP</li>
                                                    <li>30. WILD MIDE - WEST</li>
                                                    <li>31. MELODIA # 2 COM SLAP / POP</li>
                                                    <li>31. CITY STREETS</li>
                                                    <li>32. INTRODUÇÃO À TEORIA DO ACORDE</li>
                                                    <li>34. TRIADE MAIOR COMO MOSTRADA NO BRAÇO</li>
                                                    <li>35. EXERCÍCIOS DE TRÍADE (MAIOR E MENOR)</li>
                                                    <li>36. MELODIA COM TRÍADE (MAIOR E MENOR)</li>
                                                    <li>36. BIG BAND BASS</li>
                                                    <li>37. TRÍADES: QUINTAS ALTERADAS</li>
                                                    <li>41. EXERCÍCIOS DE QUINTAS ALTERADAS</li>
                                                    <li>42. MUSICAS COM A FÓRMULA TRÍADE</li>
                                                    <li>42. THERE`S NOTING LIKE A TRIAD</li>
                                                    <li>43. AVISO AO APROXIMAR DE UM DIAGRAMA</li>
                                                    <li>45. OS EFEITOS PARA O BAIXO ELÉTRICO</li>
                                                    <li>46. TRÊS APRESENTAÇÕES DE EFEITOS</li>
                                                    <li>47. MÚSICA DE RECAPTULAÇÃO</li>
                                                    <li>47. LEFT TURNS ABEAL</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                VER CONTEÚD02
                                </button>
                                <button type="button" class="btn btn-dark mb-2 d-md-none col-sm-6" data-bs-toggle="modal" data-bs-target="#exampleModal44">
                                VER CONTEÚD03
                                </button>
                            </div>
                            <img src="../imgi/04-banner-baixo-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: left;" alt="Imagem responsiva">
                        </div>
                    
                        <div class="d-md-none col-sm-6">
                            <div class="table-responsive" style="text-align: left">
                                <img src="../imgi/04-banner-alunos-contra-baixo.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal44" tabindex="-1" aria-labelledby="exampleModal44" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal44">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3">
                                                <ul>
                                                    <h4>MÉTODO: VOL. 01</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>1. SOBRE O AUTOR</li>
                                                    <li>2. O BAIXO ELÉTRICO</li>
                                                    <li>3. POSIÇÕES PARA TOCAR</li>
                                                    <li>4. AFINANDO COM O CD</li>
                                                    <li>5. AUTO AJUSTE</li>
                                                    <li>6. TÉCNICAS DA MÃO DIREITA</li>
                                                    <li>7. USANDO OS DEDOS</li>
                                                    <li>8. EXERCÍCIOS COM CORDA SOLTA</li>
                                                    <li>8. COMO LER A TABLATURA COM CORDAS SOLTAS</li>
                                                    <li>10. SIMBOLOS MUSICAIS</li>
                                                    <li>11. INDICAÇÕES DE COMPASSO</li>
                                                    <li>12. EXERCÍCIOS COM CORDA SOLTA</li>
                                                    <li>14. O ALFABETO MUSICAL</li>
                                                    <li>14. A MÃO ESQUERDA</li>
                                                    <li>16. NOTAS NA 4ª CORDA</li>
                                                    <li>18. NOTAS NA 3ª CORDA</li>
                                                    <li>20. MOVIN`</li>
                                                    <li>21. TRACKS</li>
                                                    <li>22. NOTAS NA 2ª CORDA</li>
                                                    <li>24. MELODIAS COM AS CORDAS (2ª, 3ª E 4ª)</li>
                                                    <li>25. GO EASY</li>
                                                    <li>26. NOTAS NA 1ª CORDA</li>
                                                    <li>28. MELODIAS COM AS CORDAS 1ª,, 2ª, 3ª E 4ª. </li>
                                                    <li>28. ROCK IT</li>
                                                    <li>28. COUNTRY MAN</li>
                                                    <li>30. COLCHEIAS</li>
                                                    <li>32. MELODIAS EM COLCHEIAS</li>
                                                    <li>32. WALKIN`</li>
                                                    <li>32. SIDEWINDER</li>
                                                    <li>33. HEAVY</li>
                                                    <li>34. INTRODUÇÃO À 5ª POSIÇÃO</li>
                                                    <li>35. NOTAS NA 4ª CORDA</li>
                                                    <li>36. NOTAS NA 3ª CORDA</li>
                                                    <li>37. NOTAS NA 3ª E 4ª CORDA</li>
                                                    <li>38. SOME JAZZ</li>
                                                    <li>38. BAROQUE SONG</li>
                                                    <li>39. NOTAS NA 2ª CORDA</li>
                                                    <li>40. NOTAS NA 1ª CORDA</li>
                                                    <li>41. NOTAS NA 2ª E 1ª CORDA</li>
                                                    <li>42. LIGADURAS</li>
                                                    <li>43. MELODIAS COM AS QUATRO CORDAS</li>
                                                    <li>43. SYNCHO</li>
                                                    <li>44. DANCE WITH ME</li>
                                                    <li>45. AS SEMÍNIMAS PONTILHADAS</li>
                                                    <li>46. QUADRANGLE</li>
                                                    <li>46. WHY NOT?</li>
                                                    <li>47. OH, YES!</li>

                                                    <h4 class="mt-2">MÉTODO: VOL. 02</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>1. REVISÃO DO VOL. 01</li>
                                                    <li>2. INTRODUÇÃO ÀS ESCALAS</li>
                                                    <li>3. ESCALA MAIOR</li>
                                                    <li>4. ARMADURAS</li>
                                                    <li>5. O CICLO DAS QUINTAS (OU QUARTAS)</li>
                                                    <li>6. MANUSEIO ESCALA MAIOR</li>
                                                    <li>7. ESCALA MAIOR NO CICLO DAS QUARTAS</li>
                                                    <li>10. COMBINANDO ESCALAS MAIORES</li>
                                                    <li>12. MELODIAS COM ESCALAS MAIOR</li>
                                                    <li>12. ROCK ON</li>
                                                    <li>12. DA NUT HAT</li>
                                                    <li>13. LIVE AND LEARN</li>
                                                    <li>14. ESCALAS MENORES</li>
                                                    <li>16. MANUSEIO DA ESCALA MENOR NATURAL</li>
                                                    <li>17. ESCALA MENOR NATURAL NO CICLO DAS QUARTAS</li>
                                                    <li>20. COMBINANDO AS ESCALAS MENORES</li>
                                                    <li>22. MELODIAS COM ESCALAS MENORES</li>
                                                    <li>22. JUST WALKING</li>
                                                    <li>22. AI FRESCO</li>
                                                    <li>23. GET DOWN</li>
                                                    <li>24. AS SEMICOLCHEIAS</li>
                                                    <li>25. A PAUSA DA SEMICOLCHEIA</li>
                                                    <li>26. AS SEMICOLCHEIAS NAS CORDAS SOLTAS</li>
                                                    <li>27. SEMICOLCHEIAS SIMPLES</li>
                                                    <li>29. SEMICOLCHEIAS E COLCHEIAS SIMPLES</li>
                                                    <li>31. COMBINANDO AS SEMICOLCHEIAS COM AS COLCHEIAS</li>
                                                    <li>32. COLCHEIA E SEMICOLCHEIA COM TRAVESSÃO</li>
                                                    <li>34. MELODIAS COM SEMICOLCHEIAS</li>
                                                    <li>34. PUNK</li>
                                                    <li>34. REGGAE RHYTHM</li>
                                                    <li>35. SOME FUNK</li>
                                                    <li>36. NOVAS TÉCNICAS PARA TOCAR COM A MÃO DIREITA</li>
                                                    <li>37. SLAPS COM CORDAS SOLTAS</li>
                                                    <li>38. MELODIAS COM O SLAP</li>
                                                    <li>38. THUMPER</li>
                                                    <li>38. SLEDGE HAMMER</li>
                                                    <li>39. O POP</li>
                                                    <li>40. O POP NAS CORDAS SOLTAS</li>
                                                    <li>41. MELODIAS COM POPS</li>
                                                    <li>41. POPPIN</li>
                                                    <li>41. ZIP DOWN</li>
                                                    <li>42. NOVAS TÉCNICAS DA MÃO ESQUERDA</li>
                                                    <li>43. MELODIAS COM HAMMER-NOS</li>
                                                    <li>43. DANCIN` IN THE STREETS</li>
                                                    <li>43. HONDO</li>
                                                    <li>44. PULL-OFFS</li>
                                                    <li>45. MELODIAS COM PULL-OFFS</li>
                                                    <li>45. LOOK OUT</li>
                                                    <li>45. TOO MUCH</li>
                                                    <li>46. REVISÃO 1</li>
                                                    <li>46. LAST CHANCE</li>
                                                    <li>47. REVISÃO 2</li>
                                                    <li>47. FLASH</li>

                                                    <h4 class="mt-2">MÉTODO: VOL. 03.</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 12 MESES</h4>
                                                    <li>MÉTODO: DAN DEAN VOL. 03</li>
                                                    <li>2. REVISÃO DO LIVRO 2 - CONTECEITOS</li>
                                                    <li>3. ARMADURAS E TONS RELATIVOS MENORES</li>
                                                    <li>4. INTERVALOS</li>
                                                    <li>7. SEGUNDAS MENORES (SEMITONS)</li>
                                                    <li>8. MELODIAS COM SEGUNDAS MENORES (SEMITONS)</li>
                                                    <li>8. NO JOKE</li>
                                                    <li>9. SEGUNDAS MAIORES (TONS)</li>
                                                    <li>10. MELODIAS COM SEGUNDA MAIORES (TONS)</li>
                                                    <li>10. NIGHT WALK</li>
                                                    <li>11. TERCEIRAS (MAIOR E MENOR)</li>
                                                    <li>12. MÚSICAS COM TERCEIRAS</li>
                                                    <li>12. TRI-TUNE</li>
                                                    <li>13. NOVAS NOTAS DA 9ª À 12ª POSIÇÃO</li>
                                                    <li>14. QUARTAS (PERFEITA E AUMENTADA)</li>
                                                    <li>15. MELODIA COM QUARTAS</li>
                                                    <li>15. QUADRA</li>
                                                    <li>16. QUINTAS (PERFEITA E DIMINUTA)</li>
                                                    <li>17. MELODIAS COM QUINTAS PERFEITAS</li>
                                                    <li>17. PENTA PHONICS</li>
                                                    <li>18. SEXTAS (MAIOR E MENOR)</li>
                                                    <li>19. MELODIA COM SEXTAS</li>
                                                    <li>19. BLUE Nº6</li>
                                                    <li>20. SÉTIMAS (MAIOR E MENOR)</li>
                                                    <li>21. MELODIA COM SÉTIMAS MENORES</li>
                                                    <li>21. FUNK SEVEN</li>
                                                    <li>22. OITAVAS</li>
                                                    <li>23. MELODIAS COM OITAVAS</li>
                                                    <li>23. OCTAVE EXPRESS</li>
                                                    <li>24. COMBINANDO O SLAP E O POP</li>
                                                    <li>25. APLICANDO AS TÉCNICAS SLAP / POP</li>
                                                    <li>26. EXERCÍCIOS SLAP / POP</li>
                                                    <li>28. EXERCICIOS SLAP / POP / SLAP</li>
                                                    <li>28. EXERCÍCIOS SLAP / POP / PULL-OFF</li>
                                                    <li>29. EXERCICIOS SLAP / POP / HAMMER-ON</li>
                                                    <li>30. MELODIA # 1 CO SLAP / POP</li>
                                                    <li>30. WILD MIDE - WEST</li>
                                                    <li>31. MELODIA # 2 COM SLAP / POP</li>
                                                    <li>31. CITY STREETS</li>
                                                    <li>32. INTRODUÇÃO À TEORIA DO ACORDE</li>
                                                    <li>34. TRIADE MAIOR COMO MOSTRADA NO BRAÇO</li>
                                                    <li>35. EXERCÍCIOS DE TRÍADE (MAIOR E MENOR)</li>
                                                    <li>36. MELODIA COM TRÍADE (MAIOR E MENOR)</li>
                                                    <li>36. BIG BAND BASS</li>
                                                    <li>37. TRÍADES: QUINTAS ALTERADAS</li>
                                                    <li>41. EXERCÍCIOS DE QUINTAS ALTERADAS</li>
                                                    <li>42. MUSICAS COM A FÓRMULA TRÍADE</li>
                                                    <li>42. THERE`S NOTING LIKE A TRIAD</li>
                                                    <li>43. AVISO AO APROXIMAR DE UM DIAGRAMA</li>
                                                    <li>45. OS EFEITOS PARA O BAIXO ELÉTRICO</li>
                                                    <li>46. TRÊS APRESENTAÇÕES DE EFEITOS</li>
                                                    <li>47. MÚSICA DE RECAPTULAÇÃO</li>
                                                    <li>47. LEFT TURNS ABEAL</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo iniciação ao piano -->
                <div class="card" style="max-width: 100%; background-color: #AB9988">
                    <div class="row mt-4 ">
                        <div class="col-sm-6 col-12">
                            <img src="../imgi/05-banner-piano-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                            <!-- Button trigger modal -->
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                VER CONTEÚDO
                                </button>
                            </div>
                        </div>

                        <div class="content col-sm-6 col-12">
                                <img src="../imgi/ct1.png" class="img-fluid mb-3 rounded" style="float: left;" alt="Imagem responsiva">
                            <div class="content" style="text-align: left;">
                                <div class="table-responsive mb-3">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel5">Curso - Teclado</h5>
                                                </div>
                                                <div class="modal-body mb-3">
                                                    <ul>
                                                        <h4>MÉTODO PARA PIANO 1ª PARTE</h4>
                                                        <h4>CONTEÚDO DURAÇÃO: 18 MESES</h4>
                                                        <li>TEÓRICO, PRÁTICO E RECREATIVO</li>
                                                        <li>DIVIDIDO EM 5 PARTES DE 30 LIÇÕES CADA</li>
                                                        <li>O PENTAGRAMA</li>
                                                        <li>INTERVALOS</li>
                                                        <li>EXERCÍCIOS PREPARATÓRIOS</li>
                                                        <li>INTERVALOS DE 4ª E DE 3ª</li>
                                                        <li>INTERVALOS DE 4ª E 3ª COM GRAUS INTERMEDIÁRIOS</li>
                                                        <li>LEGATO / ARTICULAÇÃO LIGADA</li>
                                                        <li>EXERCÍCIOS DITADOS</li>
                                                        <li>LIGADURA DO FRASEADO</li>
                                                        <li>COMPASSO E OS TEMPOS</li>
                                                        <li>DITADO PREPARATÓRIO</li>
                                                        <li>NINI E BEBÉ</li>
                                                        <li>A PRIMEIRA VALSA</li>
                                                        <li>EVOLUÇÕES DA MÃO SAINDO DA POSIÇÃO NATURAL</li>
                                                        <li>A FLORISTA (VALSA)</li>
                                                        <li>ROSA (MAZURCA)</li>
                                                        <li>ACORDES ARPEJADOS E SIMULTÂNEOS</li>
                                                        <li>CONFIDÊNCIA</li>
                                                        <li>TOCANDO NOTAS DUPLAS</li>
                                                        <li>ALEGRE PRIMAVERA</li>
                                                        <li>O SORRISO</li>
                                                        <li>A TODO O VAPOR</li>
                                                        <li>O TRAVESSO</li>
                                                        <li>O LENÇO</li>
                                                        <li>MATILDE (SCHOTISCH)</li>
                                                        <li>ALEGRIA DE BRINCAR</li>
                                                        <li>AS PEQUENAS</li>
                                                        <li>ARIA DE "DON JUAN"</li>
                                                        <li>ELENA (VALSA)</li>
                                                        <li>GRACIOSA</li>
                                                        <li>A LIÇÃO DE DANÇA</li>
                                                        <li>BRANCA (POLCA)</li>
                                                        <li>ROSA DE ESTILO</li>
                                                        <li>PRIMEIRA SONATINA</li>
                                                        <li>EN PRIMERE</li>
                                                        <li>LE RÉVEIL</li>
                                                        <li>O ESBARRÃO</li>
                                                        <li>BURLESCA</li>
                                                        <li>NO MANANCIAL</li>
                                                        <li>LANDLER</li>
                                                        <li>EMA (VALSA)</li>
                                                        <li>O ROCIO</li>
                                                        <li>CONVERSAÇÃO</li>
                                                        <li>A PASTORINHA (VALSA)</li>
                                                        <li>A FLOR MAIS BELA</li>
                                                        <li>MELODIA SUIÇA</li>
                                                        <li>CANÇÃO DA INABIA</li>
                                                        <li>O CARTEIROZINHO (GALOPE)</li>
                                                        <li>CONCLUSÃO DA PRIMEIRA PARTE</li>
                                                        <li>EXERCÍCIOS</li>
                                                        <li>LEITURA DO DEDILHADO</li>
                                                        <li style="color:#000000; font-weight: 800 ">FIM DA PRIMEIRA PARTE</li>
                                                    </ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conteúdo iniciação saxofone -->
                <div class="card" style="max-width: 100%;">
                    <div class="row mt-4">
                        <div class="d-none d-md-block d-xxl-none col-md-6">
                            <div class="table-responsive" style="text-align: right">
                                <img src="../imgi/ct1.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal6">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3" style="text-align: left">
                                                <ul>
                                                    <h4>MÉTODO AMADEU RUSSO:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 18 MESES</h4>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="text-center">
                                <button type="button" class="btn btn-dark mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                VER CONTEÚD02
                                </button>
                                <button type="button" class="btn btn-dark mb-2 d-md-none col-sm-6" data-bs-toggle="modal" data-bs-target="#exampleModal66">
                                VER CONTEÚD03
                                </button>
                            </div>
                            <img src="../imgi/06-banner-saxofone-estudando-musica-com-br.png" class="img-fluid mb-4 rounded" style="float: left;" alt="Imagem responsiva">
                        </div>
                    
                        <div class="d-md-none col-sm-6">
                            <div class="table-responsive" style="text-align: left">
                                <img src="../imgi/ct1.png" class="img-fluid mb-4 rounded" style="float: right;" alt="Imagem responsiva">
                        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal66" tabindex="-1" aria-labelledby="exampleModal66" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModal66">Curso - Violão Gospel</h5>
                                            </div>
                                            <div class="modal-body mb-3">
                                                <ul>
                                                    <h4>MÉTODO AMADEU RUSSO:</h4>
                                                    <h4>CONTEÚDO DURAÇÃO: 18 MESES</h4>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark mt-1" data-bs-dismiss="modal">FECHAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SLIDER DE DEPOIMENTOS ALUNOS --}}
            <h3 class="mt-5 mb-4 text-center" style="font-size: 20px;">DEPOIMENTOS</h3>
            <div class="d-flex justify-content-center mb-4">
                <div class="container-fluid col-sm-6 col-md-5 center">
                    <div id="mainSlider" class="carousel slide" data-ride="carousel">
                        {{-- inner --}}
                        <div class="carousel-inner text-center">

                            <div class="carousel-item active" style="margin-bottom: 100px">
                                <img src="../imgp/depoimentos/Depoimento-aluna-damores-estudando-musica-com-br.png" style="width: 100px; height: 100px; margin-top: 0px; margin-bottom: 30px; " alt="Projeto estudandomusica">
                                <div class="carousel-caption d-md-block text-center">
                                    <h2 style="color: black; margin-top: 55px; font-size: 20px;">Damores</h2>
                                    <p style="color: black; margin-top: -6px;">Curso: Violão</p>
                                    <h3 style="color: black; margin-top: -10px; font-size: 15px">Aula muito bem explicativa, 
                                        material didático muito fácil de entender. GOSTEI!</h3>
                                </div>
                            </div>

                            <div class="carousel-item" style="margin-bottom: 100px">
                                <img src="../imgp/depoimentos/Depoimento-eunice-estudando-musica-com-br.png" style="width: 100px; height: 100px; margin-top: 0px; margin-bottom: 30px; " alt="Projeto estudandomusica">
                                <div class="carousel-caption d-md-block text-center">
                                    <h2 style="color: black; margin-top: 55px; font-size: 20px;">Eunice</h2>
                                    <p style="color: black; margin-top: -6px;">Curso: Violão / Teclado</p>
                                    <h3 style="color: black; margin-top: -10px; font-size: 15px">Tive aulas presenciais, o professor é paciente e amigo, as aulas são de aprendizado direto
                                        e fácil de entender, o resultado só depende do aluno que pode ser muito rárpido.</h3>
                                </div>
                            </div>
                            
                            <div class="carousel-item" style="margin-bottom: 100px">
                                <img src="../imgp/depoimentos/Depoimento-gustavo-estudando-musica-com-br.png" style="width: 100px; height: 100px; margin-top: 0px; margin-bottom: 30px; " alt="Projeto estudandomusica">
                                <div class="carousel-caption d-md-block text-center">
                                    <h2 style="color: black; margin-top: 55px; font-size: 20px;">Gustavo</h2>
                                    <p style="color: black; margin-top: -6px">Curso: Bateria</p>
                                    <h3 style="color: black; margin-top: -10px; font-size: 15px">Ótimo método de ensino, com um material fácil de ser estudado e entendido. Recomendado!.</h3>
                                </div>
                            </div>

                            <div class="carousel-item" style="margin-bottom: 100px">
                                <img src="../imgp/depoimentos/Depoimento-kenia-estudando-musica-com-br.png" style="width: 100px; height: 100px; margin-top: 0px; margin-bottom: 30px; " alt="Projeto estudandomusica">
                                <div class="carousel-caption d-md-block text-center">
                                    <h2 style="color: black; margin-top: 55px; font-size: 20px;">Kenia</h2>
                                    <p style="color: black; margin-top: -6px">Curso: Teclado</p>
                                    <h3 style="color: black; margin-top: -10px; font-size: 15px">Aulas presenciais com professor Marcos: aproveitável, professor prestativo. Um excelente profissional. Super indico!</h3>
                                </div>
                            </div>

                            <div class="carousel-item" style="margin-bottom: 100px">
                                <img src="../imgp/depoimentos/Depoimento-sineide-estudando-musica-com-br.png" style="width: 100px; height: 100px; margin-top: 0px; margin-bottom: 30px; " alt="Projeto estudandomusica">
                                <div class="carousel-caption d-md-block text-center">
                                    <h2 style="color: black; margin-top: 55px; font-size: 20px;">Sineide</h2>
                                    <p style="color: black; margin-top: -6px">Curso: Bateria</p>
                                    <h3 style="color: black; margin-top: -10px; font-size: 15px">Sistema simples e muito objetivo de ensino. Sem perca de tempo.</h3>
                                </div>
                            </div>
                        </div>
                        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="py-3 my-4" style="background: #AB9988;">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 style="vertical-align: inherit;>Home</a></li>
                    <li class="nav-item"><a href="/inscricao-aluno" class="nav-link px-2 style="vertical-align: inherit;>Inscrições</a></li>
                    <li class="nav-item"><a href="/dashboard/homeadmin" class="nav-link px-2 style="vertical-align: inherit;>Painel</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 style="vertical-align: inherit;>Materiais</a></li>
                    <li class="nav-item"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511964979977" target="_blank" class="nav-link px-2 style="vertical-align: inherit;>WhatsApp</a></li>
                </ul>
                <p class="text-center py-3 my-4">© 2023 Estudando Música</p>
            </footer>

            {{-- <footer class="container-fluid" style="background: #39342c;">
                <div class="row mt-5">
                    <div class="col-md-3 col-6 mb-4">
                        <h5>ACESSE</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Meu Painel</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Planos e Valores</a></li>
                        </ul>
                    </div>
            
                    <div class="col-md-3 col-6 mb-4">
                        <h5>LOCAIS AULAS</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Bairro: Aparecida</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Bairro: Cidade Nova</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Bairro: Jd Aeroporto</a></li>
                        </ul>
                    </div>
            
                    <div class="col-md-3 col-6 mb-5">
                        <h5>CONTATO</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">WhatsApp</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Envie um email</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6" style="margin-bottom: 68px;">
                        <h5 >MATRICULA</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="/inscricao-aluno" class="nav-link p-0">Inscrição</a></li>
                        </ul>
                    </div>
                </div>
            </footer> --}}
        </div>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-size: 16px;">Tem certeza que deseja sair?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: #cf7c00;">
                        <h6 style="color: black;  letter-spacing: 2px; width: 600; font-weight: 500;">MENSAGEM</h6>
                        A música é a arte mais direta, ela entra no ouvido, vai para o coração e manifesta-se na alma.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="logout">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- End of Footer -->

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/bootstrap/bootstrap/jquery-3.6.3.min.js"></script>
    <script src="/assets/bootstrap/bootstrap/jquery.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <script src="{{asset('panel/plugins/inputmask/jquery.mask.min.js')}}"></script>

    <script>
        $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 00000-0000');
        $('.cpf').mask('000.000.000-00');
        $('.money').mask('00,00');
    });
    </script>

</body>

</html>