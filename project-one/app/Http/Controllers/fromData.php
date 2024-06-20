<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromData extends Controller
{
    public function froDatapassing(Request $request)
    {
        $img = $request->file('picture');

        if ($img) {
            $fileSize = $img->getSize();
            $fileType = $img->getMimeType();
            $originalName = $img->getClientOriginalName();
            $tempFileName = $img->hashName();
            $extension = $img->extension();

            return response()->json([
                'fileSize' => $fileSize,
                'fileType' => $fileType,
                'originalName' => $originalName,
                'tempFileName' => $tempFileName,
                'extension' => $extension,
            ]);
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }
    }
}
