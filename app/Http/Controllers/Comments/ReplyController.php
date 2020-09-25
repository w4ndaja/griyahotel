<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Http\Resources\Comments\CommentResource;
use App\Models\Comments\Comment;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Comment $comment)
    {
//        $this->authorize('reply', $comment);
        request()->validate([
            'body' => 'required|max:5000',
        ]);

        $reply = $comment->children()->make([
            'body' => request('body'),
        ]);

        $reply->commentable()->associate($comment->commentable);

        request()->user()->comments()->save($reply);

        return new CommentResource($reply);
    }
}
