<?php

namespace App\Actions\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthAction
{
    use DispatchesJobs;

    public function loginUser(LoginRequest $loginRequest)
    {
        $request = $loginRequest->only(["email", "password"]);

        // Email
        $user = User::with('roles')->where('email', $request['email'])->first();
        if (!$user) return config('messages.error.email');

        // Password
        if (Hash::check($request["password"], $user->password)) {

            Auth::login($user, true);
            $loginRequest->session()->regenerate();

            return $user;
        } else {
            return config('messages.error.password');
        }
    }

    public function registerUser(RegisterRequest $registerRequest)
    {
        $role = $registerRequest->get('role');
        $name = $registerRequest->get('name');
        $password = $registerRequest->get('password');
        $email = $registerRequest->get('email');


        // Role
        $role = Role::where('name', $role)->pluck('name')->first();
        if (empty($role)) return config('messages.empty.role');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // User
        if (!$user) return config('messages.error.POST');
        $user->assignRole($role);

        Auth::login($user, true);
        $registerRequest->session()->regenerate();

        return config('messages.success.register');
    }

    public function logoutUser(Request $request)
    {
        // USER containts ROLE
        $user = Auth::user();
        if (!$user) return config('messages.error.logout');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return config('messages.success.logout');
    }
}
