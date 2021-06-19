<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaketRequest extends FormRequest
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
            'nama_paket'    => '',
            'image'         => '',
            'harga'         => 'numeric',
            'harga_diskon'  => '',
            'fitur1'        => '',
            'fitur2'        => '',
            'fitur3'        => '',
            'fitur4'        => '',
            'fitur5'        => '',
            'fitur6'        => '',
            'fitur7'        => '',
            'fitur8'        => '',
            'fitur9'        => '',
            'fitur10'        => ''
        ];
    }
}
