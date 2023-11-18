<?php

namespace App\Http\Controllers;
use App\Models\Personne;
use App\Models\Mois;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class chooseDartController extends Controller
{
    
    public function index(){
    
        $personnes = Personne::orderBy("full_name", "asc")->get();
        $date = Mois::all();

        return view('choose.chooseDart', compact("personnes","date"));
        
    }


    public function store(Request $request){
    
        $personnes = Personne::all();
        $nbrPer = Personne::count();
        $date = Mois::find($request->mois);

        $montant=  1000 * ($nbrPer - 1);
        
        foreach($personnes as $p){

            if($p->id == $request->personne){
                
                $date->personnes()
                 ->attach($p->id,
                 ['montant'=>$montant,
                 "dart_taker"=>true]);

            }else{
                $date->personnes()
                ->attach($p->id,
                ['montant'=>-1000,
                "dart_taker"=>false]);
            }
        }

        return back()->with("success","choose ajouté avec succés".$request->personne);
        
    }

}
