@extends('front.app')
@section('title', "Edit your account.")
@section('content')
    <div class="container">
        <div class="flex flex-col sm:flex-row">
            @include('account.partials.sidebar')
            <div class="w-full sm:w-4/5">
                <div class="border border-t-8 p-6 border-gray-300">
                    <div class="mb-2 text-lg font-semibold text-gray-700">Edit Your Profile</div>
                    <div class="hr mb-5"></div>
                    <form action="{{ url('account/update-your-profile') }}" method="post">
                        @csrf @method("PATCH")
                        <div class="form-group">
                            <div class="form-label">Username</div>
                            <input type="text" name="username" class="form-control" value="{{ old('username') ?? auth()->user()->username }}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Name</div>
                            <input type="text" name="name" class="form-control" value="{{ old('name') ?? auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Email</div>
                            <input type="text" name="email" class="form-control" value="{{ old('email') ?? auth()->user()->email }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
