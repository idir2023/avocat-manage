<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Actualite::latest()->paginate(5);
        return view('admins.actualites.index', compact('actualites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'upload du logo
        $logoPath = $request->hasFile('logo') ? $request->file('logo')->store('logos', 'public') : null;

        Actualite::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'logo' => $logoPath,
        ]);

        return redirect()->route('actualites.index')->with('success', 'Actualité ajoutée avec succès.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actualite $actualite)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'upload du logo
        $logoPath = $actualite->logo; // Conserver l'ancien logo si aucun nouveau n'est téléchargé
        if ($request->hasFile('logo')) {
            // Supprimer l'ancien logo s'il existe
            if ($actualite->logo) {
                Storage::disk('public')->delete($actualite->logo);
            }
            // Stocker le nouveau logo
            $logoPath = $request->file('logo')->store('logos', 'public');
        }

        // Mettre à jour les données de l'actualité
        $actualite->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'logo' => $logoPath,
        ]);

        return redirect()->route('actualites.index')->with('success', 'Actualité mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $actualite = Actualite::findOrFail($id);

        // Supprimer le logo s'il existe
        if ($actualite->logo) {
            Storage::disk('public')->delete($actualite->logo);
        }

        // Supprimer l'actualité
        $actualite->delete();

        return redirect()->route('actualites.index')->with('success', 'Actualité supprimée avec succès.');
    }
}
