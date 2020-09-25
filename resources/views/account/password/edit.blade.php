@extends('front.app')
@section('title', "Edit your account.")
@section('content')
    <div class="container">
        <div class="flex flex-col sm:flex-row">
            @include('account.partials.sidebar')
            <div class="w-full sm:w-4/5">
                <div class="border border-t-8 p-6 border-gray-300">
                    <div class="mb-2 text-lg font-semibold text-gray-700">Change your password</div>
                    <div class="hr mb-5"></div>
                    <form action="{{ url('account/change-your-password') }}" method="post">
                        @csrf @method("PATCH")
                        <div class="form-group">
                            <div class="form-label">Old Password</div>
                            <input type="password" name="old_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-label">New Password</div>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-label">Confirm Password</div>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
