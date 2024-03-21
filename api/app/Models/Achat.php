<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
use App\Models\Produit;


class Achat extends Model
{
    use HasFactory;
    protected $fillable = [
        "date",
        "prix_total",
        "quantite",
        "produit_id",
     ];

    public function produit():BelongTo
        {
            return $this->belongTO(Produit::class);
        }
}
