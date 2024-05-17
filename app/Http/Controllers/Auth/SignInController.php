<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Validators\Auth\SignInValidator;
use App\Services\Auth\SignInService;
use App\Models\Users\User;
use DB;

class SignInController extends Controller
{

    public function signIn (Request $request) {
        $validator = SignInValidator::validateSignInData($request->all());

        if ($validator !== true)
        {
            $error = ['error' => $validator->errors()->all()];
            return response()->json(["status" => false, "code" => 401, "message" => "Incorrect Request Data", "data" => $error], 401);
        }

        $loginWithEmail = [
            'email' => $request->user_name,
            'password' => $request->password,
        ];

        $loginWithUsername = [
            'user_name' => $request->user_name,
            'password' => $request->password,
        ];
        
        if (auth()->attempt($loginWithEmail) || auth()->attempt($loginWithUsername)) 
        {
            $user = auth()->user();
            
            if ($user->status == 'ACTIVE')
            {
                $client = DB::table('oauth_clients')->where(['password_client'=>'1','revoked'=>'0'] )->first();
                
                if (empty($client))
                {
                    return response()->json(["status" => true, "code" => 422, "message" => 'Oauth client error', "data" => ['error' => ['Oauth client error']]], 422);
                }

                $token = $user->createToken('authToken')->accessToken;
                $data = ['authenticated_user' => $user, 'token' => $token];

                return response()->json(["status" => true, "code" => 200, "message" => 'Login Successfully', "data" => $data], 200);      
            }
            else 
            {
                $error = ['error' => ['Username or password is invalid']];
                return response()->json(["status" => false, "code" => 401, "message" => "Login Denied", "data" => $error], 401);
            }
        }
        else 
        {
            $error = ['error' => ['Username or password is invalid']];
            return response()->json(["status" => false, "code" => 401, "message" => "Login Denied", "data" => $error], 401);
        }
    }


    public function changePassword (Request $request) {
        $data = $request->all();

        $validator = SignInValidator::changePasswordValidator($data);

        if ($validator !== true)
        {
            $error = ['error' => $validator->errors()->all()];
            return response()->json(["status" => false, "code" => 401, "message" => "Incorrect Request Data", "data" => $error], 401);
        }

        $response = SignInService::changePasswordProcess($data);
        $response = json_decode($response);

        return response()->json(["status" => $response->status, "code" => $response->status_code, "message" => $response->message, "data" => $response->data], $response->status_code);
    }


    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
