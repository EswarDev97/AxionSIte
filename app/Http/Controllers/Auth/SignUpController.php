<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Masters\CountryMaster;
use App\Services\Auth\SignUpService;

class SignUpController extends Controller
{
    public function index()
    {
        $countries = CountryMaster::where('status', 'ACTIVE')->get();

        return view('auth.sign-up', compact('countries'));
    }

    public function signUp(Request $request)
    {
        $reqData = $request->all();

        $response = SignUpService::signUpProcess($reqData);
        return response()->json(["status" => @$response['status'], "code" => @$response['status_code'], "message" => @$response['message'], "data" => @$response['data']], @$response['status_code']);    
    }
}
