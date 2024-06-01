<?php

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

class CheckoutValidator
{
    public static function validatePrepareCheckout($data) 
    {
        $rules = [
            'course' => ['required', 'max:255'],
            'currency' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'tax' => ['required', 'numeric']
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

    public static function validateGetDataFromCart($data) 
    {
        $rules = [
            'user_id' => ['required', 'alpha_dash', 'exists:App\Models\Users\User,user_uuid,deleted_at,NULL'],
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

    public static function validateProcessCheckout($data) 
    {
        $rules = [
            'fname' => ['required', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'numeric']
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
