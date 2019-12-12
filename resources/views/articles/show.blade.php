@extends('layouts.app')
@section('content')
    <div class="w-100 mx-auto bg-white-smoke">
        <div class="w-100 mx-auto flex px-5">
            <div class="w-65 pt-4">
                <div>
                    <a href="/articles" class="btn bg-black-darkest rounded-full text-white"> << back</a>
                </div>
                <div>
                    <h1 class="text-3xl text-center">{{ $article->title }}</h1>
                    <p class="text-lg text-center">{{ $article->sub_title }}</p>
                </div>
                <div class="h-px-250">
                   <img class="clip-full" src="{{ asset('images/bg.jpeg') }}">
                </div>
                <div class="">
                    <p class="text-xl">
                        {{ $article->body }}
                    </p>
                    <p class="font-bold">Tags : </p>
                    <div class="">
                        <ul class="list inline-block">
                    @foreach($article->tags as $tags)

                                <li class=""><a class="btn btn-sm bg-black-darkest rounded-full text-white" href="/articles?tag={{ $tags->name }}">{{ $tags->name }}</a></li>

                    @endforeach
                        </ul>

                    </div>
                </div>

            </div>
            <div class="w-35">

            </div>
        </div>
    </div>
@endsection