<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function auth(Request $request) {

        $credenciais = $request->validate([

            'email' => 'required', 'email',
            'password' => 'required','password',
        ], [
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Digite um email válido.',

            'password.required' => 'A senha é obrigatória.',
            'password.password' => 'Senha incorreta.',
        ]);

        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->with('erro', 'email ou senha inválida.');
        }
    }
}