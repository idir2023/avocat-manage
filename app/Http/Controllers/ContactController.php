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
    $contact->nom = $request->input('name');
    $contact->prenom = $request->input('prenom');
    $contact->telephone = $request->input('telephone');

    $contact->email = $request->input('email');
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
