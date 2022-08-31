<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegestValidationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|regex:/^[A-Z][A-Z,a-z]{3,15}/|not_regex:/[0-9\*\/\-\!\@\#\$\%\^\&\*\(\)\_\+\=\<\>\,\.\?]/',
            'surname' => 'required|regex:/^[A-Z][A-Z,a-z]+$/|not_regex:/[0-9\*\/\-\!\@\#\$\%\^\&\*\(\)\_\+\=\<\>\,\.\?]/',
            'email' => 'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
            'document_type' => 'required|regex:/^[A-Z][A-Z,a-z]{2,10}$/',
            'document' => 'required|regex:/[0-9]{5,10}/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'name.regex' => 'La primera letra del nombre debe de ir en mayusucula y debe de tener al menos 3 letras',
            'name.not_regex' => 'En nombre no puede llevar caracteres especiales',

            'surname.required' => 'El apellido es obligatorio',
            'surname.regex' => 'La primera letra del apellido debe de ir en mayusucula y debe de tener al menos 3 letras',
            'surname.not_regex' => 'En apellido no puede llevar caracteres especiales',

            'email.required' => 'El correo electronico es obligatorio',
            'email.regex' => 'El email debe ser tipo example@gmail.com',

            'document_type.required' => 'El tipo de documento es obligatorio',
            'document_type.regex' => 'El tipo de documento debe especificarse como: CC/Nit/Ti/Pasaporte/Otro. Revise si tiene un error en el campo',

            'document.required' => 'El numero de document es obligatorio',
            'document.regex' => 'El numero de documento no tiene la longitud correcta',
        ];
    }

}
