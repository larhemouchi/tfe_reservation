<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paiementRequest extends FormRequest
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

          
         'numero_compte'=>'required|min:5|max:200',
         'numero_carte'=>'required|min:5|max:200',
         'nom'=>'required|min:3|max:200',
         'prenom'=>'required|min:3|max:200',
         'date_expiration'=>'required',
          'type_carte'=>'required|min:4|max:200'
        ];
    }
}
