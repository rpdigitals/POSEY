<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notations;
use App\Models\Clients;

class Services extends Model {
    use HasFactory;
    protected $fillable = [
        'nom', 'prix', 'image', 'statut',
        'prestataire_id', 'categorie_id', 'description', 'cree_par'
    ];

    public function prestataire() {
        return $this->belongsTo( 'App\Models\Prestataires', 'prestataire_id' );
    }

    public function Client( $id ) {
        $client = Clients::where( 'id', $id )->first();
    }

    public function categorie() {
        return $this->belongsTo( 'App\Models\Categories', 'categorie_id' );
    }

    public function notations() {
        $notations = Notations::where( 'service_id', $this->id )->get();
        return $notations ;
    }

    public function notationBy( $id ) {
        $notations = Notations::where( 'service_id', $this->id )->where( 'client_id', $id )->first();
        return $notations ;
    }

    public function evaluation( $id ) {
        $evaluation = notations::where( 'client_id', $id )->where( 'service_id', $this->id )->first()->evaluation;
        return $evaluation;
    }

    public function moyenne_notations() {
        $notations = Notations::where( 'service_id', $this->id )->get();
        $sum = 0;
        foreach ( $notations as $notation ) {
            $sum += $notation->evaluation;
        }

        if ( $notations->count()>0 ) {
            $moyenne_notations = number_format( $sum/$notations->count(), 1 ) ;

        } else {
            $moyenne_notations = 0;
        }
        return $moyenne_notations;
    }

    public function likedBy( $id ) {
        $checkUserHasAlreadyLiked = Likes::where( 'service_id', $this->id )->where( 'client_id', session( 'id' ) )->first();
        if ( null !== $checkUserHasAlreadyLiked )
        if ( $checkUserHasAlreadyLiked->value == 1 ) {
            //dd( $checkUserHasAlreadyLiked );

            return true;
        } else {
            return false;
        } else {
            return false;
        }
    }
}
