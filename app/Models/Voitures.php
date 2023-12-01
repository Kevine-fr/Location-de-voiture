<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Voitures extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'marque_id',
        'modele_id',
        'annee',
        'statut_id',
        'plaque_immatriculation',
        'siege_auto',
        'location_semaine',
        'location_mois',
        'gasoil',
        'essence',
    ];

    public function marque()
    {
        return $this->belongsTo(Marque::class, 'marque_id');
    }

    public function modele()
    {
        return $this->belongsTo(Modele::class, 'modele_id');
    }
}
