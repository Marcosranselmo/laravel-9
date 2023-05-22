@extends('admin.layout')

@section('titulo', 'homeadmin') 

@section('conteudo')

    <div class="content-wrapper">
      <div class="content-wrapper">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <ol class="breadcrumb">
                    <span class="align-middle mx-auto">Início conteúdo</span>
                  </ol>
                </div>
            </div>
          </div>
        </div>

        <div class="content">
          <div class="card">
            <div class="card-body col-xl-12 col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
              <div class="table-responsive">
                <div class="card-body">
                  <h6> Seja Bem Vindo(a) {{ auth()->user()->firstName}}!</h6>

                  <div class="alert alert-danger" role="alert">
                    Favor adicionar sua <b> foto de perfil!. </b> Para isso, no menu ao lado clique em <b> Meus Dados </b>
                  </div>
                </div>
              </div>
            </div>
          </div>     
        </div>
      </div>   
    </div>

@endsection
