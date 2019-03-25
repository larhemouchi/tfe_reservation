<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class siegeRequest extends FormRequest
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
         'id_salle'=>'required|min:1|max:200',
           'nom_siege'=>'required|min:1|max:200',
         'type_siege'=>'required|min:1|max:200',
         'prix_siege'=>'required|min:1|max:200'
       
      
        
        ];
    }
}
