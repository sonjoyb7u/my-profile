<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'name' => 'required|string|min:3|max:40',
                'email' => 'required|unique:contacts',
                'subject' => 'required',
                'message' => 'required',

            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|unique:contacts',
                'subject' => 'required',
                'message' => 'required',
            ];
        } else {
            $rules = [
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|unique:contacts',
                'subject' => 'required',
                'message' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Name field must be filled out!',
            'name.string' => 'Name must be Alphabetic letter!',
            'name.min:3' => 'Name must be at-least 3 Character\'s!',
            'name.max:50' => 'Name must be less than 50 Character\'s',
            'email.required' => 'Email Address field must be filled out!',
            'email.unique:contacts' => 'Please Enter Valid Email Address!',
            'subject.required' => 'Subject field must be filled out!',
            'message.required' => 'Message field must be filled out!',
        ];
    }

}
