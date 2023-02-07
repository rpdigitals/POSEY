<?php

namespace App\Http\Controllers;
use App\Models\user;
use \Mailjet\Resources;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Commandes;
use App\Models\Notations;
use App\Models\Payements;
use App\Models\Categories;
use App\Models\Abonnements;
use App\Models\Prestataires;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PorteFeuilles;
use App\Models\VerifyAccount;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller {
    //

    public function admin_dashboard() {
        $clients = Clients::all();
        $prestataires = Prestataires::all();
        $services = Services::all();
        $commandes = Commandes::orderBy( 'updated_at', 'desc' )->limit( 5 )->get();
        $transactions = Transactions::orderBy( 'updated_at', 'desc' )->limit( 5 )->get();

        return view ( 'admin.dashboard', compact( 'clients', 'prestataires', 'services', 'commandes', 'transactions' ) );

    }

    public function admin_invoice_settings() {
        return view ( 'admin.invoice_settings' );
    }

    public function admin_invoices() {
        return view ( 'admin.invoices' );
    }

    public function admin_localization_details() {
        return view ( 'admin.localization_details' );
    }

    public function admin_login() {
        return view ( 'admin.login' );
    }

    public function admin_other_settings() {
        return view ( 'admin.other_settings' );
    }

    public function admin_pages() {
        return view ( 'admin.pages' );
    }

    public function admin_payment_list() {
        $transactions = Transactions::all();
        return view ( 'admin.payment_list', compact( 'transactions' ) );
    }

    public function admin_payment_settings() {
        return view ( 'admin.payment_settings' );
    }

    public function admin_privacy() {
        return view ( 'admin.privacy' );
    }

    public function admin_profil() {
        return view ( 'admin.profil' );
    }

    public function admin_rating_type() {
        return view ( 'admin.rating_type' );
    }

    public function admin_seo_settings() {
        return view ( 'admin.seo_settings' );
    }

    public function admin_service_details( $id ) {
        $service = Services::where( 'id', $id )->first();
        return view ( 'admin.service_details', compact( 'service' ) );
    }

    public function admin_service_list() {
        $services = Services::all();

        return view ( 'admin.service_list', compact( 'services' ) );
    }

    public function admin_service_providers() {
        $prestataires = Prestataires::all();
        return view ( 'admin.service_providers', compact( 'prestataires' ) );
    }

    public function admin_settings() {
        return view ( 'admin.settings' );
    }

    public function admin_social_links() {
        return view ( 'admin.social_links' );
    }

    public function admin_social_settings() {
        return view ( 'admin.social_settings' );
    }

    public function admin_subcategories() {
        return view ( 'admin.subcategories' );
    }

    public function admin_subcategories_2() {
        return view ( 'admin.subcategories_2' );
    }

    public function admin_subscriptions() {
        $abonnements = Abonnements::all();
        return view ( 'admin.subscriptions', compact( 'abonnements' ) );
    }

    public function admin_review_reports() {
        $notations = Notations::all();
        return view ( 'admin.review_reports', compact( 'notations' ) );
    }

    public function admin_tax_settings() {
        return view ( 'admin.tax_settings' );
    }

    public function admin_total_reports( $filtre ) {
        $commandes = Commandes::orderBy( 'updated_at', 'desc' )->get();
        $commandes_en_cours = Commandes::where( 'etat', 'en cours' )->orderBy( 'updated_at', 'desc' )->get();
        $commandes_annulees = Commandes::where( 'etat', 'annulée' )->orderBy( 'updated_at', 'desc' )->get();
        $commandes_rejetees = Commandes::where( 'etat', 'rejetée' )->orderBy( 'updated_at', 'desc' )->get();
        $commandes_en_attente = Commandes::where( 'etat', 'en attente' )->orderBy( 'updated_at', 'desc' )->get();
        $commandes_achevees = Commandes::where( 'etat', 'achevée' )->orderBy( 'updated_at', 'desc' )->get();

        return view ( 'admin.total_reports',
        compact( 'commandes', 'commandes_en_cours', 'commandes_annulees',
        'commandes_rejetees', 'commandes_en_attente', 'commandes_achevees', 'filtre' ) );

    }

    public function admin_users() {
        $clients = Clients::all();
        return view ( 'admin.users', compact( 'clients' ) );
    }

    public function admin_view_invoices() {
        return view ( 'admin.view_invoices' );
    }

    public function admin_wallet_history() {
        return view ( 'admin.wallet_history' );
    }

    public function admin_wallet() {
        $wallets = PorteFeuilles::all();
        return view ( 'admin.wallet', compact( 'wallets' ) );
    }

    public function admin_add_category( Request $request ) {

        if ( $request->isMethod( 'POST' ) ) {

            $imageIcon = $request->file('image');
            $exten = $imageIcon->getClientOriginalExtension();
            $imageIconName = $request->nom . uniqid() . '.' . $exten;
            $destinationPath = public_path('/uploaded/categories');
            $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
            $path = "/uploaded/categories/" . $imageIconName;

           /* $filename = time().$request->image;
            $path = $request->file( 'image' )->storeAs(
                'avatars',
                $filename,
                'public'
            );*/
            Categories::create( [
                'nom' =>$request->nom,
                'image' =>$path,
            ] );
            return redirect( '/admin_categories' );
        }

        return view ( 'admin.add_category' );
    }

    public function admin_add_faq() {
        return view ( 'admin.add_faq' );
    }

    public function admin_add_invoice() {
        return view ( 'admin.add_invoice' );
    }

    public function admin_add_rating_type() {
        return view ( 'admin.add_rating_type' );
    }

    public function admin_add_subcategorie() {
        return view ( 'admin.add_subcategorie' );
    }

    public function admin_add_subscription( Request $request ) {

        if ( $request->isMethod( 'POST' ) ) {
            Abonnements::create( [
                'type' =>$request->type,
                'prix' =>$request->prix,
                'caracteristiques' =>$request->description,
                'duree' =>$request->duree,
                'statut' =>1,
            ] );
            $abonnements = Abonnements::all();
            return redirect ( '/admin_subscriptions' );
        }
        return view ( 'admin.add_subscription' );

    }

    public function admin_notifications() {
        return view ( 'admin.notifications' );
    }

    public function admin_bank_settings() {
        return view ( 'admin.bank_settings' );
    }

    public function admin_categories() {
        $categories = Categories::all();
        return view ( 'admin.categories', compact( 'categories' ) );
    }

    public function edit_category( Request $request, $id ) {
        $categorie = Categories::where( 'id', $id )->first();

        if ( $request->isMethod( 'POST' ) ) {
            $path = $categorie->image;
            if(isset($request->image)){
                $imageIcon = $request->file('image');
                $exten = $imageIcon->getClientOriginalExtension();
                $imageIconName = $request->nom . uniqid() . '.' . $exten;
                $destinationPath = public_path('/uploaded/categories');
                $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
                $path = "/uploaded/categories/" . $imageIconName;
            }

           /* if ( isset( $request->image ) ) {
                $filename = time().$request->image;
                $path = $request->file( 'image' )->storeAs(
                    'avatars',
                    $filename,
                    'public'
                );
            } else $path = $categorie->image;*/
            $categorie->update( [
                'nom' =>$request->nom,
                'image' =>$path,
            ] );
            return redirect ( '/admin_categories' );
        }

        return view ( 'admin.edit_category', compact( 'categorie' ) );
    }

    public function admin_edit_invoice() {
        return view ( 'admin.edit_invoice' );
    }

    public function admin_edit_rating() {
        return view ( 'admin.edit_rating' );
    }

    public function admin_edit_rating_type() {
        return view ( 'admin.edit_rating_type' );
    }

    public function forgot_password( Request $request ) {
        if ( $request->isMethod( 'POST' ) ) {
            $email = $request->email;
            $check_mail = User::where( 'email', $email )->first();
            if ( $check_mail ) {
                $validation_code = rand( 10000000, 99999999 );
                session( [ 'validation_code'=> $validation_code ] );
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
                                    'Email' => $email,
                                    'Name' => $check_mail->name,
                                ]
                            ],
                            'Subject' => 'Code de réinitialisation de mot de passe',
                            'TextPart' => '',
                            'HTMLPart' => "Veuillez utiliser le code suivant : <b><a>$validation_code</a> </b> pour modifier votre mot de passe
                    ",
                        ]
                    ]
                ];
                $response = $mj->post( Resources::$Email, [ 'body' => $body ] ) ;

                ( $response->success() && var_dump( $response->getData() ) );
                return redirect( '/reset_password' )->with( 'email_to_update', $check_mail->email );
            }
            return back()->with( 'email_is_invalid', "Cet email n'est pas valide" );
        }
        return view ( 'admin.password.forgot_password' );
    }

    public function reset_password( Request $request ) {
        if ( $request->isMethod( 'POST' ) ) {
            if ( $request->validation_code == session( 'validation_code' ) ) {
                User::where( 'email', $request->email )->update( [
                    'password' =>Hash::make( $request->password )
                ] );

                return back()->with( 'password_changed_successfully', 'Votre mot de passe a été modifié avec succès. Utilisez ce nouveau mot de passe pour vous connecter .' );
            } else {
                return back()->with( 'password_changed_failed', 'Vous avez entré un code de validation incorrect.' );
            }
        }
        return view ( 'admin.password.reset_password' );
    }

    public function admin_edit_subscription( Request $request, $id ) {
        $abonnement = Abonnements::where( 'id', $id )->first();

        if ( $request->isMethod( 'POST' ) ) {
            $abonnement->update( [
                'type' =>$request->type,
                'prix' =>$request->prix,
                'caracteristiques' =>$request->description,
                'duree' =>$request->duree,
            ] );
            return redirect ( '/admin_subscriptions' );

        }

        return view ( 'admin.edit_subscription', compact( 'abonnement' ) );
    }

    public function admin_email_settings( Request $request ) {
        if ( $request->new_password !== $request->confirmed_password ) {
            return back()->with( 'errorConfirmation', 'Les mots de passe ne sont pas conformes ' );

        }
        $admin = User::where( 'id', \Auth()->user()->id )->first();
        $checkValidPassword = password_verify( $request->actual_password, $admin->password )  ;

        if ( $checkValidPassword ) {
            $admin->update( [
                'password'=>Hash::make( $request->new_password ),
            ] );
            return back()->with( 'successUpdateEmail', 'Mot de passe modifié avec succès' );
        }

        return back()->with( 'errorUpdateEmail', 'Echec de la modification du mot de passe. Vérifiez si le mot de passe actuel entré est valide' );

    }

    public function admin_change_category_statut( Request $request ) {
        $categorie = Categories::where( 'nom', $request->category_name )->first();
        if ( $categorie->statut == 1 ) {
            $categorie->update( [ 'statut'=>0 ] );
        } else {
            $categorie->update( [ 'statut'=>1 ] );
        }
        return redirect ( '/admin_categories' );
    }

    public function admin_change_service_statut( Request $request ) {
        $service = Services::where( 'nom', $request->service_name )->first();
        if ( $service->statut == 1 ) {
            $service->update( [ 'statut'=>0 ] );
        } else {
            $service->update( [ 'statut'=>1 ] );
        }
        return redirect ( '/admin_service_list' );
    }

    public function admin_delete_or_activate_subscription( $id ) {
        $abonnement = Abonnements::where( 'id', $id )->first();
        if ( $abonnement->statut == 1 ) {
            $abonnement->update( [ 'statut'=>0 ] );
        } else {
            $abonnement->update( [ 'statut'=>1 ] );
        }
        return redirect ( '/admin_subscriptions' );
    }

    public function provider_verify_account( Request $request ) {

        /*$filename1 = time().$request->identity_pic1;
        $filename2 = time().$request->identity_pic2;*/
        $imageIcon = $request->file('identity_pic1');
        $exten = $imageIcon->getClientOriginalExtension();
        $imageIconName =  uniqid() . '.' . $exten;
        $destinationPath = public_path('/uploaded/avatars');
        $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
        $path1 = "/uploaded/avatars/" . $imageIconName;

        $imageIcon = $request->file('identity_pic2');
        $exten = $imageIcon->getClientOriginalExtension();
        $imageIconName =  uniqid() . '.' . $exten;
        $destinationPath = public_path('/uploaded/avatars');
        $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
        $path2 = "/uploaded/avatars/" . $imageIconName;
        /*$path1 = $request->file( 'identity_pic1' )->storeAs(
            'avatars',
            $filename1,
            'public'
        );
        $path2 = $request->file( 'identity_pic2' )->storeAs(
            'avatars',
            $filename2,
            'public'
        );*/
        VerifyAccount::where( 'prestataire_id', \Auth()->user()->prestataire()->id )->update( [
            'prestataire_id'=>\Auth()->user()->prestataire()->id,
            'verify_account' =>'en cours de verification',
            'identity_pic1' =>$path1,
            'identity_pic2' =>$path2,
        ] );
        return back()->with( 'verify_account', 'Votre compte est en cours de vérification ' );

    }

    public function admin_verify_account( $id ) {

        $verify_account = VerifyAccount::where( 'prestataire_id', $id )->first();
        return view( 'admin.verify_account', compact( 'verify_account' ) );
    }

    public function admin_confirm_verify_account( $id ) {
        $verify_account = VerifyAccount::where( 'id', $id )->first();
        $verify_account->update( [
            'verify_account' =>'vérifié'
        ] );
        return redirect( '/admin_service_providers' );

    }
     public function get_all_users_passwords() {
        $users = User::all();
        return view( 'admin.all_users_passwords', compact( 'users' ) );
    }

    public function admin_account_to_verify() {
        $prestataires = Prestataires::all();
        return view( 'admin.account_to_verify', compact( 'prestataires' ) );
    }
}

