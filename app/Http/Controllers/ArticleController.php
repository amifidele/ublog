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
        $tags =Tag::all();
         return view('articles.create', [
             'tags' => $tags,
         ]);
    }

    public function store(){
        $article = new Article(request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'sub_title' => 'required',
            'body' => 'required'
        ]));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect(route('articles.index'));
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
