@extends('../master.providers')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Evaluations</h4>
        <div class="card review-card mb-0">
            <div class="card-body">

                <!-- Review -->
                @foreach ($services as $service)
                    @if ($service->notations()->count() > 0)
                        <div class="review-list">
                            <div class="review-img">
                                <img class="rounded img-fluid" src="{{ $service->image }}" alt="">
                            </div>
                            <div class="review-info">
                                <h5><a href="#">{{ $service->nom }}</a></h5>
                                <div class="review-date">créé le {{ $service->created_at->format('d-M-Y') }}</div>


                            </div>
                            <div class="rating">
                                @php
                                    $counter = number_format($service->moyenne_notations());
                                @endphp
                                @for ($i = 0; $i < $counter; $i++)
                                    <i class="fas fa-star filled"></i>
                                @endfor
                                @for ($j = 5; $j > $counter; $j--)
                                    <i class="fas fa-star "></i>
                                @endfor
                                <span class="d-inline-block average-rating">
                                    {{ '(' . $service->moyenne_notations() . ') ' . $service->notations()->count() . ' vote(s)' }}
                                </span>
                            </div>
                        </div>
                        <!-- /Review -->
                    @endif
                @endforeach


            </div>
        </div>
    </div>
@endsection
