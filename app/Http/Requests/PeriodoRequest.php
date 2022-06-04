<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:30'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Periodo'
        ];
    }
}
