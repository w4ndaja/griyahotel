@extends('front.app')
@section('title', "Login")
@section('content')
    <div class="container">
        <div class="flex my-10 justify-center">
            <div class="w-full sm:w-1/2">
                <div class="border p-10 rounded">
                    <div class="text-lg font-semibold text-primary uppercase mb-3">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="form-label">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                                       required autocomplete="name" autofocus>

                                @error('name')
                                <span class="form-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="form-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control" name="password" required
                                       autocomplete="new-password">

                                @error('password')
                                <span class="form-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
