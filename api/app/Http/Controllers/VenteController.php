<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\VenteRequest;
use App\Models\Vente;

class VenteController extends Controller
{
    //pour recuperer la liste des vente en bd
    public function index(){
        $listes_ventes = Vente::All();
        return response()->json($listes_ventes, 200);

    }
    //fonction pour recuperer un seul vente
    public function show(Request $request, $id)
    {
        $vente = Vente::findFail($id);
        if(!$vente) 
        return response()->json("Not found", 404);
        return response()->json($vente, 200);
    
    }
    //fonction pour inserer une vente en bd
    public function store(VenteRequest $request){
        
        $vente = Vente::create([
            "date"=>$request->date,
            "montant"=>$request->montant,
            "quantite"=>$request->quantite,
            "produit_id"=>$request->produit_id,

        ]);
        return response()->json($vente, 201);
    }
    public function update(Request $request)
    {
      $vente = Vente::update([
        "date"=>$request->date,
        "montant"=>$request->montant,
        "quantite"=>$request->quantite,
        "produit_id"=>$request->produit_id,
      ]);
        return responsse()->json($vente, 201);
    }

    //fonction pour supprimer un produit
    public function delete (Request $request, $id)
    {
        Vente::whereId($id)->delete();
        return response()->json("Vente supprimé avec succes", 200);
    }
}
