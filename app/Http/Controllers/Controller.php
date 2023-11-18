<?php

namespace App\Http\Controllers;
use App\Models\Mois;
use App\Models\Personne;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        $date = Mois::all();
        $personnes=[];

        return view("welcome", compact("date","personnes"));
    }


    public function getPersonnesBymois(Request $request)
    {

        $date = Mois::all();
        $personnes = Mois::find($request->mois)->Personnes;
        
        return view("welcome", compact("date","personnes"));
    }



}
