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
        DB::table('posts')->where('id', 52)->update([
            'title' => 'hey we update title'
        ]);

        dd('success');
        
    }
    
}
