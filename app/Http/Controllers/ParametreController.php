<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parametre = Parametre::first();
        return view('admins.parametres.index', compact('parametre'));
    }

    /**
     * Show the form for creating a new resource.
     */
     // Show the form for creating a new resource
   
 
     // Store a newly created resource in storage
     public function store(Request $request)
     {
         $request->validate([
             'nom' => 'nullable|string',
             'prenom' => 'nullable|string',
             'localisation' => 'nullable|string',
             'email' => 'nullable|email',
             'telephone' => 'nullable|string',
             'instagram' => 'nullable|string',
             'linkedin' => 'nullable|string',
             'facebook' => 'nullable|string',
             'twitter' => 'nullable|string',
             'website' => 'nullable|string',
             'youtube' => 'nullable|string',
         ]);
 
         Parametre::create($request->all());  // Create a new record in the database
 
         return redirect()->route('parametres.index')->with('success', 'Parametre created successfully.');
     }
 
  
  
 
     // Update the specified resource in storage
     public function update(Request $request, Parametre $parametre)
     {
         $request->validate([
             'nom' => 'nullable|string',
             'prenom' => 'nullable|string',
             'localisation' => 'nullable|string',
             'email' => 'nullable|email',
             'telephone' => 'nullable|string',
             'instagram' => 'nullable|string',
             'linkedin' => 'nullable|string',
             'facebook' => 'nullable|string',
             'twitter' => 'nullable|string',
             'website' => 'nullable|string',
             'youtube' => 'nullable|string',
         ]);
 
         $parametre->update($request->all());  // Update the existing record
 
         return redirect()->route('parametres.index')->with('success', 'Parametre updated successfully.');
     }
 
}
