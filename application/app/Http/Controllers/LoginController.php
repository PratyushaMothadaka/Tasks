<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Socialite;
use Hash;
use App\User;
use Str;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
        {
            return redirect('/default');
        }
        else{
            return '<h1>Something went Wrong!!</h1>';
        }
    }
    public function logout(Request $request)
    {
        // return('You logged out!');
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
    public function github()
    {
        return Socialite::driver('github')->redirect();
    }
    public function githubRedirect()
    {
        return view('default');
    }
}
