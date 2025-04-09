<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voitures;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Statut;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voitures::all();
        $marques = Marque::all();
        $modeles = Modele::all();
        // $nombreDeMarques = Marque::count();

        return view('voitures.liste', compact('voitures', 'marques', 'modeles'));
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
        //dd($request->all());
        $validatedData = $request->validate([
            'marque_id' => 'required|max:255',
            'modele_id' => 'required',
        ]);

        $voiture = Voitures::create($request->all());
        $filename = $request->file("image")->getClientOriginalName(); //avoir le nom de l'image
        $file = $request->file("image");
        $path = $file->storeAs('public/image', str_replace(' ', '_', $filename)); //enregister l'image dans le dossier public etde storage
        $path = str_replace('public/', 'storage/', $path); //permet de remplacer les espaces dans le fichei
        $url = url($path); //
        $voiture->update(['image' => $url]);
        //dd($voiture);

        return redirect()->route('admin.voitures.liste')->with('success', 'Voitures créer avec succèss');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $v = Voitures::find($id);
        return view('voitures.details', compact('v'));
    }

    public function voitureShow() {
        $voitures = Voitures::all();
        $marques = Marque::all();
        $modeles = Modele::all();
    
        return response()->json([
            'voitures' => $voitures,
            'marques' => $marques,
            'modeles' => $modeles
        ]);
    }

    public function voitureId($id)
{
    $voiture = Voitures::with('marque', 'modele')->findOrFail($id); // Récupère la voiture avec les données de la marque et du modèle
    return response()->json([
        'voiture' => $voiture,
    ]);
}


    
    public function list()
    {
        $v = Voitures::with('marque', 'modele',)->get();
        return response()->json([
            'statut' => 1,
            ' data' => $v
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voitures $voiture)
    {
        $marques = Marque::all();
        $modeles = Modele::all();
        //dd($voiture);
        return view('voitures.modifier', compact('voiture', 'modeles', 'marques'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'marque' => 'required|max:255',
            'modele' => 'required'
        ]);

        Voitures::whereId($id)->update($validatedData);

        return redirect('/voitures')->with('success', 'Voitures mise à jour avec succèss');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voitures $voiture)
    {
        $voiture->delete();

        return back()->with('success', 'Voitures supprimer avec succèss');
    }

    public function getCarWithId($car_id)
    {
        return response()->json([
            'voiture' => Voitures::find($car_id),
            'message' => "success",
        ]);
    }
}
