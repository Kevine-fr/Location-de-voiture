<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MessageReservation;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Voitures;
use Illuminate\Support\Facades\Mail;

class ReservationsController extends Controller
{
    public function CreateReservation(Request $request)  {
        $request->validate([
         'dateDebut'=>'required',
         'dateFin'=>'required',
         'motif'=>'required',
         'num_piece_identite'=>'required'
        ]);
        $reservation = new Reservation();
        $reservation -> dateDebut = $request->dateDebut;
        $reservation -> dateFin = $request->dateFin;
        $reservation -> motif = $request->motif;
        $reservation -> num_piece_identite = $request->num_piece_identite;
        $reservation -> utilisateur_id = $request->utilisateur_id;
        $reservation -> voiture_id = $request->voiture_id;
        $reservation -> save();
        return response()->json([
            'message' => 'reservation creer avec success'
        ]);
    }
    public function Reservations()  {
    $reservation=Reservation::get();
    return response()->json([
        'staut'=>1,
        ' data'=>$reservation
    ]);

    }

    public function deleteReservation($id) {
        $reservation = Reservation::find($id);
    
        if(!$reservation) {
            return response()->json([
                'status' => 0,
                'message' => 'Réservation non trouvée' // Message si la réservation n'est pas trouvée
            ], 404); // Retourne un code d'erreur 404 (Not Found)
        }
    
        $reservation->delete(); // Suppression de la réservation
    
        return response()->json([
            'status' => 1,
            'message' => 'Réservation supprimée avec succès'
        ]);
    }   
    public function  liste() {
        $reservations = Reservation::all();
       //dd($reservation);
        return view('reservations.liste', compact('reservations'));
        //return 'salut';
    }

    public function sendMailToReservation (Request $request) {
    	#2. Récupération des utilisateurs
		$user = $request->user();
        //dd("$user");

		#3. Envoi du mail
		$email = Mail::to($user)->bcc("domjehiel@gmail.com")
						->queue(new MessageReservation($request->all()));
		return redirect()->route('liste.reservations');
	}


    //method Api
    public function ReservationSend(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'marque' => 'required|string',
            'modele' => 'required|string',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date',
            'prix' => 'required|numeric',
        ]);

        $reservation= new Reservation();
        $reservation->name = $request->name;
        $reservation->email= $request->email;
        $reservation->marque=$request->marque;
        $reservation->modele = $request->modele;
        $reservation->dateDebut= $request->dateDebut;
        $reservation->dateFin=$request->dateFin;
        $reservation->prix = $request->prix;

        $reservation->save();

        // Insérez ici le code pour enregistrer les données dans la base de données ou autre
        return response()->json(['message' => 'Données enregistrées avec succès'], 200);
    }

    public function allReservation(){
        $reservations = Reservation::all();
        return view('reservations.liste', compact('reservations'));
    }
    

}
