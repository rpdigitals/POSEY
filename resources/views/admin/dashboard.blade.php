@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Bienvenue admin !</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="far fa-user"></i>
                                </span>
                                <a href="/admin_users">
                                    <div class="dash-widget-info">
                                        <h3 class="text-dark">{{ $clients->count() }}</h3>
                                        <h6 class="text-muted">Clients</h6>
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-qrcode"></i>
                                </span>
                                <a href="/admin_service_providers">
                                    <div class="dash-widget-info">
                                        <h3 class="text-dark">{{ $prestataires->count() }}</h3>
                                        <h6 class="text-muted">Prestataires</h6>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="far fa-calendar-check"></i>
                                </span>
                                <a href="/admin_service_list">
                                    <div class="dash-widget-info">
                                        <h3 class="text-dark">{{ $services->count() }}</h3>
                                        <h6 class="text-muted">Services</h6>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-user-shield"></i>
                                </span>
                                <a href="/admin_total_reports/all">
                                    <div class="dash-widget-info">
                                        <h3 class="text-dark">{{ $commandes->count() }}</h3>
                                        <h6 class="text-muted">Commandes</h6>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex">

                    <!-- Recent Bookings -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Dernieres commandes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Date</th>
                                            <th>Service</th>
                                            <th>Status</th>
                                            <th>Prix</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($commandes as $commande)
                                            <tr>
                                                <td class="text-nowrap">
                                                    <img class="avatar-xs rounded-circle"
                                                        src="{{ $commande->client->photo }}" alt="User Image">
                                                    {{ $commande->client->nom . ' ' . $commande->client->prenom }}
                                                </td>
                                                <td class="text-nowrap">{{ $commande->created_at->format('d-M-Y') }}</td>
                                                <td>{{ $commande->service->nom }}</td>
                                                <td>
                                                    <span class="
													<?php
             switch ($commande->etat) {
                 case 'en cours':
                     echo 'badge badge-pill badge-prof bg-info';
                     break;
                 case 'en attente':
                     echo 'badge badge-pill badge-prof bg-dark';
                     break;
                 case 'annulée':
                     echo 'badge badge-pill badge-prof bg-danger';
                     break;
                 case 'rejetée':
                     echo 'badge badge-pill badge-prof bg-danger';
                     break;
                 case 'achevée':
                     echo 'badge badge-pill badge-prof bg-success';
                     break;
             }
             ?>
													">
                                                        {{ $commande->etat }}</span>
                                                </td>
                                                <td>
                                                    <div class="font-weight-600"> @php echo strrev(wordwrap(strrev($commande->service->prix), 3, ' ', true));   @endphp XOF</div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /Recent Bookings -->

                </div>
                <div class="col-md-6 d-flex">

                    <!-- Payments -->
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Dernieres Transactions</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Client</th>
                                            <th>Prestataire</th>
                                            <th>Service</th>
                                            <th>Montant</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->updated_at->format('Y-m-d') }}</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ Storage::url($transaction->commande->client->photo) }}">
                                                        </a>
                                                        <a
                                                            href="#">{{ $transaction->commande->client->nom . ' ' . $transaction->commande->client->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-xs me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ Storage::url($transaction->commande->prestataire->photo) }}">
                                                        </a>
                                                        <a
                                                            href="#">{{ $transaction->commande->prestataire->nom . ' ' . $transaction->commande->prestataire->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>{{ $transaction->commande->service->nom }}</td>
                                                <td>@php echo strrev(wordwrap(strrev($transaction->commande->service->prix), 3, ' ', true));   @endphp XOF</td>
                                                <td>
                                                    <span class="<?php
                                                    switch ($transaction->etat) {
                                                        case 'en attente de confirmation':
                                                            echo 'badge badge-pill badge-prof bg-info';
                                                            break;
                                                    
                                                        case 'innachevé':
                                                            echo 'badge badge-pill badge-prof bg-danger';
                                                            break;
                                                    
                                                        case 'Payé':
                                                            echo 'badge badge-pill badge-prof bg-success';
                                                            break;
                                                    }
                                                    ?>">{{ $transaction->etat }}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Payments -->
                @endsection
