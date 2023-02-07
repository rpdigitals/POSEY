<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeClient extends Model {
    use HasFactory;
    protected $fillable = [ 'client_id', 'categorie_id', 'nom', 'description', 'lieu_du_travail', 'min_price', 'max_price', 'date_du_travail', 'statut' ];

    public function categorie() {
        return $this->belongsTo( 'App\Models\Categories', 'categorie_id' );
    }

    public function client() {
        return $this->belongsTo( 'App\Models\Clients', 'client_id' );
    }

    public function prestataire() {
        return $this->belongsTo( 'App\Models\Prestataires', 'client_id' );
    }

    public function offer( $id ) {
        return  Offres::where( 'prestataire_id', $id )->where( 'commande_client_id', $this->id )->first();
    }

}
