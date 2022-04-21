<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'question' => new QuestionResource($this->questions),
            'user' => new UserResource($this->user),
            'best' => $this->is_best,
            'diff'=>$this->created_at->diffForHumans()
        ];
    }
}
