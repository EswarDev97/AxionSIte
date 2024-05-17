<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndEventsController extends Controller
{
    public function index()
    {
        return view('news-and-events');
    }
}
