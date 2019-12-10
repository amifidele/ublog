@extends('layouts.app')
@section('content')
    <div class="w-70 mx-auto py-2 px-5 mt-5">
        <div class="pt-4">
            <h1 class="text-center text-3xl"> Edit {{ $article->title }} </h1>
        </div>
        <form method="post" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')
            <div class="">
                <label class="">Title</label>
                <input class="form-input" type="text" name="title" value="{{ $article->title }}">
            </div>
            <div class="">
                <label class="">Sub Title</label>
                <textarea class="form-input" name="sub_title">{{ $article->sub_title }}</textarea>
            </div>
            <div class="">
                <label class="">Body</label>
                <textarea class="form-input" name="body">{{ $article->body }}</textarea>
            </div>
            <div class="text-center mt-5">
                <input type="submit" class="btn btn-sm rounded-full bg-black-darkest text-white">
            </div>
        </form>
        <div class="">

        </div>

    </div>
@endsection