<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;
use Storage;
use File;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //Storage::delete('/image_test.jpg');
        //unlink(storage_path('/app/public/images/new_image.jpg'));
        return view('home');
       
    }
    
}
