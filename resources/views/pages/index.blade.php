@extends('layouts.app')
@section('content')
<div class="w-100 flex">
    <div class="w-80 relative">
        <div class="absolute h-px-500">
            <img class="clip-full" src="{{ asset('images/bg.jpeg') }}">
        </div>
        <div class="text-center relative text-white mt-16 pt-5">
            <h1 class="text-yellow">Welcome to Ublog</h1>
            <p class="text-2xl">The Experience Dashboard shows the booking status departures<br> for each day. You can also add bookings. </p>
            <button class="btn bg-yellow-dark text-white rounded">Explore</button>
        </div>
    </div>
    <div class="w-40 bg-white px-1">
        <div class="pt-3">
            <h2 class="text-2xl">Our Latest Article :</h2>
        </div>
{{--        @foreach($articles as $article)--}}
{{--        <div class="pt-3 pb-2 border-solid border-1 px-3 mt-3 border-r-0 border-l-0">--}}
{{--            <h1 class="text-lg">This is the blog tittle  is the blog tittle </h1>--}}
{{--            <p>This is the blog tittle  is the blog tittle This is the blog tittle  is the blog tittle This is the blog tittle  is the blog tittle This is the blog tittle  is the blog tittle .</p>--}}
{{--            <div class="absolute r-0 -mt-6 mr-1">--}}
{{--                <a href="#" class="py-2 px-3 no-underline rounded-full bg-black-darkest text-white">read more</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @endforeach--}}


    </div>


</div>
    <div class="">

    </div>
@endsection