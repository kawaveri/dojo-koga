<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformation;
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

    public function create()
    {
        $info = new Information;

        return view('info.create', compact('info'));
    }

    public function store(StoreInformation $request)
    {
        $info = new Information();
        $info->fill($request->all());
        $info->save();

        return redirect()->route('info.show', [$info->id])
            ->with('success_flash', '追加しました');
    }

    public function edit(Information $info)
    {
        return view('info.edit', compact('info'));
    }

    public function update(StoreInformation $request, Information $info)
    {
        $info->fill($request->all());
        $info->save();

        return redirect()->route('info.show', [$info->id])
            ->with('success_flash', '変更しました');
    }

    public function destroy(Information $info)
    {
        $info->delete();

        return redirect()->route('info.index')
            ->with('success_flash', '削除しました');
    }
}
