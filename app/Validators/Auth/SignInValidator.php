<?php

namespace App\Validators\Auth;

use Illuminate\Support\Facades\Validator;

class SignInValidator
{
    public static function validateSignInData($data) 
    {
        $rules = [
            'user_name' => ['required', 'max:50'],
            'password' => ['required', 'string', 'max:30']
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) 
        {
            return $validator;
        }
        else 
        {
            return true;
        }
    }

    public static function changePasswordValidator($data)
    {
        $rules = [
            'old_password' => 'required|string|password',
            'new_password' => [
                'required', 'string', 'min:8', 'max:30','regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                //'regex:/[@$!%*#?&]/'
            ],
            'confirm_password' => 'required|same:new_password',
        ];

        $customErrorMsg = [
            'old_password.password' => 'The old password does not match.'
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
