<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [
            "comics" => config('data.comics'),
            "siteLinks" => config('data.siteLinks'),
        ];
        return view('home', $data);
    }
}
