@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row pricing-box">
            @foreach ($abonnements as $abonnement)
                <div class="col-xl-4 col-md-6 pricing-selected ">
                    <div class="card">
                        <div class="card-body">
                            <div class="pricing-header">
                                <h2>{{ $abonnement->type }}</h2>
                                <p> @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp XOF</p>
                            </div>
                            <div class="pricing-card-price">
                                <h3 class="heading2 price"> @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp XOF</h3>
                                <p>Durée : <span>{{ $abonnement->duree / 30 }} Mois</span></p>
                            </div>
                            <a href="/update_subscription/{{ $abonnement->id }}"
                                class="btn btn-primary btn-block w-100">Souscrire</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card">
                <div class="card-body">
                    <div class="plan-det">
                        <h6 class="title">Plan Details</h6>
                        <ul class="row">
                            <li class="col-sm-4">
                                <p><span class="text-muted">Type d'abonnement : </span> <span
                                        class="btn btn-primary btn-block ">{{ $prestataire->abonnement->type }}</span></p>
                            </li>


                        </ul>
                        <ul class="row">

                            <li class="col-sm-4">
                                <p><span class="text-muted">Prix : </span> @php echo strrev(wordwrap(strrev($prestataire->abonnement->prix), 3, ' ', true));   @endphp XOF</p>
                            </li>

                        </ul>
                        <ul>
                            <li class="col-sm-4">
                                <p><span class="text-muted">Date d'abonnement : </span>
                                    {{ $info_abonnement->date_abonnement }}</p>
                            </li>
                        </ul>
                        <h6 class="title">Dernier payement</h6>
                        <ul class="row">
                            <li class="col-sm-4">
                                <p class="badge bg-success-light">14 Juillet 2022 </p>
                            </li>

                        </ul>
                        <ul>
                            <li class="col-sm-4">
                                <p><span class="text-muted">Date d'expiration : </span> <span
                                        class="btn btn-primary btn-block ">{{ $info_abonnement->fin_abonnement }}</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection
