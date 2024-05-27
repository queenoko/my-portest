<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'title' => 'title one',
                'body' => 'this is body text',
                'status' => 0
            ],
            [
                'title' => 'title two',
                'body' => 'this is body text',
                'status' => 0
            ],
            [
                'title' => 'title three',
                'body' => 'this is body text',
                'status' => 1
            ],
            [
                'title' => 'title four',
                'body' => 'this is body text',
                'status' => 0
            ]
            ];
            return view('home', compact('blogs'));
    }
    
}
