<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'naslov' => 'required|string',
            'slika' => 'mimes:png,jpg,jpeg',
            'category_id' => 'required|integer',
            'kontent' => 'required',
            'autor' => 'required|string',
            'employees' => ''
        ];
    }
}
