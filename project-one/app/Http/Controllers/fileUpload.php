<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUpload extends Controller
{
    public function fileUploData(Request $request) // Accept the request object
    {
        $img = $request->file('picture');
        if ($img) { // Check if the file exists in the request

            $filename = $img->getClientOriginalName(); // Generate a unique filename
            $filemove = $img->storeAs('uploads', $filename); // Move the file to the specified directory
            $filemove = $img->move(public_path('uploads/img'), $filename); // Move the file to the specified directory

            if ($filemove) {
                return response()->json(['success' => 'true']);
            }
        }

        return response()->json(['success' => 'false']);
    }
}
