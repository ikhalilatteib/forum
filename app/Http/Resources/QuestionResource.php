<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'active' => $this->is_active,
            'slug' => $this->slug,
            'user' => new UserResource($this->user),
            'tag' => new TagResource($this->tag),
            'created_at'=>$this->created_at,
            'diff'=> $this->created_at->diffForHumans()
        ];
    }
}
