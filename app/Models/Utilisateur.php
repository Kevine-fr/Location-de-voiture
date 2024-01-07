<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\validator;
use App\Http\Controllers\UtilisateursController;


class Utilisateur extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable=[
        ' nom',
        ' prenom',
        ' email',
        ' password',
        ' telephone'
    ];

    
}
