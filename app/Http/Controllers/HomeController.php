<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $infos = Information::orderBy('open_at', 'desc')->limit(5)->get();

        return view('home', compact('infos'));
    }
}
