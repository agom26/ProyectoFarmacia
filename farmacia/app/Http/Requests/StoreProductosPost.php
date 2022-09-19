<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductosPost extends FormRequest
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
            /* validaciones */
            'codigo'=>'required|min:5|Max:20',
            'nombre'=>'required|min:5|Max:20',
            'existencia'=>'required',
            'precio'=>'required',
            'descripcion'=>'required|min:5|Max:500',
            
        ];
    }
}
