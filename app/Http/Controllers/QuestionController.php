<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Http\Resources\PopularQuestionResource;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use App\Repositories\QuestionRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

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
    
    public function showQuestion(Question $question,$sessionId): QuestionResource
    {
        return $this->questionRepository->singleQuestion($question,$sessionId);
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
    
    public function popularQuestion(): AnonymousResourceCollection
    {
        return PopularQuestionResource::collection(Question::query()->select(['title','slug'])->orderBy('visits','desc')->limit(10)->get());
    }
}
