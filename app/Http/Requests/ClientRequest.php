<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'mobile' => 'required|string|regex:/^0[1-9]0\d{8}$/',
        ];
    }
    public function attributes(): array
    {
        return [
            'mobile' => 'Número de telefone',
        ];
    }
    public function messages(): array
    {
        return [
            'mobile.regex' => 'Insira um número válido.',
        ];
    }

}
