<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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
            'objetivo' => 'required',
            'problematica' => 'required'
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
            'objetivo' => 'Objetivo',
            'problematica' => 'Problematica'
        ];
    }
}
