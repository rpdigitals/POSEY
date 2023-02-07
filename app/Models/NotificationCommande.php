<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationCommande extends Model {
    use HasFactory;
    protected $fillable = [
        'client_id', 'service_id', 'prestataire_id', 'contenu', 'actionneur'
    ];

    public function client() {
        return $this->belongsTo( 'App\Models\Clients', 'client_id' );
    }

    public function prestataire() {
        return $this->belongsTo( 'App\Models\Prestataires', 'prestataire_id' );
    }

    public function service() {
        return $this->belongsTo( 'App\Models\Services', 'service_id' );
    }
}
