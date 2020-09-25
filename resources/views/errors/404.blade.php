@extends('front.app')
@section('title', "The rest of the pages.")
@section('content')
    <div class="container">
        <div class="flex justify-center">
                <div class="w-1/2 sm:my-16">
                    <div class="text-5xl font-medium">
                        Error 404 :(
                    </div>
                    <div class="font-medium text-xl my-2">
                        Sorry, but page was not found
                    </div>
                    <div class="leading-relaxed text-gray-700 mt-1 mb-4 text-xl">
                        Sorry, but page was not found
                        You may have mistyped the address or the page may have moved.
                    </div>
                    <div>
                        <a href="/" class="btn-primary shadow-xl hover:shadow-none font-semibold py-4 px-6 rounded inline-block inline-flex items-center">
                            <svg class="mr-4 fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M427 234.625H167.296l119.702-119.702L256 85 85 256l171 171 29.922-29.924-118.626-119.701H427v-42.75z"/></svg>
                            Back to home
                        </a>
                    </div>
                </div>
            </div>
    </div>
@endsection
