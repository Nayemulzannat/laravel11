<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUpload extends Controller
{
    public function fileUploData(Request $request): string
    {
        // $img = $request->file('picture');
        // $filemove = $img->move(public_path('uploads/img'), $img->getClientOriginalExtension());
        // if ($filemove) {
            return "true";
        // }
    }
}
