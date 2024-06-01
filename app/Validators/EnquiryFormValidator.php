<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class EnquiryFormValidator
{
    public static function validateEnquiryForm($data) 
    {
        $rules = [
            'name' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'],
            'phone' => 'required|digits_between:8,12',
            'course' => 'required',
            'enquiry_from' => 'required',
        ];
        $customErrorMsg = [
            'name.regex' => 'The first name must not contains a special character.',
            'email.regex' => 'Please enter a valid email.',
        ];

        $validator = Validator::make($data, $rules, $customErrorMsg);

        if ($validator->fails()) 
        {
            return $validator;
        }
        else 
        {
            return true;
        }
    }
}
