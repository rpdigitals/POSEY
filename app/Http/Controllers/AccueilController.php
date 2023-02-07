<?php

namespace App\Http\Controllers;
use App\Models\Likes;
use \Mailjet\Resources;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Categories;
use App\Models\Prestataires;
use Illuminate\Http\Request;
use App\Models\NotificationCommande;

class AccueilController extends Controller {
    //

    public function accueil() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        $categories = Categories::where( 'statut', 1 )->inRandomOrder()->limit( 9 )->get();
        $categorieAll = Categories::where( 'statut', 1 )->get();

        // Most popular categories
        // Most popular categories
        $popularCategoriesArray = array();
        $TreePopularCategories = array();

        foreach ( $categorieAll as $categorie ) {
            # code...
            $popularCategoriesArray[ $categorie->id ] = $categorie->nombre_de_services() ;

        }

        arsort( $popularCategoriesArray );
        foreach ( $popularCategoriesArray as $key => $value ) {
            # code...
            if ( count( $TreePopularCategories )<3 ) {
                $categorie = Categories::where( 'id', $key )->first();
                $nombre_de_services = $value;
                $TreePopularCategories[ $categorie->nom ] = $categorie->id;

            }

        }

        // end  Most popular categories
        // end  Most popular categories
        $services = Services::where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->orderBy( 'id', 'desc' )->limit( 6 )->get();
        return view ( 'accueil', compact( 'prestataire', 'notifications', 'notification', 'client', 'categories', 'services', 'TreePopularCategories' ) );
    }

    public function about_us() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view ( 'about_us', compact( 'prestataire', 'notifications', 'notification', 'client' ) );
    }

    public function contact_us() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view ( 'contact_us', compact( 'prestataire', 'notifications', 'notification', 'client' ) );
    }

    public function faq() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view ( 'faq', compact( 'prestataire', 'notifications', 'notification', 'client' ) );
    }

    public function terms_conditions() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view ( 'terms_conditions', compact( 'prestataire', 'notifications', 'notification', 'client' ) );
    }

    public function privacy() {
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view ( 'privacy', compact( 'prestataire', 'notifications', 'notification', 'client' ) );
    }

    public function search( $id ) {
        $id = $id;
        $selected = $id;
        $categories = Categories::where( 'statut', 1 )->get();
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        if ( $id === 'all' ) {
            $services = Services::where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->orderBy( 'updated_at', 'desc' )->get();
            return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected' ) );

        }

        $allservices = Services::where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->orderBy( 'updated_at', 'desc' )->get();
        $services = Services::where( 'categorie_id', $id )->where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->orderBy( 'updated_at', 'desc' )->get();
        return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'allservices' ) );
    }

    public function details( $id ) {

        $id = $id;
        $service = Services::where( 'id', $id )->first();
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }

        return view ( 'details', compact( 'prestataire', 'notifications', 'notification', 'service', 'client' ) );
    }

    public function categories() {
        $categories = Categories::orderBy( 'updated_at', 'desc' )->get();
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        return view( 'categories', compact( 'prestataire', 'notifications', 'notification', 'categories', 'client' ) );
    }

    public function filtre_recherche( Request $request ) {
        $categories = Categories::all();
        $client = null;
        $prestataire = null;
        $notification = null;
        $notifications = null;
        if ( \Auth()->user() ) {
            if ( Auth()->user()->client() ) {
                $client = Clients::where( 'user_id', \Auth()->user()->id )->first();
                $notification = NotificationCommande::where( 'client_id', $client->id )->where( 'actionneur', 'prestataire' )->get();
            }
            if ( \Auth()->user()->prestataire() ) {
                $prestataire = Prestataires::where( 'user_id', \Auth()->user()->id )->first();
                $notifications = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->get();
            }
        }
        $selected = $request->categorie;
        $filtre = $request->trie;
        $allservices = Services::where( 'statut', 1 )->where( 'cree_par', 'prestataire' )->get();
        if ( $request->categorie == 'all' ) {
            $services = Services::where( 'statut', 1 )->where( 'cree_par', 'prestataire' );

            switch( $request->trie ) {
                case 'moins_cher':

                $services = $services->orderBy( 'prix', 'asc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );
                break;
                case 'plus_cher':

                $services = $services->orderBy( 'prix', 'desc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );
                break;
                case 'recent':

                $services = $services->orderBy( 'created_at', 'desc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );

            }
        } else {

            $servicesSelect = Services::where( 'categorie_id', $request->categorie )->where( 'statut', 1 );

            switch( $request->trie ) {
                case 'moins_cher':
                $services =  $servicesSelect->orderBy( 'prix', 'asc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );
                case 'plus_cher':
                $services = $servicesSelect->orderBy( 'prix', 'desc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );
                case 'recent':
                $services = $servicesSelect->orderBy( 'created_at', 'desc' )->get();
                return view ( 'search', compact( 'prestataire', 'notifications', 'notification', 'services', 'client', 'categories', 'selected', 'filtre', 'allservices' ) );

            }
        }
    }

    public function favoris( Request $request ) {
        $service_id = $request-> service_id;
        $checkUserHasAlreadyLiked = Likes::where( 'service_id', $service_id )->where( 'client_id', \Auth()->user()->client()->id )->first();
        if ( null !== $checkUserHasAlreadyLiked ) {
            if ( $checkUserHasAlreadyLiked->value == 1 ) {
                $checkUserHasAlreadyLiked->update( [
                    'client_id' =>\Auth()->user()->client()->id ,
                    'service_id'=>$service_id,
                    'value'=>-1,
                ] );
            } else {

                $checkUserHasAlreadyLiked->update( [
                    'client_id' =>\Auth()->user()->client()->id ,
                    'service_id'=>$service_id,
                    'value'=>1,
                ] );
            }

        } else {
            Likes::create( [
                'client_id' =>\Auth()->user()->client()->id,
                'service_id'=>$service_id,
                'value'=>1
            ] );
        }

    }

    public function posey() {
        return view( 'posey' );
    }

}
