<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Marque;

class Modele extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'marque_id'];

    public function marque()
    {
        return $this->belongsTo(Marque::class, 'marque_id');
    }
}
