<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
 use App\Models\Produit;
use App\Models\Revenus;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        "date",
        "montant",
        "quantite",
         "produit_id",
     ];

    public function produit():BelongTo
        {
            return $this->belongTO(Produit::class);
        }
        public function revenus(): HasMany
        {
            return $this->hasMany(Revenus::class);
        }
}
