<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Statut;
use App\Models\Voitures;

class AdministrateurController extends Controller
{
    public function index(Request $request) {
        $voitures = Voitures::all();
        $marques = Marque::all();
        $modeles = Modele::all();
        $statuts = Statut::all();
        return view('dashboard', compact('voitures','marques','modeles','statuts'));
    }
}
