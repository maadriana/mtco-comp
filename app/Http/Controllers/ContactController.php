<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

            // Create email body
            $emailBody = "
                <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;'>
                    <div style='background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); color: white; padding: 20px; text-align: center;'>
                        <h2>New Contact Message</h2>
                    </div>
                    <div style='padding: 20px; background: #f8f9fa;'>
                        <div style='background: white; padding: 20px; border-radius: 10px; margin-bottom: 15px; border-left: 4px solid #326D78;'>
                            <p><strong style='color: #326D78;'>Name:</strong> " . htmlspecialchars($request->name) . "</p>
                            <p><strong style='color: #326D78;'>Email:</strong> " . htmlspecialchars($request->email) . "</p>
                            <p><strong style='color: #326D78;'>Subject:</strong> " . htmlspecialchars($request->subject) . "</p>
                        </div>

                        <div style='background: white; padding: 20px; border-radius: 10px; border-left: 4px solid #326D78;'>
                            <p><strong style='color: #326D78;'>Message:</strong></p>
                            <div style='background: #f8f9fa; padding: 15px; border-radius: 8px; margin: 10px 0; line-height: 1.6;'>
                                " . nl2br(htmlspecialchars($request->message)) . "
                            </div>
                        </div>

                        <div style='margin-top: 20px; padding: 15px; background: #e8f4f8; border-radius: 8px; font-size: 14px; color: #666;'>
                            <p><strong>Submitted:</strong> " . now()->format('F j, Y \a\t g:i A') . "</p>
                        </div>
                    </div>

                    <div style='background: #326D78; color: white; padding: 15px; text-align: center; font-size: 14px;'>
                        <p style='margin: 0;'>This message was sent from your website contact form.</p>
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
