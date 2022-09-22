<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFarmacosPost extends FormRequest
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
            'codigo'=>'required|min:2|Max:20',
            'nombre'=>'required|min:5|Max:20',
            'ingredientes'=>'required',
            'indicaciones'=>'required',
            'precio'=>'required',
        ];
    }
}
