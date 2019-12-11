<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::take(6)->latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }
    public function show(Article $article){
        return view('articles.show', ['article' => $article]);
    }
    public function create(){
         return view('articles.create');
    }

    public function store(){
        Article::create(request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'sub_title' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article){
        $article->update(request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'sub_title' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles/'. $article->id);
    }
    public function destroy(){
    //
    }
}
