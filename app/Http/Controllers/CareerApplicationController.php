<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class CareerApplicationController extends Controller
{
    public function showForm()
    {
        return view('careers.apply');
    }

    public function submit(Request $request)
    {
        try {
            Log::info('=== CAREER APPLICATION STARTED ===', ['name' => $request->name]);

            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'job_title' => 'required|string|max:255',
                'message' => 'nullable|string',
                'cv' => 'required|file|mimes:pdf,doc,docx|max:10240',
            ]);

            Log::info('=== VALIDATION PASSED ===');

            // Check if file was uploaded
            if (!$request->hasFile('cv') || !$request->file('cv')->isValid()) {
                Log::error('=== FILE UPLOAD FAILED ===');
                return back()->withErrors(['cv' => 'Please upload a valid CV file.'])->withInput();
            }

            $file = $request->file('cv');
            $tempPath = $file->getRealPath(); // Get the actual temp file path

            Log::info('=== FILE DETAILS ===', [
                'original_name' => $file->getClientOriginalName(),
                'temp_path' => $tempPath,
                'size' => $file->getSize(),
                'mime_type' => $file->getMimeType(),
                'temp_exists' => file_exists($tempPath)
            ]);

            // Create email body
            $emailBody = "
                <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                    <div style='background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); color: white; padding: 20px; text-align: center;'>
                        <h2>New Career Application</h2>
                    </div>
                    <div style='padding: 20px; background: #f8f9fa;'>
                        <p><strong>Name:</strong> " . htmlspecialchars($request->name) . "</p>
                        <p><strong>Email:</strong> " . htmlspecialchars($request->email) . "</p>
                        <p><strong>Position:</strong> " . htmlspecialchars($request->job_title) . "</p>
                        <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($request->message ?: 'No message provided')) . "</p>
                        <p><strong>CV File:</strong> " . htmlspecialchars($file->getClientOriginalName()) . " (attached)</p>
                        <p><strong>Submitted:</strong> " . now()->format('F j, Y \a\t g:i A') . "</p>
                    </div>
                </div>
            ";

            Log::info('=== ATTEMPTING TO SEND EMAIL ===');

            // Send email with direct temp file attachment
            Mail::raw('', function ($message) use ($request, $emailBody, $file, $tempPath) {
                $message->to('mariaadriananicoletrinidad@gmail.com')
                        ->subject('New Career Application: ' . $request->job_title)
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->html($emailBody);

                Log::info('=== ATTACHING FILE ===', [
                    'temp_path' => $tempPath,
                    'exists_before_attach' => file_exists($tempPath)
                ]);

                // Attach using the temporary file path directly
                if (file_exists($tempPath)) {
                    $message->attach($tempPath, [
                        'as' => $file->getClientOriginalName(),
                        'mime' => $file->getMimeType()
                    ]);
                    Log::info('=== FILE ATTACHED SUCCESSFULLY ===');
                } else {
                    Log::error('=== TEMP FILE DOES NOT EXIST ===');
                }
            });

            Log::info('=== EMAIL SENT SUCCESSFULLY ===');

            return redirect()->back()->with('success', 'Your application has been submitted successfully! We have received your CV and will review your application. We will get back to you within 24-48 hours.');

        } catch (\Exception $e) {
            Log::error('=== CAREER APPLICATION FAILED ===', [
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);

            return redirect()->back()
                ->withErrors(['error' => 'There was an error submitting your application: ' . $e->getMessage()])
                ->withInput();
        }
    }
}
