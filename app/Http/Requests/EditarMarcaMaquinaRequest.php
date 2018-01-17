<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarMarcaMaquinaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'la marca de maquina debe tener un nombre',
            'nombre.string' => 'el nombre debe componerse de caracteres',
            'nombre.max' => 'el nombre no debe superar los 50 caracteres'
        ];
    }
}
