<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local matrícula</title>
    <link rel="icon" type="image/x-icon" href="imgicon/favicon-estudandomusica.png">

    <link href="/cssp/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>
 

<style>
    @import url('https://fonts.googleapis.com/css2? family= Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,400 & display=swap'); */

    .nav-link {
        color: rgb(247, 247, 247);
    }
 
    /* === Responsive =============================*/
    @media (min-width: 200px) {
        .card-body h2 {
            font-size: 20px;
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: -25px;
            margin-top: 20px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-top: -30px;
            margin-bottom: 35px;
        } 
        .container .card-body {
            margin-top: -5px;
            margin-bottom: 20px;
        }
        .container .card-body h4 {
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 500;
            margin-bottom: 10px;
            color:rgb(0, 0, 0);
        }
        footer .img-fluid {
            width: 100px;
            margin-top: -20px;
            margin-bottom: 20px;
            height: 20px;
        }
        .rodape {
            height: 4px;
            background-color: #c2b1a1;
            margin-bottom: 0px;
        }
    }

    @media (min-width: 576px) {
        .card-body h2 {
            font-size: 20px;
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: -25px;
            margin-top: 20px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: 35px;
        } 
        .container .card-body {
            margin-top: -5px;
            margin-bottom: 20px;
        }
        .container .card-body h4 {
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 500;
            margin-top: 5px;
            margin-bottom: 10px;
            color:rgb(0, 0, 0);
        }
        footer .img-fluid {
            width: 100px;
            margin-top: -20px;
            margin-bottom: 20px;
            height: 20px;
        }
        .rodape {
            position: absolute;
            height: 4px;
            background-color: #c2b1a1;
            bottom: 0px;
            width: 100%;
            line-height: 100px;
        }
    }

    @media (min-width: 768px) {
        h3 {
            margin-top: 35px;
            margin-bottom: 15px;
        }
        /* ANDAMENTO DO PROCESSO */
        .content .text-center {
            margin-top: 30px;
            margin-bottom: 25px;
            padding: 0;
            letter-spacing: 2px;
            font-size: 13px;
        }
        .card-body h2 {
            font-size: 20px;
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: -20px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: 35px;
        }
        /* PAGAMENTO INSCRIÇÃO */
        h3 {
            margin-top: 20px;
            margin-bottom: -5px;
            font-size: 20px;
        }
        h4 {
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 15px;
            letter-spacing: 1px;
        }
    }

    @media (min-width: 992px) {
        h3 {
            margin-top: 35px;
            margin-bottom: 15px;
        }
        .card-body h2 {
            font-size: 20px;
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: -20px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: 35px;
        }
        /* PAGAMENTO INSCRIÇÃO */
        h3 {
            margin-top: 25px;
            margin-bottom: -5px;
            font-size: 20px;
        }
        h4 {
            margin-top: 22px;
            margin-bottom: 10px;
            font-size: 15px;
            letter-spacing: 1px;
        }
    }

    @media (min-width: 1200px) {
        h3 {
            margin-top: 35px;
            margin-bottom: 15px;
        }
        /* ANDAMENTO DO PROCESSO */
        .content .text-center {
            margin-top: 35px;
            margin-bottom: 30px;
            padding: 0;
            letter-spacing: 2px;
            font-size: 13px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: 35px;
        }
        /* PAGAMENTO INSCRIÇÃO */
        h3 {
            margin-top: 30px;
            margin-bottom: -5px;
            font-size: 20px;
        }
        h4 {
            margin-top: 25px;
            margin-bottom: 10px;
            font-size: 15px;
            letter-spacing: 1px;
        }
    }

    @media (min-width: 1400px) {
        h3 {
            margin-top: 20px;
            margin-bottom: 15px;
        }
        /* ANDAMENTO DO PROCESSO */
        .content .text-center {
            margin-top: 35px;
            margin-bottom: 30px;
            padding: 0;
            letter-spacing: 2px;
            font-size: 13px;
        }
        .card-body p {
            padding: 15px;
            letter-spacing: 1px;
            border-radius: 5px;
            background-color: rgb(248, 248, 248);
            color: rgb(0, 0, 0);
            margin-bottom: 35px;
        }
        /* PAGAMENTO INSCRIÇÃO */
        h3 {
            margin-top: 35px;
            margin-bottom: -5px;
            font-size: 20px;
        }
        h4 {
            margin-top: 30px;
            margin-bottom: 10px;
            font-size: 15px;
            letter-spacing: 1px;
        }
    }

</style>

<body>
    <header class="d-flex justify-content-center py-1 px-0" style="background: #c2b1a1;">
        <div class="col-md-12 col-xs-12 col-12 px-1" style="max-width: 710px;">
            <div class="card border-left-info shadow h-100 py-0">
                <div class="card-body p-2">
                    <div class="row no-gutters align-items-center">
                        <img src="{{asset('../imgp/logo-site-estudando-musica.png') }}"; class="rounded mx-auto d-block" 
                        alt="Estudandomusica" width="120" height="40" style="padding: 10px;">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="justify-content-center text-center mx-auto p-0" style="max-width: 710px;">
        <div class="card-body mx-auto p-2 bg-white rounded col-12">
            <h2 class="mx-auto">Matrícula</h2>
            <p class="mx-auto">Escolha o local onde você deseja fazer sua aula.</p>

            {{-- MAPS LOCAL MATRÍCULA --}}
            <div class="container d-md-flex d-sm-flex p-0" style="max-width: 710px;">
                <div class="card-body shadow">
                    <h4>Bairro N. Sra Aparecida</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916.4113940225064!2d-47.3150678!3d-23.255981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf5046f7e0705b%3A0x14630803cdc93153!2sR.%20Jorge%20Simeira%2C%2073%20-%20Nossa%20Sra.%20Aparecida%2C%20Itu%20-%20SP%2C%2013311-370!5e0!3m2!1spt-BR!2sbr!4v1679682227065!5m2!1spt-BR!2sbr" 
                    width="100%" height="60%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                    <div class="mx-auto mt-2 mb-2">
                        <a type="button" href="http://localhost:8989/matricula-bairro-aparecida" 
                        class="btn btn-dark w-100 center">Escolher este local</a>
                    </div>
                </div>

                <div class="card-body shadow">
                    <h4>Bairro Cidade Nova</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.8851096609064!2d-47.3324299!3d-23.3823649!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf5c6030bd649f%3A0xe4748b6b1ada5b42!2sAv.%20da%20Esperan%C3%A7a%2C%2042%20-%20Cidade%20Nova%20I%2C%20Itu%20-%20SP%2C%2013308-030!5e0!3m2!1spt-BR!2sbr!4v1679761437905!5m2!1spt-BR!2sbr" 
                    width="100%" height="60%" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe> 
                    <div class="mx-auto mt-2 mb-2">
                        <a type="button" href="http://localhost:8989/matricula-bairro-cidade-nova" 
                        class="btn btn-dark w-100 center">Escolher este local</a>
                    </div>
                </div>
            </div>
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

</body>
</html>