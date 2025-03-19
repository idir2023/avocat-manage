<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expertises = Expertise::latest()->paginate(5);
        return view('admins.expertises.index', compact('expertises'));
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
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp,avif|max:2048',
        ]);

        // Gestion de l'upload du logo
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        Expertise::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'logo' => $logoPath,
        ]);

        return redirect()->route('expertises.index')->with('success', 'Expertise ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expertise $expertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expertise $expertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expertise $expertise)
    {
        // Gestion de l'upload du logo
        $logoPath = $expertise->logo; // Si le logo existait déjà, on garde l'ancien logo
        if ($request->hasFile('logo')) {
            // Supprimer l'ancien logo si un nouveau fichier est uploadé
            if ($logoPath) {
                Storage::disk('public')->delete($logoPath);
            }
            // Stocker le nouveau logo
            $logoPath = $request->file('logo')->store('logos', 'public');
        }
    
        // Mettre à jour les données de l'expertise
        $expertise->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'logo' => $logoPath,
        ]);
    
        return redirect()->route('expertises.index')->with('success', 'Expertise mise à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $expertise = Expertise::findOrFail($id);
    // Supprimer le logo de l'expertise si un fichier existe
    if ($expertise->logo) {
        Storage::disk('public')->delete($expertise->logo);
    }

    // Supprimer l'expertise de la base de données
    $expertise->delete();

    // Rediriger avec un message de succès
    return redirect()->route('expertises.index')->with('success', 'Expertise supprimée avec succès.');
}

}
