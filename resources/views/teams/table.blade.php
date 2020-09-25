@extends('back.app')
@section('title', 'Table of Posts Content')
@section('content')
    <div class="d-flex justify-content-end">
        <div>
            <a href="{{ route('teams.create') }}" class="btn btn-primary d-flex align-items-center">
                <svg style="fill: currentColor;" width="16" class="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"/></svg>
                New team
            </a>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <table class="table w-100" id="theDataTable">
                <thead>
                <tr>
                    <th>Profile</th>
                    <th>Occupation</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teams as $team)
                    <tr>
                        <td>
                            <div class="media d-flex align-items-center">
                                <img class="mr-3 rounded-circle object-cover" width="32" height="32"
                                     src="{{ asset($team->avatar) }}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div>
                                        <strong>{{ $team->name }}</strong>
                                    </div>
                                    <div class="text-secondary">{{ $team->username }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ $team->occupation }}
                        </td>
                        <td>
                            <a class="btn btn-link" href="{{ route('teams.edit', $team) }}">Edit</a>
                        </td>
                        <td>
                            <delete-team endpoint="{{ route('teams.delete', $team) }}"></delete-team>
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
            $('#theDataTable').DataTable();
        } );
    </script>
@endsection


