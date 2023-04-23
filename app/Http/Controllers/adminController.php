<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function askEveryone()
    {
        return view('askEveryone');
    }

    public function showAdminHome()
    {
        return view('admin_home');
    }
}