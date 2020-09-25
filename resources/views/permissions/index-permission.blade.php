
@extends('back.app')
@section('title', "Table of Category's Content")
@section('content')
    <div class="d-flex justify-content-end">
        <div>
            <!-- Button trigger modal -->
            @include('permissions.create-permission')
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-header">Permissions</div>
        <div class="card-body">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($permissions as $item)
                    <tr>
                        <td>
                            {{ $item->name }}
                        </td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-link dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg style="fill: currentColor;" width="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM410 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"/></svg>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('permissions.edit', $item) }}">Edit</a>
                                    <delete-role endpoint="{{ route('permissions.delete', $item) }}"></delete-role>
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


