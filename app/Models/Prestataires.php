<?php

namespace App\Models;

use App\Models\Services;
use App\Models\VerifyAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestataires extends Model {
    use HasFactory;
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'biographie', 'photo',
        'user_id', 'abonnement_id',
    ];

    public function user() {
        return $this->belongsTo( 'App\Models\User', 'user_id' );
    }

    public function abonnement() {
        return $this->belongsTo( 'App\Models\Abonnements', 'abonnement_id' );
    }

    public function listCategories() {
        $array = [];
        $services = Services::where( 'prestataire_id', $this->id )->where( 'statut', 1 )->get();
        foreach ( $services as $service ) {
            array_push( $array, $service->categorie->nom );
        }
        return $array;
    }

    public function verify_account() {
        return VerifyAccount::where( 'prestataire_id', $this->id )->first();
    }

    public function commandes() {
        return Commandes::where( 'prestataire_id', $this->id )->get();
    }

    public function compte_verifie( $id ) {
        $verifyAccount = VerifyAccount::where( 'prestataire_id', $id )->first()->verify_account;
        if ( $verifyAccount == 'vérifié' ) {
            return true;
        }
        return false;
    }

    public function hasAllRights() {
        //verifier si le prestataire dont le compte n'est vérifié ne puisse pas 
        //avoir plus de 5 commandes par mois (30 jours)
        $VerifyAccount = VerifyAccount::where( 'prestataire_id', \Auth()->user()->prestataire()->id )->first();
        $latest_five_commande = \Auth()->user()->prestataire()->commandes_five();
        if ( $latest_five_commande->count() <1 ) {
            return true;
        } else {
            $latest_five_commande_date = new DateTime( 'now' );
            $array_length = $latest_five_commande->count();
            $latest_five_commande_date = ( $latest_five_commande [ $array_length-1 ] )->created_at;
            $date_now = new DateTime( 'now' );
            $diff = ( $date_now ->diff( $latest_five_commande_date ) )->format( '%a' );
            if ( $VerifyAccount->verify_account !== 'vérifié' and $diff<30 and $array_length == 5 ) {

                return false;
            }
            return true;
        }
    }

}
