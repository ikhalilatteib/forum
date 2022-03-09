<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{

    public function storeAnswer(AnswerRequest $request,Question $question)
    {
        $response = DB::transaction(function () use($request,$question){
            return Answer::create($request->validated());
        });

        return response([
            'answer'=>$response
        ]);
    }
}
