<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                'cat_name' => 'required',
                'title' => 'required|max:50',
                'desc' => 'required',
                'image' => 'image',
            ];

        } elseif($this->method() === 'PATCH') {
            $rules = [
                'cat_name' => 'required',
                'title' => 'required|max:50',
                'desc' => 'required',
                'image' => 'image',
            ];

        } else {
            $rules = [
                'cat_name' => 'required',
                'title' => 'required|unique:posts|max:50',
                'desc' => 'required',
                'image' => 'required|image',
            ];
        }

        return $rules;

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'cat_name.required' => 'Blog-Post category must be selected!',
            'title.required' => 'Blog-Post title field must be filled out!',
            'title.unique' => 'Blog-Post title has already been taken!',
            'title.max' => 'Blog-Post title must be less than 50 Character\'s!',
            'image.required' => 'Blog-Image field must be filled out!',
            'image.image' => 'Blog-Image file must be png,jpeg/jpg extension!',

        ];
    }
}
