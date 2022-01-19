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
        return false;
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
            /*'telefono' =>'unique'|'integer'|'9',
            'email'=>'email',*/
        ];
    }
}
