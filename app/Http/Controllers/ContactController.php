<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Optional: validate fields
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        // Here you would normally send email or store to DB.
        // For now, we just return a success message.
        return back()->with('success', 'Your message has been sent. Thank you!');
    }
}
