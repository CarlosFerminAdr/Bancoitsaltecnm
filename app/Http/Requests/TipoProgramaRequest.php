<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoProgramaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_programa' => 'required|min:3|max:100'
        ];
    }

    public function attributes(){
        return [
            'tipo_programa' => 'Nombre del Programa'
        ];
    }
}
