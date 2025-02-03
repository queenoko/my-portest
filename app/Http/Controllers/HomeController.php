<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //Post::withTrashed()->find(2)->forceDelete();
        //Post::withTrashed()->find(4)->restore();
        //return Post::onlyTrashed()->get();
        //Post::where('id', 2)->delete();
        //return Post::all();
        //dd('success');
    }
    
}
