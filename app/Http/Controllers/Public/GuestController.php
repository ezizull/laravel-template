<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        return view('public.index', []);
    }

    public function login()
    {
        return view('public.login', []);
    }

    public function register()
    {
        return view('public.register', []);
    }
}
