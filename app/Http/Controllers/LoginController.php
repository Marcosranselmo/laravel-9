<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth() {
        $credenciais = $request->validate([
            'email' => ['required', 'email','uniqued','min:6','max:15'],
            'password' => ['required','min:6','max:15'],
        ], [
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.uniqued' => 'Esse email já existe.',

            'password.required' => 'A senha é obrigatória.',
            'password.min:6' => 'Senha mínimo 6 caracteres',
            'password.max:15' => 'Senha máximo 15 caracteres.',
        ]);





        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->wi
        }
        }
    }




