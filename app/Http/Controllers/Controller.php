<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;

abstract class Controller
{
    function login()
    {
        return view('auth.login');
    }

    function loginPost(Request $request)
    {
        
    }
}
