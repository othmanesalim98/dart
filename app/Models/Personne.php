<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable =["cin","full_name","tel"];


    public function mois(){
        return $this->belongsToMany(Mois::class)
          ->withPivot('montant', 'dart_taker')
          ->withTimestamps();
    }

}
