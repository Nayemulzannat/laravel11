<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bodyDataPass extends Controller
{
    // function bodyDataPassing(Request $bodydata): string
    // {
        // $name =  $bodydata->name;
        // $age =  $bodydata->age;

        //=======================others way use input =================

        // $name =  $bodydata->input(key:'name');
        // $age =  $bodydata->input(key:'age');


        // return "hello laravel 11 . {$name} and My Age {$age}";

    // }


    function bodyDataPassing(Request $bodydata): array
    {
     

        //all data one time show
        return $bodydata->input();
    }
}
