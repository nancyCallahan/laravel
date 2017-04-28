<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User as User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\LoginRequest;
use Auth;
class AuthController extends Controller
{
    public function showRegister(){
    	return view('register');
    }
     public function showLogin(){
    	return view('login');
    }
    public function postRegister(StoreUserRequest $request){
    	User::create([
    		'firtsname'=>$request->input('firstname'),

    		'lastname'=>$request->input('lastname'),

    		'email'=>$request->input('email'),
    		'pasword'=>bycrypt($request->input('password'))
    			]);
    		return redirect('login');
    }
    public function postLogin (LoginRequest $request){

		$email=$request->input('email');
		$password=$request->input('password');
    	if(Auth::attempt(['email'=>$email,'password'=>$password])){
    		return redirect('index');
    	}else{
    		 		return redirect('login');
    	}

    	

    }
}
