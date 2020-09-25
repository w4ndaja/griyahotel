<div class="container">
    <div class="flex flex-wrap justify-start overflow-hidden sm:-mx-2">
        @foreach($posts as $post)
            <div class="w-full sm:w-1/3 bg-transparent sm:px-2 sm:my-2 mb-4 sm:mb-2">
                <div class="bg-white relative shadow rounded overflow-hidden">
                    <img src="{{ asset($post->thumbnail) }}" class="w-full h-56">
                    <div class="p-4 h-28">
                        <a href="{{ route('categories.show', $post->category) }}" class="text-xs uppercase">{{ $post->category->name }}</a>
                        <a href="{{ route('posts.show', $post) }}" class="block text-gray-700 hover:text-gray-900 my-1">{{ $post->title }}</a>
                        <div class="text-gray-600 text-sm absolute bottom-0 left-0 m-4">
                            {{ $post->published }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
