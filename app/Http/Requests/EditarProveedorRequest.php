<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarProveedorRequest extends FormRequest
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
          'tipo_identificacion_fiscal' => 'required',
          'numero_identificacion_Fiscal' => 'required',
          'razon_social' => 'required|string|max:125',
          'nombre_comercial' => 'required|string|max:100',
          'domicilio' => 'required|string|max:100',
          'pais' => 'required|string|max:75',
          'provincia' => 'required|string|max:75',
          'localidad' => 'required|string|max:75',
          'codigo_postal' => 'required|min:0',
          'telefono' => 'required|string|max:15',
          'movil' => 'required|string|max:15',
          'fax' => 'required',
          'email' => 'required|email',
          'direccion_web' => 'required|string|max:50'
        ];
    }
}
