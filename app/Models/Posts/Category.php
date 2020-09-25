<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getPosts()
    {
        return $this->posts()->with('tags', 'category', 'author')->withCount('comments')->where('visibility_id', 1)->latest()->take(10)->paginate(15);
    }
}
