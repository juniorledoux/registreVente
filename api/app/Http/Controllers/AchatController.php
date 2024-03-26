<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achat;

class AchatController extends Controller
{
    public function index(){
        $listes_achats=Achat::All();
        return response()->json($listes_achats,200);
    }
}
