<?php

namespace App\Http\Controllers;

use App\Models\Posts\Post;
class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(6)->get();
        return view('home', compact('posts'));
    }
}
