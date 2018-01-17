<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarModeloMaquinaRequest extends FormRequest
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
            'nombre' => 'required|string|max:20',
            'marca_maquina_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'el modelo de maquina debe tener un nombre',
            'nombre.string' => 'el nombre debe componerse de caracteres',
            'nombre.max' => 'el nombre no debe superar los 20 caracteres',
            'marca_maquina_id.required' => 'el modelo de maquina debe tener una marca'
        ]
    }
}
