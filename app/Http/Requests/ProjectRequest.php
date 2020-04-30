<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
                'name' => 'required|string|min:5|max:25',
                'desc' => 'required',
                'image' => 'image|file',
            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'cat_name' => 'required',
                'name' => 'required|string|min:5|max:25',
                'desc' => 'required',
                'image' => 'image|file',
            ];
        } else {
            $rules = [
                'cat_name' => 'required',
                'name' => 'required|string|min:5|max:25',
                'desc' => 'required',
                'image' => 'required|image|file',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'cat_name.required' => 'Category Name field must be filled out!',
            'name.required' => 'Project Name field must be filled out!',
            'desc.required' => 'Project Description field must be filled out!',
            'name.string' => 'Project Name must be Alphabetic letter!',
            'name.min:5' => 'Project Name must be at-least 5 Character\'s!',
            'name.max:25' => 'Project Name must be less than 25 Character\'s',
            'image.required' => 'Project Image field must be filled out!',
            'image.image' => 'Project Image field must be an image file!',
//            'image.size' => 'Profile Image file size less than or equal 512 kilobyte\'s!',

        ];
    }


}
