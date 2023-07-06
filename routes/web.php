<?php

use App\Http\Controllers\{
    UserController
};
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::delete('/users/{id}', [UserController::class, 'delete'])->name('users.delete'); // destroy ou delete
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
// Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::view('/login', 'login.form')->name('login.form');
// Route::get('/login', 'App\Http\Controllers\LoginController@login_form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

// #####  INSCRIÇÃO NOVO ALUNO  #####
Route::get('/local-matricula', 'App\Http\Controllers\UserController@local_matricula');

Route::get('matricula-bairro-aparecida', 'App\Http\Controllers\UserController@matricula_bairro_aparecida');
Route::post('matricula-bairro-aparecida-create', 'App\Http\Controllers\UserController@matricula_bairro_aparecida_create');

Route::get('matricula-bairro-cidade-nova', 'App\Http\Controllers\UserController@matricula_bairro_cidade_nova');
Route::post('matricula-bairro-cidade-nova-create', 'App\Http\Controllers\UserController@matricula_bairro_cidade_nova_create');

Route::get('/dashboard', 'App\Http\Controllers\LoginController@login');
Route::post('/dashboard/auth', 'App\Http\Controllers\LoginController@auth');
Route::get('/dashboard/homeadmin', 'App\Http\Controllers\UserController@homeadmin');

// GRÁFICOS
Route::get('/dashboard/grafico-aulas', 'App\Http\Controllers\UserController@grafico_aulas');
Route::get('/dashboard/grafico-financeiro', 'App\Http\Controllers\UserController@grafico_financeiro');

Route::get('/dashboard/p-alunos', 'App\Http\Controllers\UserController@list_alunos');

Route::get('inserir-presenca-aluno', 'App\Http\Controllers\UserController@presenca_aluno');
Route::post('presenca-aluno-inserir', 'App\Http\Controllers\UserController@presenca_aluno_inserir');
Route::get('/dashboard/p-frequencia-aulas', 'App\Http\Controllers\UserController@list_frequencia_aulas');

Route::get('inserir-pagamento-aluno', 'App\Http\Controllers\UserController@pagamento_aluno');
Route::post('pagamento-aluno-inserir', 'App\Http\Controllers\UserController@pagamento_aluno_inserir');
Route::get('/dashboard/p-list-pagamento-aluno', 'App\Http\Controllers\UserController@list_pagamento_aluno');


// ##### EDITANDO DADOS DO ALUNO #####
Route::get('/dashboard/p-alunos-profile', 'App\Http\Controllers\UserController@frm_alunos_profile');

Route::POST('/dashboard/p-alunos-profile-salva-dados/{id}', 'App\Http\Controllers\UserController@frm_alunos_profile_dados_salva');
Route::post('/dashboard/p-alunos-profile-salva-senha', 'App\Http\Controllers\UserController@frm_alunos_profile_senha_salva');
Route::post('/dashboard/p-alunos-profile-salva-endereco', 'App\Http\Controllers\UserController@frm_alunos_profile_endereco_salva');
Route::post('/dashboard/p-alunos-profile-salva-curso', 'App\Http\Controllers\UserController@frm_alunos_profile_curso_salva');



Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/', function () {
    return view('welcome');
});
  