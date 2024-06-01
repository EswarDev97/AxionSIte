<?php

namespace App\Services\Auth;

use App\Models\Users\User;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\DB;
DB::enableQueryLog();

class SignInService
{
    public static function changePasswordProcess($data)
    {
        $userData = [
            'password' => $data['new_password'],
            'updated_by' => auth()->user()->id,
        ];

        $user = User::changePassword($userData, auth()->user()->user_uuid);

        if ($user)
        {
            return json_encode(["status" => true, "code" => 200, "message" => "Password Changed Successfully", "data" => $user, "status_code" => 200]);
        }
        else
        {
            return json_encode(["status" => false, "code" => 500, "message" => "Something Went Wrong", "data" => "", "status_code" => 500]);
        }
    }

}
