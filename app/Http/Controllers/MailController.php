<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mailjet\Resources;

class MailController extends Controller {
    //

    public function contact_us_mail( Request $request ) {

        $mj = new \Mailjet\Client( '700c9e86a092ca806793901e4a07f3be', '545b4824927540f9687f2acf4dec24d2', true, [ 'version' => 'v3.1' ] );
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => 'raphaelafatsao3@outlook.com',
                        'Name' => 'Posey',
                    ],
                    'To' => [
                        [
                            'Email' => 'raphaelup07@gmail.com',
                            'Name' => 'POSEY-ADMIN'
                        ]
                    ],
                    'Subject' => 'Message client',
                    'TextPart' => 'Message du client ',
                    'HTMLPart' => "$request->message. <br>
                    Ce message a été envoyé par :<br>
                    $request->nom $request->prenom <br>
                    Email : $request->email <br>
                    Téléphone:$request->telephone",
                ]
            ]
        ];
        $response = $mj->post( Resources::$Email, [ 'body' => $body ] ) ;

        ( $response->success() && var_dump( $response->getData() ) );
        return back()->with( 'email_sent_successfuly', 'Merçi pour votre message. Notre equipe vous répondra dans les meilleurs délais ' );
    }
}
