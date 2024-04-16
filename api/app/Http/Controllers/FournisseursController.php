<?php
use App\Http\Requests\FournisseursRequest;
use App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseurs;

class FournisseursController extends Controller
{
    //fonction pour recuperer la liste des fournisseurss en bd
    public function index()
    {
        $listes_fournisseurs = Fournisseurs::All();
        return response()->json($listes_fournisseurs, 200);
    }

    //fonction pour recuperer un seul fournisseur
    public function show(Request $request, $id)
    {
        $achat = Fournisseurs::findOrFail($id);
        if (!$fournisseur) return response()->json("Not found", 404);
        return response()->json($achat, 200);
    }

    //fonction pour inserer un fournisseur en bd
    public function store(FournisseursRequest $request)
    {
        $fournisseur = Fournisseurs::create($request->all());
        return response()->json($fournisseur, 201);
    }

    //fonction pour modifier un fournisseur
    public function update(Request $request, $id)
    {
        $fournisseur = Fournisseurs::whereId($id)->update($request->all());
        return response()->json(fournisseur, 201);
    }

    //fonction pour supprimer un fournisseur
    public function delete(Request $request, $id)
    {
        Fournisseurs::whereId($id)->delete();
        return response()->json("fournisseurs supprimé avec succès", 200);
    }
}
