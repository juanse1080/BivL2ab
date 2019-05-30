<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'email' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.',
            'string' => 'This field is only for text.',
        ];
    }
}
