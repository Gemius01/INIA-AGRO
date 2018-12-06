<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Comuna;

class ComunaStoreRequest extends FormRequest
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
            'nombre' => 'required|max:120|min:2',
            'codigo' => 'required|min:1',
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'El nombre de la comuna esta vacío',
            'nombre.max' => 'El nombre de la comuna no debe contener más de 120 caracteres.',
            'nombre.min' => 'El nombre de  la comuna debe contener más de 2 caracteres.',
            'codigo.required' => 'El codigo de la comuna esta vacío',
            'codigo.min' => 'El codigo de  la comuna debe contener más de 1 digito.'
        ];
      }
}
