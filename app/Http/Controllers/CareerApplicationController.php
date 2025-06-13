<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CareerApplicationController extends Controller
{
    public function showForm()
    {
        return view('careers.apply');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'job_title' => 'required|string|max:255',
            'message' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // ✅ Ensure 'applications' directory exists
        if (!Storage::exists('applications')) {
            Storage::makeDirectory('applications');
        }

        // Save file
        $file = $request->file('cv');
        $filename = time() . '-' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('applications', $filename);
        $fullPath = storage_path("app/{$path}");

        // Email HTML body
        $body = '
            <h2>New Career Application</h2>
            <p><strong>Name:</strong> ' . e($request->name) . '</p>
            <p><strong>Email:</strong> ' . e($request->email) . '</p>
            <p><strong>Job Title:</strong> ' . e($request->job_title) . '</p>
            <p><strong>Message:</strong><br>' . nl2br(e($request->message)) . '</p>
        ';

        // ✅ Send email before deleting file
        Mail::send([], [], function ($message) use ($request, $fullPath, $body) {
            $message->to('mariaadriananicoletrinidad@gmail.com')
                    ->subject('New Career Application: ' . $request->job_title)
                    ->html($body)
                    ->attach($fullPath);
        });

        // ✅ Safely delete file after email
        Storage::delete($path);

        return back()->with('success', 'Your application has been submitted successfully!');
    }
}
