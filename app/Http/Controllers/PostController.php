<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    public function show($title)
    {

            // // $post = DB::table('post')->where('title', $title)->first();
            // $post = Post::where('title', $title)->first();

            // // dd($post);

            // if(! $post){
            //     abort(404);
            // }

            // return view('post', [
            //     'post' => $post 
            //     ]);

            return view('post', [
                'post' => Post::where('title', $title)->firstorfail()
            ]);
        
    }
}
