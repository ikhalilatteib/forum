<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'photo' => $this->photo ? URL::to($this->photo) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'question' => QuestionResource::collection($this->questions)->count(),
            'answer' => AnswerResource::collection($this->answers)->count(),
        ];
    }
}
