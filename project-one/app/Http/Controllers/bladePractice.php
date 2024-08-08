<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladePractice extends Controller
{
   function homePage()
   {

      $data = ['msg' => 'This is my message'];
      return view('home');
   }
}
