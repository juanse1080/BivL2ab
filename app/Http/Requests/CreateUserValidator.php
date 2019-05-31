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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'birthdate' => 'required|date'
        ];
    }

    public function messages(){
        return [
            'first_name.required' => 'First name is required',
            'first_name.string' => 'The First name field must be an String',
            'last_name.required' => 'First name is required',
            'last_name.string' => 'The First name field must be an String',
            'password.required' => 'Password field is required',
            'birthdate.required' => 'Birthdate field is required'
        ];
    }
}
