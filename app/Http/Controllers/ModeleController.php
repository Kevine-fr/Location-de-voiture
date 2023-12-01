<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Marque;

class ModeleController extends Controller
{
    // ...

    public function ajouter(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:modeles|max:255',
      ]);

      $modele = Modele::create([
        'nom' => $request->input('nom'),
        'marque_id' => $request->input('marque_id'),
    ]);
        return redirect()->route('modeles.liste')->with('success', 'La marque a été ajoutée avec succès.');
    }
    public function liste()
    {
        $modeles = Modele::with('marque')->get(); // Charger les relations avec la marque
        $marques = Marque::all();

        return view('modeles.liste', compact('modeles', 'marques'));
    }

    public function edit(Modele $modele)
    {
        // $marques = Marque::all();

        // Charger la relation avec la marque associée
        // $modele->load('marque');
        // dd($modele);

        return view('modeles.edit', compact('modele'));
    }

    public function update(Request $request, Modele $modele)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'marque_id' => 'required|exists:marques,id',
        ]);

        // Mettre à jour le modèle
        $modele->update([
            'nom' => $request->nom,
            'marque_id' => $request->marque_id,
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('nom_de_votre_route')->with('success', 'Le modèle a été mis à jour avec succès.');
    }

    // Supprimer un modèle
    public function destroy(Modele $model)
    {
        $model->delete();

        return redirect()->route('modeles.liste')->with('success', 'La marque a été supprimée avec succès.');
    }
}
