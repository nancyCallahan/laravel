<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $controller = New UsersController();
        return $controller->make($request);
    }
}