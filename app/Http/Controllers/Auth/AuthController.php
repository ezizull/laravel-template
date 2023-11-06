<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\AuthAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(LoginRequest $loginRequest, AuthAction $authAction)
    {
        $response = $authAction->loginUser($loginRequest);

        // Email
        if ($response == config('messages.error.email')) {
            return back()->withErrors(['email' => $response])->withInput();
        }

        // Password
        if ($response == config('messages.error.password')) {
            return back()->withErrors(['password' => $response])->withInput();
        }

        return $this->permissionView('dashboard', ["success" => $response]);
    }

    public function register(RegisterRequest $registerRequest, AuthAction $authAction)
    {
        $response = $authAction->registerUser($registerRequest);

        // Role
        if ($response == config('messages.empty.role')) {
            return back()->withErrors(['role' => $response])->withInput();
        }

        return $this->permissionView('dashboard', ["success" => $response]);
    }

    public function logout(Request $request, AuthAction $authAction)
    {
        $response = $authAction->logoutUser($request);

        // Belum Login
        if ($response == config('messages.error.logout')) {
            return back()->withErrors(['logout' => $response])->withInput();
        }

        // Return
        return $this->permissionView('public.login', ["success" => $response]);
    }
}
