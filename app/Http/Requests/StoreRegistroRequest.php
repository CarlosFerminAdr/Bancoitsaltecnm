<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'alumno_id' => ['unique:registros'],
            'alumno_id' => ['unique:solicitas']
        ];
    }

    public function messages(){
        $user = auth()->user()->name;
        return [
            'alumno_id.unique' => 'Usted ya tiene una solicitud de Proyecto Registrado con el Usuario: '.$user,
            'alumno_id.unique' => 'Usted ya tiene una solicitud de Programa Registrado con el Usuario: '.$user
        ];
    }
}
