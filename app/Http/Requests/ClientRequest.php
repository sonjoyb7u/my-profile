<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() === 'PUT') {
            $rules = [
                'name' => 'required|string|min:3|max:50',
                'comment' => 'required|string',
                'image' => 'image|file',

            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'name' => 'required|string|min:3|max:50',
                'comment' => 'required|string',
                'image' => 'image|file',
            ];
        } else {
            $rules = [
                'name' => 'required|string|min:3|max:50',
                'comment' => 'required|string',
                'image' => 'required|image|file',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Client Name field must be filled out!',
            'name.string' => 'Client Name must be Alphabetic letter!',
            'name.min:3' => 'Client Name must be at-least 3 Character\'s!',
            'name.max:50' => 'Client Name must be less than 50 Character\'s',
            'comment.required' => 'Comment field must be filled out!',
            'comment.string' => 'Comment must be an Alphabetic value!',
            'image.required' => 'Client Image field must be filled out!',
            'image.image' => 'Client Image file must be Image file!',

        ];
    }

}
