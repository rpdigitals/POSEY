@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row align-items-center mb-4">
            <div class="col">
                <h4 class="widget-title mb-0 " style="float:left">Services demandés</h4>
            </div>
            <div class="col">
                <a href="/user_demand_service" class="btn btn-primary "><i class="far fa-calendar-check"></i>
                    Demander un service</a>
            </div>
        </div>
        <div id="filterResponse">
            @foreach ($commande_client as $commande)
                <div class="bookings">
                    <div class="booking-list">
                        <div class="booking-widget">
                            <a href="/details/{{ $commande->categorie->id }}" class="booking-img">
                                <img src="{{ Storage::url($commande->categorie->image) }}" alt="Service Image">
                            </a>
                            <div class="booking-det-info">
                                <h3>
                                    <a href="/details/{{ $commande->categorie->id }}">{{ $commande->categorie->nom }}</a>
                                </h3>
                                <ul class="booking-details">
                                    <li><span>Nom</span>{{ $commande->nom }}</li>
                                    <li><span>categorie</span>{{ $commande->categorie->nom }}</li>

                                    <li>
                                        <span>Date</span>{{ $commande->created_at->format('d-M-Y') }}
                                        <span class="">
                                        </span>
                                    </li>

                                    <li><span>Montant</span> @php echo strrev(wordwrap(strrev($commande->min_price), 3, ' ', true)).' - '.strrev(wordwrap(strrev($commande->max_price), 3, ' ', true));   @endphp XOF</li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking-action">
                            <a href="/user_see_available_offers/{{ $commande->id }}" class="btn btn-sm bg-info"><i
                                    class="far fa-eye"></i>
                                Offres
                                disponibles</a>

                            <a href="/user_cancel_demanded_service/{{ $commande->id }}"
                                class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i>
                                Annuller</a>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="/assets/js/ajax.js"></script>
@endsection
