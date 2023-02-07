@extends('../master.master')
@section('content')
    <!-- Modal -->
    <!-- Partie modale pour les evaluations -->
    <!-- Partie modale pour les evaluations -->
    <!-- Partie modale pour les evaluations -->
    <!-- Partie modale pour les evaluations -->
    <!-- Partie modale pour les evaluations -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/user_rate_service/{{ $service->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $service->nom }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="rating-css">
                            <div class="star-icon">
                                @if (\Auth()->user())
                                    @if (\Auth()->user()->client())
                                        @if (null !== $service->notationBy($client->id))
                                            {{-- @if ($service->notationBy($client->id)->count() > 0) --}}
                                            <form action="/user_rate_service/{{ $service->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                @for ($i = 0; $i < $service->evaluation($client->id); $i++)
                                                    <input type="radio" value="{{ $i + 1 }}" name="product_rating"
                                                        checked id="rating{{ $i + 1 }}">
                                                    <label for="rating{{ $i + 1 }}" class="fa fa-star"></label>
                                                @endfor



                                                @for ($j = $i; $j < 5; $j++)
                                                    <input type="radio" value="{{ $j + 1 }}" name="product_rating"
                                                        id="rating{{ $j + 1 }}">
                                                    <label for="rating{{ $j + 1 }}" class="fa fa-star"></label>
                                                @endfor


                                            </form>
                                        @else
                                            <form action="/user_rate_service/{{ $service->id }}" method="POST"
                                                enctype="multipart/form-data">
                                                <input type="radio" value="1" name="product_rating" checked
                                                    id="rating1">
                                                <label for="rating1" class="fa fa-star"></label>
                                                <input type="radio" value="2" name="product_rating" id="rating2">
                                                <label for="rating2" class="fa fa-star"></label>
                                                <input type="radio" value="3" name="product_rating" id="rating3">
                                                <label for="rating3" class="fa fa-star"></label>
                                                <input type="radio" value="4" name="product_rating" id="rating4">
                                                <label for="rating4" class="fa fa-star"></label>
                                                <input type="radio" value="5" name="product_rating" id="rating5">
                                                <label for="rating5" class="fa fa-star"></label>
                                            </form>
                                        @endif
                                    @else
                                        <form action="/user_rate_service/{{ $service->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            <input type="radio" value="1" name="product_rating" checked
                                                id="rating1">
                                            <label for="rating1" class="fa fa-star"></label>
                                            <input type="radio" value="2" name="product_rating" id="rating2">
                                            <label for="rating2" class="fa fa-star"></label>
                                            <input type="radio" value="3" name="product_rating" id="rating3">
                                            <label for="rating3" class="fa fa-star"></label>
                                            <input type="radio" value="4" name="product_rating" id="rating4">
                                            <label for="rating4" class="fa fa-star"></label>
                                            <input type="radio" value="5" name="product_rating" id="rating5">
                                            <label for="rating5" class="fa fa-star"></label>
                                        </form>
                                    @endif
                                @else
                                    <form action="/user_rate_service/{{ $service->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        <input type="radio" value="1" name="product_rating" checked
                                            id="rating1">
                                        <label for="rating1" class="fa fa-star"></label>
                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                        <label for="rating2" class="fa fa-star"></label>
                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                        <label for="rating3" class="fa fa-star"></label>
                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                        <label for="rating4" class="fa fa-star"></label>
                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                        <label for="rating5" class="fa fa-star"></label>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Evaluer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Partie modale pour les evaluations -->
    <!-- Fin Partie modale pour les evaluations -->
    <!-- Fin Partie modale pour les evaluations -->
    <!-- Fin Partie modale pour les evaluations -->
    <!-- Fin Partie modale pour les evaluations -->



    <!-- Pop up des messages pour les evaluations -->
    <!-- Pop up des messages pour les les erreurs d'evaluation -->
    <!-- Pop up des messages pour les les erreurs d'evaluation -->
    <!-- Pop up des messages pour les les erreurs d'evaluation -->
    <!-- Pop up des messages pour les les erreurs d'evaluation -->
    {{-- @if (session()->has('status')) --}}


    {{-- @endif --}}


    <!-- Fin Pop up des messages pour les erreues evaluations -->
    <!-- Fin Pop up des messages pour les erreurs d'evaluation -->
    <!-- Fin Pop up des messages pour les erreurs d'evaluation -->
    <!-- Fin Pop up des messages pour les erreurs d'evaluation -->
    <!-- Fin Pop up des messages pour les erreurs d'evaluation -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-view">
                        <div class="service-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1>{{ $service->nom }}</h1>

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
                            <div class="service-cate">
                                <a href="/search/{{ $service->categorie->id }}">{{ $service->categorie->nom }}</a>
                            </div>
                            <br>



                            <!-- Button trigger modal -->
                            @if ($service->statut == 1)
                                <script src="sweetalert2.all.min.js"></script>
                                <button type="button" class="btn" style="background-color:#d9c505;color:#fff"
                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Evaluer ce service
                                </button>
                            @endif
                            @if (session()->has('rating-success'))
                                <div class="alert-success">
                                    <span class="closebtn"
                                        onclick="this.parentElement.style.display='none';">&times;</span>
                                    <strong>Merci d'avoir évalué ce service! </strong>
                                </div>
                            @endif
                            @if (session()->has('not-booked-service'))
                                <div class="alert-danger">
                                    <span class="closebtn"
                                        onclick="this.parentElement.style.display='none';">&times;</span>
                                    <strong>Vous ne pouvez pas évaluer ce service sans l'avoir commandé</strong>
                                </div>
                            @endif
                        </div>
                        <div class="service-images service-carousel">
                            <div class="images-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ $service->image }}" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>
                        <div class="service-details">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="card service-description">
                                        <div class="card-body">
                                            <h5 class="card-title">Details </h5>
                                            <p class="mb-0">{{ $service->description }}</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="sidebar-widget widget">
                        <div class="service-amount">
                            <span> @php echo strrev(wordwrap(strrev($service->prix), 3, ' ', true));   @endphp XOF</span>
                        </div>
                        @if ($service->statut == 1)
                            <div class="service-book">
                                <a href="/user_book_service/{{ $service->id }}" class="btn btn-primary"> Commander </a>
                            </div>
                        @else
                            <div class="service-book">
                                <a class="btn btn-secondary">Ce service n'est plus disponible
                                </a>
                            </div>
                        @endif
                    </div>
                    <div class="card provider-widget clearfix">
                        <div class="card-body">
                            <h5 class="card-title">Prestataire</h5>
                            <div class="about-author">
                                <div class="about-provider-img">
                                    <div class="provider-img-wrap">
                                        <a href="#">
                                            <img class="img-fluid rounded-circle" alt=""
                                                src="{{ Storage::url($service->prestataire->photo) }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="provider-details">
                                    <a href="#"
                                        class="ser-provider-name">{{ $service->prestataire->nom . ' ' . $service->prestataire->prenom }}</a>
                                    <p class="text-muted mb-1">Membre depuis
                                        {{ $service->prestataire->created_at->format('d-M-Y') }}</p>
                                    @if ($service->prestataire->compte_verifie($service->prestataire->id))
                                        <p class="text-success font-weight-bold">Compte vérifié </p>
                                    @else
                                        <p class="text-danger font-weight-bold">Compte non vérifié </p>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="provider-info">

                                <p class="mb-0"><i class="fas fa-phone-alt"></i>
                                    {{ $service->prestataire->telephone }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
