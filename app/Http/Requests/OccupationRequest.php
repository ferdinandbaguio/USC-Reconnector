<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OccupationRequest extends FormRequest
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
            'occupationTitle'=> 'required',
            'occupationAddress'=> 'required',
            'salaryRangeOne'=> 'required',
            'salaryRangeTwo'=> 'required',
            'jobStart'=> 'required',
            'jobEnd'=> 'required',
            'countries' => 'required',
            'country_id'=> 'nullable',
            'area_id'=> 'nullable',
            'company_id'=> 'nullable',
            'alumni_id'=> 'nullable',
        ];
    }
}
