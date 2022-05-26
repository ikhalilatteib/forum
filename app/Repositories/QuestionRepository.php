<?php

namespace App\Repositories;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class QuestionRepository
{

    public function index(): AnonymousResourceCollection
    {
      return  QuestionResource::collection(Question::query()->latest()->paginate(5));
    }

    public function singleQuestion($question): QuestionResource
    {
        return new QuestionResource($question);
    }
}
