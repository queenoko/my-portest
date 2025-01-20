<?php

namespace App\Http\Controllers;

use App\Models\Post;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       $post = Post::create([
        'title' => 'This is mass assignment',
        'description' => 'This is description for mass assignment',
        'status' => 1,
        'publish_date' => date('Y-m-d'),
        'user_id' => 1,
        'category_id' => 2,
        'views' => 500
       ]);

       dd('success');
    }
    
}
