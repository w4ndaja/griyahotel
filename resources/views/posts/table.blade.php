@extends('back.app')
@section('title', 'Table of Posts Content')
@section('content')
<div class="d-flex justify-content-between">
    <div></div>
    <div>
        <a href="{{ route('posts.create') }}" class="btn btn-primary d-flex align-items-center">
            <svg style="fill: currentColor;" width="16" class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg>
            New post
        </a>
    </div>
</div>
<div class="card mt-2">
    <div class="card-body">
        <table class="table" id="dataTable">
            <thead>
            <tr>
                <th>Title</th>
                <th>In category</th>
                <th>Comment</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>
                        <a target="_blank" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </td>
                    <td>
                        <a href="{{ route('categories.show', $post->category) }}" target="_blank">
                            {{ $post->category->name }}
                        </a>
                    </td>
                    <td>
                        @if ($post->comment_status)
                            {{ $post->comments_count }}
                        @else
                            Closed
                        @endif
                    </td>
                    <td>{{ $post->published }}</td>

                    <td>
                        <div class="dropdown show">
                            <a class="btn btn-link dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg style="fill: currentColor;" width="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM410 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"/></svg>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('posts.edit', $post) }}">Edit</a>
                                <delete-post endpoint="{{ route('posts.delete', $post) }}"></delete-post>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/vendor/datatable/datatables.min.css"/>
@endsection
@section('scripts')
    <script type="text/javascript" src="/vendor/datatable/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection


