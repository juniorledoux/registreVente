<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\FournisseursController;
use App\Http\Controllers\RevenusController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/achat',AchatController::class,['parameters' => ['achat' => 'id']]);
Route::resource('/produit',ProduitController::class,['parameters' => ['produit' => 'id']]);
Route::resource('/vente',VenteController::class,['parameters' => ['vente' => 'id']]);
Route::resource('/fournisseur',FournisseursController::class,['parameters' => ['fournisseur' => 'id']]);
Route::resource('/revenus',RevenusController::class,['parameters' => ['revenu' => 'id']]);

