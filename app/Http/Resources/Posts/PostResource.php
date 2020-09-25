<?php

namespace App\Http\Resources\Posts;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'post_link' => route('posts.show', $this),
            'title' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'published' => $this->published,
            'thumbnail' => asset($this->thumbnail),
            'category' => optional($this->category)->name,
            'category_link' => route('categories.show', $this->category)
        ];
    }
}
