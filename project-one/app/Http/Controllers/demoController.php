<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    function demoAction(Request $resuest): string
    {
        $name =  $resuest->name;
        $age =  $resuest->age;
        return "hello laravel 11  {$name} and My Age {$age}";
    }
}
