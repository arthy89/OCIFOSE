<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoseRequest extends FormRequest
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
            'fose_num_id'=> 'required',
            'id_ofi'=> 'required',
            'fose_fec'=> 'required',
            'fose_hor'=> 'required',
            'fose_acc'=> 'required',
        ];
    }
}
