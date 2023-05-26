<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\frequenciaaulas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    // DASHBOARD
    public function homeadmin(Request $request) {  
        if(Auth::User() && !Session::get('lg_permissao08')) {
            $users = User::get();
            return view('admin.homeadmin', compact('users'));
        } else {
            return redirect('/login');
        }
    }

    // GRÁFICO - AULAS
    public function grafico_aulas() {
        if(Auth::User() && !Session::get('lg_permissao01')) {
            $user = user::find(Session::get('lg_id'));
            // $frequenciaaulas = DB::table('frequenciaaulas')->select('diaDaSemana');
            $frequenciaaulas = DB::table('frequenciaaulas')->select('presente');
            $total_presente = $frequenciaaulas->sum('presente');
            $frequenciaaulas = DB::table('frequenciaaulas')->select('ausente');
            $total_ausente = $frequenciaaulas->sum('ausente');

            // gráfico 1 - Presença
            $usersData = frequenciaaulas::select([
                DB::raw('DAY(created_at) as dia'),
                DB::raw('COUNT(*) as total')
            ])
            // ->groupBy('dia')
            ->groupBy('dia')
            ->get();

            // preparar arrays
            foreach($usersData as $frequenciaaulas) {
                $dia[] = $frequenciaaulas->dia;
                $total[] = $frequenciaaulas->total;
            } 

            // formatar para chartjs
           $userLabel = "'Comparativo presença aluno'";
           $userDia =  implode(',', $dia);
           $userTotal = implode(',', $total);
                

            return view('/admin/grafico-aulas',compact('user','frequenciaaulas',
            'total_presente','total_ausente','userLabel','userDia','userTotal'));
        } else {
            return redirect('/dashboard');
        }
    }
}
