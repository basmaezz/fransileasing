<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'required|max:25|min:5|unique:orders',
            'tel' => 'required|max:15|unique:orders|regex:/^([0-9\s\-\+\(\)]*)$/|min:7',
            'monthly'=>'required|numeric',
            'car_id'=>'required',
            'car_models_id'=>'required',
            'year_id'=>'required',

        ];
    }
}
