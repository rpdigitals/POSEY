<?php

namespace App\Http\Controllers;
use App\Models\Commandes;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PorteFeuilles;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller {

    public function make_payement( Request $request, $id ) {
       
        $prestataire = Commandes::where( 'id', $id )->first()->prestataire;
        $transaction = Transactions::create( [
            'commande_id' => $id,
            'client_id' =>\Auth::user()->client()->id,
            'prestataire_id' => $prestataire->id,
            'montant' =>$request->amount,
            'etat' =>'en attente de confirmation',
            'numero_de_transaction' =>$request->number,
            'systeme_de_payement'=>'Mobile'
        ] );
        $date=$transaction->created_at->format('Y-m-d H:i:s');
        $identifier = $transaction->id.'///'.$date;
        $response =  'https://paygateglobal.com/v1/page';
        $apiToken = '38710af9-f48a-460f-9cc8-17ee424b7b34';
        $description = 'Operationment de votre portefeuille électronique';
        $returnURL = 'http://posey.kofcorporation/api/callback_payments' ;

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

    public function make_payement_by_wallet( Request $request, $id ) {
        if ( $request->amount > \Auth()->user()->porte_feuille()->valeur ) {

            return back()->with( 'wallet_insuficient', "Vous n'avez pas suffisement pas credit pour éffectuer cet operation" );
        }

        $prestataire = Commandes::where( 'id', $id )->first()->prestataire;
        $transaction = Transactions::create( [
            'commande_id' => $id,
            'client_id' => \Auth::user()->client()->id,
            'prestataire_id' => $prestataire->id,
            'montant' =>$request->amount,
            'etat' =>'Payé',
            'numero_de_transaction' =>substr( \Auth()->user()->client()->telephone, 1, 11 ),
            'payment_system'=>'wallet'
        ] );

        PorteFeuilles::where( 'user_id', $transaction->commande->client->user->id )->update( [
            'valeur'=>$transaction->commande->client->user->porte_feuille()->valeur - $transaction->montant
        ] );
        PorteFeuilles::where( 'user_id', $transaction->commande->prestataire->user->id )->update( [
            'valeur'=>$transaction->commande->prestataire->user->porte_feuille()->valeur + $transaction->montant
        ] );
        session( [ 'payement-success'=>$transaction->commande->service->nom ,
            ] );

        return back();
    }

    public function response_payment() {
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
        $id=explode('///', $identifier);
        $transaction = Transaction::where( 'id', $id )->first();

        if ( $statusOperation == 1 ) {
            $transaction->update( [
                'etat'=>'Payé'
            ] );

            $PorteFeuille = PorteFeuilles::where( 'user_id', $transaction->commande->prestataire->user->id )->first();
            $PorteFeuille->update( [
                'valeur'=>$PorteFeuille->valeur + $transaction->montant
            ] );
            session( [ 'payement-success'=>$transaction->commande->service->nom ,
            ] );

        } else {
            $transaction = Transaction::where( 'id', $id )->first();
            $transaction->update( [
                'etat'=>'innachevé'
            ] );
            session( [ 'payement-failed'=>$transaction->commande->service->nom, 
            
            ] );

        }

    }
}
