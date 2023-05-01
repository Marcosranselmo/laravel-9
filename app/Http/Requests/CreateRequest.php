<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:30']
        ];
    }

    public function menssages() {
        return [
            'email' => 'Tem que estar preenchido',
            'email.email' => 'Tem que ser email válido',
            'email.max' => 'Minimo 30 caracteres'
        ];
    }
}
