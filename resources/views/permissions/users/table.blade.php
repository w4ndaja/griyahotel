@extends('back.app')
@section('title', 'Users Permissions')
@section('content')
    <div class="d-flex justify-content-end">
        @include('permissions.users.assign')
        <div class="mx-1"></div>
        @include('permissions.users.new')
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th>Profile</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="media d-flex align-items-center">
                                <img class="mr-3 rounded-circle object-cover" width="32" height="32" src="{{ $user->avatar() }}">
                                <div class="media-body">
                                    <div>
                                        <strong>{{ $user->name }}</strong>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $user->username }} ({{ $user->email }})
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ implode(" | ", $user->getRoleNames()->toArray()) }}</td>
                        <td>
                            <div class="dropdown show">
                                <a class="btn btn-link dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg style="fill: currentColor;" width="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M255.8 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM102 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38zM410 218c-21 0-38 17-38 38s17 38 38 38 38-17 38-38-17-38-38-38z"/></svg>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('users.permission.edit', $user) }}">Edit</a>
                                    <delete-user endpoint="{{ route('users.permission.delete', $user) }}"></delete-user>
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('scripts')
    <script type="text/javascript" src="/vendor/datatable/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
            $(".select2").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });
            $(".select24").select2();
        } );

        @if (count($errors) > 0)
            $('#assignRole').modal('show');
        @endif
    </script>
@endsection


