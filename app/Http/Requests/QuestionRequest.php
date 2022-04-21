<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'user_id'=>$this->user()->id
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'title'=>'required|string',
            'content'=>'required|string|min:100',
            'tag_id'=>'required|exists:tags,id',
            'user_id'=>'required|exists:users,id'
        ];
    }
}
