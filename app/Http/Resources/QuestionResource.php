<?php

namespace App\Http\Resources;

use App\Models\Answer;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
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
            'tag_id' => new TagResource($this->tag),
            'answer' => Answer::query()->with('user')->whereQuestionId($this->id)->latest()->paginate(),// AnswerResource::collection( $this->answers()->latest()->paginate(5)),
            'created_at' => $this->created_at,
            'diff' => $this->created_at->diffForHumans(),
            'replies'=>$this->answers()->count()
        ];
    }
}
