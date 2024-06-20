<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allDataPassSystem extends Controller
{
    function allDataPassing(Request $resuest): array
    {
        $name = $resuest->name;
        $age = $resuest->age;
        $city = $resuest->header(key: 'city');
        $village = $resuest->header(key: 'village');
        $postcode = $resuest->input(key: 'postcode');
        $pin = $resuest->input(key: 'pin');

        return array(
            'name' => $name,
            'age' => $age,
            'city' => $city,
            'village' => $village,
            'postcode' => $postcode,
            'pin' => $pin,
        );
    }
}
