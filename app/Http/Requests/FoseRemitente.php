<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoseRemitente extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=> 'required',
            'apellido'=> 'required',
            'entidad'=> 'required',
            'cargo' => 'required',
            'asunto' => 'required',
            'detalles' => 'required',
            'fecha' => 'required',
            'doc_ref' => 'required',
            'folios' => 'required',
            'ele_adj' => 'required'
            //
        ];
    }
}
