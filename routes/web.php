<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\GradeController;



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

Route:: get('/post', [PostController::class, 'show']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/blog', [BlogController::class, 'show']);
// blog page
//Route::get('/blog', [BlogController::class, 'index']);
//Route::post('/blog', [BlogController::class, 'store']);
//Route::get('/blog/create', [BlogController::class, 'create']);
//Route::get('/blog/{blog}', [BlogController::class, 'showBlog']);
//Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']);
//Route::put('/blog/{blog}', [BlogController::class, 'update']);
//Route::delete('/blog/{blog}', [BlogController::class, 'destroy']);
Route::resource('/blog', BlogController::class)->only(['show']);


// i actually don't know what this does
Route::get('/blog', function(){
    $articles= App\Models\Article::latest()->get();
    return view('/blog',[
        'article' =>$articles
    ]);
});

// Routing for the Article page
//Route::get('/articles/{article}','ArticleController@index');
//Route::post('/articles ','ArticleController@store');
//Route::get('/articles/create','ArticleController@create');
//Route::get('/articles/{article}','ArticleController@show');
//Route::get('/articles/{article}/edit ','ArticleController@edit');
//Route::put('/articles/{article}','ArticleController@Update');
Route::resource('/articles', ArticlesController::class);


// Routing for the FAQ
Route::get('/faq', [FaqController::class, 'show']);
//// faq page
//Route::get('/faq', [FaqController::class, 'index']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::get('/faq/{id}/edit', [FaqController::class, 'edit']);
//Route::put('/faq/{id}', [FaqController::class, 'update']);
Route::resource('/faq', FaqController::class);

// Routing for the grades
//Route::get('/grades', [GradeController::class, 'show']);
Route::resource('/grades', GradeController::class);


