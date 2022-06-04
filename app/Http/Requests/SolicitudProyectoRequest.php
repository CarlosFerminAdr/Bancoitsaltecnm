<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudProyectoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'alumno_id' => ['unique:registros']
        ];
    }

    public function messages(){
        $user = auth()->user()->name;
        return [
            'alumno_id.unique' => 'Usted ya tiene una solicitud de Prouyecto Registrado con el Usuario: '.$user
        ];
    }
}
