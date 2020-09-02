<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OauthController extends Controller
{
    public function redirect()
    {
        $queries=http_build_query([
            'client_id' => '4',
            'secret' => 'BN4P7rS4rfJ31TdRHMgC2XpXngZfiuIsGeNS2vtA',
            'redirect_uri' => 'http://127.0.0.1:8080/oauth/callback',
            'response_type'=>'code'
        ]);
        return redirect('http://127.0.0.1:8000/oauth/authorize?' . $queries);
    }
    public function callback()
    {
        return view('default');    
    }
}
