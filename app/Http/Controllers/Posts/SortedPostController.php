<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Posts\Post;
use Illuminate\Http\Request;

class SortedPostController extends Controller
{
    public function index($sorted)
    {
        $gridMode = false;
        switch ($sorted) {
            case 'popular':
                $posts = Post::popular()->with('author', 'category', 'tags')->withCount('comments')->paginate(15);
                break;
            case 'latest':
                $posts = Post::public()->with('author', 'category', 'tags')->withCount('comments')->latest()->paginate(15);
                $gridMode = false;
                break;
            case 'grid-mode':
                $posts = Post::public()->with('author', 'category', 'tags')->withCount('comments')->latest()->paginate(15);
                $gridMode = true;
                break;
            case 'first':
                $posts = Post::public()->with('author', 'category', 'tags')->withCount('comments')->orderBy("created_at", "asc")->paginate(15);
                break;
            case 'curated':
                $posts = Post::public()->with('author', 'category', 'tags')->withCount('comments')->orderBy("created_at", "desc")->paginate(15);
                break;

            default:
                abort(404);
                break;
        }
        return view('posts.index', compact('posts', 'sorted', 'gridMode'));

//        if ($sorted == "popular" || $sorted == "latest" || $sorted == "first") {
//            return view('posts.index', compact('posts', 'sorted'));
//        }
//
//        if ($sorted == "grid-mode") {
//            return view('posts.design', compact('posts', 'sorted'));
//        }
    }
}
