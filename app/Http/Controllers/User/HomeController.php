<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function user()
    {
        $user = Auth::user();
        return view('user.index', ['user' => $user]);
    }
}
