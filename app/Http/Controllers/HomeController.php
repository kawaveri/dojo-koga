<?php

namespace App\Http\Controllers;

use App\Models\Information;

class HomeController extends Controller
{
    public function index()
    {
        $informations = Information::orderBy('id', 'desc')->limit(5);

        return view('home', compact('informations'));
    }
}
