<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $this->validation($request);
        $request['password']=bcrypt($request->password);
        User::create($request->all());
        return redirect('/default');
    }
    public function validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|min:8|string',
            'email' => 'required|string|max:225|unique:users',
            'password' => 'required|min:8|string'
        ]);
    }
}
