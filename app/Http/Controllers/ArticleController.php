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
    public function show($id){
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
       /* return view('articles.show');*/
    }
    public function create(){
         return view('articles.create');
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'sub_title' => 'required',
            'body' => 'required'
        ]);
        $article = new Article();
        $article->title = request('title');
        $article->sub_title = request('sub_title');
        $article->body = request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id){
        $article = Article::find($id);
        $article->title = request('title');
        $article->sub_title = request('sub_title');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/'. $article->id);
    }
    public function destroy(){
    //
    }
}
