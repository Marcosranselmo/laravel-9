@extends('admin.layout')
@section('titulo', 'Alterar dados') 


@section('conteudo')

    <div class="content-wrapper">
      {{-- <div class="content-header" style="background-color: red"> --}}
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <ol class="breadcrumb">
                  <span class="align-middle">Painel Admin - Alterar Dados</span>
                </ol>
              </div>
          </div>
        </div>
      {{-- </div> --}}

      <div class="content">
        <div class="card ">   
          <div class="card-body">
            <span class="card-title ml-3">Alterar dados aluno(a): {{ $dados->firstName }} </span>
          </div>
        </div>    
      </div>
  
      <div class="container d-flex justify-content-center">
        <div class="card" style="background-color: rgb(250, 250, 250); width: 95%;">   
          <div class="card-body">
            <div class="basic-form">
                <form action="/dashboard/p-alunos-salva-alteracao" method="POST">
                  @csrf
                  <div class="form-row">
                    <!-- DADOS PESSOAIS ----------------------------------------------------------------------------------------------->
                    <div class="col-md-12 mt-3"><h5>Dados pessoais</h5></div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Primeiro nome</label>
                      <input  type="text" class="form-control mt-0" name="firstName" required="required" value="{{ auth()->user()->firstName }}">
                    </div> 
                    <div class="form-group col-md-4">
                      <label class="mb-0">Último nome</label>
                      <input type="text" class="form-control mt-0" name="lastName" required="required" value="{{ auth()->user()->lastName }}">
                    </div>  
                    <div class="form-group col-md-4">
                      <label class="mb-0">Número celular</label>
                      <input type="text" class="form-control mb-0 phone" name="celular" required="required" value="{{ $user->celular }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Idade atual</label>
                      <input type="number" class="form-control mb-0" name="IdadeAtual" required="required" value="{{ $user->IdadeAtual }}">
                    </div> 
                    <div class="form-group col-md-4">
                      <label class="mb-0">Data nascimento</label>
                      <input type="text" class="form-control mb-0date" name="dataNascimento" required="required" value="{{ $user->dataNascimento }}">
                    </div>  
                    <div class="form-group col-md-4">
                      <label class="mb-0">Escolaridade</label>
                      <input type="text" class="form-control mb-0" name="escolaridade" required="required" value="{{ $user->escolaridade }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Sexo</label>
                      <input type="text" class="form-control mb-0" name="sexo" required="required" value="{{ $user->sexo }}">
                    </div>
 
                    <!-- ENDEREÇO ----------------------------------------------------------------------------------------------->
                    <div class="col-md-12 mt-3"><h5>Endereço</h5></div>
                    <div class="form-group col-md-5">
                      <label class="mb-0">Rua/Avenida</label>
                      <input type="text" class="form-control mb-0" name="logradouro" required="required" value="{{ $user->logradouro }}">
                    </div> 
                    <div class="form-group col-md-2">
                      <label class="mb-0">Número</label>
                      <input type="number" class="form-control mb-0" name="numero" required="required" value="{{ $user->numero }}">
                    </div>  
                    <div class="form-group col-md-5">
                      <label class="mb-0">Bairro</label>
                      <input type="text" class="form-control mb-0" name="bairro" required="required" value="{{ $user->bairro }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Cidade</label>
                      <input type="text" class="form-control mb-0" name="cidade" required="required" value="{{ $user->cidade }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Estado</label>
                      <input type="text" class="form-control mb-0" name="estado" required="required" value="{{ $user->estado }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Seu cep</label>
                      <input type="text" class="form-control mb-0 cep" name="cep" required="required" value="{{ $user->cep }}">
                    </div>

                    <!-- CURSO ----------------------------------------------------------------------------------------------->
                    <div class="col-md-12 mt-3"><h5>Curso</h5></div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Curso</label>
                      <input type="text" class="form-control mb-0" name="curso" required="required" value="{{ $user->curso }}">
                    </div> 
                    <div class="form-group col-md-4">
                      <label class="mb-0">Período</label>
                      <input type="text" class="form-control mb-0" name="periodo" required="required" value="{{ $user->periodo }}">
                    </div>  
                    <div class="form-group col-md-4">
                      <label class="mb-0">Horário</label>
                      <input type="text" class="form-control mb-0" name="horario" required="required" value="{{ $user->horario }}">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Local curso</label>
                      <input type="text" class="form-control mb-0" name="localDoCurso" required="required" value="{{ $user->localDoCurso }}">
                    </div>

                    <!-- UNIFORME ----------------------------------------------------------------------------------------------->
                    <div class="col-md-12 mt-3"><h5>Uniforme</h5></div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Tamanho</label>
                      <input type="text" class="form-control mb-0" name="uniforme" required="required" value="{{ $user->uniforme }}">
                    </div> 
                    <div class="form-group col-md-4">
                      <label class="mb-0">Modelo</label>
                      <input type="text" class="form-control mb-0" name="modelo" required="required" value="{{ $user->modelo }}">
                    </div> 

                    <!-- DADOS DE ACESSO ----------------------------------------------------------------------------------------------->
                    <div class="col-md-12 mt-3"><h5>Dados de Acesso</h5></div>
                    <div class="form-group col-md-4">
                      <label class="mb-0">Usuário</label>
                      <input type="text" class="form-control mb-0" name="usuario" required="required" value="{{ $user->usuario }}">
                    </div> 
                    <div class="form-group col-md-6">
                      <label class="mb-0">Email</label>
                      <input type="email" class="form-control mb-0" name="email" required="required" value="{{ $user->email }}">
                    </div> 
                    <div class="form-group col-md-4">
                      <label class="mb-0">Senha</label>
                      <input type="password" class="form-control mb-0" name="senha" required="required" value="{{ $user->senha }}">
                    </div> 
                    <input type="hidden" name="id" value="{{ $user->id }}">
                  </div>
                  <a href="/dashboard/p-alunos" class="btn btn-warning">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
          </div>
        </div>    
      </div>
    </div>  

@endsection
