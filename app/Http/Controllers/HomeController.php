<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       return DB::table('posts')->join('categories', 'posts.category_id', '=', 'categories.id')
       ->select('categories.*')->get();
    }
    
}
