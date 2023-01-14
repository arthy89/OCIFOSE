<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformeRequest extends FormRequest
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
            //
            'inf_titulo'=> 'required',
            'origen'=> 'required',
            'obj_gen'=> 'required',
            'obj_esp'=> 'required',
            'alcance'=> 'required',
            'sit_adv'=> 'required',
            'conclusion'=> 'required',
            'recomendaciones'=> 'required',
        ];
    }
}
