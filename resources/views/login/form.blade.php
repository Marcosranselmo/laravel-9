<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">

    <link rel="stylesheet" type="text/css" href="css/login.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
</head>

<body class="mx-auto" style="background-color: #ab9980">
    <div class="card shadow mt-3 mb-5 col-lg-5 col-md-6 col-sm-8 col-12 mx-auto">
        <div class="card-body">
            {{-- @if (Session::get('lg_tentativas')<6) --}}

                {{-- erros de validação --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach($errors->all() as $mensagem)
                                <li>{{$mensagem}}</li>                        
                            @endforeach
                        </ul>
                    </div>  
                @endif
                
                {{-- erros de login --}}
                {{-- @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            <ul class="mx-0 my-0">
                                <li class="mx-0 my-0">{{$error}}</li>
                            </ul>
                        </div>        
                    @endforeach
                @endif --}}

                {{-- @if($mensagem = Session::get('erro'))
                    {{ $mensagem }}
                @endif --}}
            <form action="{{ route('login.auth') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-12 col-sm-5 col-5" style="background: white; justify-content: center; display: flex;">
                        <h4 class="mt-2" style="font-size: 15px;  letter-spacing: 2px;">LOGIN</h4>
                    </div>
                    <div class="col-md-12 col-sm-7 mb-4 col-7" style="background: white; justify-content: center; display: flex;">
                        <a href="/index"><img src="../imgp/logo-site-estudando-musica.png" class="img-fluid" alt="mdo" width="120" height="100"></a>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Senha">
                        </div>
                        {{-- <input type="checkbox" name="remember">Lembrar-me  --}}
                    </div>
                </div>
                <div class="text-center">
                    <h6>Faça sua &nbsp;<a style="text-decoration: none;  letter-spacing: 1px;" href="local-matricula">"FAÇA SUA MATRÍCULA!"</a></h6>
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-block  mt-3 mx-auto" style="width:100%;  letter-spacing: 1px;">LOGIN</button>
                </div>
            </form>
        </div>
        {{-- @else
            <div class="card-body login-card-body alert alert-danger p-4" style="text-align: left">
                <a class="login-box-msg" style="font-size: 18px;"><strong>Acesso Bloqueado!</strong></a>
                <a class="login-box-msg" style="font-size: 18px;">Aguarde 60 minutos, ou contate o administrador do sistema.</a> <br>
                <a class="login-box-msg" style="font-size: 18px; text-decoration: none;" 
                href="https://api.whatsapp.com/send?1=pt_BR&phone=5511964979977">Contactar Administrador</a>
            </div> 
        @endif --}}
    </div>
</body>

</html>


