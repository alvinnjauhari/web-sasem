<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request...
        $validated = $request->validate([
            'company_name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Handle the form submission...
        // Example: Send an email
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('admin@example.com')
                    ->subject('Contact Form Submission from ' . $request->company_name)
                    ->from($request->email);
        });

        return redirect('/')->with('success', 'Thank you for your message!');
    }
}

