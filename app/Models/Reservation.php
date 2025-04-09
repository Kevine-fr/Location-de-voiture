<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reservation extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'marque',
        'modele',
        'dateDebut',
        'dateFin',
        'prix',
    ];
}
