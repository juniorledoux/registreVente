<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\VenteRequest;
use App\Models\Vente;
 use App\Models\Produit;

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
        $vente = Vente::findOrFail($id);
        if(!$vente) return response()->json("Not found", 404);
        return response()->json($vente, 200);
    
    }
    //fonction pour inserer une vente en bd

    public function store(Request $request){
        $vente = Vente::create([
            "date"=>$request->date,
            "montant"=>$request->montant,
            "quantite"=>$request->quantite,
            'produit_id'=>$request->produit_id,
        ]);

        // $produit= Vente::find($request->produit_id);
        // $produit->save($vente);
        return response()->json($vente, 201);
    }
    public function update(Request $request,$id)
    {
      $vente = Vente::whereId($id)->update([
        "date"=>$request->date,
        "montant"=>$request->montant,
        "quantite"=>$request->quantite,
      ]);
        return response()->json($vente, 201);
    }

    //fonction pour supprimer un produit
    public function destroy (Request $request, $id)
    {
        Vente::whereId($id)->delete();
        return response()->json("Vente supprimé avec succes", 200);
    }
}
