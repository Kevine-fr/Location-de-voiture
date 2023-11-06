<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ReservationsController;


class Reservation extends Model
{
    use HasFactory;
    protected $table = "Reservations";
    protected $fillable =[
        'utilisateur_id',
        'voiture_id',
        'dateDebut',
        'dateFin',
        'motif',
        'num_piece_identite'
    ];
}
