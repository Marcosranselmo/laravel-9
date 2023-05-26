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

// #####  GRÁFICOS AULAS  #####
Route::get('/dashboard/grafico-aulas', 'App\Http\Controllers\UserController@grafico_aulas');
Route::get('/dashboard/grafico-financeiro', 'App\Http\Controllers\UserController@grafico_financeiro');


Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/', function () {
    return view('welcome');
});
