<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Likes;
use App\Models\Offres;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Commandes;
use App\Models\Notations;
use App\Models\Categories;

use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PorteFeuilles;
use App\Models\CommandeClient;
use App\Models\NotificationCommande;

class UserAccountController extends Controller {
    //

    public function user_formular() {
        $userIdOfClient = \Auth::user()->id;
        return view ( 'user.user_formular', compact( 'userIdOfClient' ) );
    }

    public function user_add( Request $request ) {
        $array = [ '90', '91', '92', '93', '96', '97', '98', '99', '70', '79' ];
        if ( in_array( substr( $request->telephone, 4, 2 ), $array ) == false or substr( $request->telephone, 0, 4 ) !== '+228' or strlen( $request->telephone ) !== 12 ) {
            return back()->with( 'wrong_number', 'Veuillez saisir un numero de telephone valide' );
        }

        if ( null == $request->file( 'photo' ) ) {

            $path = User::where( 'id', 1 )->first()->avatar;

        } else {

            $filename = time().$request->photo;
            $path = $request->file( 'photo' )->storeAs(
                'avatars',
                $filename,
                'public'
            );
        }

        $userIdOfClient = \Auth::user()->id;

        Clients::create( [
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'telephone' =>$request->telephone,
            'photo' =>$path,
            'user_id' =>$userIdOfClient

        ] );
        $user = User::where( 'id', $userIdOfClient )->first();

        $client = Clients::where( 'user_id', $userIdOfClient )->first();
        Portefeuilles::create( [
            'user_id' =>$userIdOfClient,
            'valeur'=>0,
            'dernier_ajout' =>0
        ] );

        return redirect( '/user_dashboard' );
    }

    public function user_dashboard() {

        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $commandes = Commandes::where( 'client_id', $client->id )->get();
        $services = Services::where( 'statut', 1 )->get();
        $notations = Notations::where( 'client_id', $client->id )->get();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_dashboard', compact( 'client', 'commandes', 'notations', 'notification', 'services' ) );
    }

    public function user_favourites() {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $likes = Likes::where( 'client_id', $client->id )->where( 'value', 1 )->get();
        return view ( 'user.user_favourites', compact( 'notification', 'client', 'likes' ) );
    }

    public function user_settings( Request $request ) {

        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();

        if ( $request->isMethod( 'POST' ) ) {

            $array = [ '90', '91', '92', '93', '96', '97', '98', '99', '70', '79' ];
            if ( in_array( substr( $request->telephone, 4, 2 ), $array ) == false or substr( $request->telephone, 0, 4 ) !== '+228' or strlen( $request->telephone ) !== 12 ) {
                return back()->with( 'wrong_number', 'Veuillez saisir un numero de telephone valide' );
            }
            if ( isset( $request->photo ) ) {
                $filename = time().$request->photo;
                $path = $request->file( 'photo' )->storeAs(
                    'avatars',
                    $filename,
                    'public'
                );
            } else {
                $path = $client->photo;
            }

            $client->update( [
                'nom' =>$request->nom,
                'prenom' =>$request->prenom,
                'telephone' => $request->telephone,
                'photo' =>$path,
            ] );

            $client->user->update( [
                'email' =>$request->email,
            ] );
        }
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_settings', compact( 'notification', 'client' ) );
    }

    public function user_wallet() {
        session()->forget( 'wallet_insuficient' );

        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $total_debite = 0;
        $transactions = Transactions::where( 'client_id', \Auth()->user()->client() )->where( 'systeme_de_payement', 'wallet' )->get();
        if ( $transactions->count() > 0 ) {
            foreach ( $transactions as $transaction ) {

                $total_debite += $transaction->montant;

            }
        }

        return view ( 'user.user_wallet', compact( 'notification', 'client', 'total_debite', 'transactions' ) );
    }

    public function user_reviews() {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $notations = Notations::where( 'client_id', $client->id ) ->get();
        return view ( 'user.user_reviews', compact( 'notification', 'client', 'notations' ) );
    }

