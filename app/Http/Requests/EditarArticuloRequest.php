<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarArticuloRequest extends FormRequest
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
          'codigo' => 'required|string|max:20',
          'nombre' => 'required|string|max:50',
          'descripcion' => 'required|text',
          'categoria' => 'required|integer',
          'stock' => 'required|integer',
          'proveedor_id' => 'required',
          'marca_id' => 'required',
          'subfamilia_id' => 'required',
          'familia_id' => 'required'
        ];
    }
}
