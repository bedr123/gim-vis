<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDirectionRequest extends FormRequest
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
            'naziv' => 'required|string',
            'opis' => 'required|string',
            'ikonica' => 'mimes:png,jpg,jpeg,ico',
            'kontent' => 'required|string',
            //'slike' => 'array'
        ];
    }
}
