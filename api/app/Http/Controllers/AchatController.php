<?php

namespace App\Http\Controllers;

use App\Http\Requests\AchatRequest;
use Illuminate\Http\Request;
use App\Models\Achat;
use App\Models\Produit;

class AchatController extends Controller
{
    //fonction pour recuperer la liste des achats en bd
    public function index()
    {
        $listes_achats = Achat::All();
        return response()->json($listes_achats, 200);
    }

    //fonction pour recuperer un seul achat
    public function show(Request $request, $id)
    {
        $achat = Achat::findOrFail($id);
        if (!$achat) return response()->json("Not found", 404);
        return response()->json($achat, 200);
    }

    //fonction pour inserer un achat en bd
    public function store(AchatRequest $request)
    {
        $achat = Achat::create([
            'date'=>$request->date,
            'prix_total'=>$request->prix_total,
            'quantite'=>$request->quantite,
            'produit_id'=>$request->produit_id,
        ]);

        // $produit= Produit::find($request->produit_id);
        // $produit->save($achat);
        return response()->json($achat, 201);
    }

    //fonction pour modifier un achat
    public function update(Request $request, $id)
    {
        $achat = Achat::whereId($id)->update([
             'date'=>$request->date,
        'prix_total'=>$request->prix_total,
        'quantite'=>$request->quantite,
    ]);
        return response()->json($achat, 201);
    }

    //fonction pour supprimer un achat
    public function destroy(Request $request, $id)
    {
        Achat::whereId($id)->delete();
        return response()->json("Achat supprimé avec succès", 200);
    }
}
