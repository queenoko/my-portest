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
        DB::table('posts')->insert([
            ['title' => 'This is a test data',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, officiis molestiae molestias fugiat tenetur sint? Vel enim facilis, non expedita, ullam laborum 
            quia assumenda, placeat nam ducimus voluptatem fuga molestiae?',
            'status' => 1,
            'publish_date' => date('Y,m,d'),
            'user_id' => 1,
            'category_id' => 1
            ],
            
            [
                'title' => 'This is a test data2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, officiis molestiae molestias fugiat tenetur sint? Vel enim facilis, non expedita, ullam laborum 
            quia assumenda, placeat nam ducimus voluptatem fuga molestiae?',
            'status' => 1,
            'publish_date' => date('Y,m,d'),
            'user_id' => 2,
            'category_id' => 2
            ],
            [
                'title' => 'This is a test data3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, officiis molestiae molestias fugiat tenetur sint? Vel enim facilis, non expedita, ullam laborum 
            quia assumenda, placeat nam ducimus voluptatem fuga molestiae?',
            'status' => 1,
            'publish_date' => date('Y,m,d'),
            'user_id' => 3,
            'category_id' => 3
            ],
        ]);

        DB::table('categories')->insert([
            [
                'name' => 'News'
            ],
            [
                'name' => 'Tech'
            ],
            [
                'name' => 'Entertainment'
            ]
            ]);
            

        dd('success');
    }
    
}
