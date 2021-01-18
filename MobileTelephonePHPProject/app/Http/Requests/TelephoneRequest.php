<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class TelephoneRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'yearofrelease' => 'integer|required|min:1876', //1876 is the year the first telephone was invented
            'brand_id' => 'required',
            'telephone_model_id' => 'required'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'yearofrelease.integer' => 'The year of release must be a number.',
            'yearofrelease.required' => 'Please provide a year of release.',
            'yearofrelease.min' => 'Please provide a valid year of release. The year cannot be lower than 1876(the year the
            telephone was invented).',
            'brand_id.required' => 'You should provide a brand.',
            'telephone_model_id.required' => 'You should provide a telephone model.'
        ];
    }
}
