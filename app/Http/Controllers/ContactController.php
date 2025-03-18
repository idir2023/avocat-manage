<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admins.contacts.index', [
            'contacts' => Contact::latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     // Handle the contact form submission
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



    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   // Update contact
public function update(Request $request, $id)
{
    $contact = Contact::findOrFail($id);
    $contact->name = $request->input('name');
    $contact->email = $request->input('email');
    $contact->subject = $request->input('subject');
    $contact->message = $request->input('message');
    $contact->save();

    return redirect()->route('contacts.index')->with('success', 'Contact updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
    
}
