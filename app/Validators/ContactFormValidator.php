<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class ContactFormValidator
{
    public static function validateContactForm($data) 
    {
        $rules = [
            'fname' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'lname' => ['nullable', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'],
            'phone' => 'required|digits_between:8,12',
            'message' => 'required|string|max:5000',
        ];
        $customErrorMsg = [
            'fname.regex' => 'The first name must not contains a special character.',
            'lname.regex' => 'The last name must not contains a special character.',
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
