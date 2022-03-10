<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        $answer = $this->route('answer');
        if ($this->user()->id !== $answer->user_id) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'content' => 'required|string|min:10',
        ];
    }
}
