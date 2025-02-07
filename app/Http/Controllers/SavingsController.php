<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Savings;

class SavingsController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $savings = Savings::all();
        return view('savings.index', compact('savings'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('savings.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
        ]);

        Savings::create($request->all());

        return redirect()->route('savings.index')
                         ->with('success', 'Saving created successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $saving = Savings::find($id);
        return view('savings.show', compact('saving'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $saving = Savings::find($id);
        return view('savings.edit', compact('saving'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
        ]);

        $saving = Savings::find($id);
        $saving->update($request->all());

        return redirect()->route('savings.index')
                         ->with('success', 'Saving updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $saving = Savings::find($id);
        $saving->delete();

        return redirect()->route('savings.index')
                         ->with('success', 'Saving deleted successfully.');
    }
}
