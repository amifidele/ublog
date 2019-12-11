@extends ('layouts.app')
@section('content')
    <div class="">

    </div>
    <div class="w-80 mx-auto pt-2 ">
        <div class="text-center py-2">
            <h1 class="text-3xl">Our Latest Articles</h1>
        </div>
        <div class="w-100 grid grid-3">
            @foreach($articles as $article)
            <div class="mx-3 my-2 rounded-xl px-3 border-solid border-1 border-grey-darkest py-3">
                <div class="">
                    <div class="h-px-200 pb-2">
                        <img class="clip-full" src="{{ asset('images/bg.jpeg') }}">
                    </div>
                    <h1 class="text-2xl">{{ $article->title }}</h1>
                    <p>{{ $article->body }}</p>
                    <div class="w-100 text-right">
                        <a href="/articles/{{ $article->id }}" class="btn btn-sm bg-black-darkest text-white rounded-full">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{--<div class="w-30 mx-auto">
            {{ $articles->link() }}
        </div>--}}
    </div>
@endsection