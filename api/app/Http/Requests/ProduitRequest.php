<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nom"=> ["required","string"],
            "qte_stock"=> ["required", "integer"],
            "montant_total"=> ["required", "integer"],
            "user_id"=> ["required", "integer"],
            "fournisseur_id"=> ["integer"],
        ];
    }
}
