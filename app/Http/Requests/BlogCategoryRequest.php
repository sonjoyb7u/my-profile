<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
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
                'name' => 'required|max:30',
                'slug' => 'max:100',
            ];

        } elseif($this->method() === 'PATCH') {
            $rules = [
                'name' => 'required|max:30',
                'slug' => 'max:100',
            ];

        } else {
            $rules = [
                'name' => 'required|unique:blog_categories|max:30',
                'slug' => 'unique:blog_categories|max:100',
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
            //
            'name.required' => 'Blog Category Name field must be filled out!',
            'name.unique' => 'Blog Category Name has already been taken!',
            'name.max:30' => 'Blog Category Name must be less than 30 Character\'s!',
            'slug.unique' => 'Blog Category slug has already been taken!',
            'slug.max:100' => 'Blog Category slug must be less than 100 Character\'s!',

        ];
    }
}
