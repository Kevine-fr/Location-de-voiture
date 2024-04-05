<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientSave(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string|min:6',

        ]);

        $client= new Client();
        $client->nom = $request->nom;
        $client->email= $request->email;
        $client->password=$request->password;

        $client->save();

        // Insérez ici le code pour enregistrer les données dans la base de données ou autre
        return response()->json(['message' => 'Données enregistrées avec succès'], 200);
    }

    public function clientShow(){
    $users = Client::all();
    return response()->json($users);
}
}
