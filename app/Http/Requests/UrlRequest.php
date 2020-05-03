<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UrlRequest extends FormRequest
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
                'name' => 'required|string|min:4|max:35',
                'url_link' => 'required',

            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'name' => 'required|string|min:4|max:35',
                'url_link' => 'required',
            ];
        } else {
            $rules = [
                'name' => 'required|string|min:4|max:35',
                'url_link' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Url Name field must be filled out!',
            'name.string' => 'Url Name must be Alphabetic letter!',
            'name.min:4' => 'Url Name must be at-least 4 Character\'s!',
            'name.max:25' => 'Url Name must be less than 35 Character\'s',
            'url_link.required' => 'Url Link field must be filled out!',

        ];
    }

}
