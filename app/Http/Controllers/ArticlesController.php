<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles= Article::latest()->get();

        return view('articles.index', ['articles'=>$articles]);

    }

    public function show(Article $article)
    {
//

        return view('articles.show', ['article'=> $article]);

    }




    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
       //persist a new article

        Article::create($this->ValidateArticle($request));

        return redirect('/articles');
    }







    public function edit(Article $article)
    {

         return view('articles.edit',['article'=>$article]);
    }




    public function update(Article $article, Request $request){

        //$validatedAttributes = $this->validateArticle();

        $article->update($this->ValidateArticle($request));

        return redirect('/articles/'.$article->id);
    }

    /**
     * @return array
     */
    public function ValidateArticle(Request $request): array
    {
        return $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => ['required', 'min:3', 'max:255']

        ]);
    }
}

