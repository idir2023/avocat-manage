<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;

class ClientController extends Controller
{
    public function home()
    {
         return view('clients.index');
     }
    public function About()
    {
        return view('clients.about');
    }
    public function Services()
    {
        return view('clients.services');
    }
   
   
    public function Team()
    {
        return view('clients.team');
    }

    public function contact()
    {
        return view('clients.contact');
    }
    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Create a new contact record
    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);

    // Redirect to a named route 'contact.form' with success message
    return redirect()->route('contact')->with('success', 'Your message has been sent!');
}
   
}
