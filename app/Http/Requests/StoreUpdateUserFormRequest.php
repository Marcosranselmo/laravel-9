<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

            'email' => [
                'required',
                'email', 
                'unique:users',
            ], 
            [
                'email.required' => 'Digite um email'
            ]
            // 'passoword' => [
            //     'required',
            //     'min:6',
            //     'max:15',
            // ]
        ];
    }
}

