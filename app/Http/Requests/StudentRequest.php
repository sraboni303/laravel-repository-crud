<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        return [
            'name' => "required",
            'email' => "required|unique:students,email"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Field is Required',
            'email.required' => 'Email Field is Required',
            'email.unique' => 'This email is already taken'
        ];
    }
}
