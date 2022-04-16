<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'slika' => 'mimes:png,jpeg,jpg',
            'uloga' => 'in: "uprava", "profesori", "tehnicko_osoblje"',
            'opis_posla' => '',
            'kategorija' => 'in: "pocasni_profesori", "sadasnji_radnici"'
        ];
    }
}
