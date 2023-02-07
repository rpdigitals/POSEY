@extends('../master.user')
@section('content')
    <div class="col-xl-9 col-md-8">
        <h4 class="widget-title">Evaluations</h4>
        <div class="card review-card mb-0">
            <div class="card-body">
                @foreach ($notations as $notation)
                    <div class="review-list">
                        <div class="review-img">
                            <a href="/details/{{ $notation->service->id }}"><img class="rounded img-fluid"
                                    src="{{ Storage::url($notation->service->image) }}" alt=""></a>
                        </div>
                        <div class="review-info">
                            <h5><a href="#">{{ $notation->service->nom }}</a></h5>
                            <div class="review-date">{{ $notation->created_at->format('d-M-Y') }}</div>

                            <div class="review-user">
                                <img class="avatar-xs rounded-circle"
                                    src="{{ Storage::url($notation->service->prestataire->photo) }}" alt="">
                                {{ $notation->service->prestataire->nom . ' ' . $notation->service->prestataire->prenom }}
                            </div>
                        </div>
                        <div class="rating-css {{ $notation->service->id }} ">
                            <div class="star-icon">
                                <form action="/user_rate_service/{{ $notation->service->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @for ($i = 0; $i < $notation->service->evaluation($client->id); $i++)
                                        <input type="radio" value="{{ $i + 1 }}" name="product_rating" checked
                                            id="rating{{ $i + 1 }}{{ $notation->service->id }}">
                                        <label for="rating{{ $i + 1 }}{{ $notation->service->id }}"
                                            class="fa fa-star "></label>
                                    @endfor
                                    @for ($j = $i; $j < 5; $j++)
                                        <input type="radio" value="{{ $j + 1 }}" name="product_rating"
                                            id="rating{{ $j + 1 }}{{ $notation->service->id }}">
                                        <label for="rating{{ $j + 1 }}{{ $notation->service->id }}"
                                            class="fa fa-star"></label>
                                    @endfor
                                    @if ($notation->service->statut == 1)
                                        <button type="submit" class="btn    " style="background-color:#d9c505;color:#fff">
                                            Réevaluer ce service
                                        </button>
                                    @else
                                        <a class="btn btn-secondary">
                                            Service supprimé
                                        </a>
                                    @endif


                                    <?php $i = 0;
                                    $j = 0; ?>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
