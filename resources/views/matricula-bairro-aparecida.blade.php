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
        
            <form id="formCreate" action="/matricula-bairro-aparecida-create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row mt-0"> 
                    <div class="col-md-12 col-sm-12">
                        {{-- <div class="alert alert-success text-center mt-2" role="alert">Tudo certo! Acesse o <b> link enviado no seu email </b> e prossiga!</div>   --}}
                        @include('components.flash-message')
                        
                        <h2>Matrícula Bairro Aparecida</h2>
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
                            <label class="mb-0">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control phone" placeholder="(00) 00000-0000">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Sua idade atual</label>
                            <input type="text" name="IdadeAtual" id="IdadeAtual" class="form-control number" placeholder="Sua idade atual">
                        </div>
                        <div class="form-group col-md-4 col-6">
                            <label class="mb-0">Data nascimento</label>
                            <input type="text" name="dataNascimento" id="dataNascimento" class="form-control date text-center" placeholder="____/____/______">
                        </div>
                  
                        <!-- DADOS ESCOLARIDADE ----------------------------------------------------------------------------------------------->
                    <div class="form-group col-md-4 col-sm-6">
                        <label class="mb-0">Escolaridade</label>
                        <select name="escolaridade" id="escolaridade" class="form-control" placeholder="Escolaridade">
                            <option selected>Selecione</option>
                            <option>Ensino Fundamental</option>
                            <option>Ensino Médio</option>
                            <option>Ensino Superior</option>
                        </select>
                    </div>

                    <!-- DADOS SEXO ----------------------------------------------------------------------------------------------->
                    <div class="form-group col-md-4 col-6">
                        <label class="mb-0">Sexo</label>
                        <select name="sexo" id="sexo" class="form-control" placeholder="Sexo">
                            <option selected>Selecione</option>
                            <option>Feminino</option>
                            <option>Masculino</option>
                        </select>
                    </div>

                    <!-- ENDEREÇO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mt-1">Endereço</div>
                        <div class="form-group col-md-5">
                            <label class="mb-0">Rua/Avenida</label>
                            <input type="text" class="form-control mt-0" name="logradouro" id="logradouro" placeholder="Rua/Avenida">
                        </div> 
                        <div class="form-group col-md-2 col-sm-2">
                            <label class="mb-0">Número</label>
                            <input type="text" class="form-control mt-0 number" name="numero" id="numero" placeholder="Número">
                        </div>  
                        <div class="form-group col-md-5 col-sm-5">
                            <label class="mb-0">Bairro</label>
                            <input type="text" class="form-control mt-0" name="bairro" id="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-4 col-sm-5">
                            <label class="mb-0">Cidade</label>
                            <input type="text" class="form-control mt-0" name="cidade" id="cidade" placeholder="Cidade">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Estado</label>
                            <input type="text" class="form-control mt-0" name="estado" id="estado" placeholder="UF">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Cep</label>
                            <input type="text" class="form-control cep" name="cep" id="cep" placeholder="00000-000">
                        </div>
                   
                    
                        <!-- CURSO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Escolha o curso</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Curso</label>
                            <select name="curso" id="curso" class="form-control" placeholder="Curso">
                                <option selected>Selecione</option>
                                <option>Baixo Elétrico</option>
                                <option>Bateria</option>
                                <option>Iniciação Sax Ofone</option>
                                <option>Iniciação Violão Clássico</option>
                                <option>Teclado</option>
                                <option>Violão Gospel</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Período</label>
                            <select name="periodo" id="periodo" class="form-control" placeholder="Período">
                                <option selected>Selecione</option>
                                <option>Manhã</option>
                                <option>Tarde</option>
                                <option>Noite</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Horário</label>
                            <select name="horario" id="horario" class="form-control" palceholder="Horário">
                                <option selected>Selecione</option>
                                <option>19h as 20h</option>
                                <option>20h as 21h</option>
                            </select>
                        </div>
                        <div class="col-md-12">Local</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <input type="text" name="localDoCurso" id="localDoCurso" class="form-control" placeholder="Aparecida">
                        </div>
                    
                    <!-- UNIFORME ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Uniforme</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Tamanho</label>
                            <select name="uniforme" id="uniforme" class="form-control" placeholder="Uniforme">
                                <option selected>Selecione</option>
                                <option>Tamanho "P"</option>
                                <option>Tamanho "M"</option>
                                <option>Tamanho "G"</option>
                                <option>Tamanho "GG"</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Modelo</label>
                            <select name="modelo" id="modelo" class="form-control" palceholder="Modelo">
                                <option selected>Selecione</option>
                                <option>Baby Look</option>
                                <option>Tradicional</option>
                            </select>
                        </div>

                    <!-- DADOS DE ACESSO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Dados de Acesso</div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Usuário</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário">
                        </div>  
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Seu E-mail">
                        </div>  
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Senha: 6 a 15 carecteres</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Senha</label>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirme a senha">
                        </div>
                  
                </div>     
                
                <div>
                    <button type="submit" class="btn btn-lg btn-block  mt-3 mx-auto" 
                    style="width:100%; letter-spacing: 1px;">ENVIAR FORMULÁRIO</button>
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
                    celular:{
                        required: true,
                    },
                    IdadeAtual:{
                        required: true,
                        number: true,
                        min: 5,
                        max: 100
                    },
                    dataNascimento:{
                        required: true,
                        date: false
                    },
                    escolaridade:{
                        required: true,
                    },
                    sexo:{
                        required: true,
                    },
                    logradouro:{
                        required: true,
                    },
                    numero:{
                        required: true,
                        minlength: 1,
                        maxlength: 4
                    },
                    bairro:{
                        required: true,
                        minlength: 3,
                        maxlength: 30
                    },
                    cidade:{
                        required: true,
                        minlength: 3,
                        maxlength: 30
                    },
                    estado:{
                        required: true,
                        minlength: 2,
                        maxlength: 30
                    },
                    cep:{
                        required: true,
                    },
                    curso:{
                        required: true,
                    },
                    periodo:{
                        required: true,
                    },
                    horario:{
                        required: true,
                    },
                    localDoCurso:{
                        required: true,
                    },
                    uniforme:{
                        required: true,
                    },
                    modelo:{
                        required: true,
                    },
                    usuario:{
                        required: true,
                        minlength: 3,
                        maxlength: 30
                    },
                    email:{
                        required: true,
                        email: true,
                        minlength: 10,
                        maxlength: 100
                    },
                    password:{
                        required: true,
                        minlength: 6,
                        maxlength: 15
                    },
                    cpassword:{
                        required: true,
                        equalTo: '#password',
                        minlength: 6,
                        maxlength: 15
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


