<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            return view('default');
        }
        return Redirect::to('login')->withSuccess('Opps! You do not have access');
    }
}
