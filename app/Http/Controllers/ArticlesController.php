<?php

namespace App\Http\Controllers;

use App\Models\Article;

use App\Models\Grade;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles= Article::latest()->get();

        return view('articles.index',['articles'=>$articles]);

    }

    public function show($id)
    {

        $article = Article::find($id);

        return view('article.show', ['article'=> $article]);

    }

    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
       //persist a new article
        $article = new Article ();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::find($id);

         return view('article.edit',['article'=>$article]);
    }

    public function update($id){

        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles/'.$article->id);
    }
}

