<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserValidator extends FormRequest
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
            
            'email' => 'required|unique:usrs,email|email',
            'role' => 'required',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email name is required',
            'email.string' => 'The Email name field must be an String',
        ];
    }
}
