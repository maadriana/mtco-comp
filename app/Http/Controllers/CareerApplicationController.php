<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

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

            // Get current time in Philippines timezone
            $philippinesTime = Carbon::now('Asia/Manila')->format('F j, Y \a\t g:i A');

            // Create email body
           $emailBody = "
    <div style='font-family: \"Open Sans\", sans-serif; max-width: 650px; margin: 0 auto; background-color: #f4f6f8; padding: 0; border-radius: 10px; overflow: hidden; font-size: 12px; color: #333;'>

        <!-- HEADER -->
        <div style='background: linear-gradient(135deg, #326C79 0%, #289DD2 100%); padding: 24px; text-align: center;'>
            <h2 style='color: white; font-family: \"Raleway\", sans-serif; margin: 0;'>New Career Application</h2>
        </div>

        <!-- CONTENT -->
        <div style='padding: 24px; background-color: #ffffff;'>
            <p><strong style='color: #326C79;'>Name:</strong> " . htmlspecialchars($request->name) . "</p>
            <p><strong style='color: #326C79;'>Email:</strong> " . htmlspecialchars($request->email) . "</p>
            <p><strong style='color: #326C79;'>Position:</strong> " . htmlspecialchars($request->job_title) . "</p>

            <hr style='margin: 20px 0; border-top: 1px solid #ddd;' />

            <p><strong style='color: #326C79;'>Message:</strong></p>
            <div style='padding: 15px; background-color: #f5f5f5; border-radius: 8px; line-height: 1.6;'>
                " . nl2br(htmlspecialchars($request->message ?: 'No message provided')) . "
            </div>

            <p style='margin-top: 20px;'><strong style='color: #326C79;'>CV File:</strong> " . htmlspecialchars($file->getClientOriginalName()) . " (attached)</p>
        </div>

        <!-- FOOTER -->
        <div style='padding: 16px; background-color: #f9f9f9; text-align: center; font-size: 11px; color: #666;'>
            <p style='margin: 0;'>Submitted on " . $philippinesTime . "</p>
            <p style='margin: 0;'>Sent from mtco.com.ph careers page</p>
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
