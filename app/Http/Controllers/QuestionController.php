<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{

    /**
     * @var QuestionRepository
     */

    public function __construct(private QuestionRepository $questionRepository)
    {
    }

    public function indexQuestion()
    {
        $questions = $this->questionRepository->index();
        return response([
            'questions' => $questions
        ]);
    }

    public function storeQuestion(QuestionRequest $request)
    {

        $question = auth()->user()->questions()->create($request->validated());
        return response([
        'questions' => $question
    ]);
    }

    public function showQuestion(Question $question)
    {
        return $this->questionRepository->singleQuestion($question);
    }

    public function updateQuestion(QuestionUpdateRequest $request, Question $question)
    {
        $response = DB::transaction(function () use ($request, $question) {
            $question->update($request->validated());
            $question->tags()->sync($request->get('tags'));
        });

        return response([
            'success' => $response
        ]);
    }

    public function deleteQuestion(Question $question, Request $request)
    {
        $user = $request->user();
        if ($user->id !== $question->user_id) {
            return abort(403, 'Unauthorized action.');
        }
        $question->delete();

        return response('', 204);
    }
}
