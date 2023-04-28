<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">

    <link rel="stylesheet" type="text/css" href="/cssp/sb-admin-2.min.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    
</head>

<style>
@import url('https://fonts.googleapis.com/css2? family= Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,400 & display=swap'); */
* body {
        max-width: 1369px;
        margin: 0 auto;
        height: 0;
        font-family: 'Poppins', sans-serif;
    }
      
    div .btn {
        background: #AB9988;
        color: rgb(255, 255, 255);
        font-size: 14px;
        height: 40px;
        border: none;
    }    
    div .btn-lg:hover  {
        background: #8a7a6c;
        color: rgb(255, 255, 255);
        border: none;
    } 

    /* faça sua */
    .text-center h6 {
        font-size: 14px;
        color: #AB9988;
        letter-spacing: 0.4px;
        font-weight: 500;
    }

    /* Inscrição aqui */
    .text-center a {
        font-size: 14px;
        color: #AB9988;
        font-weight: 400;
    }

    .text-center a:hover {
        color: #64584d;
}

/*  Smartphone Portrait  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */

/*  Smartphone Landscape  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 320px){
    body {
        margin-top: 70px;
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 130px;
    }
    .card {
        width: 340px;
    }
    .card-body{
        padding: 0px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 10px;
        margin-right: 10px;
    }

    h1 {
        color: white;
        font-size: 25px;
        margin-top: 20px;
        text-align: center;
    }
} 

/*  Smartphone Landscape  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 576px){
    body {
        margin-top: 70px;
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 100px;
    }
    .card {
        width: 400px;
    }
    .card-body{
        padding: 0px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }

    h1 {
        color: white;
        font-size: 25px;
        margin-top: 20px;
        text-align: center;
    }
} 

/*  Tablet Portrait  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 768px){
    body {
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 120px;
    }
    .card {
        width: 400px;
    }
    .card-body{
        padding: 15px;
    }
}

/*  Tablet Landscape  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 992px){
    body {
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 180px;
    }
    .card-body{
        padding: 20px;
    }
}

/* Notebooks e PCs Modernos  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 1200px){
    .body {
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 180px;
    }
    .card {
        width: 400px;
    }
    .card-body{
        padding: 15px;
    }
}

/* Notebooks e PCs Modernos  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> */
@media (min-width: 1400px){
    body {
        background-color: #ab9980;
    }
    .mx-auto {
        margin-top: 180px;
        height: 400px;
    }
    .card {
        width: 400px;
    }
    .card-body{
        height: 50px;
        padding: 20px;
    }
}

</style>

<body class="mx-auto">
    <div class="card shadow mt-3 mb-5 col-lg-5 col-md-6 col-sm-8 col-12 mx-auto">
        <div class="card-body">
            @if (Session::get('lg_tentativas')<6)

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
                @if (isset($erro))
                    @foreach ($erro as $mensagem_erro)
                        <div class="alert alert-danger">
                            <ul class="mx-0 my-0">
                                <li class="mx-0 my-0">{{$mensagem_erro}}</li>
                            </ul>
                        </div>        
                    @endforeach
                @endif 


            <form action="dashboard/efetua-login" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-12 col-sm-5 col-5" style="background: white; justify-content: center; display: flex;">
                        <h4 class="mt-2" style="font-size: 15px;  letter-spacing: 2px;">LOGIN</h4>
                    </div>
                    <div class="col-md-12 col-sm-7 mb-4 col-7" style="background: white; justify-content: center; display: flex;">
                        <a href="/"><img src="../imgp/logo-site-estudando-musica.png" class="img-fluid" alt="mdo" width="120" height="100"></a>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
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
        @else
            <div class="card-body login-card-body alert alert-danger p-4" style="text-align: left">
                <a class="login-box-msg" style="font-size: 18px;"><strong>Acesso Bloqueado!</strong></a>
                <a class="login-box-msg" style="font-size: 18px;">Aguarde 60 minutos, ou contate o administrador do sistema.</a> <br>
                <a class="login-box-msg" style="font-size: 18px; text-decoration: none;" 
                href="https://api.whatsapp.com/send?1=pt_BR&phone=5511964979977">Contactar Administrador</a>
            </div> 
        @endif
    </div>
</body>

</html>


