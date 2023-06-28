<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Session; 

use App\Models\alunos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MensalidadeController extends Controller    
{
  
  // public function list_pagamento() {
  //   if(Auth::User() && !Session::get('lg_permissao01')) {
  //   $user = User::find(Session::get('lg_id'));
  //   $users = DB::table('mensalidade')->where('mensalidade.id_users', Session::get('lg_id'))->orderBy('firstName','asc')->paginate(10);
  //   return view('/admin/p-list-pagamento', compact('user','users'));
  //   } else {
  //   return redirect('/dashboard');
  //   }
  // }

      // LISTA - PAGAMENTO ALUNOS
      public function list_pagamento_aluno() {
        if(Auth::User() && !Session::get('lg_permissao08')) {
            $users = user::get();
            return view('/admin/p-list-pagamento-aluno',compact('users'));
        } else {
            return redirect('/dashboard');
        }
    }
}