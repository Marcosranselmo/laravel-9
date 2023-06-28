@extends('admin.layout')

@section('titulo', 'Pagamento Alunos') 

@section('conteudo')

    <div class="content-wrapper">

      <div class="container">   
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <span class="align-middle mx-auto">Financeiro - Aluno(a): {{ Auth()->user()->firstName}} 
                                                                        {{ Auth()->user()->lastName }} / 
                                                                       </span>
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
                        <th class="align-middle">Mês ref.</th>
                        <th class="align-middle">Valor pag.</th>
                        <th class="align-middle">Forma pag.</th>
                        <th class="align-middle">Data pag.</th>
                        <th class="align-middle">Vencimento</th>
                        <th class="align-middle">Atrasos</th>
                        <th class="align-middle">A vencer</th>
                      </tr>       
                    </thead> 
                    <tbody>
                      @foreach ($users as $user)
                        <tr role="row" class="odd">
                          <td class="align-middle" style="width: 14%">{{ $user->mesRef }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->valorPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->formaPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->dataPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->dataVencimento }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->parcelasEmAtraso }}</td>
                          <td class="align-middle" style="width: 14%">{{ $user->parcelasRestante }}</td>
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
