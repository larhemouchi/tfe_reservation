<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class reservationRequest extends FormRequest
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
         'id_representation'=>'required|min:1|max:200',     
         'tarif_total'=>'required|min:1|max:200',
         'nbre_place_reserve'=>'required|min:1|max:200',
         'id_paiement'=>'required|min:1|max:200',
         'date_reservation'=>'required',
        
            
        ];
    }
}
