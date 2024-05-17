<?php

namespace App\Http\Controllers\Corporates;

use Illuminate\Http\Request;
use App\Jobs\ContactEmailJob;
use App\Validators\ContactFormValidator;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact');
    }

    public function sendContactEmail(Request $request)
    {
        $reqData = $request->all();
        $validation = ContactFormValidator::validateContactForm($reqData); 
        
        if ( $validation === true)
        {
            ContactEmailJob::dispatch($reqData);
            return redirect('contact#contact-form-area')->with('success', 'Thank you for contacting us! we will get back to you soon!');
        }
        else
        {
            $errors = $validation->errors()->all();
            return redirect('contact#contact-form-area')->with('failure', $errors[0]);
        }
    }
}
