<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Macrozona;

class MacrozonaUpdateRequest extends FormRequest
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
       $this->valido=true;
       $macrozona = Macrozona::where([['name', '=', $this->name],['region_id', '=', $this->region_id],['rubro_id', '=', $this->rubro_id ],['id', '<>', $this->macrozona->id]])->first();
      if($macrozona!=null){
        $this->valido=false;
        return [
            'name' => 'max:0',
            // 'mes_id' => 'unique:publicaciones,mes_id'
        ];
      }
      else{
          $this->valido=true;
        return [
            'name' => 'required|max:100|min:2',
        ];
      }

     }

     public function messages(){
       if($this->valido==false){
         return [
              'name.max' => 'Esta macrozona ya existe con esta región y rubro seleccionados.',
             // 'año.unique' = > 'lalala'
         ];
       }
       else{
         return [
             'name.required' => 'El Nombre de la macrozona esta vacío.',
             'name.max' => 'El Nombre de la macrozona no debe contener más de 100 caracteres.',
             'name.min' => 'El Nombre de la macrozona debe contener al menos 2 caracteres.',
         ];
       }

     }
}
