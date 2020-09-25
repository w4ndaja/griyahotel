<?php

namespace App\Models\Comments;
use Str;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body', 'hash'];

    protected $dates = ['edited_at'];

    public static function boot()
    {
        parent::boot();
        static::updating(function ($comment) {
            $comment->edited_at = Carbon::now();
        });
        static::creating(function ($comment) {
            $comment->hash = Str::random(54) . strtotime(Carbon::now());
        });
    }

    public function getRouteKeyName()
    {
        return 'hash';
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')
                    ->orderBy('created_at', 'asc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

