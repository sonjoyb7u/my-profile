<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
                'first_name' => 'required|string|min:3|max:25',
                'middle_name' => 'required|string|min:3|max:25',
                'last_name' => 'required|string|min:3|max:25',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'image' => 'image|file',
                'phone' => 'required|string|min:10|max:20',
                'address' => 'required|string|min:10|max:120',
                'bio' => 'required',
            ];
        } elseif ($this->method() === 'PATCH') {
            $rules = [
                'first_name' => 'required|string|min:3|max:25',
                'middle_name' => 'required|string|min:3|max:25',
                'last_name' => 'required|string|min:3|max:25',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'image' => 'image|file',
                'phone' => 'required|string|min:10|max:20',
                'address' => 'required|string|min:10|max:120',
                'bio' => 'required',
            ];
        } else {
            $rules = [
                'first_name' => 'required|string|min:3|max:25',
                'middle_name' => 'required|string|min:3|max:25',
                'last_name' => 'required|string|min:3|max:25',
                'age' => 'required|integer',
                'gender' => 'required|string',
                'image' => 'required|image|file',
                'phone' => 'required|string|min:9|max:20',
                'address' => 'required|string|min:10|max:120',
                'bio' => 'required',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Profile First Name field must be filled out!',
            'middle_name.required' => 'Profile Middle Name field must be filled out!',
            'last_name.required' => 'Profile Last Name field must be filled out!',
            'first_name.string' => 'Profile First Name must be Alphabetic letter!',
            'middle_name.string' => 'Profile Middle Name must bel Alphabetic letter!',
            'last_name.string' => 'Profile Last Name must be Alphabetic letter!',
            'first_name.min:3' => 'Profile First Name must be at-least 3 Character\'s!',
            'middle_name.min:3' => 'Profile Middle Name must be at-least 3 Character\'s!',
            'last_name.min:3' => 'Profile last Name must be at-least 3 Character\'s!',
            'first_name.max:25' => 'Profile First Name must be less than 25 Character\'s',
            'middle_name.max:25' => 'Profile Middle Name must be less than 25 Character\'s',
            'last_name.max:25' => 'Profile Last Name must be less than 25 Character\'s',
            'age.required' => 'Age field must be filled out!',
            'age.integer' => 'Age must be an Numeric Number value!',
//            'age.size' => 'Age must be at-least 4 digit\'s!',
            'gender.required' => 'Gender field must be filled out!',
            'gender.string' => 'Gender Name must be Alphabetic letter!',
            'image.required' => 'Profile Image field must be filled out!',
            'image.image' => 'Profile Image field must be an image file!',
//            'image.size' => 'Profile Image file size less than or equal 512 kilobyte\'s!',
            'phone.required' => 'Phone field must be filled out!',
            'phone.string' => 'Phone number must be an Alpa-Numeric Number!',
            'phone.min:9' => 'Phone Number must be at-least 9 digit\'s!',
            'phone.max:20' => 'Phone Number must be less than 20 digit\'s',
            'address.required' => 'Address field must be filled out!',
            'address.string' => 'Address must be an Alpa-Numeric Number!',
            'address.min:10' => 'Address must be an at-least 10 Character\'s',
            'address.max:120' => 'Address must be less than 120 Character\'s',
            'bio.required' => 'Bio field must be filled out!',

        ];
    }
}
