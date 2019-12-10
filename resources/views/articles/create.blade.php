@extends('layouts.app')
@section('content')
    <div class="w-70 mx-auto py-2 px-5 mt-5">
        <div class="pt-4">
            <h1 class="text-center text-3xl"> Create A new Article Here</h1>
        </div>
        <form method="post" action="/articles">
            @csrf
            <div class="">
                <label class="">Title</label>
                <input class="form-input @error('title') is-invalid border-red @enderror" type="text" name="title" value="{{ old('title') }}">
                @error('title')
                <p class="help text-red">{{ $errors->first('title') }}</p>
                @enderror
            </div>
            <div class="">
                <label class="">Sub Title</label>
                <textarea class="form-input @error('sub_title') is-invalid border-red @enderror" name="sub_title" >{{ old('sub_title') }}</textarea>
                <p class="help text-red">{{ $errors->first('sub_title') }}</p>
            </div>
            <div class="">
                <label class="">Body</label>
                <textarea class="form-input @error('sub_title') is-invalid border-red @enderror" name="body">{{ old('body') }}</textarea>
                <p class="help text-red">{{ $errors->first('body') }}</p>
            </div>
            <div class="text-center mt-5">
                <input type="submit" class="btn btn-sm rounded-full bg-black-darkest text-white">
            </div>
        </form>

    </div>
@endsection