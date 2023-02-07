<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\Prestataires;
use App\Models\Commandes;
use App\Models\Abonnements;
use App\Models\Notations;
use App\Models\Categories;
use App\Models\Services;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AjaxController extends Controller {
    //

    public function check_email_register( Request $request ) {
        $email = $request->email;
        $check_mail = User::where( 'email', $email )->first();
        if ( null == $check_mail ) {
            echo '';
        } else {
            echo 'Cet email est déja utilisé';
            exit();
        }

    }

    public function check_email_register_provider( Request $request ) {
        $email = $request->email;
        $check_mail = User::where( 'email', $email )->first();
        if ( null == $check_mail ) {
            echo '';
        } else {
            echo 'Cet email est déja utilisé';
            exit();
        }

    }

    public function check_identifiers( Request $request ) {

        $email = $request->email;
        $password = Hash::make( $request->password );
        $all_users = User::all();
        $user = User::where( 'email', $email )->first();
        if ( $user ) {
            if ( $user->client() ) {
                if ( Hash::check( $request->password, $user->password ) ) {
                    return '';
                } else {
                    return 'Vos identifiants de connexion sont incorrects';
                }
            } else {
                return 'Vos identifiants de connexion sont incorrects';

            }
            return 'Vos identifiants de connexion sont incorrects';

        }
        exit();
    }

    public function check_identifiers_provider( Request $request ) {
        $email = $request->email;
        $password = Hash::make( $request->password );
        $all_users = User::all();
        $user = User::where( 'email', $email )->first();
        if ( $user ) {
            if ( $user->prestataire() ) {
                if ( Hash::check( $request->password, $user->password ) ) {
                    return '';
                } else {
                    return 'Vos identifiants de connexion sont incorrects';
                }
            } else {
                return 'Vos identifiants de connexion sont incorrects';

            }
            return 'Vos identifiants de connexion sont incorrects';

        }
        exit();
    }

    public function dynamic_search( Request $request ) {
        $services = Services::where( 'nom', 'Like', '%'. $request->keyword.'%' )->get();

        return $services;

    }

}