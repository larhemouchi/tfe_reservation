<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class salleRequest extends FormRequest
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
            'num_salle'=>'required|min:1|max:200',
         'capacite'=>'required|min:1|max:200',
         'images_salle'=>'required|min:4|max:200'
         
        
        ];
    }
}
