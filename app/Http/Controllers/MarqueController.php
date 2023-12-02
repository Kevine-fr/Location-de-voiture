<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    // Afficher la liste des marques
    public function liste()
    {
        $marques = Marque::all();
        return view('marques.liste', compact('marques'));
    }

    // Afficher le formulaire de création d'une nouvelle marque
    public function create()
    {
        return view('marques.create');
    }

    // Enregistrer une nouvelle marque
    public function ajouter(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:marques|max:255',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        Marque::create($request->all());

        return redirect()->route('marques.liste')->with('success', 'La marque a été ajoutée avec succès.');
    }




    // Mettre à jour une marque
    public function edit(Marque $marque)
    {
        return view('marques.edit', compact('marque'));
    }

    // Mettre à jour une marque
    public function update(Request $request, Marque $marque)
    {
        $request->validate([
            'nom' => 'required|unique:marques|max:255',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        $marque->update($request->all());

        return redirect()->route('marques.liste')->with('success', 'La marque a été mise à jour avec succès.');
    }

    // Supprimer une marque
    public function destroy(Marque $marque)
    {
        $marque->delete();

        return redirect()->route('marques.liste')->with('success', 'La marque a été supprimée avec succès.');
    }
}
