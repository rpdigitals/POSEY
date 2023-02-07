<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Offres;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Commandes;
use App\Models\Notations;
use App\Models\Categories;
use App\Models\Abonnements;
use App\Models\Prestataires;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\PorteFeuilles;
use App\Models\VerifyAccount;
use App\Models\CommandeClient;
use App\Models\InfoAbonnement;
use App\Models\NotificationCommande;
use Illuminate\Console\View\Components\Alert;

class ProviderAccountController extends Controller {
    //

    public function provider_dashboard() {

        //Recuperation de l'objet prestataire
      
      
            
        
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       //recuperation Informations Abonnement
       
       $info_abonnement=InfoAbonnement::where('prestataire_id',$prestataire->id)->first();
        //services crée par le  prestataire
        $services=Services::where('prestataire_id',$prestataire->id)->where('statut',1)->get();
        $nombre_de_services=$services->count(); 
        //commandes obtenues par le  prestataire
        $commandes=Commandes::where('prestataire_id',$prestataire->id)->get();
        $nombre_de_commandes=$commandes->count();   
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 
        return view ('provider.dashboard',compact(
            'prestataire','services','commandes','nombre_de_commandes','nombre_de_services',
            'info_abonnement','notification'    
        ));
    }

    public function provider_formular(){
        $abonnements=Abonnements::where('statut',1)->get();
        $userIdOfProvider=\Auth()->user()->id; 
         return view ('provider.formular',compact('userIdOfProvider','abonnements'));
     }
     public function provider_add(Request $request){
      $array = [ '90', '91', '92', '93', '96', '97', '98', '99', '70', '79' ];
        if ( in_array( substr( $request->telephone, 4, 2 ), $array ) == false or substr( $request->telephone, 0, 4 ) !== '+228' or strlen( $request->telephone ) !== 12 ) {
            return back()->with( 'wrong_number', 'Veuillez saisir un numero de telephone valide' );
        }
        
      



       
    /* if ( null == $request->file( 'photo' ) ) {

            $path = User::where( 'id', 1 )->first()->avatar;

        }else{
            $filename=time().$request->photo;
            $path=$request->file('photo')->storeAs(     
            'avatars',
            $filename,
            'public'
        );  
}*/

            $path = "/default_avatar.png";
            if ($request->hasfile('photo')) {
                $imageIcon = $request->file('photo');
                $exten = $imageIcon->getClientOriginalExtension();
                $imageIconName = $request->nom . uniqid() . '.' . $exten;
                $destinationPath = public_path('/uploaded/avatars');
                $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
                $path = "/uploaded/avatars/" . $imageIconName;
            }
       
        Prestataires::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'photo' =>$request->photo,
            'biographie' =>$request->biographie,
            'telephone' =>$request->telephone,
            'abonnement_id'=>$request->abonnement,
            'photo' =>$path,
            'user_id' =>\Auth()->user()->id

        ]);
        $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
        $user = User::where( 'id', \Auth()->user()->id )->first();
        
        Portefeuilles::create( [
            'user_id' =>$user->id,
            'valeur'=>0,
            'dernier_ajout' =>0
        ] );
        $user->update(
            [
                'name'=>$request->nom.' '.$request->prenom,
            ]
        );
      
       
        $duree_abonnement=$prestataire->abonnement->duree;
        InfoAbonnement::create([
            'date_abonnement' =>date('Y-m-d H:i:s'),
            'fin_abonnement' =>date('Y-m-d H:i:s',strtotime('+'.$duree_abonnement.'days')),
            'prestataire_id'=>$prestataire->id,
        ]);
         VerifyAccount::create( [
            'prestataire_id'=>$prestataire->id,
            'verify_account' =>'non vérifié',
        ] );
        
         return redirect("/provider_dashboard");
     }


    public function provider_availability(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 
        
        return view ('provider.availability',compact('prestataire','notification'));
    }
    public function provider_settings(Request $request){
       
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       $categories=Categories::all();
       $abonnements=Abonnements::all();

       if($request->isMethod('POST')){
        $array = [ '90', '91', '92', '93', '96', '97', '98', '99', '70', '79' ];
        if ( in_array( substr( $request->telephone, 4, 2 ), $array ) == false or substr( $request->telephone, 0, 4 ) !== '+228' or strlen( $request->telephone ) !== 12 ) {
            return back()->with( 'wrong_number', 'Veuillez saisir un numero de telephone valide' );
        }
        $path=$prestataire->photo;
        if(isset($request->photo)){
            $imageIcon = $request->file('photo');
            $exten = $imageIcon->getClientOriginalExtension();
            $imageIconName = $request->nom . uniqid() . '.' . $exten;
            $destinationPath = public_path('/uploaded/avatars');
            $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
            $path = "/uploaded/avatars/" . $imageIconName;
        }
        /*
        if(isset($request->photo)){
        $filename=time().$request->photo;
        $path=$request->file('photo')->storeAs(
            'avatars',
            $filename,
            'public'
        );
    }else $path=$prestataire->photo;*/
        
        $prestataire->update([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'telephone' => $request->telephone,
            'photo' =>$path,
            'biographie' =>$request->biographie,
        ]);
        $prestataire->user->update([
            'email' =>$request->email,
        ]);
       }

        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

        return view ('provider.settings',compact('prestataire','categories','abonnements','notification'));
    }

    public function update_subscription($id){
        $abonnement=Abonnements::where('id',$id)->first();
        $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
        $prestataire->update([
            'abonnement_id' =>$id,
        ]);
         $info_abonnement=InfoAbonnement::where( 'prestataire_id',$prestataire->id )->first();
         $info_abonnement->update([
            'date_abonnement' =>date('Y-m-d H:i:s'),
            'fin_abonnement' =>date('Y-m-d H:i:s',strtotime('+'.$abonnement->duree.'days')),
        ]);
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

        return redirect("/provider_dashboard");

    }
    public function provider_wallet(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 
        $transactions=Transactions::where('prestataire_id',$prestataire->id)->get();
        $total_recu=0;
         if ( $transactions->count() > 0 ) {
            foreach ( $transactions as $transaction ) {

                $total_recu += $transaction->montant;

            }
        }
        return view ('provider.wallet',compact('prestataire','notification','transactions','total_recu'));
    }
    public function provider_reviews(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       $services=Services::where('prestataire_id',$prestataire->id )->get();
    
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

        return view ('provider.reviews',compact('prestataire','notification','services'));
    }
    public function provider_payments(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 
        $transactions=Transactions::where('prestataire_id',$prestataire->id)->get();
        return view ('provider.payments',compact('prestataire','notification','transactions'));
    }
    public function provider_booking_list(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       $commandes=Commandes::where('prestataire_id',$prestataire->id)->orderBy('updated_at','desc')->get();
      
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

      
        return view ('provider.booking_list',compact('prestataire','commandes','notification'));
    }
    public function provider_subscription(){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
        $abonnements=Abonnements::where('statut',1)->get();
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

        $info_abonnement=InfoAbonnement::where( 'prestataire_id',$prestataire->id )->first();
        return view ('provider.subscription',compact('prestataire','abonnements','info_abonnement','notification'));
    }
    public function provider_services(){
          //Recuperation de l'objet prestataire
        //dd(public_path('/uploaded/services'));
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->get();

        $services = Services::where( 'prestataire_id', $prestataire->id )->where( 'cree_par', 'prestataire' )->get();
        $commandes = Commandes::where( 'prestataire_id', $prestataire->id )->get();

        return view ( 'provider.services', compact( 'prestataire', 'services', 'notification' ) );
    }

    public function provider_chats() {
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->get();
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();

        return view ( 'provider.chats', compact( 'notification', 'prestataire' ) );
    }

    public function provider_add_service( Request $request ) {
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->get();

        if ( $request->isMethod( 'POST' ) ) {

            $imageIcon = $request->file('image_illustration');
            $exten = $imageIcon->getClientOriginalExtension();
            $imageIconName = $request->nom_du_service . uniqid() . '.' . $exten;
            $destinationPath = public_path('/uploaded/services');
            $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
            $path = "/uploaded/services/" . $imageIconName;
            

           /* $filename = time().$request->image_illustration;
            $path = $request->file( 'image_illustration' )->storeAs(
                'services',
                $filename,
                'public'
            );*/

            Services::create( [
                'nom'=>$request->nom_du_service,
                'prix' =>$request->prix,
                'image'=>$path,
                'prestataire_id'=>$prestataire->id,
                'description'=>$request->description,
                'categorie_id'=>$request->categorie_id,
                'cree_par'=>'prestataire',
                'statut' =>1
            ] );
            return redirect( '/provider_dashboard' );
        }

        //pour faire l'heritage de master provider sans la partie widget menu
       

        
       //recuperation des categories
        $categories=Categories::all();
        return view ('provider.add_service',compact('prestataire','categories','notification'));
    }


    public function provider_edit_service(Request $request, $idS){
       $prestataire=Prestataires::where('user_id',\Auth()->user()->this_prestataire()->user_id)->first();
       $categories=Categories::all();
        $notification=NotificationCommande::where('prestataire_id',$prestataire->id)->where('actionneur','client')->orderBy( 'created_at', 'desc' )->get(); 

       $service=Services::where('id',$idS)->first();
       //on verifie si le service appartient bien au prestataire qui tente de le modifier 
            //au cas ou l'identifiant du service est changé dans l'url par le prestataire 
       if($service->prestataire_id==\Auth()->user()->prestataire()->id){
       
        
        if($request->isMethod('POST')){
           
            $path=$service->image;
            if(isset($request->image_illustrative)){
                $imageIcon = $request->file('image_illustrative');
                $exten = $imageIcon->getClientOriginalExtension();
                $imageIconName = $request->nom_du_service . uniqid() . '.' . $exten;
                $destinationPath = public_path('/uploaded/services');
                $ulpoadImageSuccess = $imageIcon->move($destinationPath, $imageIconName);
                $path = "/uploaded/services/" . $imageIconName;
            }
          /* if(isset($request->image_illustration)){
        $filename=time().$request->image_illustration;
        $path=$request->file('image_illustration')->storeAs(
            'services',
            $filename,
            'public'
        );      
    }else $path=$service->image;*/
                
                $service->update([
                'nom'=>$request->nom_du_service,
                'prix' =>$request->prix,
                'image'=>$path,
                'description'=>$request->description,
                'prestataire_id'=>$prestataire->id,
                'categorie_id'=>$request->categorie_id,
                'statut' =>1
                ]);
           return redirect("/provider_dashboard");
        }
        return view ('provider.edit_service', compact('prestataire','categories','service','notification'));

    }
    return back()->with->message('Vous ne pouvez pas modifier un service que vous n\'avez pas créé' );

    }

    public function provider_delete_service( Request $request, $idS ) {

        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $categories = Categories::all();
        $service = Services::where( 'id', $idS )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->orderBy( 'created_at', 'desc' )->get();

        //on verifie si le service appartient bien au prestataire qui tente de le modifier
        //au cas ou l'identifiant du service est changé dans l'url par le prestataire
        if ( $service->prestataire_id == \Auth()->user()->prestataire()->id ) {

            $service->update( [
                'statut' =>0
            ] );
            return redirect( '/provider_services' );
        }
        return back()->with( 'message', 'Vous ne pouvez pas modifier un service qui ne vous appartient pas' );

    }

    public function provider_notifications() {
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->orderBy( 'created_at', 'desc' )->get();

        return view ( 'provider.notifications', compact( 'prestataire', 'notification' ) );
    }

    public function provider_clear_notifications( $id ) {
        $notifications = NotificationCommande::where( 'prestataire_id', $id )->where( 'actionneur', 'client' );
        if ( isset( $notifications ) ) {
            $notifications->delete();
        }
        return redirect ( '/provider_dashboard' );

    }

    public function provider_bookings_filter( Request $request ) {
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->orderBy( 'created_at', 'desc' )->get();

        switch( $request->filter ) {
            case 'pending':
            $etat = 'en attente';
            $value = 'pending';

            $commandes = Commandes::where( 'etat', 'en attente' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            case 'cancelled':
            $etat = 'Annulée';
            $value = 'cancelled';

            $commandes = Commandes::where( 'etat', 'annulée' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            case 'inprogress':
            $etat = 'En cours';
            $value = 'in progress';

            $commandes = Commandes::where( 'etat', 'en cours' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            case 'in progress':
            $etat = 'En cours';
            $value = 'in progress';

            $commandes = Commandes::where( 'etat', 'en cours' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            case 'rejected':
            $etat = 'rejetée';
            $value = 'rejected';

            $commandes = Commandes::where( 'etat', 'rejetée' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            case 'completed':
            $etat = 'achevée';
            $value = 'completed';

            $commandes = Commandes::where( 'etat', 'achevée' )->where( 'prestataire_id', $prestataire->id )->orderBy( 'updated_at', 'asc' )->get();
            return view ( 'provider.booking_list', compact( 'value', 'etat', 'commandes', 'notification', 'prestataire' ) );
            default:
            return redirect ( '/provider_booking_list' );
        }
    }

    public function demanded_services() {
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();

        $demanded_services = CommandeClient::where( 'statut', 1 )->orderBY( 'created_at', 'desc' )->get();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->orderBy( 'created_at', 'desc' )->get();

        return view( 'provider.demanded_services', compact( 'prestataire', 'demanded_services', 'notification' ) ) ;
    }

    public function provider_accept_demanded_service( Request $request, $id ) {
        $prestataire = Prestataires::where( 'user_id', \Auth()->user()->this_prestataire()->user_id )->first();
        $demanded_service = CommandeClient::where( 'id', $id )->first();
        $notification = NotificationCommande::where( 'prestataire_id', $prestataire->id )->where( 'actionneur', 'client' )->orderBy( 'created_at', 'desc' )->get();
        Offres::create( [
            'commande_client_id' => $demanded_service->id,
            'prestataire_id' => $prestataire->id,
            'statut' =>1,
            'prix' =>$request->prix
        ] );
        return redirect( '/demanded_services' );
    }

    public function provider_cancel_accept_demanded_service( $id ) {
        Offres::where( 'commande_client_id', $id )->delete();
        return redirect( '/demanded_services' );

    }

    public function achever_commande( $id ) {
        $commande = Commandes::where( 'id', $id )->first();
        $commande->update( [
            'etat' =>'achevée'
        ] );
        return redirect( '/provider_booking_list' );

    }

}
