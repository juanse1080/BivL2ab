<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserValidator extends FormRequest
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
            'biography' => 'required',
            'birthdate' => 'required|date',
            'photo' => 'image|mimes:jpeg,bmp,png,jpg',
        ];
    }

    public function messages(){
        return [
            'first_name.required' => 'First name field is required',
            'first_name.string' => 'First name field must be an String',
            'last_name.required' => 'Last name field is required',
            'last_name.string' => 'Last name field must be an String',
            'biography.required'  => 'A biography is required',
            'photo.image'  => 'Photo input must be an image'
        ];
    }
}
