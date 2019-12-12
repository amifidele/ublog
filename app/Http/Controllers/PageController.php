<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function client(){
        return view('pages.client');
    }
    public function about(){
        return view('pages.about');
    }
}
