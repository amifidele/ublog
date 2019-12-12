<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function index(){
        if (request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }
        else{
            $articles = Article::take(6)->latest()->get();
        }
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
