@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h4 class="widget-title mb-0">Liste de vos commandes</h4>
            </div>
            <div class="col-auto">
                <div class="sort-by">
                    <form action="/provider_bookings_filter" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select class="form-control-sm custom-select searchFilter" id="status" name="filter"
                            onchange="this.form.submit()">
                            <option value="all">Tout</option>
                            <option value="inprogress">En Cours</option>
                            <option value="rejected">Rejetées</option>
                            <option value="cancelled">Annulées</option>
                            <option value="completed">Achevées</option>
                            <option value="pending">En Attente</option>
                            @if (isset($etat))
                                {
                                <option value="{{ $value }}" selected>{{ $etat }}</option>
                                }
                            @endif
                        </select>
                        {{-- <button class="form-control" type="submit">Filtrer</button> --}}
                    </form>
                </div>
            </div>
        </div>

        @foreach ($commandes as $commande)
            <div id="dataList">
                <div class="bookings">
                    <div class="booking-list">
                        <div class="booking-widget">
                            <a href="#" class="booking-img col-sm-4">
                                <img src="{{ Storage::url($commande->service->image) }}" alt="User Image">
                            </a>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="#">{{ $commande->service->nom }}</a>
                                </h3>
                                <ul class="booking-details">
                                    <li>
                                        <span>Client</span>
                                        <div class="avatar avatar-xs me-1">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ $commande->client->photo }}">
                                        </div>
                                        {{ $commande->client->nom . ' ' . $commande->client->prenom }}
                                    </li>
                                    <li>
                                        <span>Date </span> {{ $commande->created_at->format('d-M-Y à H:i') }}
                                    </li>

                                    <li><span>Montant </span> @php echo strrev(wordwrap(strrev($commande->service->prix), 3, ' ', true));   @endphp XOF</li>
                                    <li><span>Lieu </span> {{ $commande->lieu_du_travail }}</li>
                                    <li><span>Telephone </span> {{ $commande->client->telephone }}</li>

                                    <li><span class="
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
                                            {{ $commande->etat }}</span></li>



                                </ul>
                            </div>
                        </div>
                        @if ($commande->etat == 'en cours')
                            <div class="booking-action">
                                <a href="/achever_commande/{{ $commande->id }}" class="btn btn-sm bg-info-light"><i
                                        class="fas fa-check"></i>Achever</a>
                                <a href="chatify" class="btn btn-sm bg-info"><i class="far fa-eye"></i>
                                    Discussions</a>
                            </div>
                        @else
                            @if ($commande->etat == 'achevée')
                                <div class="booking-action">
                                    <a class="btn btn-sm bg-info-light"><i class="fas fa-check"></i> Achevée</a>
                                    <a href="chatify" class="btn btn-sm bg-info"><i class="far fa-eye"></i>
                                        Discussions</a>
                                </div>
                            @else
                                <div class="booking-action">
                                    <a href="/accepter_commande/{{ $commande->id }}" class="btn btn-sm bg-info-light"><i
                                            class="fas fa-check"></i> Commencer</a>
                                    <a href="chatify" class="btn btn-sm bg-info"><i class="far fa-eye"></i>
                                        Discussions</a>
                                    <a href="/rejeter_commande/{{ $commande->id }}" class="btn btn-sm bg-danger-light"><i
                                            class="fas fa-times"></i> Rejeter la commande</a>
                                </div>
                            @endif
                        @endif

                    </div>
                </div>
        @endforeach


        {{-- <div class="pagination">
            <ul>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li class="arrow">
                    <a href="#"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div> --}}
    </div>
    </div>
@endsection
