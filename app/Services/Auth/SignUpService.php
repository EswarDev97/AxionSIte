<?php

namespace App\Services\Auth;

use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;
use App\Validators\Auth\SignUpValidator;
use App\Models\Users\User;
use App\Models\Users\UserProfile;
use App\Services\Errors\ErrorLogService;
use Exception;

class SignUpService
{
    public static function signUpProcess($reqData)
    {
        $validation = SignUpValidator::validateSignUpData($reqData); 
        
        if ($validation === true)
        {
            $userData = [
                'user_uuid' => Uuid::generate(4),
                'first_name' => @$reqData['fname'],
                'last_name' => @$reqData['lname'],
                'user_type' => @$reqData['user_type'],
                'user_name' => @$reqData['email'],
                'email' => @$reqData['email'],
                'password' => @$reqData['password'],
                'status' => (@$reqData['status']) ? @$reqData['status']: 'ACTIVE',
            ];

            try {
                $user = User::insertRecord($userData);

                $userProfileData = [
                    'profile_uuid' => Uuid::generate(4),
                    'user_id' => $user->id,
                    'first_name' => @$reqData['fname'],
                    'last_name' => @$reqData['lname'],
                    'email' => @$reqData['email'],
                    'country' => @$reqData['country'],
                    'status' => (@$reqData['status']) ? @$reqData['status']: 'ACTIVE',
                ];

                $userProfile = UserProfile::insertRecord($userProfileData);
                @$userProfile->countryDetails;

                @$user->userProfile = $userProfile;

                $result = $user->makeHidden(['id']);
               
                return ["status" => true, "code" => 200, "message" => "Registration has been completed", "data" => $result, "status_code" => 200];
            } 
            catch(Exception $e)
            {
                $error = ["error" => [$e->getMessage()]];
                $errorLogData = [
                    'error_code' => 500, 
                    'error_type' => 'INTERNAL_SERVOR_ERROR',
                    'route' => url()->current(), 
                    'file_name' => __FILE__ .' (line: '. __LINE__ .')',
                    'error_message' => json_encode($error)
                ];
                ErrorLogService::saveErrorLog($errorLogData);

                return ["status" => false, "code" => 500, "message" => "Internal Server Error", "data" => ["error" => ['Internal Server Error']], "status_code" => 500];      
            }
        }
        else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return ["status" => false, "code" => 422, "message" => 'Incorrect Request Data', "data" => $error, "status_code" => 422];
        }
    }    
}
