<?php

namespace App\Validators\Customers;

use Illuminate\Support\Facades\Validator;

class CustomersValidator
{
    public static function addCustomerValidator($data) 
    {
        $rules = [
            'first_name' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'last_name' => ['nullable', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'],
            'phone' => 'required|digits:10',
            'status' => 'required|max:50',
        ];
        $customErrorMsg = [
            'first_name.regex' => 'The first name must contain alphabets only.',
            'last_name.regex' => 'The last name must contain alphabets only.',
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


    public static function updateUserValidator($data) 
    {
        $rules = [
            'id' => 'required|alpha_dash|exists:App\Models\Users\User,user_uuid,deleted_at,NULL',
            'first_name' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/'],
            'last_name' => ['nullable', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/'],
             'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'],
            'phone' => 'required|digits:10',
            'status' => 'required|max:50',
        ];
        $customErrorMsg = [
            'first_name.regex' => 'The first name must contain alphabets only.',
            'last_name.regex' => 'The last name must contain alphabets only.',
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
