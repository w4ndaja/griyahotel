<?php

namespace App\Http\Controllers\Api\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Posts\PostResource;
use App\Models\Posts\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::latest()->get();
    }

    public function latest()
    {
        $post = Post::with('category')->public()->latest()->first();
        return new PostResource($post);
    }

    public function slider($post)
    {
        $posts = Post::public()->latest()->take($post)->get();
        return PostResource::collection($posts);
    }
}
