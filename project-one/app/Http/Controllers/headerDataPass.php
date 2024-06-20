<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headerDataPass extends Controller
{
    // function headerDataPassing(Request $resuest): string
    // {
    //     $name =  $resuest->header(key:'name');
    //     $age =  $resuest->header(key:'age');
    //     return "hello laravel 11  {$name} and My Age {$age}";
    // }
    function headerDataPassing(Request $resuest): array
    {
        return $resuest->header();
    }
}
