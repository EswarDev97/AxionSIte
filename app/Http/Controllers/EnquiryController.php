<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validators\EnquiryFormValidator;
use App\Jobs\EnquiryEmailJob;

class EnquiryController extends Controller
{
    public function sendEnquiryEmail(Request $request)
    {
        $reqData = $request->all();
        $validation = EnquiryFormValidator::validateEnquiryForm($reqData); 
        
        if ( $validation === true)
        {
            EnquiryEmailJob::dispatch($reqData);
            return redirect(route('success-enquiry'))->with('success', 'Thank you for contacting us! we will get back to you soon!');
        }
        else
        {
            $errors = $validation->errors()->all();
            return redirect(route('success-enquiry'))->with('failure', $errors[0]);
        }
    }

    public function successEnquiry()
    {
        return view('enquiry-success');
    }
}
