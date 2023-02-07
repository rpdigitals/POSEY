<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offres extends Model {
    use HasFactory;
    protected $fillable = [ 'commande_client_id', 'prestataire_id', 'prix', 'statut' ];

    public function prestataire() {
        return $this->belongsTo( Prestataires::class );
    }

    public function commande_client() {
        return $this->belongsTo( CommandeClient::class );
    }
}
