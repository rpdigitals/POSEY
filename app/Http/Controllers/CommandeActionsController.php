<?php

namespace App\Http\Controllers;
use App\Models\Commandes;
use App\Models\NotificationCommande;
use Illuminate\Http\Request;

class CommandeActionsController extends Controller {
    //

    public function annulation_commande( $id ) {
        $commande = Commandes::where( 'id', $id )->first();
        $commande->update( [
            'etat' =>'annulée'
        ] );
        NotificationCommande::create( [
            'client_id' =>$commande->client->id,
            'prestataire_id' =>$commande->prestataire->id,
            'service_id'=>$commande->service->id,
            'contenu' =>'a annulé la commande de votre service',
            'actionneur' =>'client'
        ] );
        return redirect( '/user_bookings' );
    }

    public function accepter_commande( $id ) {
        $commande = Commandes::where( 'id', $id )->first();
        $commande->update( [
            'etat' =>'en cours'
        ] );
        NotificationCommande::create( [
            'client_id' =>$commande->client->id,
            'prestataire_id' =>$commande->prestataire->id,
            'service_id'=>$commande->service->id,
            'contenu' =>' a accepté votre commande',
            'actionneur' =>'prestataire'

        ] );
        return redirect( '/provider_booking_list' );
    }

    public function rejeter_commande( $id ) {
        $commande = Commandes::where( 'id', $id )->first();
        $commande->update( [
            'etat' =>'rejetée'
        ] );
        NotificationCommande::create( [
            'client_id' =>$commande->client->id,
            'prestataire_id' =>$commande->prestataire->id,
            'service_id'=>$commande->service->id,
            'contenu' =>'a rejeté votre commande',
            'actionneur' =>'prestataire'

        ] );
        return redirect( '/provider_booking_list' );
    }
}
