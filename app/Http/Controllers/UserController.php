<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {

        $users = User::get();
      
        return view('index', compact('users'));
    }

    // public function show($id)
    // {
       // $user = User::where('id', '=', $id)->first();
    //    if (!$user = $this->model->find($id))
    //        return redirect()->route('users.index'); 

    //     return view('users.show', compact('user'));
    // }

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

    // EDITAR USUÁRIO #####################################################################    
    public function edit($id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

           return view('users.edit', compact('user'));
    }

    // ATUALIZAR USUÁRIO #####################################################################    
    public function update(Request $request, $id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        // if ($request->image) {
        //     if ($user->image && Storage::exists($user->image)) {
        //         Storage::delete($user->image);
        //     }
        //     $data['image'] = $request->image->store('users');
        // }
        $user->update($data); 
        
        return redirect()->route('users.index');
    }

    // DELETAR USUÁRIO ---------------------------------------------------    
    public function delete($id)
    {
       if (!$user = $this->model->find($id))
           return redirect()->route('users.index'); 

        $user->delete(); 
   
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

    // ALUNOS - listar dados alunos ---------------------------------------------
    public function list_alunos($id)
    {
       //$user = User::where('id', '=', $id)->first();
       if ($user = User::find($id))
       // return redirect()->route('users.index'); 

        return view('/index', compact('user'));
    }
}
