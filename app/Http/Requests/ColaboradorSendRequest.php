<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorSendRequest extends FormRequest
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
          'email' => 'required|max:100|min:2|email',
          'password' => 'required|max:100|min:2',
          'asunto' => 'required|max:100|min:2',
          'contenido' => 'required|min:2|',
      ];
    }
    public function messages(){
      return [
          'email.required' => 'El Email esta vacío.',
          'email.max' => 'El Email no debe contener más de 100 caracteres.',
          'email.min' => 'El Email debe contener al menos 2 caracteres.',
          'password.required' => 'La contraseña esta vacía.',
          'password.max' => 'La contraseña no debe contener más de 100 caracteres.',
          'password.min' => 'La contraseña debe contener al menos 2 caracteres.',
          'asunto.required' => 'El asunto esta vacío.',
          'asunto.max' => 'El asunto no debe contener más de 100 caracteres.',
          'asunto.min' => 'El asunto debe contener al menos 2 caracteres.',
          'contenido.required' => 'El contenido esta vacío.',
          'contenido.min' => 'El contenido debe contener al menos 2 caracteres.',
      ];
    }

}
