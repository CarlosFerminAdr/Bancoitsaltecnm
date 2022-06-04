<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:100',
            'nalumnos' => 'required',
            'empresa_id' => 'required',
            'flimite' => 'required',
            'carrera_id' => 'required',
            'periodo_id' => 'required',
            'actividades' => 'required',
            'tipo_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Nombre del Programa',
            'nalumnos' => 'Segundo Apellido',
            'empresa_id' => 'Empresa',
            'flimite' => 'Fecha',
            'carrera_id' => 'Carrera',
            'periodo_id' => 'Periodo',
            'actividades' => 'Actividades',
            'tipo_id' => 'Tipo de Programa'
        ];
    }
}
