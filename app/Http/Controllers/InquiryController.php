<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function index()
    {
        $inquiries = Inquiry::orderBy('created_at', 'desc')->get();
        return view('inquiries.index', compact('inquiries'));
    }

    public function create()
    {
        return view('inquiries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'service_requested' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Inquiry::create($validated);

        return redirect()->route('inquiries.index')->with('success', 'Inquiry submitted successfully!');
    }
}
