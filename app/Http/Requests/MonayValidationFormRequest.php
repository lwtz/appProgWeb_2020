<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use UxWeb\SweetAlert\SweetAlert;
use Alert;

class MonayValidationFormRequest extends FormRequest
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

    public function messages(){

        return[
            'value.required'=>'Campo Obrigatóio',
            'value.numeric'=>'Insira um valor Válido',
            
        ];
    }
    /* * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'value' => 'required|numeric',
        ];
    }
}
