<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AchievementRequest extends FormRequest
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
            'user_id' => 'nullable',
            'achTitle' => 'required',
            'achYear' => 'required'
        ];
    }

    public function messages(){
        return [
            'achTitle.required' => 'Achievement title is required.',
            'achYear.required' => 'Year achieved is required.',
        ];
    }

}
