<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesSendEmail extends FormRequest
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
            //
            'nombre' => 'required|string',           
            'email' => 'required|email',
            'telefono' => 'required|digits:10',
            'asunto' => 'required|string',
            'descripcion' => 'required|string',
        ];
    }
}
