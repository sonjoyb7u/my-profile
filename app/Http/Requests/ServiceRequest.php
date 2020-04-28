<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
                'title' => 'required|string|min:4|max:25',
                'sub_title' => 'min:20|max:150',
                'image' => 'image|file',

            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'title' => 'required|string|min:4|max:25',
                'sub_title' => 'min:20|max:150',
                'image' => 'image|file',
            ];
        } else {
            $rules = [
                'title' => 'required|string|min:4|max:25',
                'sub_title' => 'required|min:20|max:150',
                'image' => 'image|file',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Service Title field must be filled out!',
            'title.string' => 'Service Title must be Alphabetic letter!',
            'title.min:4' => 'Service Title must be at-least 4 Character\'s!',
            'title.max:25' => 'Service Title must be less than 25 Character\'s',
            'sub_title.required' => 'Service Sub-Title field must be filled out!',
            'sub_title.string' => 'Service Sub-Title must be Alphabetic letter!',
            'sub_title.min:4' => 'Service Sub-Title must be at-least 4 Character\'s!',
            'sub_title.max:25' => 'Service Sub-Title must be less than 25 Character\'s',
            'image.required' => 'Image Image field must be filled out!',
            'image.image' => 'Image field must be an image file!',

        ];
    }

}
