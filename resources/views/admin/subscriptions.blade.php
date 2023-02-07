@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Abonnements</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a href="/admin_add_subscription" class="btn btn-primary add-button">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row pricing-box ">
                @foreach ($abonnements as $abonnement)
                    <div class="col-md-6 col-lg-4 col-xl-3 ">
                        <div class="card">
                            <div class="card-body active">
                                <div class="pricing-header">
                                    <h2>{{ $abonnement->type }}</h2>
                                    <p> @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp </p>
                                </div>
                                <div class="pricing-card-price">
                                    <h3 class="heading2 price"> @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp XOF</h3>
                                    <p>Durée: <span>{{ $abonnement->duree / 30 }} Mois</span></p>
                                </div>
                                <ul class="pricing-options">
                                    <li><i class="far fa-check-circle"></i> {{ $abonnement->caracteristiques }}</li>
                                </ul>

                                <div> <a href="/admin_edit_subscription/{{ $abonnement->id }}"
                                        class="btn btn-primary btn-block w-100">Modifier</a>
                                </div>
                                <br>
                                @if ($abonnement->statut == 1)
                                    <div> <a href="/admin_delete_or_activate_subscription/{{ $abonnement->id }}"
                                            class="btn btn-danger btn-block w-100">Supprimer</a>
                                    </div>
                                @else
                                    <div> <a href="/admin_delete_or_activate_subscription/{{ $abonnement->id }}"
                                            class="btn btn-success btn-block w-100">Activer</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    </div>

    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/subscriptions.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:34 GMT -->

    </html>
