<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongTo;
use App\Models\Vente;


class Revenus extends Model
{
    use HasFactory;
    protected $fillable = [
        "montant",
        "nature",
        "user_id",
     ];

    public function vente():BelongTo
    {
        return $this->belongTO(Vente::class);
    }
}
