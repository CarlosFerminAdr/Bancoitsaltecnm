<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'estado' => 'required|min:3|max:30'
        ];
    }

    public function attributes(){
        return [
            'estado' => 'Estatus'
        ];
    }
}
