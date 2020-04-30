<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                'name' => 'required|string|min:4|max:25',
            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'name' => 'required|string|min:4|max:25',
            ];
        } else {
            $rules = [
                'name' => 'required|string|min:4|max:25',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Category Name field must be filled out!',
            'name.string' => 'Category Name must be Alphabetic letter!',
            'name.min:5' => 'Category Name must be at-least 4 Character\'s!',
            'name.max:25' => 'Category Name must be less than 25 Character\'s',

        ];
    }

}
