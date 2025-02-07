<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('training.index');
    }

    public function create()
    {
        return view('training.create');
    }

    public function store(Request $request)
    {
        // Store training logic
    }

    public function show($id)
    {
        return view('training.show', compact('id'));
    }

    public function edit($id)
    {
        return view('training.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Update training logic
    }

    public function destroy($id)
    {
        // Delete training logic
    }
}
