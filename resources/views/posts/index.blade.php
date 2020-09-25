@extends('front.app')
@section('title')
    @isset($category)
        Post in Category: {{ $category->name }}
    @endisset
    @if($sorted ?? '')
        Post is sorted by: {{ ucfirst($sorted ?? '') }}
    @endif
@endsection
@section('content')
    <div class="-my-4 py-4{{ $gridMode ?? '' == true ? ' bg-gray-200 ': '' }}">
        @if(isset($sorted) && $sorted == "grid-mode")
            @include('posts.models.grid')
        @elseif(isset($sorted) && $sorted == "curated")
            @include('posts.models.curated')
        @else
            <div class="container">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-2/3">
                        @forelse($posts as $post)
                            @include('posts.models.classic')
                            @empty
                            No post right now.
                        @endforelse
                    </div>
                    <div class="md:px-4"></div>
                    <div class="w-full md:w-2/6">

                        <div class="my-8">
                            <form action="" class="flex" autocomplete="off">
                                <input type="text" name="query" id="search" class="w-full rounded-l-lg bg-gray-200 focus:bg-white focus:outline-none border-2 border-r-0 border-gray-200 focus:border-blue-200 px-4 py-3 font-sans form-search" placeholder="What are you looking for ?" required>
                                <button type="submit" class="inline-flex items-center bg-gray-200 border-2 border-l-0 border-gray-200 text-gray-900 hover:text-blue-400 rounded-r-lg px-4">
                                    <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M443.5 420.2L336.7 312.4c20.9-26.2 33.5-59.4 33.5-95.5 0-84.5-68.5-153-153.1-153S64 132.5 64 217s68.5 153 153.1 153c36.6 0 70.1-12.8 96.5-34.2l106.1 107.1c3.2 3.4 7.6 5.1 11.9 5.1 4.1 0 8.2-1.5 11.3-4.5 6.6-6.3 6.8-16.7.6-23.3zm-226.4-83.1c-32.1 0-62.3-12.5-85-35.2-22.7-22.7-35.2-52.9-35.2-84.9 0-32.1 12.5-62.3 35.2-84.9 22.7-22.7 52.9-35.2 85-35.2s62.3 12.5 85 35.2c22.7 22.7 35.2 52.9 35.2 84.9 0 32.1-12.5 62.3-35.2 84.9-22.7 22.7-52.9 35.2-85 35.2z"/></svg>
                                </button>
                            </form>
                        </div>

                        <div class="text-xl font-semibold text-blue-500">
                            Categories list
                        </div>
                        <div class="hr mt-2 mb-5"></div>
                        <categories/>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="{{ $gridMode ?? '' == true ? ' bg-gray-200 flex justify-center': '' }}">
        <div>
            <div class="container">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
