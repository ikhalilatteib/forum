<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Http\Requests\AnswerUpdateRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{

    public function indexAnswer()
    {
        $answers =  auth()->user()->answers;
        return response([
            'answers' => $answers
        ]);
    }

    public function storeAnswer(AnswerRequest $request, Question $question)
    {
        $response = DB::transaction(function () use ($request, $question) {
            return Answer::create($request->validated());
        });

        return response([
            'answer' => $response
        ]);
    }

    public function updateAnswer(AnswerUpdateRequest $request, Answer $answer)
    {
        $response = $answer->update($request->validated());
        return response(['update' => $response]);
    }

    public function deleteAnswer(Answer $answer, Request $request)
    {
        abort_if($request->user()->id !== $answer->user_id, 404);
        $answer->delete();
        return response(['success' => 'true']);
    }
}
