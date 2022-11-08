<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $siteLinks = config('data.siteLinks');
        return view('homepage', compact('siteLinks'));
    }
}
