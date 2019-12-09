@extends ('layouts.app')
@section('content')
    <div class="w-80 mx-auto pt-5 mt-5">
        <div class="w-100 grid grid-3">
            @foreach($articles as $article)
            <div class="mx-3 px-3 border-solid border-1 border-grey-darkest py-3">
                <div class="">
                    <h1 class="text-2xl">{{ $article->title }}</h1>
                    <p>{{ $article->body }}</p>
                    <div class="w-100 text-right">
                        <a href="/articles/{{ $article->id }}" class="btn btn-sm bg-black-darkest text-white rounded-full">read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection