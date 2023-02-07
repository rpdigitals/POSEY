@extends('../master.user')
@section('content')

    <div class="col-xl-9 col-md-8">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h4 class="widget-title mb-0 " style="float:left">Mes commandes</h4>

            </div>
            <div class="col">
                <a href="/user_demand_service" class="btn btn-primary "><i class="far fa-calendar-check"></i>
                    Demander un service</a>
            </div>
            <div class="col-auto">
                <div class="sort-by">


                    <form action="/user_bookings_filter" method="POST" enctype="multipart/form-data">
                        @csrf
                        <select class="form-control-sm custom-select searchFilter" id="status" name="filter"
                            onchange="submit()">
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
                    </form>
                </div>
            </div>
        </div>
        @if (session()->has('payement-success'))
            <div class="alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Le payement de la prestation du service {{ session('payement-failed') }} a été éffectué avec succès
                    <i class="fa fa-check"></i> </strong>
            </div>
        @endif
        @if (session()->has('payement-failed'))
            <div class="alert-danger">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Votre payement pour la prestation du service{{ session('payement-failed') }} n'a pas
                    aboutit. Réessayer plus tard</strong>
            </div>
        @endif

        <div id="filterResponse">
            @foreach ($commandes as $commande)
                {{-- Modal pour les evaluations  --}}
                {{-- Modal pour les evaluations  --}}
                <div class="modal fade" id="staticBackdrop{{ $commande->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/user_rate_service/{{ $commande->service->id }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $commande->service->nom }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="rating-css">
                                        <div class="star-icon">
                                            @if (\Auth()->user())
                                                @if (\Auth()->user()->client())
                                                    @if (null !== $commande->service->notationBy($client->id))
                                                        {{-- @if ($commande->service->notationBy($client->id)->count() > 0) --}}
                                                        <form action="/user_rate_service/{{ $commande->service->id }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @for ($i = 0; $i < $commande->service->evaluation($client->id); $i++)
                                                                <input type="radio" value="{{ $i + 1 }}"
                                                                    name="product_rating" checked
                                                                    id="rating{{ $i + 1 }}">
                                                                <label for="rating{{ $i + 1 }}"
                                                                    class="fa fa-star"></label>
                                                            @endfor



                                                            @for ($j = $i; $j < 5; $j++)
                                                                <input type="radio" value="{{ $j + 1 }}"
                                                                    name="product_rating" id="rating{{ $j + 1 }}">
                                                                <label for="rating{{ $j + 1 }}"
                                                                    class="fa fa-star"></label>
                                                            @endfor


                                                        </form>
                                                    @else
                                                        <form action="/user_rate_service/{{ $commande->service->id }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            <input type="radio" value="1" name="product_rating"
                                                                checked id="rating1">
                                                            <label for="rating1" class="fa fa-star"></label>
                                                            <input type="radio" value="2" name="product_rating"
                                                                id="rating2">
                                                            <label for="rating2" class="fa fa-star"></label>
                                                            <input type="radio" value="3" name="product_rating"
                                                                id="rating3">
                                                            <label for="rating3" class="fa fa-star"></label>
                                                            <input type="radio" value="4" name="product_rating"
                                                                id="rating4">
                                                            <label for="rating4" class="fa fa-star"></label>
                                                            <input type="radio" value="5" name="product_rating"
                                                                id="rating5">
                                                            <label for="rating5" class="fa fa-star"></label>
                                                        </form>
                                                    @endif
                                                @else
                                                    <form action="/user_rate_service/{{ $commande->service->id }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        <input type="radio" value="1" name="product_rating"
                                                            checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating"
                                                            id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating"
                                                            id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating"
                                                            id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating"
                                                            id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </form>
                                                @endif
                                            @else
                                                <form action="/user_rate_service/{{ $commande->service->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    <input type="radio" value="1" name="product_rating" checked
                                                        id="rating1">
                                                    <label for="rating1" class="fa fa-star"></label>
                                                    <input type="radio" value="2" name="product_rating"
                                                        id="rating2">
                                                    <label for="rating2" class="fa fa-star"></label>
                                                    <input type="radio" value="3" name="product_rating"
                                                        id="rating3">
                                                    <label for="rating3" class="fa fa-star"></label>
                                                    <input type="radio" value="4" name="product_rating"
                                                        id="rating4">
                                                    <label for="rating4" class="fa fa-star"></label>
                                                    <input type="radio" value="5" name="product_rating"
                                                        id="rating5">
                                                    <label for="rating5" class="fa fa-star"></label>
                                                </form>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Evaluer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Modal pour les evaluations  --}}
                {{-- Modal pour les evaluations  --}}
                <div class="bookings">
                    <div class="booking-list">
                        <div class="booking-widget">
                            @if ($commande->service->cree_par == 'prestataire')
                                <a href="/details/{{ $commande->service->id }}" class="booking-img col-sm-4">
                                    <img src="{{ Storage::url($commande->service->image) }}" alt="Service Image">
                                </a>
                            @else
                                <a href="#" class="booking-img col-sm-4">
                                    <img src="{{ Storage::url($commande->service->image) }}" alt="Service Image">
                                </a>
                            @endif
                            <div class="booking-det-info">
                                @if ($commande->service->cree_par == 'prestataire')
                                    <h3>
                                        <a href="/details/{{ $commande->service->id }}">{{ $commande->service->nom }}</a>
                                    </h3>
                                @else
                                    <h3>
                                        <a href="#">{{ $commande->service->nom }}</a>
                                    </h3>
                                @endif
                                <ul class="booking-details">
                                    <li>
                                        <span>Date</span>{{ $commande->created_at->format('d-M-Y à H:i') }}
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
                                    </li>

                                    <li><span>Montant</span> @php echo strrev(wordwrap(strrev($commande->service->prix), 3, ' ', true));   @endphp XOF</li>

                                    <li><span>Numero</span> {{ $commande->prestataire->telephone }}</li>
                                    <li>
                                        <span>Prestataire</span>
                                        <div class="avatar avatar-xs me-1">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{ $commande->prestataire->photo }}">
                                        </div>
                                        {{ $commande->prestataire->nom . ' ' . $commande->prestataire->prenom }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="chatify" class="btn btn-sm bg-info" target="_blank"><i class="far fa-eye"></i>
                                Discussions</a>
                            @if (isset($commande->transaction()->etat))
                                @if ($commande->transaction()->etat == 'Payé')
                                    <a class="btn btn-sm bg-success"><i class="fa fa-check"></i>
                                        {{ $commande->transaction()->etat }}</a>
                                @else
                                    @if ($commande->transaction()->etat == 'en attente de confirmation')
                                        <a href="" class="btn btn-sm bg-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="far fa-circle"></i>
                                            {{ $commande->transaction()->etat }} </a>
                                    @else
                                        <a href="" class="btn btn-sm bg-danger" data-bs-toggle="modal"><i
                                                class="far fa-times" aria-hidden="true"></i>
                                            Echec</a>
                                        <a href="" class="btn btn-sm bg-warning" data-bs-toggle="modal"
                                            data-bs-target="#confirm_payment_modal{{ $commande->id }}"><i
                                                class="far fa-money-bill-alt" aria-hidden="true"></i>
                                            Effectuer un payement</a>
                                        <a href="" class="btn btn-sm bg-warning" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop{{ $commande->id }}"><i class="far fa-star"
                                                aria-hidden="true"></i>
                                            Evaluer </a>
                                    @endif
                                @endif
                            @else
                                @if ($commande->etat == 'achevée')
                                    <a href="" class="btn btn-sm bg-warning" data-bs-toggle="modal"
                                        data-bs-target="#confirm_payment_modal{{ $commande->id }}"><i
                                            class="far fa-money-bill-alt" aria-hidden="true"></i>
                                        Effectuer un payement</a>
                                    <a href="" class="btn btn-sm bg-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop{{ $commande->id }}"><i class="far fa-star"
                                            aria-hidden="true"></i>
                                        Evaluer </a>
                                    {{-- @else
                                    <a href="/annulation_commande/{{ $commande->id }}" class="btn btn-sm bg-danger-light"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-times"></i>
                                        Annuller
                                        la commande</a> --}}
                                @endif
                            @endif


                        </div>

                    </div>

                    <!-- Payment comfirmation modal -->
                    <!-- Payment comfirmation modal -->
                    <div class="modal account-modal fade multi-step" id="confirm_payment_modal{{ $commande->id }}"
                        data-keyboard="false" data-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header p-0 border-0">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-header">
                                        <h3>{{ $commande->service->nom }}</h3>

                                    </div>

                                    <!-- payment Form -->
                                    <!-- payment Form -->
                                    <form method="POST" action="/make_payment/{{ $commande->id }}">
                                        @csrf
                                        <h6>Veuillez saisir les informations du payement</h6>
                                        <div class="form-group form-focus">
                                            <label class="focus-label">Operateur</label>
                                            <select class="form-control " required name="operator">
                                                <option value="2">Flooz</option>
                                                <option value="1">T-Money</option>
                                            </select>
                                        </div>

                                        <div class="form-group form-focus">
                                            <label class="focus-label">Votre numero de telephone</label>
                                            <input type="tel" class="form-control" value="228" name="number"
                                                required>
                                        </div>
                                        <div class="form-group form-focus">
                                            <label class="focus-label">Montant (XOF)</label>

                                            <input type="number" class="form-control" name="amount" required
                                                value="{{ $commande->service->prix }}" readonly>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-block btn-lg login-btn"
                                                id="register-button" type="submit">Valider</button>
                                        </div>
                                        <div class="login-or"> <span class="or-line"></span>
                                            <span class="span-or">ou</span>
                                        </div>
                                        <div class="d-grid">
                                            <a href=""
                                                data-bs-target="#confirm_payment_modal_by_wallet{{ $commande->id }}"
                                                data-bs-toggle="modal" class="btn btn-primary btn-block btn-lg login-btn"
                                                type="submit">Payez via votre
                                                porte-feuille</a>
                                        </div>


                                    </form>
                                    <!-- payment Form -->
                                    <!-- payment Form -->


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /payment confirmation modal -->
                    <!-- /payment confirmation modal -->
                    <!-- /payment confirmation modal -->


                    <!-- Payment comfirmation by wallet modal -->
                    <!-- Payment comfirmation by wallet modal -->
                    <div class="modal account-modal fade multi-step"
                        id="confirm_payment_modal_by_wallet{{ $commande->id }}" data-keyboard="false"
                        data-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header p-0 border-0">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-header">
                                        <h3>Confirmation de payement</h3>

                                    </div>

                                    <!-- payment by wallet Form -->
                                    <!-- payment by wallet Form -->
                                    @if ($commande->service->prix <
                                        \Auth()->user()->porte_feuille()->valeur)
                                        <form method="POST" action="/make_payment_by_wallet/{{ $commande->id }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h6>Vous allez payez {{ $commande->service->prix }} f à
                                                {{ $commande->prestataire->nom . ' ' . $commande->prestataire->prenom }}

                                                pour la prestation du service {{ $commande->service->nom }}</h6>


                                            <input hidden type="number" class="form-control" name="amount" required
                                                value="{{ $commande->service->prix }}">


                                            <button class="btn btn-primary btn-block btn-lg login-btn"
                                                id="register-button" type="submit">Payer</button>

                                        </form>
                                    @else
                                        <h6>Vous n'avez pas assez de credit pour payer ce service</h6>
                                        <a href="/user_wallet" class="btn btn-primary">Rechargez votre porte-feuille</a>
                                    @endif
                                </div>



                                <!-- payment by wallet Form -->
                                <!-- payment by wallet Form -->


                            </div>
                        </div>
                    </div>

                    <!-- /payment by wallet confirmation modal -->
                    <!-- /payment by wallet confirmation modal -->
                    <!-- /payment by wallet confirmation modal -->
                </div>
            @endforeach
        </div>
        {{-- <div class="pagination">
            <ul>
                <li class="active">
                    <a href="/javascript:void(0);">1</a>
                </li>
                <li>
                    <a href="/javascript:void(0);">2</a>
                </li>
                <li>
                    <a href="/javascript:void(0);">3</a>
                </li>
                <li>
                    <a href="/javascript:void(0);">4</a>
                </li>
                <li class="arrow">
                    <a href="/javascript:void(0);"><i class="fas fa-angle-right"></i></a>
                </li>
            </ul>
        </div> --}}

    </div>




    <script src="/assets/js/ajax.js"></script>
@endsection
