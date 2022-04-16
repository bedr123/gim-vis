<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'ime_i_prezime' => 'required|string',
            'informacije' => 'required|string',
            'slika' => 'required|mimes:png,jpeg,jpg',
            'uloga' => 'required|in: "uprava", "profesori", "tehnicko_osoblje"',
            'opis_posla' => 'required|string',
            'kategorija' => 'required|in: "pocasni_profesori", "sadasnji_radnici"'
        ];
    }
}
