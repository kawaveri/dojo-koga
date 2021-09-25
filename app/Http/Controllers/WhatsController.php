<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class WhatsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('whats.index');
    }
}
