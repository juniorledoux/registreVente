<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Achat;
use App\Models\Vente;
use App\Models\Fournisseurs;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
       "nom",
       "qte_stock",
       "montant_total",
       "user_id",
       "fournisseur_id",
    ];

    public function user():BelongTo
    {
        return $this->belongTO(User::class);
    }
    public function achats(): HasMany
    {
        return $this->hasMany(Achat::class);
    }
    public function ventes(): HasMany
    {
        return $this->hasMany(Vente::class);
    }
    
    public function fournisseur():BelongTo
    {
        return $this->belongTO(Fournisseurs::class);
    }


}
