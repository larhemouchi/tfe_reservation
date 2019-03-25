<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pieces_theatreRequest extends FormRequest
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
            'slug'=>'required|min:5|max:200',
         'titre'=>'required|min:5|max:200',
         'image_poster'=>'required|min:3|max:200',
         'description'=>'required|min:1|max:200'
                ];
    }
}
