<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voitures extends Model
{
    use HasFactory;
    protected $fillable = ['marque_id', 'modele_id', 'annee', 'plaque_immatriculation', 'statut_id','image'];
    public function modele(){
        return $this->hasOne(Modele::class,'id','modele_id');
    }
    public function marque(){
        return $this->hasOne(Marque::class,'id','marque_id');
    }
    public function statut(){
        return $this->hasOne(Statut::class,'id','statut_id');
    }
}
