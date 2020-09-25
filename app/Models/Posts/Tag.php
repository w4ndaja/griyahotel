<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'color'];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