    public function user_payments() {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $transactions = Transactions::where( 'client_id', $client->id )->get();
        return view ( 'user.user_payments', compact( 'notification', 'client', 'transactions' ) );
    }

    public function user_bookings() {

        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $commandes = Commandes::where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_bookings', compact( 'notification', 'client', 'commandes' ) );
    }

    public function user_chats() {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_chats', compact( 'notification', 'client' ) );
    }

    public function user_rate_service( Request $request, $id ) {
        $note = $request->product_rating;
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $service = Services::where( 'id', $id )->first();

        ;
        $checkAvailability = Commandes::where( 'client_id', $client->id ) ->where( 'service_id', $service->id )->first();
        if ( isset( $checkAvailability ) ) {

            if ( $service->statut != 0 ) {
                $checkNotation = Notations::where( 'client_id', $client->id ) ->where( 'service_id', $service->id ) ->first();
                if ( isset( $checkNotation ) ) {
                    $checkNotation->update( [
                        'evaluation'=>$note,
                    ] );
                } else {
                    Notations::create( [
                        'evaluation' =>$note,
                        'service_id' =>$service->id,
                        'client_id' =>$client->id,
                    ] );
                }
                return back()->with( 'rating-success', "Merci d'avoir évalué ce service" );
                ;

            } else return back()->with( 'status', 'Ce service a été supprimé' );

        } else {

            return back()->with( 'not-booked-service', "Vous ne pouvez pas évaluer ce service sans l'avoir commandé" );
        }
    }

    public function user_book_service_u( Request $request ) {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        if ( $request->isMethod( 'POST' ) ) {
            $commandes = Commandes::where( 'client_id', $client->id )->get();
            $commande_client = CommandeClient::where( 'id', $request->commande_client )->first();
            $available_offer = Offres::where( 'id', $request->available_offer )->first();
            $service = Services::create( [
                'nom'=>$commande_client->nom,
                'prix' =>$available_offer->prix,
                'image'=>$commande_client->categorie->image,
                'prestataire_id'=>$available_offer->prestataire->id,
                'description'=>'Aucun détail disponible pour ce service .Contacter le prestataire pour en savoir plus',
                'categorie_id'=>$commande_client->categorie_id,
                'cree_par' =>'client',
                'statut' =>1
            ] );
            $commande_client->update( [ 'statut' =>0 ] );
            Commandes::create( [
                'etat' =>'en attente',
                'lieu_du_travail' =>$commande_client->lieu_du_travail,
                'date_du_travail' =>$commande_client->date_du_travail,
                'note_explicative' =>$commande_client->description,
                'prestataire_id' =>$available_offer->prestataire->id,
                'client_id' =>$client->id,
                'service_id' =>$service->id,
            ] );

            NotificationCommande::create( [
                'client_id' =>$client->id,
                'prestataire_id' =>$service->prestataire->id,
                'service_id'=>$service->id,
                'contenu' =>'a commandé votre service',
                'actionneur' =>'client',
            ] );

            return redirect ( '/user_bookings' );
        }
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_book_service', compact( 'notification', 'client', 'service' ) );
    }

