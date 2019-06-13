<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProject extends FormRequest
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
            'title' => 'required|string',
            'type' => 'required|in:Undergraduate,Master,Doctor,Postdoctor',
            'photo' => 'image|mimes:jpeg,bmp,png,jpg',
            'summary' => 'required',
            "usrs"    => "required|array|min:1",
            'usrs.*' => 'required|exists:usrs,pk_usr',
        ];
    }
}
