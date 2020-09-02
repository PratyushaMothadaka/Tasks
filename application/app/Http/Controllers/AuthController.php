<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store()
    {
        $this->validate(request(),
        [
            'email' => 'required',
            'password' => 'required'
        ]);
        return['message' => 'Login Successful'];

    }
    public function login()
    {
        
    }
    public function register()
    {
        return('Hey please Register');
    }
}
