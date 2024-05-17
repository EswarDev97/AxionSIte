<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.products');
    }

    public function veyesClaimSurvey()
    {
        return view('products.veyes-claim-survey');
    }

    public function liveStreaming()
    {
        return view('products.live-streaming');
    }

    public function valuation()
    {
        return view('products.valuation');
    }
}
