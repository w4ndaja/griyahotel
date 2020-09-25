<?php

namespace App\Http\Controllers\Posts;
use Str;
use App\Http\Controllers\Controller;
use App\Models\Posts\Category;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->getPosts();
        return view('posts.index', compact('posts', 'category'));
    }

    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view('categories.index', compact('categories'));
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|unique:categories,name',
        ]);

        Category::create($this->categoryRequest());

        return back()->with('success', 'Category was saved.');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Category $category)
    {
        $category->update($this->categoryRequest());

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->posts()->delete();
        $category->delete();
    }

    public function categoryRequest()
    {
        return [
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
        ];
    }
}
