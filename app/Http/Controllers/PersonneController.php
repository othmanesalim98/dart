<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use App\Models\Mois;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


class PersonneController extends Controller
{

    public function index(){
    
        $personnes = Personne::orderBy("full_name", "asc")->get();
    
        return view('personne.personne', compact("personnes"));
        
    }

    public function create(){
        
        return view('personne.createPersonne');
        
    }


    public function store(Request $request ){

       $request->validate([
            "cin"=>"required",
            "full_name"=>"required",
            "tel"=>"required",
        ]);
        
        
        $nbrPer = Personne::count();
        $now = Carbon::now()->addMonths($nbrPer);
      
      
        Personne::create([
            "cin"=>$request->cin,
            "full_name"=>$request->full_name,
            "tel"=>$request->tel,
        ]);
        
        
        Mois::create([
            "mois"=>$now->format('M'),
            "annee"=>$now->format('Y')
        ]);
        
        return back()->with("success","Etudiant ajouté avec succés");
        
    }


}
