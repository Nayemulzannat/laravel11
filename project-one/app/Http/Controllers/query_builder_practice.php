<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class query_builder_practice extends Controller
{
    function querybuilder()
    {

        $users = DB::table('users')->first();

        return $users;
    }
}
