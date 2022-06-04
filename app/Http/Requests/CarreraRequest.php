<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarreraRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:100',
            'jdepto_id' => 'required'
        ];
    }

    public function attributes(){
        return [
            'nombre' => 'Carrera',
            'jdepto_id' => 'Jefe del Departamento'
        ];
    }
}
