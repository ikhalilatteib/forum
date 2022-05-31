<?php

namespace App\Repositories;

use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Models\ViewCounter;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class QuestionRepository
{

    public function index(): AnonymousResourceCollection
    {
      return  QuestionResource::collection(Question::query()->latest()->paginate(5));
    }

    public function singleQuestion($question,$sessionId=null): QuestionResource
    {
        ViewCounter::viewerControl($question,$sessionId);
        return new QuestionResource($question->load('answers'));
    }
}
