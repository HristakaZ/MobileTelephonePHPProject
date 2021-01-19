<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class TelephonemodelRequest extends FormRequest
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
            'name' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'memory' => 'required',
            'camera' => 'required',
            'battery' => 'required',
            'display' => 'required',
            'brand_id' => 'required'
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
            'name.required' => 'The telephone model name is required.',
            'cpu.required' => 'The telephone model cpu is required.',
            'gpu.required' => 'The telephone model gpu is required.',
            'memory.required' => 'The telephone model ram is required.',
            'camera.required' => 'The telephone model camera specifications are required.',
            'battery.required' => 'The telephone model battery specifications are required.',
            'display.required' => 'The telephone model display specifications are required.',
            'brand_id.required' => 'The telephone model brand is required.'
        ];
    }
}
