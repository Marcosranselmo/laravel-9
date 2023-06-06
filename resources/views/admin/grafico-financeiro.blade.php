@extends('admin.layout')

@section('titulo', 'Gráficos Financeiro') 

@section('conteudo')
    

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                    <span class="align-middle">FINANCEIRO: Aluno(a): {{ Session::get('lg_firstName')}}</span>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- VALOR PARCELA -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    VALOR PARCELA</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><h6>65,00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VENCIMENTO TODO DIA -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    VENCIMENTO TODO DIA</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><h6>{{ $data_vencimento }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- VALOR TOTAL PAGO -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    VALOR TOTAL PAGO:</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><h6>{{ $total_pago }}</h6> 
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PARCELAS EM ATRASO -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    PARCELAS EM ATRASO</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><h6>{{ $parcelas_atrasadas }}</div>
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
                        <h6 class="m-0 font-weight-bold text-primary">Pagamento gráfico:</h6>
                    </div>
                    <div class="card-body">
                        <div class="line">
                            <canvas id="myChart2"></canvas>
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
   
@endsection

@push('graficos')
    <script>
        /* Gráfico 01 */
        var ctx = document.getElementById('myChart2');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [{{ $userDia }}],
                datasets: [{
                    label: [{!! $userLabel !!}],
                    data: [{{ $userTotal }}],
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',
                        'rgba(255, 159, 64)'
                    ]
                }]
            }
        });
    </script>
@endpush
