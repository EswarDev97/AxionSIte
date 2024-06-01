<?php

namespace App\Validators\Auth;

use Illuminate\Support\Facades\Validator;

class SignUpValidator
{
    public static function validateSignUpData($data) 
    {
        $rules = [
            'fname' => ['required', 'max:150', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'lname' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z\s\.]+$/i'],
            'email' => ['required', 'max:50', 'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/', 'unique:App\Models\Users\User,email'],
            'user_type' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'max:30', 'min:6'],
            'country' => ['required', 'numeric', 'exists:App\Models\Masters\CountryMaster,id,deleted_at,NULL'],
            'terms' => ['required', 'string', 'in:terms'],
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
}
