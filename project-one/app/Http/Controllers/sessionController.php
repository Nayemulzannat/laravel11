<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    function sessionPut(Request $request): bool
    {
        $email =  $request->email;
        $request->session()->put('userEmail', $email);
        return true;
    }

    function sessionPull(Request $request): string
    {

        return $request->session()->pull('userEmail');
    }

    function sessionForget(Request $request): bool
    {

        $request->session()->forget('keys', 'userEmail');
        return true;
    }

    function sessionFlash(Request $request): bool
    {
        $request->session()->flush();
        return true;
    }
}
