@extends('admin.layout')

@section('titulo', 'Frequencia Aulas') 

@section('conteudo')  

    <div class="content-wrapper">
      <div class="container col-md-12">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <span class="align-middle mx-auto">Frequencia Aulas - Aluno(a): {{ auth()->user()->firstName}} {{ auth()->user()->lastName}}</span>
            </ol>
          </div>
        </div>
      </div>  

      <div class="content">
        <div class="card">
          <div class="card-body mt-3">
            <div class="table-responsive-md">
              <div class="row">
                <div class="col-sm-12"> 
                  <table class="table table-striped table-bordered" role="grid">
                    <thead>
                      <tr role="row">
                        <th class="align-middle">Dia Semana</th>
                        <th class="align-middle">Data</th>
                        <th class="align-middle">Presente</th>
                        <th class="align-middle">Ausente</th>
                      </tr>       
                    </thead> 
                    <tbody>
                      @foreach ($users as $user)
                        <tr role="row" class="odd">
                          <td class="align-middle" style="width: 14%">{{ $user->diaDaSemana }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->date }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->presente }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->ausente }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>

@endsection
