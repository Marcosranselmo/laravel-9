<!DOCTYPE html>
<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula Bairro Aparecida</title>

    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">
    <link rel="stylesheet" type="text/css" href="css/matricula-b-a.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body class="mx-auto">
        
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

            @if ($errors->any())
                <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif    
            <form action="/matricula-bairro-aparecida-create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row mt-0"> 
                    <div class="col-md-12 col-sm-12">
                        {{-- <div class="alert alert-success text-center mt-2" role="alert">Tudo certo! Acesse o <b> link enviado no seu email </b> e prossiga!</div>   --}}
                        {{-- @include('components.flash-message') --}}
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
                            <input type="text" class="form-control" name="firstName">
                        </div> 
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Último Nome</label>
                            <input type="text" name="lastName" class="form-control" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Celular</label>
                            <input type="text" name="celular" class="form-control phone" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Sua idade atual</label>
                            <input type="number" name="IdadeAtual" class="form-control date" required="required">
                        </div>
                        <div class="form-group col-md-4 col-6">
                            <label class="mb-0">Data nascimento</label>
                            <input type="calendar" name="dataNascimento" class="form-control date" required="required">
                        </div>
                  
                        <!-- DADOS ESCOLARIDADE ----------------------------------------------------------------------------------------------->
                    <div class="form-group col-md-4 col-sm-6">
                        <label class="mb-0">Escolaridade</label>
                        <select id="escolaridade" name="escolaridade" class="form-control" required="required">
                            <option selected>Selecione</option>
                            <option>Ensino Fundamental</option>
                            <option>Ensino Médio</option>
                            <option>Ensino Superior</option>
                        </select>
                    </div>

                    <!-- DADOS SEXO ----------------------------------------------------------------------------------------------->
                    <div class="form-group col-md-4 col-6">
                        <label class="mb-0">Sexo</label>
                        <select id="sexo" name="sexo" class="form-control" required="required">
                            <option selected>Selecione</option>
                            <option>Feminino</option>
                            <option>Masculino</option>
                        </select>
                    </div>

                    <!-- ENDEREÇO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mt-1">Endereço</div>
                        <div class="form-group col-md-5">
                            <label class="mb-0">Rua/Avenida</label>
                            <input type="text" class="form-control mt-0" name="logradouro" required="required">
                        </div> 
                        <div class="form-group col-md-2 col-sm-2">
                            <label class="mb-0">Número</label>
                            <input type="number" class="form-control mt-0" name="numero" required="required">
                        </div>  
                        <div class="form-group col-md-5 col-sm-5">
                            <label class="mb-0">Bairro</label>
                            <input type="text" class="form-control mt-0" name="bairro" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-5">
                            <label class="mb-0">Cidade</label>
                            <input type="text" class="form-control mt-0" name="cidade" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Estado</label>
                            <input type="text" class="form-control mt-0" name="estado" required="required">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Cep</label>
                            <input type="text" class="form-control cep" name="cep" required="required">
                        </div>
                   
                    
                        <!-- CURSO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Escolha o curso</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Curso</label>
                            <select id="curso" name="curso" class="form-control" required="required">
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
                            <select id="periodo" name="periodo" class="form-control" required="required">
                                <option selected>Selecione</option>
                                <option>Manhã</option>
                                <option>Tarde</option>
                                <option>Noite</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Horário</label>
                            <select id="horario" name="horario" class="form-control" required="required">
                                <option selected>Selecione</option>
                                <option>19h as 20h</option>
                                <option>20h as 21h</option>
                            </select>
                        </div>
                        <div class="col-md-12">Local</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <input type="text" id="localDoCurso" name="localDoCurso" class="form-control" placeholder="Aparecida">
                        </div>
                    
                    <!-- UNIFORME ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Uniforme</div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Tamanho</label>
                            <select id="uniforme" name="uniforme" class="form-control" required="required">
                                <option selected>Selecione</option>
                                <option>Tamanho "P"</option>
                                <option>Tamanho "M"</option>
                                <option>Tamanho "G"</option>
                                <option>Tamanho "GG"</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label class="mb-0">Modelo</label>
                            <select id="modelo" name="modelo" class="form-control" required="required">
                                <option selected>Selecione</option>
                                <option>Baby Look</option>
                                <option>Tradicional</option>
                            </select>
                        </div>

                    <!-- DADOS DE ACESSO ----------------------------------------------------------------------------------------------->
                    <div class="text col-md-12 mb-0">Dados de Acesso</div>
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Usuário</label>
                            <input type="text" name="usuario" class="form-control" required="required">
                        </div>  
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>  
                        <div class="form-group col-md-6 col-sm-6">
                            <label class="mb-0">Senha: 6 a 20 carecteres.</label>
                            <input type="password" name="password" class="form-control">
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
 
    <script>
        $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('(00) 00000-0000');
        $('.cpf').mask('000.000.000-00');
        $('.money').mask('000.000.000.000,00');
    });
    </script>
</body>
</html>


