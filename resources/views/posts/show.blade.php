@extends('front.app')
@section('title') {{ $post->title }} &middot; {{ config('app.name') }} @endsection
@section('content')
    <div class="container">
        <div class="py-8">
            <div class="flex flex-col sm:flex-row">
                <div class="w-full sm:w-2/6 sm:mr-5 mb-4 sm:mb-0">
                    <div class="text-center">
                        <img class="rounded-full border-4 border-indigo-400 p-1 inline-block w-32 h-32"
                             src="{{ asset($post->author->avatar(200)) }}">
                        <div class="my-4">
                            <div class="font-semibold text-lg">
                                {{ $post->author->name }}
                            </div>
                            <div class="mt-4">
                                @foreach ($post->tags as $item)
                                    <a href="" class="px-4 py-1 mr-2 rounded inline-block bg-gray-200 font-medium text-gray-700 hover:text-gray-900">{{ $item->name }}</a>
                                @endforeach
                            </div>
                            {{-- <div class="text-sm text-gray-600">
                                Engineer at Parsinta
                            </div>
                            <div class="text-sm text-gray-700 leading-relaxed mt-2">
                                Belongs to <a href="https://twitter.com/@srirahayutan">@srirahayutan</a> Still listening
                                to slayer.
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-2/3">
                    <div class="flex items-end justify-between">
                        <a href="{{ route('categories.show', $post->category) }}" class="btn-primary font-semibold text-white hover:text-white px-6 py-2 inline-block rounded">{{ $post->category->name }}</a>
                        <div class="hidden sm:flex sm:items-center">
                            <svg class="fill-current text-gray-500 w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg>
                            {{ $post->published }}
                        </div>
                    </div>
                    <div class="mt-5">
                        @if ($post->thumbnail)
                            <div>
                                <img src="{{ asset($post->thumbnail) }}" class="rounded mb-5 h-56 sm:h-128 w-full object-cover object-center">
                            </div>
                        @endif
                        <div class="font-semibold text-2xl mb-2">
                            {{ $post->title }}
                        </div>
                        <div class="w-56 h-1 bg-gray-400 rounded-full mb-4"></div>
                        <div class="post-body">
                            {!! $post->body !!}
                        </div> {{--post-body--}}
                    </div> {{--post-container--}}
                    {{-- Comments --}}
                    <comments endpoint="{{ route('comments.index', $post) }}"/>
                </div> <!-- post -->
            </div>
        </div>
    </div>
@endsection
