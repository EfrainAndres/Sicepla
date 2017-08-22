<?php

namespace App\Modulos\Acceso\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarRolRequest extends FormRequest
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
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido.',
            'name.unique' => 'El campo nombre no se encuentra disponible.',
            'display_name.required' => 'El campo nombre de mostrar es requerido.',
            'description.required' => 'El campo descripción es requerido.'
        ];
    }
}
