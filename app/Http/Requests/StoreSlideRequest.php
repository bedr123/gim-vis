<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlideRequest extends FormRequest
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
            'opis' => 'sometimes|string',
            'slika' => 'required|mimes:png,jpeg,jpg',
            'link' => 'sometimes|url',
            'redoslijed' => 'required|integer|in: 1, 2, 3, 4, 5'
        ];
    }
}
