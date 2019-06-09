<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationValidator extends FormRequest
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
            'school' => 'required|string',
            'type' => 'required|in:Undergraduate,Master,Doctor,Postdoctor',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
        ];
    }

    public function messages(){
        return [
            'school.required' => 'School name is required',
            'school.string' => 'The School field must be an String',
            'type.required'  => 'A type is required',
            'start.required'  => 'Start is required',
            'start.date'  => 'Start must be a date',
            'end.required'  => 'End is required',
            'end.date'  => 'End must be a date'
        ];
    }
}
