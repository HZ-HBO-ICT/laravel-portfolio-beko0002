<?php


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
//        $post =   DB::table('posts')->where('slug', $slug)->first();
//
//        dd($post);
        $post = Post::where('slug',$slug)->firstOrFail();
//        $posts =[
//            'my-first-post' => 'Hello, this is my first post',
//            'my-second-post' => 'Now I an getting the hang of this blogging thing'
//
//        ];
//        if(! $post){
//            abort(404);
//        }

        return view ('post', [
            'post'=>$post
        ]);
    }

}

