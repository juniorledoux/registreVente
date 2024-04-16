<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\VenteRequest;
use App\Models\Vente;

class VenteController extends Controller
{
    //pour recuperer la liste des vente en bd
    public function index(){
        $listes_ventes = Vente::All();
        return respose()->json($listes_produits,200);

    }
    //fonction pour recuperer un seul vente
    public function show(Request $request, $id)
    {
        $vente = Vente::findFail($id);
        if(!produit) return response()->json("Not found", 404);
        return response()->json($vente, 200);
    
    }
    //fonction pour inserer une vente en bd
    public function store(VenteRequest $request, $id){
        $achat = Vente::create($request->all());
        return response()->json($vente, 201);
    }
    public function update(Request $request, $id)
    {
        $vente = Vente::whereId($id)->update($request->all());
        return responsse()->json($vente, 201);
    }

    //fonction pour supprimer un produit
    public function delete (Request $request, $id)
    {
        Vente::whereId($id)->delete();
        return response()->json("produit supprimé avec succes", 200);
    }
}
