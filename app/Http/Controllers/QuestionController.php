<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    
    /**
     * @var QuestionRepository
     */
    
    public function __construct(private QuestionRepository $questionRepository)
    {
    }
    
    public function indexQuestion(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return $this->questionRepository->index();
    }
    
    public function storeQuestion(QuestionRequest $request)
    {
        $question = auth()->user()->questions()->create($request->validated());
        return response([
            'questions' => $question
        ]);
    }
    
    public function showQuestion(Question $question): QuestionResource
    {
        return $this->questionRepository->singleQuestion($question);
    }
    
    public function updateQuestion(QuestionUpdateRequest $request, Question $question)
    {
        
        $question->update($request->validated());
        return response([
            'success' => $question
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
