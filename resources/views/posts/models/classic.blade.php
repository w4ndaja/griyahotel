<div class="py-6 border-b last:border-none">
    <a href="{{ route('posts.show', $post) }}" class="font-medium text-3xl text-gray-800 hover:text-gray-900">
        {{ $post->title }}
    </a>
    <div class="font-medium flex items-center my-2">
        <a href="{{ route('categories.show', $post->category) }}" class="text-blue-500 hover:text-blue-600">{{ $post->category->name }}</a>
        <div class="ml-6 hidden md:flex items-center text-gray-600">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/></svg>
            {{ $post->author->name  }}
        </div>
        <div class="ml-6 flex items-center text-gray-600">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"/> </svg>
            {{ $post->published }}
        </div>
    </div> <!-- author, published, category -->
    @if($post->thumbnail)
        <a href="{{ route('posts.show', $post->slug) }}">
            <img src="{{ asset($post->thumbnail) }}" class="w-full h-48 rounded-lg sm:h-92 md:128 object-cover object-center py-2">
        </a>
    @endif
    <div class="text-lg text-gray-700 py-2">
        {{ $post->excerpt }}
    </div> <!-- excerpt -->
    <div class="flex items-center">
        <div class="flex items-center text-gray-600">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/> </svg>
            {{ $post->comments_count  }} Comment(s)
        </div>
        <div class="md:ml-6 hidden md:flex md:items-center text-gray-600">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"> <path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/> </svg>
            Tags:
            @foreach($post->tags as $tag)
                <a href="" class="text-gray-600 hover:underline hover:text-gray-600 border-r last:border-none border-gray-400 px-2">{{ $tag->name }}</a>
            @endforeach
        </div> <!-- flex -->
    </div> <!-- tag & comments -->
    <div class="mt-5 mb-2">
        <a href="{{ route('posts.show', $post) }}" class="inline-block px-6 py-3 text-white btn-primary shadow-xl hover:shadow-none rounded font-bold">
            Read more
        </a>
    </div>
</div> <!-- card post -->
