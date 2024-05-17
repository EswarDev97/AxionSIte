<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPAcademyController extends Controller
{
    public function index()
    {
        return view('cp-academy.cp-academy');
    }

    public function AIMLMasterClass()
    {
        return view('cp-academy.ai-ml-master-class');
    }

    public function AIMLBusinessLeader()
    {
        return view('cp-academy.ai-ml-business-leader');
    }

    public function AIMLWebinar()
    {
        return view('cp-academy.ai-ml-webinar');
    }
}
