@extends('layouts.app')
@section('content')
    <div class="w-100">
        <div class="w-100 flex">
            <div class="w-70">
                <div class="py-2 px-3">
                    <div>
                        <img src="{{ asset('images/bg.jpeg') }}">
                    </div>
                </div>
            </div>
            <div class="w-30 px-3">
                @foreach($articles as $article)
                <div class="py-2 px-3 pt-4">
                    <h1 class="text-2xl"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h1>
                    <p class="text-sm">{{ $article->body }}</p>
                    <div class="w-100 text-right pb-2">
                        <a class="btn btn-sm bg-black-darkest text-white rounded-full text-right text-sm" href="/articles/{{$article->id}}"> read more</a>
                    </div>
                    <div class="w-70 mx-auto border-1 border-solid border-t-0  border-r-0  border-l-0"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection