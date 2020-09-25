<?php

namespace App\Http\Controllers\Comments;
use Str;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Resources\Comments\CommentResource;
use App\Models\Comments\Comment;
use App\Models\Posts\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return CommentResource::collection($post->comments()->with(['children', 'user'])->paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post, Request $request)
    {
        request()->validate([
            'body' => 'required|max:5000',
        ]);

        $comment = $post->comments()->make([
            'body' => request('body'),
        ]);

        $request->user()->comments()->save($comment);

        return new CommentResource($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $post
     * @return \Illuminate\Http\Response
     */
    public function patch(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);
        request()->validate([
            'body' => 'required|max:5000',
        ]);

        $comment->update([
            'body' => request('body'),
        ]);

        return new CommentResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->children()->delete();
        $comment->delete();
    }
}
