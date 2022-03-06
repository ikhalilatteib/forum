<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    public function storeQuestion(QuestionRequest $request)
    {
        $question = DB::transaction(function () use ($request) {
            $question = auth()->user()->questions()->create($request->validated());
            $question->tags()->attach($request->get('tags'));

            return $question;
        });

        return response()->json([
            'question' => $question
        ], 200);
    }
}
