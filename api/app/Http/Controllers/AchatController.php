<?php

namespace App\Http\Controllers;

use App\Http\Requests\AchatRequest;
use Illuminate\Http\Request;
use App\Models\Achat;

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
        $achat = Achat::create($request->all());
        return response()->json($achat, 201);
    }

    //fonction pour modifier un achat
    public function update(Request $request, $id)
    {
        $achat = Achat::whereId($id)->update($request->all());
        return response()->json($achat, 201);
    }

    //fonction pour supprimer un achat
    public function delete(Request $request, $id)
    {
        Achat::whereId($id)->delete();
        return response()->json("Achat supprimé avec succès", 200);
    }
}
