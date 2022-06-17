<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusOnRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_status' => 'required|min:3|max:15'
        ];
    }

    public function attributes(){
        return [
            'tipo_status' => 'Estatus'
        ];
    }
}
