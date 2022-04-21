<?php

namespace App\Repositories;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

class QuestionRepository
{

    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
      return  QuestionResource::collection(Question::query()->latest()->get());
    }

    public function singleQuestion($question)
    {
        return $question->query()->get();
    }
}
