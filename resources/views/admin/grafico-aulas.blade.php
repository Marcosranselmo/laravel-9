@extends('admin.layout')

@section('titulo', 'Gráficos Aulas') 

@section('conteudo')
    
    <div class="container">
        <div class="d-sm-flex align-items-center mb-2">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <span class="align-middle">Aluno(a): {{ auth()->user()->firstName}}</span>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- PRESENÇA -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Presença: </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h6>{{ $total_presente }}</h6>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AUSENTE -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Ausencia</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h6>{{ $total_ausente }}</h6>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DIA DA SEMANA -->
            <div class="col-xl-4 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Dia da semana:</h6>
                    </div>
                    <div class="card-body">
                        <div class="line">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- APROVEITAMENTO -->
            <div class="col-xl-3 col-md-12 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Aproveitamento
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="10" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

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
    
@endsection

@push('graficos')

    <script>
        /* Gráfico 01 */
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [{{ $userDia }}],
                datasets: [{
                    label: [{!! $userLabel !!}],
                    data: [{{ $userTotal }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',                         
                        'rgba(255, 159, 64, 1)'
                    ]
            //         borderColor: [
            //             'rgba(255, 99, 132, 1)',
            //             'rgba(54, 162, 235, 1)',
            //             'rgba(255, 206, 86, 1)',                     
            //             'rgba(255, 159, 64, 1)'
            //         ],
            //     borderWidth: 1, 
            //     }]
            // },
            // options: {
            //     scales: {
            //         yAxes: [{
            //             ticks: {
            //                 beginAtZero: true
            //             }
                    }]
                // }
            }
        });

    </script>

@endpush