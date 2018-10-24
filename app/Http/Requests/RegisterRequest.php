<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'registeridnumber' => 'required|numeric',
            'lastName' => 'required|alpha',
            'firstName' => 'required|alpha',
            'middleName' => 'sometimes|required|alpha',
            'address' => 'required',
            'email' => 'required|email|exists:users,email',
            'contactNo' => 'required|numeric',
            'sex' => 'required',
            'civilStatus' => 'required',
            'birthdate' => 'required',
            'userType' => 'required'
            
        ];
    }
    public function messages(){
        return [
            'registeridnumber.required' => 'ID number is Required.',
            'registeridnumber.numeric' => 'ID number must be digit.',
            'lastName.required' => 'Lastname is Required.',
            'lastName.alpha' => 'Only accepts alphabets.',
            'firstName.required' => 'Firstname is Required.',
            'firstName.alpha' => 'Only accepts alphabets.',
            'address.required' => 'Address is Required.',
            'email.required' => 'Email is Required.',
            'email.exists' => 'Email already taken.',
            'email.email' => 'Please use a valid e-mail.',
            'contactNo.required' => 'Contact Number is Required.',
            'sex.required' => 'Sex is Required.',
            'civilStatus.required' => 'Civil Status is Required.',
            'birthdate.required' => 'Birthday is Required.',
            'userType.required' => 'Please choose what you are registering for (Student , Teacher or Alumni).',
        ];
    }
}
