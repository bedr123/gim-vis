<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'slika' => 'required|mimes:png,jpeg,jpg',
            'category_id' => 'required|integer',
            'kontent' => 'required',
            'autor' => 'required|string',
            'employees' => ''
        ];
    }
}
