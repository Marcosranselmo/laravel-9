<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'senha' => ['required', 'min:6', 'max:20']
        ];
    }

    public function messages() {
        return [
            'email.required' => 'O email é obrigatório!',
            'email.email' => 'Email Inválido!',
            'senha.required' => 'A senha é obrigatória!',
            'senha.min' => ' A senha tem que ter no mínimo :min caracteres.',
            'senha.max' => ' A senha tem que ter no máximo :max caracteres.',

        ];
    }
}
