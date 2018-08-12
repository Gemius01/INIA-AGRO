<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionUpdateRequest extends FormRequest
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
           'name' => 'required|max:100|min:2|unique:regions,name,'.$this->region->id ,
           'numero' => 'required|max:100|min:1|unique:regions,numero,'.$this->region->id,
       ];
     }

     public function messages(){
       return [
           'name.required' => 'El Nombre de la región esta vacío.',
           'name.max' => 'El Nombre de la región no debe contener más de 100 caracteres.',
           'name.min' => 'El Nombre de la región debe contener al menos 2 caracteres.',
           'name.unique' => 'El Nombre de la región ya está en uso.',
           'numero.required' => 'El numero de la región esta vacío.',
           'numero.max' => 'El numero de la región no debe contener más de 100 digitos.',
           'numero.min' => 'El numero de la región debe contener al menos 1 digito.',
           'numero.unique' => 'El numero de la región ya está en uso.'
       ];
     }
}
