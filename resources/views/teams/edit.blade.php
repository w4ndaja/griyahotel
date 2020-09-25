@extends('back.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Team: {{ $team->name }}</div>
                <div class="card-body">

                    <form action="{{ route('teams.edit', $team) }}" method="post" enctype="multipart/form-data">
                        @method("PATCH")
                        @include('teams.partials.form-control', [
                            'submit' => 'Update'
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
