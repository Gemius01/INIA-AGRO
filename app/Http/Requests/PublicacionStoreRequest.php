<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicacionStoreRequest extends FormRequest
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
           'año' => 'required|max:4|min:4',
       ];
     }

     public function messages(){
       return [
           'año.required' => 'El Año de la publicación esta vacio.',
           'año.max' => 'El Año de la publicación no debe contener más de 4 digitos.',
           'año.min' => 'El Año de la publicación debe contener al menos 4 digitos.'
       ];
     }
}
