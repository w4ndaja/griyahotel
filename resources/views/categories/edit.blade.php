@extends('back.app')

@section('title', "Edit category {$category->name}")

@section('content')
    <div class="card">
        <div class="card-header">Edit Category: {{ $category->name }}</div>
        <div class="card-body">
            <form action="{{ route('categories.update', $category) }}" method="post">
                @csrf
                @method("PATCH")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    @endsection
