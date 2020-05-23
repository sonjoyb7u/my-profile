<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'email.required' => 'Email field must be filled out!',
            'email.email' => 'Enter valid email address!',
            'password.required' => 'Password field must be filled out!',
            'password.min' => 'Password must be minimum 6 digit\'s!',

        ];
    }

}
