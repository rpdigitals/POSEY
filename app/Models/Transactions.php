<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model {
    use HasFactory;
    protected $fillable = [
        'commande_id', 'client_id', 'prestataire_id', 'montant',
        'etat', 'numero_de_transaction', 'systeme_de_payement'
    ];
    public  function commande() {
        return $this->BelongsTo ( 'App\Models\Commandes', 'commande_id' );
    }
}
