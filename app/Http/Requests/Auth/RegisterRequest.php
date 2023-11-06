<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string|max:100",
            "email" => "required|email|max:255",
            "password" => "required|string|max:255",
            "role" => "required|string|max:50",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "nama tidak boleh kosong",
            "email.required" => "email tidak boleh kosong",
            "email.email" => "email harus sesuai",
            "password.required" => "password tidak boleh kosong",
            "role.required" => "role tidak boleh kosong",
        ];
    }
}
