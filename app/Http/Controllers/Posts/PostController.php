<?php

namespace App\Http\Controllers\Posts;
use Str;
use Storage;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\PostRequest;
use App\Models\Posts\{Category, Post, Tag, Visibility};
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function table()
    {
        $posts = Post::with('category')->withCount('comments')->latest()->get();
        return view('posts.table', compact('posts'));
    }

    public function create()
    {
        $post = new Post;
        $categories = Category::get();
        $visibilities = Visibility::get();
        $tags = Tag::get();
        return view('posts.create', compact('post', 'visibilities', 'tags', 'categories'));

    }

    public function store(PostRequest $request)
    {
        $attr = $this->postRequest();

        $thumbnail = request()->file("thumbnail");
        $thumbnailName = $thumbnail->store('images/posts');

        $slug = Str::slug(request('title')) . "-" . strtotime(Carbon::now());

        $attr['thumbnail'] = $thumbnailName;
        $attr['slug'] = $slug;

        $post = auth()->user()->posts()->create($attr);

        if (request('tags')) {
            $tagCollection = collect(request('tags'));
            $createTags = $tagCollection->mapToGroups(function ($item) {
                return [
                    Tag::firstOrCreate([
                        'name' => ucwords($item),
                        'slug' => Str::slug($item),
                    ])
                ];
            });

            $tags = $createTags[0]->pluck('id')->toArray();
            $post->tags()->sync($tags, false);
        }
        $post->addOneView();
        return redirect()->route('posts.edit', $post)->with('success', 'Post was inserted.');
    }

    public function edit(Post $post)
    {
        $categories = Category::get();
        $visibilities = Visibility::get();
        $tags = Tag::get();
        return view('posts.edit', compact('post', 'visibilities', 'tags', 'categories'));
    }

    public function update(PostRequest $request, Post $post)
    {
        $thumbnail = request()->file("thumbnail");
        if ($thumbnail) {
            Storage::delete($post->thumbnail);
            $thumbnailName = $thumbnail->store('images/posts');
        } else {
            $thumbnailName = $post->thumbnail;
        }

        $post['thumbnail'] = $thumbnailName;
        $post['slug'] = $post->slug;
        $post->update($this->postRequest());

        if (request('tags')) {
            $tagCollection = collect(request('tags'));
            $createTags = $tagCollection->mapToGroups(function ($item) {
                return [
                    Tag::firstOrCreate([
                        'name' => ucwords($item),
                        'slug' => Str::slug($item),
                    ])
                ];
            });

            $tags = $createTags[0]->pluck('id')->toArray();
            $post->tags()->sync($tags);
         } else {
            $post->tags()->sync([]);
        }

        return redirect()->route('posts.table');
    }

    public function show($post)
    {
        $post = Post::where('slug', $post)->where('visibility_id', true)->firstOrFail();
        $post->addViewCount();
        $tags = $post->tags;
        return view('posts.show', compact('post','tags'));
    }

    public function delete($post)
    {
        $post = Post::where('slug', $post)->firstOrFail();
        $post->delete();
        $post->comments()->delete();
    }

    public function count()
    {
        return Post::count();
    }

    public function postRequest()
    {
        return [
            'category_id'           => request('category'),
            'visibility_id'         => request('visibility'),
            'title'                 => request('title'),
            'body'                  => request('body'),
            'excerpt'               => Str::limit(strip_tags(request('body')), 170),
            'comment_status'        => request('comment_status'),
            'publish'               => null,
        ];
    }
}
