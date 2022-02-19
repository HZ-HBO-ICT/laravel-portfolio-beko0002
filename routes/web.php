<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlewar e group. Now create something great!
|
*/

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

Route:: get('post', [PostController::class, 'show']);

Route::get('/welcome', [WelcomeController::class, 'show']);

Route::get('blog', [BlogController::class, 'show']);
// i actually don't know what this does
Route::get('blog', function(){
    $articles= App\Article::latest()->get();
    return view('blog',[
        'article' =>$articles
    ]);

});
Route::get('/articles/{article}','ArticleController@index' );
Route::get('/articles/{article}','ArticleController@show' );

Route::get('profile', [ProfileController::class, 'show']);

Route::get('dashboard', [DashboardController::class, 'show']);

Route::get('faq', [FaqController::class, 'show']);



