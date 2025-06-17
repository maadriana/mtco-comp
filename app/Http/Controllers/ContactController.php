<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            Log::info('=== CONTACT FORM STARTED ===', ['name' => $request->name]);

            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|max:5000',
            ]);

            Log::info('=== CONTACT VALIDATION PASSED ===');

            // Get current time in Philippines timezone
            $philippinesTime = Carbon::now('Asia/Manila')->format('F j, Y \a\t g:i A');

            // Create email body
           $emailBody = "
    <div style='font-family: \"Open Sans\", sans-serif; max-width: 650px; margin: 0 auto; background-color: #f4f6f8; padding: 0; border-radius: 10px; overflow: hidden; font-size: 12px; color: #333;'>

        <!-- HEADER -->
        <div style='background: linear-gradient(135deg, #326C79 0%, #289DD2 100%); padding: 24px; text-align: center;'>
            <h2 style='color: white; font-family: \"Raleway\", sans-serif; margin: 0;'>New Contact Message</h2>
        </div>

        <!-- CONTENT -->
        <div style='padding: 24px; background-color: #ffffff;'>
            <p><strong style='color: #326C79;'>Name:</strong> " . htmlspecialchars($request->name) . "</p>
            <p><strong style='color: #326C79;'>Email:</strong> " . htmlspecialchars($request->email) . "</p>
            <p><strong style='color: #326C79;'>Subject:</strong> " . htmlspecialchars($request->subject) . "</p>

            <hr style='margin: 20px 0; border-top: 1px solid #ddd;' />

            <p><strong style='color: #326C79;'>Message:</strong></p>
            <div style='padding: 15px; background-color: #f5f5f5; border-radius: 8px; line-height: 1.6;'>
                " . nl2br(htmlspecialchars($request->message)) . "
            </div>
        </div>

        <!-- FOOTER -->
        <div style='padding: 16px; background-color: #f9f9f9; text-align: center; font-size: 11px; color: #666;'>
            <p style='margin: 0;'>Submitted on " . $philippinesTime . "</p>
            <p style='margin: 0;'>Sent from mtco.com.ph contact form</p>
        </div>
    </div>
";

            Log::info('=== ATTEMPTING TO SEND CONTACT EMAIL ===');

            // Send email
            Mail::raw('', function ($message) use ($request, $emailBody) {
                $message->to('mariaadriananicoletrinidad@gmail.com')
                        ->subject('Contact Form: ' . $request->subject)
                        ->from(config('mail.from.address'), config('mail.from.name'))
                        ->replyTo($request->email, $request->name)
                        ->html($emailBody);
            });

            Log::info('=== CONTACT EMAIL SENT SUCCESSFULLY ===');

            return redirect()->back()->with('contact_success', 'Your message has been sent. Thank you!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('=== CONTACT FORM VALIDATION FAILED ===', [
                'errors' => $e->errors()
            ]);

            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();

        } catch (\Exception $e) {
            Log::error('=== CONTACT FORM SUBMISSION FAILED ===', [
                'error' => $e->getMessage(),
                'line' => $e->getLine(),
                'file' => $e->getFile()
            ]);

            return redirect()->back()
                ->withErrors(['contact_error' => 'There was an error sending your message. Please try again or contact us directly at contact@mtco.com.ph'])
                ->withInput();
        }
    }
}
