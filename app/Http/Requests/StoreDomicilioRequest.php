<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDomicilioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'calle' => 'required|min:3|max:50',
            'numero' => 'required|min:1|max:5',
            'colonia' => 'required|min:3|max:50',
            'cp' => 'required|min:5|max:6',
            'municipio' => 'required|min:3|max:30',
            'estado' => 'required|min:3|max:30',
            'user_id' => ['unique:domicilios']
        ];
    }

    public function messages(){
        $user = auth()->user()->name;
        return [
            'user_id.unique' => 'Usted ya tiene un Domicilio Registrado con el Usuario: '.$user
        ];
    }
}
