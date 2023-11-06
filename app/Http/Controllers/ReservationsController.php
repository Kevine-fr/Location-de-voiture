<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

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


}
