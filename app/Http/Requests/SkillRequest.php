<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
                'skill_name' => 'required|string|min:5|max:25',
                'skill_percent' => 'required|integer',
                'skill_color_code' => 'required',

            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'skill_name' => 'required|string|min:5|max:25',
                'skill_percent' => 'required|integer',
                'skill_color_code' => 'required',
            ];
        } else {
            $rules = [
                'skill_name' => 'required|string|min:5|max:25',
                'skill_percent' => 'required|integer',
                'skill_color_code' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'skill_name.required' => 'Skill Name field must be filled out!',
            'skill_name.string' => 'Skill Name must be Alphabetic letter!',
            'skill_name.min:5' => 'Skill Name must be at-least 5 Character\'s!',
            'skill_name.max:25' => 'Skill Name must be less than 25 Character\'s',
            'skill_percent.required' => 'Skill Percentage field must be filled out!',
            'skill_percent.integer' => 'Skill Percentage must be an Numeric Number value!',
            'skill_color_code.required' => 'Skill Color Code field must be filled out!',

        ];
    }

}
