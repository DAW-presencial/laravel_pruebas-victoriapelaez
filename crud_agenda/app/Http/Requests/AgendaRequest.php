<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //aqui es para controlar el acceso, pero lo suyo es hacer las gates en un proveeddor de servicio
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|unique:contacto',
            'email' => 'required|email|unique:contacto',
            'foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es requerido',
            'foto.required' => 'La foto es requerida',
            'email' => 'El email debe tener un formato xxxx@dominio.xxx',
            'unique' => 'Este :attribute ya existe'
        ];
    }
}
