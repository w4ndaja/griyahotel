@extends('back.app')
@section('title', "Table of Category's Content")
@section('content')
    <div class="d-flex justify-content-between">
        <div></div>
        <div>
            <!-- Button trigger modal -->
            @include('categories.create')
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Posts</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $item)
                    <tr>
                        <td>
                            <a target="_blank" href="{{ route('categories.show', $item) }}">{{ $item->name }}</a>
                        </td>
                        <td>{{ $item->posts_count }}</td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-link dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg style="fill: currentColor;" width="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM410 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"/></svg>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('categories.edit', $item) }}">Edit</a>
                                    <delete-category endpoint="{{ route('categories.delete', $item) }}"></delete-category>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.css"/>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection


