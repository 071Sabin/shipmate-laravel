<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pricingController extends Controller
{
    public function pricing()
    {
        return view('pricing');
    }
}