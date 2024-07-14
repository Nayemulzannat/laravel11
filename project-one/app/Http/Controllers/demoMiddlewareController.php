<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoMiddlewareController extends Controller
{
    function demoMiddleware(Request $resuest): string
    {
        return 'okk';
    }
}
