<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $table="Administrateur"; 
    protected $fillable=[
        'nom',
        'prenom',
        'email',
        'password',
    ];
}
