<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        if($this->method() == "POST"){
            return [
                'name' => "required",
                'email' => "required|unique:students,email"
            ];
        }else{
            return [
                'name' => "required",
                'email' => "required|unique:students,email,{$this->teacher->id}"
            ];
        }
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
