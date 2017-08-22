<?php

namespace App\Modulos\Usuario\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarUserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,id,'.$this->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'email.required' => 'El campo correo es requerido'
        ];
    }
}
