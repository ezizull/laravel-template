<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\UserDetailAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    public function __invoke(UserDetailAction $userDetailAction)
    {
        $response = $userDetailAction->userDetail();

        // Empty
        if ($response == config('messages.empty.GET')) {
            return $this->sendResponse(200, "pending", $response);
        }

        return $this->sendResponse(200, "success", $response);
    }
}
