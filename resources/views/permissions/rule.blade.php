@extends('back.app')
@section('title', "The Rule")
@section('content')
    <div class="card">
        <div class="card-header">The Rule</div>
        <div class="card-body">
            <form action="{{ url('permissions/confirm-rules') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="role">Choose roles</label>
                            <select name="role" id="role" class="form-control" style="width: 100%!important">
                                <option disabled selected>Choose a role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="permissions">Choose permissions</label>
                            <select name="permissions[]" multiple id="permissions" class="select2" style="width: 100%!important">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            @error('permissions')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
    </script>
@endsection


