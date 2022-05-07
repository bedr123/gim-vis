<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'kategorija' => 'required|in: "kulturno-umjetnicke", "znanstveno-tehničke_i-nastavne", "sportske", "ostalo"', 
            'broj_grupa' => 'required|integer', 
            'broj_ucenika' => 'required|integer', 
            'sedmicni_fond_sati' => 'required|integer', 
            'profesori' => 'required|array',
        ];
    }
}
