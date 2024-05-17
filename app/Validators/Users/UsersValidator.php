<?php

namespace App\Validators\Users;

use Illuminate\Support\Facades\Validator;

class UsersValidator
{
    public static function addUserValidator($data) 
    {
        $rules = [
            'first_name' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'last_name' => ['nullable', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            //'user_name' => ['required', 'string', 'unique:App\Models\Users\User,user_name', 'regex:/^[a-z0-9_]+$/' ,'max:150'],
            'user_type' => ['required', 'max:150', 'regex:/^[A-Z\_]+$/'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', 'unique:App\Models\Users\User,email'],
            'password' => [
                'required', 'string', 'min:8', 'max:30',
                /*'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',*/
                //'regex:/[@$!%*#?&]/'
            ],
            //'confirm_password' => 'required|same:password',
            //'phone' => 'required|digits:10',
            'status' => 'required|max:50',
        ];
        $customErrorMsg = [
            'first_name.regex' => 'The first name must contain alphabets only.',
            'last_name.regex' => 'The last name must contain alphabets only.',
            'user_type.regex' => 'The user type must contain capital letters only.',
            'user_name.regex' => 'Smaller case letters, numbers, and underscore are allowed in the user name.'
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
            //'user_name' => ['required', 'string', 'regex:/^[a-z0-9_]+$/' ,'max:150'],
            'user_type' => ['required', 'max:150', 'regex:/^[A-Z\_]+$/'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', 'unique:App\Models\Users\User,email'],
            //'phone' => 'required|digits:10',
            'status' => 'required|max:50',
        ];
        $customErrorMsg = [
            'first_name.regex' => 'The first name must contain alphabets only.',
            'last_name.regex' => 'The last name must contain alphabets only.',
            'user_type.regex' => 'The user type must contain capital letters only.',
            'user_name.regex' => 'Smaller case letters, numbers, and underscore are allowed in the user name.'
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
