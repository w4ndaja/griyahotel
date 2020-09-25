<?php

namespace App\Http\Resources\Comments;

use App\Http\Resources\Users\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'id' => $this->id,
            'hash' => $this->hash,
            'body' => $this->body,
            'parent_id' => $this->parent_id,
            'child' => !is_null($this->parent_id),
            'edited' => optional($this->edited_at)->diffForHumans(),
            'owner' => optional($request->user())->id === $this->user_id,
            'published' => $this->created_at->diffForHumans(),
            'user' => new UserResource($this->user),
            'children' => CommentResource::collection($this->whenLoaded('children')),
        ];
    }
}
