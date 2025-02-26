<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:100', 'max:500', 'mimes:png,jpg,gif'] //500kb

        ]);

        $request->image->storeAs('/images', 'new_image.jpg');
    }
}
