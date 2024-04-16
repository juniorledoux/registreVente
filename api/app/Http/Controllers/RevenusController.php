<?php

namespace App\Http\Controllers;
use App\Http\Requests\RevenusRequest;
use Illuminate\Http\Request;
use App\Models\Revenus;

class RevenusController extends Controller
{
   //fonction pour recuperer la liste revenu en bd
   public function index()
   {
       $listes_revenus = Revenus::All();
       return response()->json($listes_revenus, 200);
   }

   //fonction pour recuperer un seul revenu
   public function show(Request $request, $id)
   {
       $achat = Revenus::findOrFail($id);
       if (!$achat) return response()->json("Not found", 404);
       return response()->json($revenu, 200);
   }

   //fonction pour inserer un revenu en bd
   public function store(RevenuRequest $request)
   {
       $achat = Revenus::create($request->all());
       return response()->json($revenu, 201);
   }

   //fonction pour modifier un revenu
   public function update(Request $request, $id)
   {
       $achat = Revenus::whereId($id)->update($request->all());
       return response()->json($revenu, 201);
   }

   //fonction pour supprimer un revenu
   public function delete(Request $request, $id)
   {
       Revenus::whereId($id)->delete();
       return response()->json("revenu supprimé avec succès", 200);
   }
}
