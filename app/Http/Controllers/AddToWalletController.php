<?php

namespace App\Http\Controllers;
use App\Models\Commandes;
use App\Models\AddToWallet;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PorteFeuilles;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class AddToWalletController extends Controller {
    public function add_to_wallet( Request $request ) {
        $add_to_wallet = AddToWallet::create( [
            'user_id' => \Auth::user()->id,
            'montant' =>$request->amount,
            'status' =>'pending'
        ] );
        $date=$add_to_wallet->created_at ;
        $identifier = $add_to_wallet->id.'///'.$date->format('Y-m-d H:i:s');
        $response =  'https://paygateglobal.com/v1/page';
        $apiToken = '38710af9-f48a-460f-9cc8-17ee424b7b34';
        $description = 'Operationment de votre portefeuille électronique';
        $returnURL = 'http://posey.kofcorporation/api/callback_add_to_wallet' ;

        $url = 'https://paygateglobal.com/api/v1/pay';
        $params = array(
            'auth_token' => $apiToken,
            'phone_number' =>$request->number,
            'amount' => $request->amount,
            'description' => $description,
            'identifier' => $identifier,
            'network' =>( $request->operator == 1 )?'TMONEY':'FLOOZ'

        );

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_POST, 1 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 60 );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 60 );

        $result = curl_exec( $ch );
        if ( curl_errno( $ch ) !== 0 ) {
            error_log( 'cURL error when connecting to ' . $url . ' : ' . curl_error( $ch ) );
        }

        curl_close( $ch );

        $result = json_decode( curl_exec( $ch ), true );
        $txReference = $result[ 'tx_reference' ];
        $status = $result[ 'status' ];
        return back();
    }

    public function response_add_to_wallet() {
        $identifier = request( 'identifier' );
        $txReference = request( 'tx_reference' );
        $statusOperation = 1;
        $url = 'https://paygateglobal.com/api/v1/status';
        $params = array(
            'auth_token' => '38710af9-f48a-460f-9cc8-17ee424b7b34',
            'tx_reference' => $txReference,
        );

        // $ch = curl_init();
        // curl_setopt( $ch, CURLOPT_URL, $url );
        // curl_setopt( $ch, CURLOPT_POST, 1 );
        // curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        // curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
        // curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 60 );
        // curl_setopt( $ch, CURLOPT_TIMEOUT, 60 );

        // $result = curl_exec( $ch );
        // if ( curl_errno( $ch ) !== 0 ) {
        //     error_log( 'cURL error when connecting to ' . $url . ': ' . curl_error( $ch ) );
        // }

        // curl_close( $ch );

        $result = json_decode( curl_exec( $ch ), true );
        if ( $result[ 'status' ] == '0' ) {
            $statusOperation = 1;
        }
        $id=explode('///',$identifier);
        $add_to_wallet =  AddToWallet::where( 'id', $id )->first();


        if ( $statusOperation == 1 ) {

            $add_to_wallet->update( [
                'status'=>'success',
            ] );
            $porte_feuille = PorteFeuilles::where( 'user_id', $add_to_wallet->user_id )->first();
            $porte_feuilles->update( [ 'valeur' => $porte_feuille->valeur+$add_to_wallet->montant ] );
             session( [ 'add-to-wallet-success'=> $add_to_wallet->montant,
            ] );

        }else{
              session( [ 'add-to-wallet-failed'=> $add_to_wallet->montant,
            ] );

        }

    }
}
