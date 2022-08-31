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
            'name' => 'required|regex:/^[A-Z][A-Z,a-z]{3,15}$/',
            'surname' => 'required|regex:/^[A-Z][A-Z,a-z]+$/',
            'email' => 'required|regex:/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/',
            'document_type' => 'required|regex:/^[A-Z][A-Z,a-z]+$/',
            'document' => 'required|regex:/[0-9]{10}/',
        ];
    }
}
