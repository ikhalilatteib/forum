<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class UserProfileResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'photo' => $this->photo ? URL::to($this->photo) : null,
            'question' => QuestionResource::collection($this->questions)->count(),
            'answer' => AnswerResource::collection($this->answers)->count(),
            'telephone' => $this->telephone
        ];
    }
}
