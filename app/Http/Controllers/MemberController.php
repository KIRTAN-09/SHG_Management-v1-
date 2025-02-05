<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MemberController extends Controller
{

    public function index()
    {
        $members = Member::paginate(10); // Adjust the number as needed
        return view('members.index', compact('members')); // Pass to the view
    }



    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'number' => 'nullable|string|max:15',
            'village' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'caste' => 'required|string|max:255',
            'share_price' => 'required|numeric|min:1',
            'member_type' => 'required|in:President,Secretary,Member',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('images', 'public');
            Log::info('Photo stored at: ' . $validated['photo']);
        }

        $validated['share_quantity'] = 1;
        $validated['member_id'] = uniqid('MEM');

        Member::create($validated);

        return redirect()->route('members.index')->with('success', 'Member added successfully.');
    }
}
