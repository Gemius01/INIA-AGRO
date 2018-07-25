<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Publicacion;

class PublicacionStoreRequest extends FormRequest
{
  public $valido=null;
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
       $this->valido=true;
       $publicacion = Publicacion::where([['mes_id', '=', $this->mes_id],['año', '=', $this->año]])->first();
       if($publicacion!=null){
        $this->valido=false;
         return [
             'año' => 'max:0',
             // 'mes_id' => 'unique:publicaciones,mes_id'
         ];
       }
       else{
          $this->valido=true;
         return [
             'año' => 'required|max:4|min:4',
         ];
       }



     }

     public function messages(){
       if($this->valido==false){
         return [
              'año.max' => 'Este mes y año ya existe en una publicación.',
             // 'año.unique' = > 'lalala'
         ];
       }
       else{
         return [
              'año.required' => 'El Año de la publicación esta vacio.',
              'año.max' => 'El Año de la publicación no debe contener más de 4 digitos.',
              'año.min' => 'El Año de la publicación debe contener al menos 4 digitos.'
             // 'año.unique' = > 'lalala'
         ];
       }

     }
}
