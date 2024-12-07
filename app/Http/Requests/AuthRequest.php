<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'password' => 'required|string',
            'email' => 'required|email',
        ];
    }
    public function attributes(): array
    {
        return [
            'password' => 'Senha',
            'email' => 'Email',
        ];
    }
}
