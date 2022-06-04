<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllDomiciliosRequest extends FormRequest
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
            'estado' => 'required|min:3|max:50',
            'user_id' => 'nullable'
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
