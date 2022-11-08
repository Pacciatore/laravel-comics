<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class HomeController extends Controller
{
    //
    public function index()
    {

        // $comics = Comic::all();

        $comics = config('data.comics');
        $siteLinks = config('data.siteLinks');

        return view('home', compact('comics', 'siteLinks'));
    }
}
