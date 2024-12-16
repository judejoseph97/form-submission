<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];


        Mail::to('recipient@example.com')->send(new ContactMail($details));
        
        return back()->with('success', 'Your message has been sent!');
    }
}
