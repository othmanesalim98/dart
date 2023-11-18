<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mois extends Model
{
    use HasFactory;

    protected $fillable =["mois","annee"];


    public function personnes(){
        return $this->belongsToMany(Personne::class)
        ->withPivot('montant', 'dart_taker')
        ->withTimestamps();
    }

}
