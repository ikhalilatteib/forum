<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $question = $this->route('question');
        $this->merge([
            'user_id' => $this->user()->id,
            'question_id'=>$question->id,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content' => 'required|string|min:10',
            'user_id' => 'required|exists:users,id',
            'question_id'=>'required|exists:questions,id'
        ];
    }
}
