<?php

namespace App\Http\Controllers\Corporates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CorporateController extends Controller
{
    public function index()
    {
        return view('corporate');
    }
}
