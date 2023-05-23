<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // public function login_form() {
    //     return view('login.form');
    // }

    public function auth(Request $request) {

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'O Email é obrigatório.',
            'email.email' => 'O Email não é válido.',
            'password.required' => 'A Senha é obrigatória.',
        ]);

        if(Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->intended('/index');
        } else {
            return redirect()->back()->with('erro', 'Email ou Senha inválida.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('index');
    }
}