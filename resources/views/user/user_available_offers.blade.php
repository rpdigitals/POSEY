@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">{{ $commande_client->nom }} </h4>
        <h5 class="widget-title">Offres disponibles </h5>
        <div class="card review-card mb-0">
            <div class="card-body">

                <!-- Review -->
                @foreach ($available_offers as $available_offer)
                    <div class="review-list">
                        <div class="review-img">
                            <img class="rounded img-fluid" src="{{ Storage::url($available_offer->prestataire->photo) }}"
                                alt="">
                        </div>
                        <div class="review-info">
                            <h5><a
                                    href="#">{{ $available_offer->prestataire->nom . ' ' . $available_offer->prestataire->prenom }}</a>
                            </h5>
                            <div class="review-date">Accepté le: {{ $available_offer->created_at->format('d-M-Y') }}</div>
                            <div class="review-date badge badge-info">Prix proposé: @php echo strrev(wordwrap(strrev($available_offer->prix), 3, ' ', true));   @endphp xof
                            </div>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="" class="btn btn-sm bg-info" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $available_offer->id }}"><i class="fas fa-check"></i>
                            Accepter</a>
                    </div>

                    <!-- Confirm acceptation -->
                    <div class="modal fade" id="exampleModal{{ $available_offer->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                        {{ $available_offer->commande_client->nom }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5>Accepter cette prestation</h5><br>
                                    <h6>Cet action sera irreversible</h6><br>

                                    Prestataire : {{ $available_offer->prestataire->nom }}.
                                    {{ $available_offer->prestataire->prenom }}<br>
                                    Prix : {{ $available_offer->prix }}f<br>
                                </div>

                                <form action="/user_book_service_u" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" hidden name="commande_client" value="{{ $commande_client->id }}">
                                    <input type="text" hidden name="available_offer" value="{{ $available_offer->id }}">


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Annuller</button>
                                        <button type="submit" class="btn btn-primary">Confirmer</button>
                                    </div>

                                </form>



                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endsection
