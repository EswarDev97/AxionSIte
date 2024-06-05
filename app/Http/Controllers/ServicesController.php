<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.services');
    }

    public function dataAnalytics()
    {
        return view('services.data-analytics');
    }
    public function preacceptanceInspection()
    {
        return view('services.pre-acceptance-Inspection');
    }
    public function imageRecognition()
    {
        return view('services.image-recognition');
    }

    public function AnomalyDetection()
    {
        return view('services.anomaly-detection');
    }
    public function valuation()
    {
        return view('services.valuation');
    }
}
