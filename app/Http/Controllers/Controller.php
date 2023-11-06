<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function permissionView($view = null, $data = [])
    {
        $user = Auth::user();

        // user auth validation
        if (!$user) return back()->withErrors(['errors' => 'must authenticate first']);

        if ($view === 'dashboard') {
            if ($user->hasRole(config('roles.admin'))) return redirect('/admin');
            if ($user->hasRole(config('roles.user'))) return redirect('/user');
        }

        return view($view);
    }

    public function sendResponse($code, $message, $data)
    {
        return response()->json([
            "code" => $code,
            "error" => false,
            "message" => $message,
            "data" => $data
        ], $code);
    }

    public function pageResponse($code, $message, $data)
    {
        $data = $data->toArray();

        return response()->json(array_merge([
            "code" => $code,
            "error" => false,
            "message" => $message,
        ], $data), $code);
    }

    public function sendError($code = 500, $message = "", $data = null)
    {
        return response()->json([
            "code" => $code,
            "error" => true,
            "message" => $message,
            "data" => $data
        ], $code);
    }
}
