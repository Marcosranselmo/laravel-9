<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
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

    public function show($id)
    {
       // $user = User::where('id', '=', $id)->first();
       if (!$user = $this->model->find($id))
           return redirect()->route('users.index'); 

        return view('users.show', compact('user'));
    }

    // CRIAR USUÁRIO #####################################################################    
    public function create()
    { 
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        // return redirect()->route('users.show', $user);
        return redirect()->route('users.index');

        // $user = new User;
        // $user->nome = $request->nome;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->->save();
    }

    // EDITAR USUÁRIO #####################################################################    
    public function edit($id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

           return view('users.edit', compact('user'));
    }

    // ATUALIZAR USUÁRIO #####################################################################    
    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = $this->model->find($id))
           return redirect()->route('users.index');

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);
        $user->update($data); 
        
        return redirect()->route('users.index');
    }

    // DELETAR USUÁRIO #####################################################################    
    public function delete($id)
    {
       if (!$user = $this->model->find($id))
           return redirect()->route('users.index'); 

        $user->delete();   

        return redirect()->route('users.index');
    }
}
