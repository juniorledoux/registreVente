<?php

namespace App\Http\Controllers;

use App\Models\Produit;
// use Illuminate\Http\ProduitRequest;
use Illuminate\Http\Request;
use App\Http\Requests\ProduitRequest;

class ProduitController extends Controller
{
    //pour recuperer la liste des produits en bd
    public function index()
    {
        $listes_produits = Produit::All();
        return response()->json($listes_produits, 200);
    }

    //fonction pour recuperer un seul produit
    public function show(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        if (!$produit)
            return response()->json("Not found", 404);
        return response()->json($produit, 200);
    }

    //fonction pour inserer un produit en bd
    public function store(ProduitRequest $request)
    {
        $produit = Produit::create([
            "nom" => $request->nom,
            "qte_stock" => $request->qte_stock,
            "montant_total" => $request->montant_total,
            "user_id" => $request->user_id,
        ]);
        return response()->json($produit, 201);

    }
    //fonction pour modifier un produit
    public function update(Request $request)
    {
        $produit = Produit::update([
            "nom" => $request->nom,
            "qte_stock" => $request->qte_stock,
            "montant_total" => $request->montant_total,
            "user_id" => $request->user_id,
        ]);
        return response()->json($produit, 201);

    }

    //fonction pour supprimer un produit
    public function delete(Request $request, $id)
    {
        Produit::whereId($id)->delete();
        return response()->json("produit supprimé avec succes", 200);
    }
}
