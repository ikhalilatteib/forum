<?php

namespace App\Repositories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;

class QuestionRepository
{

    public function index(): Collection|array
    {
      return  Question::with( 'answers', 'tags')->latest()->get();
    }

    public function singleQuestion($question)
    {
        return $question->with('tags','answers','user')->get();
    }
}
