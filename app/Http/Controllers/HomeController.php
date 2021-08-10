<?php

namespace App\Http\Controllers;

use App\Models\Information;

class HomeController extends Controller
{
    public function index()
    {
        $infos = Information::orderBy('open_at', 'desc')->limit(5)->get();

        return view('home', compact('infos'));
    }
}
