@extends('admin.layout')

@section('titulo', 'Lista Alunos')

@section('conteudo')

    <div class="content-wrapper">
        <div class="container col-md-12">
          <div class="row">
              <div class="col-md-12">
                <ol class="breadcrumb">
                  <span class="align-middle mx-auto">Painel do Administrador</span>
                </ol>
              </div>
          </div>
        </div>  
      <div class="content">
        <div class="card ">
          <div class="card-body">
            <h4 class="card-title"></h4>
            <div class="table-responsive">
              <div id="DataTables_Table_0_wrapper">
                <a href="/dashboard/p-alunos-incluir" type="button" class="btn mb-1 btn-success">Incluir novo aluno</a>
                <div class="row">
                  <div class="col-sm-12"> 
                    <table class="table table-striped table-bordered" role="grid">
                        <thead>
                            <tr role="row">
                            <th>Nome</th>
                            <th>Curso</th>
                            <th>Local Curso</th>
                            <th>Celular</th>
                            </tr>       
                        </thead> 
                        <tbody>
                            @foreach ($users as $user)
                              <tr role="row" class="odd">
                                <td class="align-middle" style="width: 12%">{{ $user->firstName }}</td>
                                <td class="align-middle" style="width: 15%">{{ $user->curso }}</td>
                                <td class="align-middle" style="width: 15%">{{ $user->localDoCurso }}</td>
                                <td class="align-middle" style="width: 19%">{{ $user->celular }}</td>
                                <td class="align-middle" style="width: 80%">
                                  <a href="/dashboard/p-alunos-editar/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                    <img src="../icone/editar.png" style="width: 20px;" alt="Editar">
                                  </a>
                                  <a href="/dashboard/p-alunos-excluir/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir">
                                    <img src="../icone/lixeira.png" style="width: 20px;" alt="Excluir">
                                  </a>
                                  <a href="/dashboard/p-alunos-permissoes/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Permissões">
                                    <img src="../icone/permissao.png" style="width: 20px;" alt="Permissões">
                                  </a>
                                  @if ($user->ativo)
                                  <a href="/dashboard/p-alunos-desativar/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Desativar">
                                    <img src="../icone/desativado.png" style="width: 20px;" alt="desativado">
                                  </a>
                                  @else
                                  <a href="/dashboard/p-alunos-ativar/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Ativar">
                                    <img src="../icone/activist.png" style="width: 20px;" alt="ativar">
                                  </a>
                                  @endif
                                  <a href="/dashboard/p-alunos-permissoes/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Notificação">
                                    <img src="../icone/notificacao.png" style="width: 20px;" alt="notificacao">
                                  </a>
                                  <a href="/dashboard/p-alunos-permissoes/{{ $user->id }}" type="button" class="btn" 
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail">
                                    <img src="../icone/o-email.png" style="width: 20px;" alt="Email">
                                  </a>
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
    </div>

@endsection

<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>