@extends('../master.user')

@section('content')
    <div class="col-xl-9 col-md-8">
        <div class="row">
            <div class="col-lg-4">
                <a href="/user_bookings" class="dash-widget dash-bg-1">
                    <span class="dash-widget-icon">{{ $commandes->count() }}</span>
                    <div class="dash-widget-info">
                        <span>Commandes éffectuées</span>
                    </div>

                </a>
            </div>
            <div class="col-lg-4">
                <a href="/user_favourites" class="dash-widget dash-bg-2">
                    <span class="dash-widget-icon">
                        @php
                            $counterOfNumberOfServicesLiked = 0;
                            foreach ($services as $service) {
                                # code...
                                if ($service->categorie->statut == 1 && $service->likedBy(\Auth()->user()->id)) {
                                    $counterOfNumberOfServicesLiked += 1;
                                }
                            }
                        @endphp
                        {{ $counterOfNumberOfServicesLiked }}</span>
                    <div class="dash-widget-info">
                        <span>Favoris</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/user_reviews" class="dash-widget dash-bg-3">
                    <span class="dash-widget-icon">{{ $notations->count() }}</span>
                    <div class="dash-widget-info">
                        <span>Evaluations</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
