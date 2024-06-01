<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Services\Users\UsersService;
use App\Validators\Users\UsersValidator;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    
    public function userManagement()
    {
        return view('user-management');
    }


    public function getUsers(Request $request)
    {
        $data = $request->all();
        
        $response = UsersService::getUsersData($data);
        $response = json_decode($response);

        return response()->json(["status" => $response->status, "code" => $response->status_code, "message" => $response->message, "data" => $response->data], $response->status_code);
    }


    public function addUser(Request $request)
    {
        $data = $request->all();
        
        $validation = UsersValidator::addUserValidator($data);
        if ($validation === true) 
        {
            $response = UsersService::addUserData($data);
            $response = json_decode($response);

            return response()->json(["status" => $response->status, "code" => $response->status_code, "message" => $response->message, "data" => $response->data], $response->status_code);
        }
        else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return response()->json(["status" => false, "code" => 422, "message" => "Incorrect Request Data", "data" => $error], 422);
        }
    }


    public function updateUser(Request $request)
    {
        $data = $request->all();
        
        $validation = UsersValidator::updateUserValidator($data);
        if ($validation === true) 
        {
            $response = UsersService::updateUserData($data);
            $response = json_decode($response);

            return response()->json(["status" => $response->status, "code" => $response->status_code, "message" => $response->message, "data" => $response->data], $response->status_code);
        }
        else
        {
            //Return the error message
            $error = ["error" => $validation->errors()->all()];
            return response()->json(["status" => false, "code" => 422, "message" => "Incorrect Request Data", "data" => $error], 422);
        }
    }


    public function getAuthenticatedUser(Request $request)
    {
        $user = $request->user();
        
        if (!empty($user))
        {
            $user->profile->countryDetails;

            return response()->json(["status" => true, "code" => 200, "message" => "User Data Retrieved Successfully", "data" => $user, "status_code" => 200]);
        }
        else
        {
            return response()->json(["status" => true, "code" => 401, "message" => "Unauthenticated Request", "data" => $user, "status_code" => 401]);
        }
    }
    
}
