@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Tableau de bord</h4>
        <div class="row">
            <div class="col-lg-4">
                <a href="/provider_booking_list" class="dash-widget dash-bg-1">
                    <span class="dash-widget-icon">{{ $nombre_de_commandes }}</span>
                    <div class="dash-widget-info">
                        <span>Commandes</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/provider_services" class="dash-widget dash-bg-2">
                    <span class="dash-widget-icon">{{ $nombre_de_services }}</span>
                    <div class="dash-widget-info">
                        <span>Services</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <span href="#" class="dash-widget dash-bg-3">
                    <a class="dash-widget-icon">{{ $notification->count() }}</a>
                    <div class="dash-widget-info">
                        <span>Notifications</span>
                    </div>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card alert alert-success">
                    Félicitations {{ $prestataire->prenom . ' ' . $prestataire->nom }}, <br>
                    Votre compte prestataire a été créé avec succès. L'ouverture de la plateforme est prévue pour le 26 Décembre 2022.<br>
                    En attendant, vous pouvez ajouter vos services.
                </div>
            </div>
        </div>
        <div class="card mb-0">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <div class="card-body">
                        <h6 class="title">Plan Details</h6>
                        <div class="sp-plan-name">
                            <h6 class="title">
                                {{ strtoupper($prestataire->abonnement->type) }}<span
                                    class="badge badge-success badge-pill">Active</span>
                            </h6>
                            <p> Date d'abonnement : <span class="text-base"></span>{{ $info_abonnement->date_abonnement }}
                            </p>
                        </div>
                        <ul class="row">
                            <li class="col-6 col-lg-6">
                                <p>Fin de validité : {{ $info_abonnement->fin_abonnement }}</p>
                            </li>
                            <li class="col-6 col-lg-6">
                                <p>Prix : @php echo strrev(wordwrap(strrev($prestataire->abonnement->prix), 3, ' ', true));   @endphp XOF</p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sp-plan-action card-body">
                        <div class="mb-2">
                            <a href="/provider_subscription" class="btn btn-primary"><span>Changer de type
                                    d'abonnement</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
