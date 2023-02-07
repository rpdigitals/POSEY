<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class Categories extends Model {
    use HasFactory;
    protected $fillable = [ 'nom', 'statut', 'image' ];

    public function services() {
        return $this->belongsTo( 'App\Models\Services' );
    }

    public function nombre_de_services() {
        $nombre_de_services = Services::where( 'categorie_id', $this->id )->get()->count();
        return $nombre_de_services;
    }

    public function nombre_de_services_actifs() {
        $nombre_de_services = Services::where( 'categorie_id', $this->id )->where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->get()->count();
        return $nombre_de_services;
    }
}
