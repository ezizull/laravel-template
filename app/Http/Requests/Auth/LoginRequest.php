<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "email" => "required|email|max:255",
            "password" => "required|string|max:255",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "email tidak boleh kosong",
            "email.email" => "email harus sesuai",
            "password.required" => "password tidak boleh kosong",
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'user@email.com',
            'password' => 'address',
        ];
    }
}
