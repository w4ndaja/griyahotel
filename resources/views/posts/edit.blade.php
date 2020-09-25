@extends('back.app')
@section('title', "Edit post: " . $post->title)
@section('content')
    <div class="card mb-2">
        <div class="card-header">View Post</div>
        <div class="card-body">
            <a href="{{ route('posts.show', $post->slug) }}" target="_blank">{{ $post->title }}</a>
        </div>
    </div>
    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        @include('posts.partials.form-control', [
            'submit' => 'Update'
        ])
    </form>
@endsection
