<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact;
use App\Models\Expertise;
 use App\Models\Actualite;
use App\Models\Parametre;

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
    public function actualite()
    {
        $actualites=Actualite::all();
        return view('clients.actualite',compact('actualites'));
    }
   
   
    public function expertise()
    {

        $expertises=Expertise::all();
        return view('clients.expertise',compact('expertises'));
    }

    public function contact()
    {
        $settings = \App\Models\Parametre::first();

        return view('clients.contact', compact('settings'));
    }
 
    public function storeContact(Request $request)
   {
    // Validate form data
    $request->validate([
        'name' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'nullable|string|max:50',
         'message' => 'required|string',
    ]);

    // Store the contact message in the database
    \App\Models\Contact::create([
        'nom' => $request->input('name'),
        'prenom' => $request->input('prenom'),
        'telephone' => $request->input('phone'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Your message has been sent successfully!');
}

}
