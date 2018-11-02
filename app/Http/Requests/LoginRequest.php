<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'idnumber' => 'required|exists:users,idnumber',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'idnumber.exists' => 'idnumber not found.',
            'idnumber.required' => 'idnumber is required.',
        ];
    }


    
}
