<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactUs(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:11|min:11',
            'message' => 'required'
        ]);
        $data['subject'] = 'Contact Us';

        Mail::to('Dodo@example.com')->send(new ContactMail($data));

        // Consider a redirect or a JSON response for better user experience
        return back()->with('success', 'Your message has been sent!');
    }
}


