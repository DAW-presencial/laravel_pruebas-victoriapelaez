<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|size:9',
            'email' => 'required|email'];
    }

   /* public function messages()
    {
        return [
            'required' => 'El :attribute es requerido',
            'email' => 'El email debe tener un formato xxxx@dominio.xxx'
        ];
    }*/
}
