<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlumnoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'apaterno' => 'required|min:3|max:15',
            'amaterno' => 'required|min:3|max:15',
            'nombre' => 'required|min:3|max:30',
            'ncontrol' => 'required|min:9|max:10',
            'nip' => 'required|min:4|max:4',
            'telefono' => 'nullable|min:10|max:10|unique:alumnos',
            'carrera_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'apaterno' => 'Primer Apellido',
            'amaterno' => 'Segundo Apellido',
            'nombre' => 'Nombre',
            'ncontrol' => 'Número de Control',
            'nip' => 'NIP',
            'telefono' => 'Teléfono',
            'carrera_id' => 'Departamento',
        ];
    }
}
