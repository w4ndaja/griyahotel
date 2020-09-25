@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/odb6xz4b3a6treeok11oxxxwuod13gjwmvigbhusadouanmm/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="/vendor/tinymce.config.js"></script>
    <script>
        $(".select2tags").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    </script>
@endsection
@csrf
<div class="row">
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-header">
                Main Post
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') ?? $post->title }}" class="form-control @error('title') is-invalid @enderror">
                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" rows="15" class="form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body }}</textarea>
                    @error('body') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header">Additional</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
                        <option disabled selected>Choose Category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $post->category_id ? ' selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('category') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label>Tags</label>
                    <select name="tags[]" class="form-control select2tags" multiple="multiple">
                        @if($post->tags)
                            @foreach($post->tags as $tag)
                                <option selected value="{{ $tag->name }}">{{ $tag->name }}</option>
                            @endforeach
                        @endif
                        @error('tags') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Setting</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="visibility">Visibility</label>
                    <select name="visibility" id="visibility" class="form-control @error('visibility') is-invalid @enderror">
                        @foreach ($visibilities as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $post->visibility_id ? ' selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('visibility') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label for="comment_status">Comment Status</label>
                    <select name="comment_status" id="comment_status" class="form-control @error('comment_status') is-invalid @enderror">
                        <option value="1" selected>Open</option>
                        <option value="0">Closed</option>
                    </select>
                    @error('comment_status') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary mt-2">{{ $submit }}</button>
