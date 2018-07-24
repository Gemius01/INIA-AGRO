<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RubroStoreRequest extends FormRequest
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
            'name' => 'required|max:30|min:2',
        ];
    }

    public function messages(){
      return [
          'name.required' => 'El nombre del rubro esta vacío',
          'name.max' => 'El nombre del rubro no debe contener más de 30 caracteres.',
          'name.min' => 'El nombre del rubro debe contener más de 2 caracteres.'
      ];
    }
}
