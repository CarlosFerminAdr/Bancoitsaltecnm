<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JefeDepartamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'apaterno' => 'required|min:3|max:15',
            'amaterno' => 'required|min:3|max:15',
            'nombre' => 'required|min:3|max:30',
            'departamento' => 'required|min:3|max:100'
        ];
    }

    public function attributes(){
        return [
            'apaterno' => 'Primer Apellido',
            'amaterno' => 'Segundo Apellido',
            'nombre' => 'Nombre',
            'departamento' => 'Departamento'
        ];
    }
}
