<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\ProduitRequest;
use App\Models\Produit;

class ProduitController extends Controller
{
    //pour recuperer la liste des produits en bd
    public function index(){
        $listes_produits = Produit::All();
        return response()-> json($listes_produits,200);
    }

    //fonction pour recuperer un seul produit
    public function show(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        if (!$produit) return response()->json("Not found",404);
        return response()->json($produit, 200);
    }
    
    //fonction pour inserer un produit en bd
    public function store(ProduitRequest $request, $id)
    {
        $Produit = Produit::create($request->All());
        return response()->json($produit, 201);

    }
    //fonction pour modifier un produit
    public function update(Request $request, $id)
    {
        $produit = Produit::whereId($id)->update($request->all());
        return responsse()->json($produit, 201);
    }

    //fonction pour supprimer un produit
    public function delete (Request $request, $id)
    {
        Produit::whereId($id)->delete();
        return response()->json("produit supprimé avec succes", 200);
    }
}
