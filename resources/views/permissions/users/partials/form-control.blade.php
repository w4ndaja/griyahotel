@csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $user->name }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') ?? $user->username }}">
            @error('username')
                {{ $message }}
            @enderror
        </div>
    </div>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $user->email }}">
    @error('email')
        {{ $message }}
    @enderror
</div>
<div class="form-group">
    <label for="roles" class="d-block">Choose roles</label>
    <select name="roles[]" class="form-control select2" multiple="multiple" style="width: 100%!important">
        @foreach ($user->roles as $item)
            <option selected value="{{ $item->name }}">{{ $item->name }}</option>
        @endforeach
        @foreach($roles as $item)
            <option value="{{ $item->name }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>