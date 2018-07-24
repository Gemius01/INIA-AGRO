<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MacrozonaStoreRequest extends FormRequest
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
           'name' => 'required|max:100|min:2',
       ];
     }

     public function messages(){
       return [
           'name.required' => 'El Nombre de la macrozona esta vacío.',
           'name.max' => 'El Nombre de la macrozona no debe contener más de 100 caracteres.',
           'name.min' => 'El Nombre de la macrozona debe contener al menos 2 caracteres.',
       ];
     }
}
