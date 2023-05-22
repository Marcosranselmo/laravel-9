<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        $users = User::get();
      
        return view('index', compact('users'));
    }

    // CRIAR USUÁRIO #####################################################################    
    public function create()
    { 
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if ($request->image) {
            $data['image'] = $request->image->store('users');
            // $extension = $request->image->getClientOriginalExtension();
            // $data['image'] = $request->image->storeAs('users', now() . ".{$extension}");

        }

        User::create($data);

        // return redirect()->route('users.show', $user);
        return redirect()->route('users.index');
    }

    // MATRICULA - LOCAL -------------------------------------------------------------------
    public function local_matricula() {
        return view('local-matricula');
    }

    // VIEW BAIRRO = APARECIDA --------------------------------------------------------
    public function matricula_bairro_aparecida () {
        return view('/matricula-bairro-aparecida');
    }

    // MATRICULA BAIRRO = APARECIDA --------------------------------------------------------
    public function matricula_bairro_aparecida_create(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        return redirect('/index');
    }

    // VIEW BAIRRO = CIDADE NOVA --------------------------------------------------------
    public function matricula_bairro_cidade_nova () {
        return view('/matricula-bairro-cidade-nova');
    }

    // MATRICULA BAIRRO = APARECIDA --------------------------------------------------------
    public function matricula_bairro_cidade_nova_create(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = User::create($data);
        return redirect('/index');
    }

    // ALUNOS - MENSALIDADE ---------------------------------------------
    public function formulario_mensalidade () {
        return view('formulario-mensalidade');
    }

    // criar a sessão (se login ok)
    public function homeadmin() {  
        if(Auth::check()) {
            return redirect('/dashboard/homeadmin');
        } else {

            // $user = User::find(Auth::get('lg_id'));
            // $user = user::find(1);
            // return view('admin.homeadmin');


            return view('login.form');
        }
    }
}