    public function user_book_service( Request $request, $id ) {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $service = Services::where( 'id', $id )->first();

        if ( $request->isMethod( 'POST' ) ) {
            $commandes = Commandes::where( 'client_id', $client->id )->get();

            Commandes::create( [
                'etat' =>'en attente',
                'lieu_du_travail' =>$request->lieu_du_travail,
                'date_du_travail' =>$request->date_du_travail,
                'note_explicative' =>$request->note_explicative,
                'prestataire_id' =>$service->prestataire->id,
                'client_id' =>$client->id,
                'service_id' =>$service->id,
            ] );

            NotificationCommande::create( [
                'client_id' =>$client->id,
                'prestataire_id' =>$service->prestataire->id,
                'service_id'=>$service->id,
                'contenu' =>'a commandé votre service',
                'actionneur' =>'client',
            ] );

            return redirect ( '/user_bookings' );
        }
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'user.user_book_service', compact( 'notification', 'client', 'service' ) );
    }

    public function user_bookings_filter( Request $request ) {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();

        switch( $request->filter ) {

            case 'pending':
            $commandes = Commandes::where( 'etat', 'en attente' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'en attente';
            $value = 'pending';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );

            case 'cancelled':
            $commandes = Commandes::where( 'etat', 'annulée' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'Annulée';
            $value = 'cancelled';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );

            case 'inprogress':
            $commandes = Commandes::where( 'etat', 'en cours' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'En cours';
            $value = 'in progress';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );

            case 'pending':
            $commandes = Commandes::where( 'etat', 'en attente' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'En attente';
            $value = 'pending';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );

            case 'rejected':
            $commandes = Commandes::where( 'etat', 'rejetée' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'Rejetée';
            $value = 'rejected';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );

            case 'completed':
            $commandes = Commandes::where( 'etat', 'achevée' )->where( 'client_id', $client->id )->orderBy( 'updated_at', 'desc' )->get();
            $etat = 'Achevée';
            $value = 'completed';
            return view ( 'user.user_bookings', compact( 'etat', 'value', 'notification', 'commandes', 'client' ) );
            default:
            return redirect ( '/user_bookings' );
        }
    }

    public function user_delete_favoris( $id ) {
        $like = Likes::where( 'id', $id )->where( 'client_id', \Auth()->user()->client() )->first();
        $like->delete();
        return redirect ( '/user_favourites' );
    }

    public function user_clear_notifications( $id ) {
        $notifications = NotificationCommande::where( 'client_id', $id )->where( 'actionneur', 'prestataire' );
        if ( isset( $notifications ) ) {
            $notifications->delete();
        }
        return redirect ( '/user_dashboard' );

    }

    public function user_demand_service( Request $request ) {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $categories = Categories::where( 'statut', '1' )->get();
        if ( $request->isMethod( 'POST' ) ) {
            $min_price = $request->min_price;
            $max_price = $request->max_price;
            if ( $min_price>$max_price ) {
                $prix = $min_price;
                $min_price = $max_price;
                $max_price = $prix;
            }

            $commande_client = CommandeClient::create( [
                'client_id' =>$client->id,
                'categorie_id'=>$request->categorie,
                'description' => $request->description,
                'nom' => $request->nom,
                'lieu_du_travail' =>$request->lieu_du_travail,
                'date_du_travail' =>$request->date_du_travail,
                'min_price' =>$min_price,
                'max_price' =>$max_price,
                'statut'=>1
            ] );
            return redirect( '/user_service' );
        }
        return view ( 'user.user_booking_form', compact( 'notification', 'client', 'categories' ) );
    }

    public function user_service() {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $categories = Categories::where( 'statut', '1' )->get();
        $commande_client = CommandeClient::where( 'client_id', $client->id )->where( 'statut', 1 )->orderBy( 'updated_at', 'desc' )->get();
        return view ( 'user.user_service', compact( 'notification', 'client', 'categories', 'commande_client' ) );

    }

    public function user_cancel_demanded_service( $id ) {
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $demand_service = CommandeClient::where( 'id', $id )->first();
        $demand_service->update( [
            'statut'=>0
        ] );
        return redirect( '/user_service' );

    }

    public function user_see_available_offers( $id ) {
        $commande_client = CommandeClient::where( 'id', $id )->first();
        $client = Clients::where( 'user_id', \Auth()->user()->this_client()->user_id )->first();
        $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->orderBy( 'created_at', 'desc' )->get();
        $available_offers = Offres::where( 'commande_client_id', $id )->where( 'statut', 1 )->get();
        return view ( 'user.user_available_offers', compact( 'notification', 'client', 'available_offers', 'commande_client' ) );
    }
}

