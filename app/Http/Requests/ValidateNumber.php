<?php

namespace App\Http\Requests;

use App\Rules\IsLeapYear;
use Illuminate\Foundation\Http\FormRequest;

class ValidateNumber extends FormRequest
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
//        return [
//            'number' => [
//                'required',
//                function ($attribute, $value, $fail) {
//                    if (!($value % 400 == 0 || ($value % 4 == 0 && $value % 100 != 0))) {
//                        $fail("The $attribute is invalid");
//                    }
//                }
//            ]
//        ];

//        return [
//            'number' => [
//                'required',
//                'is_leap_year'
//            ]
//        ];

        return [
            'number' => [
                'required',
                new IsLeapYear()
            ]
        ];

    }
}
