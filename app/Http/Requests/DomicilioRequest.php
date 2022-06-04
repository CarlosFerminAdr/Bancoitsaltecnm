<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DomicilioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'calle' => 'required|min:3|max:50',
            'numero' => 'required',
            'colonia' => 'required|min:3|max:50',
            'cp' => 'required|min:5|max:5',
            'municipio' => 'required|min:3|max:50',
            'estado' => 'required|min:3|max:50'
        ];
    }

    public function attributes(){
        return [
            'calle' => 'Calle',
            'numero' => 'Número',
            'colonia' => 'Colonia',
            'cp' => 'Codigo Postal',
            'municipio' => 'Municipio',
            'estado' => 'Estado'
        ];
    }
}
