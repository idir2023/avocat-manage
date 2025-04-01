<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PackController extends Controller
{
    /**
     * Afficher la liste des packs.
     */
    public function index()
    {
        $packs = Pack::paginate(10); // Pagination
        return view('admins.packs.index', compact('packs'));
    }

    /**
     * Ajouter un nouveau pack.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);
    
        $slug = Str::slug($request->name); // Génère un slug à partir du nom
    
        $pack = new Pack();
        $pack->name = $request->name;
        $pack->slug = $slug; // Assigner le slug généré
        $pack->description = $request->description;
        $pack->price = $request->price;
        $pack->save();
    
        return redirect()->route('packs.index')->with('success', 'Pack created successfully!');
    }
    

    /**
     * Mettre à jour un pack.
     */
    public function update(Request $request, Pack $pack)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:packs,slug,' . $pack->id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $pack->update($request->all());

        return redirect()->route('packs.index')->with('success', 'Pack mis à jour avec succès.');
    }

    /**
     * Supprimer un pack.
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();

        return redirect()->route('packs.index')->with('success', 'Pack supprimé avec succès.');
    }
}
