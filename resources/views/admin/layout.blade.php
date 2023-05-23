<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo')</title> 
    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">
    
    <link rel="stylesheet" href="{{asset('panel/plugins/fontawesome-free/css/all.min.css')}}">
    <link href="{{asset('panel/plugins/cropper/cropper.css')}}" rel="stylesheet">  
  
    <script src="/jsGraficos/chart.js"></script>
    <script src="/jsGraficos/main.js"></script>
    @stack('graficos')

    <script src="{{asset('panel/plugins/cropper/jquery-3.6.1.js')}}"></script>
    <script src="{{asset('panel/plugins/cropper/cropper.js')}}"></script> 
    <script src="{{asset('panel/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('panel/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="hhttps://cdnjs.com/libraries/jquery.mask"></script>
  
    <link rel="stylesheet" href="{{asset('panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">


    <!-- Custom fonts for this template--> 
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/cssp/sb-admin-2.min.css" rel="stylesheet">

</head> 

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" 
            style="background: -webkit-gradient(linear, left top, left bottom, from(#9f8e76">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-warehouse"></i>
                    <span class="">Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard/homeadmin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Meu Painel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Interface
            </div> --}}

            @if (Session::get('lg_permissao08'))
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-chart-line"></i>
                    <span>Relatórios</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="grafico-aulas">Aulas</a>
                        <a class="collapse-item" href="grafico-financeiro">Financeiro</a>
                    </div>
                </div>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            @if (Session::get('lg_permissao09'))
            <!-- Nav Item - Meus Dados -->
            <li class="nav-item">
                <a class="nav-link" href="p-alunos-profile">
                    <i class="fa fa-list"></i>
                    <span>Meus Dados</span></a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            @if (Session::get('lg_permissao09'))
            <!-- Nav Item - Meus Dados -->
            <li class="nav-item">
            <a class="nav-link" href="p-pagamento">
                <i class="fas fa-hand-holding-usd"></i>
                <span>Meus Pagamentos</span></a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            @if (Session::get('lg_permissao08'))
            <li class="nav-item">
                <a class="nav-link" href="p-frequencia-aulas">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Frequencia Aulas</span>
                </a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider mb-3">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mb-0">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            @if (Session::get('lg_permissao10'))

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <li class="nav-item">
                <a class="nav-link" href="/dashboard/homeadmin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Área Administrador</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Nav Item - Lista de Alunos -->
            
            <li class="nav-item">
                <a class="nav-link" href="p-alunos">
                    <i class="fas fa-address-card"></i>
                    <span>Lista Alunos</span>
                </a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            @if (Session::get('lg_permissao10'))
            <li class="nav-item mb-0">
                <a class="nav-link" href="p-frequencia-total-aulas">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Frequencia Total Aulas</span>
                </a>
            </li>
            @endif


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw" style="font-size: 18px;"></i>
                                <!-- Counter - Alerts -->
                                @if (Session::get('lg_permissao01'))
                                    <span class="badge badge-danger badge-counter" style="font-size: 14px;">
                                        {{-- {{ $user->unreadNotifications->count() }} --}}
                                    </span>
                                @endif
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header" style="letter-spacing: 1px; font-size: 12px; font-weight: 400;">
                                    ALERTAS
                                </h6>
                                @if (Session::get('lg_permissao01'))
                                    {{-- @foreach ($user->unreadNotifications as $notification) --}}
                                    {{-- @foreach (Session::get('lg_logado')->user->unreadNotifications as $notification) --}}
                                        {{-- <div class="d-flex flex-row align-items-center mt-2">
                                            <div class="col-1 mt-1 mb-1">
                                                <div class="icon-circle bg-warning" style="width: 24px; height: 24px;">
                                                    <i class="fas fa-exclamation-triangle text-white" style=""></i>
                                                </div>
                                            </div>
                                            <div class="col-9 ml-2" style="color:rgb(0, 0, 0); letter-spacing: 1px; font-size: 14px; font-weight: 400;">
                                                <span>{{ Str::limit($notification->data ['mensagem'], 27) }}</span>
                                            </div>  
                                            <div class="col-2 d-flex p-0">
                                                <a style="font-size: 12px; text-decoration: none;" 
                                                href="{{ route('markasred', 
                                                $notification->id) }}">Excluir</a>  
                                            </div>
                                        </div> --}}
                                        <div class="dropdown-divider"></div>
                                    {{-- @endforeach --}}
                                @endif
      
                                <a class="dropdown-item text-center small text-gray-500" style="margin-top: -10px;">Total de Alertas</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>
    
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none mt-2 d-lg-inline text-gray-600 small">
                                {{-- <h6> {{ auth()->user()->firstName}}</h6> --}}
                                {{-- <h6> Login </h6> --}}
                                </span>
                                @if (Session::get('lg_foto'))
                                <img class="img-profile rounded-circle" src="{{asset('img/alunos')}}/{{ Session::get('lg_nome_foto') }}" style="width: 100%">
                                @else
                                <img class="img-profile rounded-circle" src="{{asset('img/user.png')}}" style="width: 100%">
                                @endif
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/">
                                    <i class="fas fa-home text-gray-400"></i>
                                    Home
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

   
                @yield('conteudo')



            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    
    <!-- Footer -->
    <footer class="sticky-footer bg-white col-12 mt-4 mb-3"  style=" bottom: 0; padding: 0;">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Estudando Música - 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-size: 16px;">Tem certeza que deseja sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="color: #cf7c00;">
                    <h6 style="color: black;  letter-spacing: 2px; width: 600; font-weight: 500;">MENSAGEM</h6>
                    A música é a arte mais direta, ela entra no ouvido, vai para o coração e manifesta-se na alma.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Sair</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    {{-- <script src="{{asset('panel/plugins/inputmask/jquery.mask.js')}}"></script> --}}
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

    <script src="/jsGraficos/chart.js"></script>
    <script src="/jsGraficos/main.js"></script> 
    @stack('graficos')

</body>

</html>