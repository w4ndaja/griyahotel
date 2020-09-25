@extends('back.app')
@section('title', "Edit Role")
@section('content')
<div class="card">
    <div class="card-header">Edit Role: {{ $permission->name }}</div>
    <div class="card-body">
        <form action="{{ route('roles.update', $permission) }}" method="post">
            @csrf
            @method("PATCH")
            <div class="form-group">
                <label for="name">Role name</label>
                <input type="text" name="name" id="name" value="{{ old('name') ?? $permission->name }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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


