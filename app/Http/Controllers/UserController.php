<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\frequenciaaulas;
use App\Models\FrequenciaAulas as ModelsFrequenciaAulas;
use App\Models\Mensalidade;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index() {
        $users = User::get();
        return view('index', compact('users'));
    }

    // CRIAR USUÁRIO ----------------------------------------------------------------------    
    public function create() { 
        return view('users.create');
    }

    public function store(Request $request) {
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

    // VIEW BAIRRO = APARECIDA -------------------------------------------------------------
    public function matricula_bairro_aparecida () {
        return view('/matricula-bairro-aparecida');
    }

    // MATRICULA BAIRRO = APARECIDA --------------------------------------------------------
    public function matricula_bairro_aparecida_create(Request $request) {
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
    public function matricula_bairro_cidade_nova_create(Request $request) {
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
            $user = User::find(Session::get('lg_id'));
            
            // $frequenciaaulas = DB::table('frequenciaaulas')->select('diaDaSemana');
            // $total_diaDaSemana = $frequenciaaulas->sum('diaDaSemana');

            $frequenciaaulas = DB::table('frequenciaaulas')->select('presente');
            $total_presente = $frequenciaaulas->sum('presente');
            $frequenciaaulas = DB::table('frequenciaaulas')->select('ausente');
            $total_ausente = $frequenciaaulas->sum('ausente');

            // $frequenciaaulas = DB::table('frequenciaaulas')->select('diaDaSemana');
            // $diaDaSemana = $frequenciaaulas->sum('diaDaSemana');
  
            // gráfico 1 - Presença
            $usersData = frequenciaaulas::select([
                DB::raw('Date as date'),
                DB::raw('COUNT(*) as total')
            ])
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

            // dd($usersData)
 
            // preparar arrays
            foreach($usersData as $frequenciaaulas) {
                $date[] = $frequenciaaulas->date;
                $total[] = $frequenciaaulas->total;
            } 
 
            // formatar para chartjs
            $userLabel = "'Comparativo presença aluno'";
            $userDate =  implode(',', $date);
            $userTotal = implode(',', $total);
                 
 
            return view('/admin/grafico-aulas',compact('user','frequenciaaulas',
            'total_presente','total_ausente','userLabel','userDate','userTotal'));
        } else {
            return redirect('/dashboard');
        }
    }

    // GRÁFICO - FINANCEIRO
    public function grafico_financeiro() {
        if(Auth::User() && !Session::get('lg_permissao01')) {
            $user = user::find(Session::get('lg_id'));
            // $dados = DB::table('alunos')->where('alunos.id', '!=', Session::get('lg_id'))->orderBy('firstName','asc')->paginate(10);
            
            // VALOR MENSALIDADE
            $mensalidade = DB::table('mensalidade')->select('valorMensal');
            $total_mensalidade = $mensalidade->sum('valorMensal');

            // DATA VENCIMENTO
            $mensalidade = DB::table('mensalidade')->select('dataVencimento');
            $data_vencimento = $mensalidade->sum('dataVencimento');

            // PARCELAS TOTAL PAGAS
            $mensalidade = DB::table('mensalidade')->select('valorPag');
            $total_pago = $mensalidade->sum('valorpag');

            // PARCELAS EM ATRASO
            $mensalidade = DB::table('mensalidade')->select('parcelasEmAtraso');
            $parcelas_atrasadas = $mensalidade->sum('parcelasEmAtraso');
            
            // GRÁFICO 2 DATA DOS PAGAMENTOS
            $datData = Mensalidade::all();

            foreach($datData as $dat) {
                $datmesRef[] = "'".$dat->mesRef."'";
                $datTotal[] = user::where('id_mensalidade', $dat->id)->count();
            }

            // FORMATAR PARA CHARTJS
            $datLabel = implode(',', $datmesRef);
            $datTotal = implode(',', $datTotal);

            // gráfico 1 - Presença
            $usersData = mensalidade::select([
                DB::raw('DAY(created_at) as dia'),
                DB::raw('COUNT(*) as total')  
            ])
            ->groupBy('dia')
            ->groupBy('dia')
            ->get();

            // preparar arrays
            foreach($usersData as $mensalidade) {
                $dia[] = $mensalidade->dia;
                $total[] = $mensalidade->total;
            } 

            // formatar para chartjs
            $userLabel = "'Comparativo mensalidade'";
            $userDia =  implode(',', $dia);
            $userTotal = implode(',', $total);

            return view('/admin/grafico-financeiro',compact('user','mensalidade','total_mensalidade',
            'data_vencimento','total_pago','parcelas_atrasadas','userLabel','userDia','userTotal'));
            } else {
            return redirect('/dashboard');
        }
    }
    

    // ALUNOS - LISTA
    public function list_alunos() {
        if(Auth::User() && !Session::get('lg_permissao08')) {
            $users = User::get();
            // $user = user::find(Session::get('lg_id'));
            // $user = DB::table('users')->where('user.id', '!=',  
            // Session::get('lg_id'))->orderBy('firstName','asc')->paginate(15);
            return view('/admin/p-list-alunos',compact('users'));
        } else {
            return redirect('/dashboard');
        }
    }

    // VIEW PRESENÇA ALUNOS -------------------------------------------------------------
    public function presenca_aluno () {
        return view('/inserir-presenca-aluno');
    }

    // INSERIR PRESENÇA ALUNOS --------------------------------------------------------
    public function presenca_aluno_inserir(Request $request) {
        
        $data = $request->all();

        $user = frequenciaaulas::create($data);

        frequenciaaulas::create($data);


        return redirect('/index');

    }

        // VIEW MENSALIDADE ALUNOS -------------------------------------------------------------
        public function mensalidade_aluno () {
            return view('/inserir-mensalidade-aluno');
        }
    
        // INSERIR PRESENÇA ALUNOS --------------------------------------------------------
        public function mensalidade_aluno_inserir(Request $request) {
            
            $data = $request->all();
    
            $user = mensalidade::create($data);
    
            mensalidade::create($data);
    
    
            return redirect('/index');
    
        }
}
