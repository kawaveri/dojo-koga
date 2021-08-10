<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        $infos = Information::orderBy('open_at', 'desc')->get();

        return view('info.index', compact('infos'));
    }

    public function show(Request $request, Information $info)
    {
        return view('info.show', compact('info'));
    }
}
