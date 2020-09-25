@extends('back.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">New team</div>
                <div class="card-body">

                    <form action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
                        @include('teams.partials.form-control', [
                            'post' => $team,
                            'submit' => 'Save'
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
