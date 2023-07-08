@extends('admin.layout')

@section('titulo', 'Admin-Dados') 

@section('conteudo')


    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <span class="align-middle mx-auto">Editar Dados</span>
                    </ol>
                </div>
            </div>
        </div>

        <style>
            /* button acima  */
            .card ul li {
                padding: 10px;
            }
            .card ul li a {
                color: rgb(255, 255, 255);
                font-size: 12px;
                letter-spacing: 1px;
                background: #AB9988;
                text-decoration: none;
            }
            .card ul li .nav-link:hover {
                color: white;
                background: #524b41;
                text-decoration: none;
            }
            
            /* button abaixo */
            .card button  {
                color: white;
                font-size: 12px;
                letter-spacing: 1px;
                background: #AB9988;
                text-decoration: none;
                border: none;
                padding: 10px;
            }
            .card button:hover  {
                color: white;
                background: #524b41;
                text-decoration: none;
            }

             /* button foto perfil */
             .tab-pane .button  {
                color: white;
                font-size: 12px;
                padding: 8px;
                border-radius: 5px;
                letter-spacing: 1px;
                background: #AB9988;
                text-decoration: none;
            }
            .tab-pane a:hover  {
                color: white;
                background: #524b41;
                text-decoration: none;
            }

        </style>


        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-12 mx-auto" style="padding: 1px;">
                        <div class="card card-primary card-outline;">
                            <div class="card-body box-profile col-md-12 col-sm-6 col-6 mx-auto">
                                <div class="text-center mt-1">
                                    @if (Session::get('lg_foto'))
                                    <img class="img-profile rounded-circle" src="{{asset('img/alunos')}}/{{ Session::get('lg_nome_foto') }}" style="width: 100%">
                                    @else
                                    <img class="img-profile rounded-circle" src="{{asset('img/user.png')}}" style="width: 100%">
                                    @endif  
                                </div>
                                <h6 class="profile-username text-center mt-2 mb-0">{{ auth()->user()->firstName}}</h6>
                            </div>
                        </div>         
                    </div>

                    <div class="col-md-10" style="padding: 1px;">
                        <div class="card">
                            <div class="card-header p-2 mx-auto">
                                <ul class="nav nav-pills">
                                    <li class="nav-item mx-auto"><a class="nav-link" href="#dados" data-toggle="tab">Meus Dados</a></li>
                                    <li class="nav-item mx-auto"><a class="nav-link" href="#login" data-toggle="tab">Meu Login</a></li>
                                    <li class="nav-item mx-auto"><a class="nav-link" href="#avatar" data-toggle="tab">Foto Perfil</a></li>
                                    <li class="nav-item mx-auto"><a class="nav-link" href="#endereco" data-toggle="tab">Meu Endereço</a></li>
                                    <li class="nav-item mx-auto"><a class="nav-link" href="#curso" data-toggle="tab">Curso</a></li>
                                </ul>
                            </div>
                            <div class="card-body">  
                                <div class="tab-content">
                                    <!--Edição dados -->
                                    <div class="tab-pane" id="dados">
                                        <form class="form-horizontal" action="/dashboard/p-alunos-profile-salva-dados" method="PUT">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="firstName" class="col-sm-2 col-form-label" style="text-align: left;">1º Nome:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="firstName" id="firstName" class="form-control" placeholder="Primeiro nome" value="{{ auth()->user()->firstName }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="lastName" class="col-sm-2 col-form-label" style="text-align: left;">2º Nome:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="lastName" id="lastName" class="form-control" placeholder="Último nome" value="{{ auth()->user()->lastName}}">
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row">
                                                <label for="IdadeAtual" class="col-sm-2 col-form-label" style="text-align: left;">Idade:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="IdadeAtual" id="IdadeAtual" class="form-control" placeholder="" value="{{ auth()->user()->IdadeAtual}}">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group row">
                                                <label for="dataNascimento" class="col-sm-2 col-form-label" style="text-align: left;">Data Nasc:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="dataNascimento" id="dataNascimento" class="form-control date" placeholder="" value="{{ auth()->user()->dataNascimento}}">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group row">
                                                <label for="escolaridade" class="col-sm-2 col-form-label" style="text-align: left;">Escolar:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="escolaridade" id="escolaridade" class="form-control" placeholder="" value="{{ auth()->user()->escolaridade}}">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group row">
                                                <label for="celular" class="col-sm-2 col-form-label" style="text-align: left;">Celular:</label>
                                                <div class="col-sm-4">
                                                    <input type="text"  name="celular" id="celular" class="form-control phone" placeholder="celular" value="{{ auth()->user()->celular}}">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label" style="text-align: left;">Usuário:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="usuario" id="usuario" class="form-control" placeholder="Email" value="{{ auth()->user()->usuario}}" readonly>
                                                </div>
                                            </div> --}}
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>   

                                    <!-- Edição de Login -->
                                    <div class="tab-pane" id="login">
                                        <form class="form-horizontal" action="/dashboard/p-alunos-profile-salva-senha" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="nmusuario" class="col-sm-2 col-form-label" style="text-align: left;">Email:</label>
                                                <div class="col-sm-6">
                                                    <input type="email" required name="email" id="email" class="form-control" placeholder=""  value="{{ auth()->user()->email}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="passatual" class="col-sm-2 col-form-label" style="text-align: left;">Senha Atual:</label>
                                                <div class="col-sm-6">
                                                    <input type="password" required name="passatual" id="passatual" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="passnova" class="col-sm-2 col-form-label" style="text-align: left;">Nova Senha:</label>
                                                <div class="col-sm-6">
                                                    <input type="password" required name="passnova" id="passnova" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>   
                                                                
                                    <!-- Edição foto de perfil -->
                                    <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="pills-avatar-tab" tabindex="0">
                                        <div class="tab-pane" id="avatar">
                                            <div class="col-sm-12" style="text-align: center;">
                                                <a href="/dashboard/p-alunos-profile-foto" class="button">Alterar Foto</a>
                                            </div>
                                        </div>     
                                    </div>

                                     <!-- Edição de Endereço -->
                                     <div class="tab-pane" id="endereco">
                                        <form class="form-horizontal" action="/dashboard/p-alunos-profile-salva-endereco" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="logradouro" class="col-sm-2 col-form-label" style="text-align: left;">Endereço:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="logradouro" id="logradouro" class="form-control" value="{{ auth()->user()->logradouro}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="numero" class="col-sm-2 col-form-label" style="text-align: left;">Número:</label>
                                                <div class="col-sm-6">
                                                    <input type="number" required name="numero" id="numero" class="form-control" value="{{ auth()->user()->numero}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bairro" class="col-sm-2 col-form-label" style="text-align: left;">Bairro:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="bairro" id="bairro" class="form-control" value="{{ auth()->user()->bairro}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cidade" class="col-sm-2 col-form-label" style="text-align: left;">Cidade:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="cidade" id="cidade" class="form-control" value="{{ auth()->user()->cidade}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="estado" class="col-sm-2 col-form-label" style="text-align: left;">Estado:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="estado" id="estado" class="form-control" value="{{ auth()->user()->estado}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cep" class="col-sm-2 col-form-label" style="text-align: left;">Cep:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="cep" id="cep" class="form-control cep" value="{{ auth()->user()->cep}}">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 

                                    <!-- Edição Curso -->
                                    <div class="tab-pane" id="curso">
                                        <form class="form-horizontal" action="/dashboard/p-alunos-profile-salva-curso" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="curso" class="col-sm-2 col-form-label" style="text-align: left;">Curso:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="curso" id="curso" class="form-control" value="{{ auth()->user()->curso}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="periodo" class="col-sm-2 col-form-label" style="text-align: left;">Período:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="periodo" id="periodo" class="form-control" value="{{ auth()->user()->periodo}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="horario" class="col-sm-2 col-form-label" style="text-align: left;">Horário:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="horario" id="horario" class="form-control" value="{{ auth()->user()->horario}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="localDoCurso" class="col-sm-2 col-form-label" style="text-align: left;">Local:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" required name="localDoCurso" id="localDoCurso" class="form-control" value="{{ auth()->user()->localDoCurso}}" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Salvar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

