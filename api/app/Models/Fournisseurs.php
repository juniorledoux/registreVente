<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Produit;
class Fournisseurs extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "tel",
     ];

public function produits(): HasMany
{
    return $this->hasMany(Produit::class);
}


}

