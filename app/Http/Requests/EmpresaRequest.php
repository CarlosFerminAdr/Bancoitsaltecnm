<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'domicilio_id' => 'required',
            'nombre' => 'required|min:3|max:100',
            'titular' => 'required|min:3|max:50',
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:empresas'],
            'telefono' => 'required|min:10|max:10|unique:empresas',
            'giro' => 'required|min:3|max:50',
            'rfc' => 'required|min:12|max:12|unique:empresas'
        ];
    }

    public function attributes(){
        return [
            'domicilio_id' => 'Domicilio',
            'nombre' => 'Nombre de la Empresa',
            'titular' => 'Nombre del Titular',
            'correo' => 'Correo Electrónico',
            'telefono' => 'Teléfono',
            'giro' => 'Giro, Ramo o Sectro',
            'rfc' => 'RFC'
        ];
    }
}
