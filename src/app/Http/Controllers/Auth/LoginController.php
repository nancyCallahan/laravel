<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use App\Users;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $inputs = $request->all();

        $rules = [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ];

        $validator = Validator::make($inputs, $rules, Users::$messages);
        if (!$validator->fails() && Auth::attempt($request->only('email', 'password'))) {
            $user = Users::find(Auth::id());
            Auth::login($user, true);

            return response()->json([
                'data' => $user,
                'message' => 'success'
            ], 200);
        }

        return response()->json([
            'message' => 'Error in email or password input',
            'errors' => 'Mismatch',
        ], 403);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}