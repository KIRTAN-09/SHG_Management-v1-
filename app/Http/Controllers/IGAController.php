<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IGA;

class IGAController extends Controller
{
    public function index()
    {
        $igas = IGA::all();
        return view('igas.index', compact('igas'));
    }

    public function create()
    {
        return view('igas.create');
    }

    public function store(Request $request)
    {
        $iga = new IGA($request->all());
        $iga->save();
        return redirect()->route('igas.index');
    }

    public function show($id)
    {
        $iga = IGA::findOrFail($id);
        return view('igas.show', compact('iga'));
    }

    public function edit($id)
    {
        $iga = IGA::findOrFail($id);
        return view('igas.edit', compact('iga'));
    }

    public function update(Request $request, $id)
    {
        $iga = IGA::findOrFail($id);
        $iga->update($request->all());
        return redirect()->route('igas.index');
    }

    public function destroy($id)
    {
        $iga = IGA::findOrFail($id);
        $iga->delete();
        return redirect()->route('igas.index');
    }
}
