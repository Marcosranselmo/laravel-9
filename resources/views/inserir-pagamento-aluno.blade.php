<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula Bairro Aparecida</title>

    <link rel="stylesheet" type="text/css" href="css/matricula-b-a.css">

    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>  
    .error {
        color: red; 
    }
</style>

</head>

<body class="mx-auto"ecated extensions installed. We recommend to review them and migrate to alternative>
        
    {{-- GRÁFICO PAGAMENTO  --}}
    <header class="d-flex justify-content-center py-1 px-0" style="background: #c2b1a1;">
        <div class="col-md-12 col-xs-12 col-12 px-1" style="max-width: 710px;">
            <div class="card border-left-info shadow h-100 py-0">
                <div class="card-body p-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-info text-uppercase mb-1" style="letter-spacing: 1.5px; font-weight: 500">Matrícula Aluno</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 25%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100">25%</div>
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
    </header>

    {{-- ANDAMENTO DO PROCESSO --}}
    <div class="justify-content-center">
        <div class="col-md-12 col-xs-12 col-12">
            <div class="content d-flex justify-content-center">
                <div class="text-center" style="color: #17a2b8;">Matrícula</div>
                <div class="text-center" style="color: #cecece;">Inscrição</div>
                <div class="text-center" style="color: #cecece;">Material</div>
                <div class="text-center" style="color: #cecece;">Curso</div>
            </div>
        </div>
    </div>
   
    {{-- FORMULÁRIO DE MATRÍCULA --}}
    <div class="card shadow mb-5 col-lg-8 col-md-10 col-sm-10 mx-auto" style="max-width: 700px;">
        <div class="card-body">

            {{-- @include('includes.validations-form') --}}

            {{-- erros de validação --}}
            @if($errors->any()) 
                <div class="alert alert-danger">
                    <ul class="m-0">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>                        
                        @endforeach
                    </ul>
                </div>  
            @endif
        
            <form id="formCreate" action="/pagamento-aluno-inserir" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row mt-0"> 
                    <div class="col-md-12 col-sm-12">
                        {{-- <div class="alert alert-success text-center mt-2" role="alert">Tudo certo! Acesse o <b> link enviado no seu email </b> e prossiga!</div>   --}}
                        @include('components.flash-message')
                        
                        <h2>Inserir Pagamento Aluno</h2>
                    </div>
                    <div class="col-md-12 col-sm-12" style="background: white; 
                    justify-content: center; display: flex;">
                        <a href="/"><img src="../imgp/logo-site-estudando-musica.png" 
                            class="img-fluid" alt="mdo" width="120" height="100"></a>
                    </div>
                    
                    <!-- DADOS PESSOAIS ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mt-3">Dados Pessoais</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Primeiro Nome</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Primeiro nome...">
                        </div> 
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Último Nome</label>
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Último nome...">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Mês Ref.</label>
                            <input type="text" name="mesRef" id="mesRef" class="form-control" placeholder="Mês Referencia">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Valor Pag.</label>
                            <input type="text" name="valorPag" id="valorPag" class="form-control" placeholder="Valor Pagamento">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Forma Pagamento</label>
                            <input type="text" name="formaPag" id="formaPag" class="form-control" placeholder="Forma Pagamento">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Data Pagmento</label>
                            <input type="text" name="dataPag" id="dataPag" class="form-control mt-0" placeholder="Data Pagamento">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Valor Mensal</label>
                            <input type="text" name="valorMensal" id="valorMensal" class="form-control mt-0" placeholder="Valor Mensal">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Data Inicio</label>
                            <input type="text" name="dataInicio" id="dataInicio" class="form-control mt-0" placeholder="Data Inicio">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Data Término</label>
                            <input type="text" name="dataTermino" id="dataTermino" class="form-control mt-0" placeholder="Data Término">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Data Vencimento</label>
                            <input type="text" name="dataVencimento" id="dataVencimento" class="form-control mt-0" placeholder="Data Vencimento">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Qtd Parcelas</label>
                            <input type="text" name="qtdParcelas" id="qtdParcelas" class="form-control mt-0" placeholder="Qtd Parcelas">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Parcelas Restante</label>
                            <input type="text" name="parcelasRestante" id="parcelasRestante" class="form-control mt-0" placeholder="Parcelas Restantes">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Parc. em Atraso</label>
                            <input type="text" name="parcelasEmAtraso" id="parcelasEmAtraso" class="form-control mt-0" placeholder="Parcelas em atraso">
                        </div>
                </div>     
                
                <div>
                    <button type="submit" class="btn btn-lg btn-block  mt-3 mx-auto" 
                    style="width:100%; letter-spacing: 1px;">SALVAR MENSALIDADE</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="mt-3 text-center">
            <a href="/"><img src="../imgp/logo-site-estudando-musica.png" class="img-fluid" alt="mdo" width="120" height="100"></a>
        </div>
    </footer>
    <div class="rodape">
        <br>
    </div>

    {{-- <script src="/vendor/jquery/jquery.min.js"></script> --}}
    <script src="{{asset('panel/plugins/inputmask/jquery.mask.min.js')}}"></script>
 
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="{{asset('panel/plugins/inputmask/jquery.mask.min.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
    <script src="js/jquery.validate.js"></script>
    <script src="js/localization/messages_pt_BR.js"></script>

    <script>
        $(document).ready(function() {
            $("#formCreate").validate({
                rules:{
                    firstName:{
                        required: true,
                        minlength: 3,
                        maxlength: 30
                        
                    },
                    lastName:{
                        required: true,
                        minlength: 3,
                        maxlength: 30
                    },
                    // numero:{
                    //     required: true,
                    //     minlength: 1,
                    //     maxlength: 4
                    // },
                    // diaDaSemana:{
                    //     required: true,
                    //     minlength: 3,
                    //     maxlength: 30
                    // },
                    Presente:{
                        required: true,
                        number: true,
                        min: 0,
                        max: 1
                    },
                    Ausente:{
                        required: true,
                        number: true,
                        min: 0,
                        max: 1
                    },
                }
            })
        })
    </script>

    <script>
        $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 00000-0000');
        $('.number').mask('0000');


   
        // $('.time').mask('00:00:00');
        // $('.cpf').mask('000.000.000-00');
        // $('.money').mask('000.000.000.000,00');
    });
    </script>
</body>
</html>


