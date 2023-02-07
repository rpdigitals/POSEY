@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Liste des commandes</h3>
                    </div>
                    
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">

            </div>
            <!-- /Search Filter -->

            <ul class="nav nav-tabs menu-tabs">
                <li class="nav-item {!! Request::is('admin_total_reports/all') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/all">Tout<span
                            class="badge badge-primary">{{ $commandes->count() }}</span></a>
                </li>
                <li class="nav-item {!! Request::is('admin_total_reports/pending') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/{{ 'pending' }}">En attente <span
                            class="badge badge-primary">{{ $commandes_en_attente->count() }}</span></a>
                </li>
                <li class="nav-item {!! Request::is('admin_total_reports/inprogress') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/{{ 'inprogress' }}">En cours <span
                            class="badge badge-primary">{{ $commandes_en_cours->count() }}</span></a>
                </li>
                <li class="nav-item {!! Request::is('admin_total_reports/completed') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/{{ 'completed' }}">Achevées <span
                            class="badge badge-primary">{{ $commandes_achevees->count() }}</span></a>
                </li>
                <li class="nav-item {!! Request::is('admin_total_reports/rejected') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/{{ 'rejected' }}">Rejectées <span
                            class="badge badge-primary">{{ $commandes_rejetees->count() }}</span></a>
                </li>
                <li class="nav-item {!! Request::is('admin_total_reports/cancelled') ? 'active' : '' !!}">
                    <a class="nav-link" href="/admin_total_reports/{{ 'cancelled' }}">Annulées <span
                            class="badge badge-primary">{{ $commandes_annulees->count() }}</span></a>
                </li>
            </ul>
            <?php
            switch ($filtre) {
                case 'pending':
                    $commandes = $commandes_en_attente;
                    break;
                case 'inprogress':
                    $commandes = $commandes_en_cours;
                    break;
                case 'cancelled':
                    $commandes = $commandes_annulees;
                    break;
                case 'completed':
                    $commandes = $commandes_achevees;
                    break;
                case 'rejected':
                    $commandes = $commandes_rejetees;
                    break;
                case 'all':
                    $commandes = $commandes;
                    break;
            }
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Client</th>
                                            <th>Prestataire</th>
                                            <th>Service</th>
                                            <th>Montant</th>
                                            <th>Status</th>
                                            <th>Derniere action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        @foreach ($commandes as $commande)
                                            <?php $counter += 1; ?>

                                            <tr>
                                                <td>{{ $counter }}</td>
                                                <td>{{ $commande->created_at->format('d-M-Y') }}</td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $commande->client->photo }}">
                                                        </a>
                                                        <a
                                                            href="javascript:void(0);">{{ $commande->client->nom . ' ' . $commande->client->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="table-avatar">
                                                        <a href="#" class="avatar avatar-sm me-2">
                                                            <img class="avatar-img rounded-circle" alt=""
                                                                src="{{ $commande->prestataire->photo }}">
                                                        </a>
                                                        <a
                                                            href="javascript:void(0);">{{ $commande->prestataire->nom . ' ' . $commande->prestataire->prenom }}</a>
                                                    </span>
                                                </td>
                                                <td>{{ $commande->service->nom }}</td>
                                                <td> @php echo strrev(wordwrap(strrev($commande->service->prix), 3, ' ', true));   @endphp f</td>
                                                <td>
                                                    <label
                                                        class="
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
													">{{ $commande->etat }}</label>
                                                </td>
                                                <td>{{ $commande->updated_at->format('d-M-Y à H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/total-report.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:33 GMT -->

    </html>
