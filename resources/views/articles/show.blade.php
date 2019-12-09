@extends('layouts.app')
@section('content')
    <div class="w-100 mx-auto bg-white-smoke">
        <div class="w-100 mx-auto flex px-5">
            <div class="w-65 pt-4">
                <div>
                    <h1 class="text-2xl text-center">{{ $article->title }}</h1>
                    <h3 class="text-lg text-center">{{ $article->sub_title }}</h3>
                </div>
                <div class="h-px-250">
                   <img class="clip-full" src="{{ asset('images/bg.jpeg') }}">
                </div>
                <div class="">
                    <p class="text-xl">
                        {{ $article->body }}
                    </p>
                </div>

            </div>
            <div class="w-35">

            </div>
        </div>
    </div>
@endsection