<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductValidator extends FormRequest
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
            'type' => 'required|in:Conference,Paper,Journal',
            'photo' => 'image|mimes:jpeg,bmp,png,jpg',
            'code' => 'required|string',
            'pdf' => 'mimes:pdf',
            'sublines' => 'required',
            'usrs' => 'required',
            'fk_project' => 'required',
            'abstract' => 'required|string',
        ];
    }
}
