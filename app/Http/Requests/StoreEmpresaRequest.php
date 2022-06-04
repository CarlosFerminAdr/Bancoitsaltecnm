<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:3|max:50',
            'giro' => 'required|min:3|max:50',
            'rfc' => 'required|min:3|max:50',
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:empresas'],
            'telefono' => 'required|min:3|max:10',
            'titular' => 'required|min:3|max:50',
            'domicilio_id' => ['required', 'unique:empresas'],
            'user_id' => ['unique:empresas']
        ];
    }

    public function messages(){
        $user = auth()->user()->name;
        return [
            'user_id.unique' => 'Usted ya tiene una Empresa Registrada con el Usuario: '.$user
        ];
    }
}
