<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Prestataires;

class DashboardController extends Controller {
    public function final_inscription() {
        

        if ( \Auth::user()->hasRole( 'user' ) ) {
            return redirect( '/user_formular' );
        } elseif ( \Auth::user()->hasRole( 'provider' ) ) {
            return redirect( '/provider_formular' );
        } elseif ( \Auth::user()->hasRole( 'admin' ) ) {
            return redirect( '/admin_dashboard' );

        }
    }

    public function dashboard_user() {
        if ( \Auth::user()->hasRole( 'user' ) ) {
            if ( null !== Clients::where( 'user_id', \Auth::user()->id )->first() );
            {
                return redirect( '/user_dashboard' );

            }
            return redirect( '/user_formular' );

        } elseif ( \Auth::user()->hasRole( 'provider' ) ) {
            if ( null !== Prestataires::where( 'user_id', \Auth::user()->id )->first() );
            {
                return redirect( '/provider_dashboard' );
            }
            return redirect( '/provider_formular' );

        } elseif ( \Auth::user()->hasRole( 'admin' ) ) {

            return redirect( '/admin_dashboard' );

        }
    }
}
