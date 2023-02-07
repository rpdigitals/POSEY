<?php

namespace App\Models;

use App\Models\prestataires;
use App\Models\Transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commandes extends Model {
    use HasFactory;
    protected $fillable = [
        'etat', 'lieu_du_travail', 'date_du_travail', 'note_explicative', 'statut',
        'client_id', 'service_id', 'prestataire_id',
    ];

    public function client() {
        return $this->belongsTo( 'App\Models\Clients', 'client_id' );
    }

    public function service() {
        return $this->belongsTo( 'App\Models\Services', 'service_id' );
    }

    public function prestataire() {
        return $this->belongsTo( 'App\Models\Prestataires', 'prestataire_id' );

    }

    public function transaction() {
        return Transactions::where( 'commande_id', $this->id )->first();

    }
}
