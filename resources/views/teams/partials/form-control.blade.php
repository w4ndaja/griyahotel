@csrf

<div class="form-group">
    <label for="avatar">Thumbnail</label>
    <input type="file" class="form-control-file" id="avatar" name="avatar">
</div>

<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') ?? $team->username }}">
    @error('username')
        <div class="text-danger mt-1">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $team->name }}">
    @error('name')
    <div class="text-danger mt-1">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="name">Occupation</label>
    <input type="text" name="occupation" id="occupation" class="form-control" value="{{ old('occupation') ?? $team->occupation }}">
    @error('occupation')
    <div class="text-danger mt-1">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label for="bio">Bio</label>
    <textarea name="bio" id="bio" rows="5" class="form-control">{{ old('bio') ?? $team->bio }}</textarea>
    @error('bio')
        <div class="text-danger mt-1">
            {{ $message }}
        </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $submit }}</button>
