@extends('admin.layout')

@section('titulo', 'Financeiro Aluno') 

@section('conteudo')

    <div class="content-wrapper">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ol class="breadcrumb">
              <span class="align-middle mx-auto">Financeiro - Aluno(a): {{ Session::get('lg_firstName')}} {{ Session::get('lg_lastName')}}</span>
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
                      @foreach ($dados as $dado)
                        <tr role="row" class="odd">
                          <td class="align-middle" style="width: 14%">{{ $dado->mesRef }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->valorPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->formaPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->dataPag }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->dataVencimento }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->parcelasEmAtraso }}</td>
                          <td class="align-middle" style="width: 14%">{{ $dado->parcelasRestante }}</td>
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
