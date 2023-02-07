@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h4 class="widget-title mb-0 " style="float:left">Services demandés</h4>
            </div>

        </div>
        {{-- @dd($prestataire->hasAllRights()) --}}
        @if ($prestataire->hasAllRights())
            <div id="filterResponse">
                @foreach ($demanded_services as $demanded_service)
                    @if (in_array($demanded_service->categorie->nom, $prestataire->listCategories()))
                        <div class="bookings">
                            <div class="booking-list">
                                <div class="booking-widget">
                                    <a class="booking-img">
                                        <img src="{{ $demanded_service->categorie->image }}" alt="Service Image">
                                    </a>
                                    <div class="booking-det-info">
                                        <h3>
                                            <a>{{ $demanded_service->categorie->nom }}</a>
                                        </h3>
                                        <ul class="booking-details">
                                            <li><span>Nom</span>{{ $demanded_service->nom }}</li>
                                            <li><span>Lieu</span>{{ $demanded_service->lieu_du_travail }}</li>

                                            <li>
                                                <span>Date</span>{{ $demanded_service->created_at->format('d-M-Y ') }}
                                                <span class="">
                                                </span>
                                            </li>

                                            <li><span>Montant</span> @php echo strrev(wordwrap(strrev($demanded_service->min_price), 3, ' ', true)).' - '.strrev(wordwrap(strrev($demanded_service->max_price), 3, ' ', true));   @endphp XOF</li>
                                            @if ($demanded_service->offer($prestataire->id))
                                                <li class="text-primary"><span>Prix proposé</span> @php echo strrev(wordwrap(strrev($demanded_service->offer($prestataire->id)->prix), 3, ' ', true));   @endphp XOF
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="booking-action">

                                    @if ($demanded_service->offer($prestataire->id))
                                        <a href="" class="btn btn-sm bg-info" data-bs-toggle="modal"><i
                                                class="fas fa-check"></i>
                                            Demande envoyé</a>
                                        <a href="/provider_cancel_accept_demanded_service/{{ $demanded_service->id }}"
                                            class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                            Annuller</a>
                                    @else
                                        <a href="" class="btn btn-sm bg-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $demanded_service->id }} "><i
                                                class="fas fa-check"></i>
                                            Proposer mon offre</a>
                                    @endif



                                </div>
                                <!-- Modal pour renseigner le prix-->
                                <!-- Modal pour renseigner le prix-->
                                <div class="modal fade" id="exampleModal{{ $demanded_service->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Proposez votre prix pour
                                                    ce
                                                    service</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/provider_accept_demanded_service/{{ $demanded_service->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        <label>{{ $demanded_service->min_price }}f-{{ $demanded_service->max_price }}f</label><br>
                                                        <div class="input-group">

                                                            <input class="form-control" type="number" name="prix"
                                                                required min="{{ $demanded_service->min_price }}"
                                                                max="{{ $demanded_service->max_price }}">

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit" class="btn btn-primary">Soumettre</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- fin modalfin modal --}}
                                {{-- fin modalfin modal --}}


                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div class="alert alert-info">
                <h4> Votre compte est actuellement limité</h4>
                Vous devez uploader les photos de votre carte d'identité nationale pour verifier votre compte, afin d'avoir
                un nombre de commandes illimité par mois
                <ul class="list-group list-group">
                    <li class="list-group-item "><i class="fa fa-arrow-right"></i> Etape 1: Allez dans profil</li>
                    <li class="list-group-item "><i class="fa fa-arrow-right"></i> Etape 2: Allez dans la section vérifier
                        mon compte en bas de la page</li>
                    <li class="list-group-item "><i class="fa fa-arrow-right"></i> Etape 3: Uploadez deux photo
                        (Recto-verso)
                        de l'une de vos cartes
                        d'identités
                    </li>
                    <li class="list-group-item "><i class="fa fa-arrow-right"></i> Etape 4: Cliquez sur valider</li>
                    <li class="list-group-item "><i class="fa fa-arrow-right"></i> Votre compte sera vérifié dans quelques
                        instants et vous pourriez avoir un
                        nombre illimité de
                        commandes par mois </li>
                </ul>

            </div>
        @endif
    </div>
    <script src="/assets/js/ajax.js"></script>
@endsection
