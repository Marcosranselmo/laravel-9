@extends('admin.layout')

@section('titulo', 'Financeiro Aluno') 

@section('conteudo')

    <div class="content-wrapper">

      <div class="container col-md-12">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <span class="align-middle mx-auto">Frequencia total de aulas</span>
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
                        <th class="align-middle">Aluno</th>
                        <th class="align-middle">Dia da Semana</th>
                        <th class="align-middle">Data aula</th>
                        <th class="align-middle">Presente</th>
                        <th class="align-middle">Ausente</th>
                      </tr>       
                    </thead> 
                    <tbody>
                      @foreach ($dados as $dado)
                        <tr role="row" class="odd">
                          <td class="align-middle" style="width: 14%">{{ $dado->firstName }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->diaDaSemana }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->dataAula }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->Presente }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->Ausente }}</td>
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
