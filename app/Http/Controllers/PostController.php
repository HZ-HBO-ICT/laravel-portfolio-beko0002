<?php


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($slug)
    {
        $post =   DB::table('posts')->where('slug', $slug)->first();

        dd($post);
        $post = Post::where('slug',$slug)->firstOrFail();


        return view ('post', [
            'post'=>$post
        ]);
    }

}

