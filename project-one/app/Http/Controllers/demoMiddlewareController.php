<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoMiddlewareController extends Controller
{
    function demoMiddleware(Request $resuest): string
    {
        return 'okk';
    }
    function redirectMiddleware(Request $resuest): string
    {
        return 'okk-1';
    }
    function redirectMiddlewaretwo(Request $resuest): string
    {
        return 'okk-2';
    }
}
