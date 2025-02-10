<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');
    }
}
