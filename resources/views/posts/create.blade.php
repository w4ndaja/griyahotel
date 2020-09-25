@extends('back.app')
@section('title', 'New Post')
@section('content')
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @include('posts.partials.form-control', [
            'post' => $post,
            'submit' => 'Post'
        ])
    </form>
@endsection
