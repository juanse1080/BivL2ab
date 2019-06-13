<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatasetUpdateValidator extends FormRequest
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
            'name' => 'required|string',
            'description' => 'required',
            'photo' => 'image|mimes:jpeg,bmp,png,jpg',
            'url' => 'required|url'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'A name is required',
            'name.string' => 'The name field must be an String',
            'description.required'  => 'A description is required',
            'photo.required'  => 'A photo is required',
            'photo.image'  => 'Photo input must be an image',
            'url.required' => 'A URL is required',
            'url.url' => 'Not a valid URL'
        ];
    }
}
