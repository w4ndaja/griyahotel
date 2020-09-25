<?php

namespace App\Models\Posts;
use Str;
use App\Models\Comments\Comment;
use App\Models\User;
use App\Traits\Viewable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Viewable;
    protected $fillable = [
        'category_id',
        'visibility_id',
        'title',
        'slug',
        'body',
        'excerpt',
        'comment_status',
        'publish',
        'thumbnail'
    ];

    public function getPublishedAttribute()
    {
        return $this->created_at->format("d F Y");
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopePublic()
    {
        return $this->where('visibility_id', 1);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function visibility()
    {
        return $this->belongsTo(Visibility::class);
    }

    public function scopeGetPost()
    {
        return $this->where('visibility_id', 1)->latest()->take(10)->get();
    }

    public function scopePopular()
    {
        return $this->join('views', 'posts.id', '=', 'views.viewable_id')
            ->select('posts.*', 'views.times')
            ->orderBy('views.times', 'DESC');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
                    ->whereNull('parent_id')
                    ->orderBy('created_at', 'desc');
    }
}
