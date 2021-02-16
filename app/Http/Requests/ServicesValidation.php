<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesValidation extends FormRequest
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
            "Name_Services_en" => "required",
            "Name_Services_ar" => "required",
        ];
    }

    public function messages()
    {
        return [
            'Name_Services_en.required' => trans('validation.required'),
            'Name_Services_ar.required' => trans('validation.required'),
        ];
    }
}
