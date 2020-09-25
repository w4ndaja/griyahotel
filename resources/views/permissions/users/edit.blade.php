@extends('back.app')
@section('title', 'Users Permissions')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <div class="media">
                    <img width="50" class="mr-3 rounded-circle" src="{{ $user->avatar() }}" alt="{{ $user->name }}">
                    <div class="media-body">
                        <div class="mt-0">
                            <strong>
                                {{ $user->name }}
                            </strong>
                        </div>
                       {{ ucwords(implode(" | ", $user->getPermissionNames()->toArray())) }}
                    </div>
                </div>
                <hr>
                <form action="{{ route('users.permission.edit', $user) }}" method="post">
                    @method("PATCH")
                    @include('permissions.users.partials.form-control', ['submit' => 'Update'])
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $(".select2").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });
</script>
@endsection