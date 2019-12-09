<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PageController@home');
//Route::get('/about-us', 'PageController@about');
//Route::get('/about-us', 'ArticleController@about_articles');
Route::get('/about-us', function (){
    return view('pages.about', [
        'articles' => \App\Article::take(3)->latest()->get()
    ]);
});
Route::get('/articles/{article}', 'ArticleController@show');
Route::get('/articles', 'ArticleController@index');



