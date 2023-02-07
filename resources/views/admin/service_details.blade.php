@extends('../master.admin')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="service-header">
                                <div class="service-inner">
                                    <h2>{{ $service->nom }}</h2>
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
                                        <a href="javascript:void(0);">{{ $service->categorie->nom }}</a>
                                    </div>
                                </div>
                                <div class="service-amount">
                                    <span>{{ $service->prix }} XOF</span>
                                </div>
                            </div>
                            <div class="service-description">
                                <div class="service-images service-carousel">
                                    <div class="images-carousel owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="{{ $service->image }}" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>
                                <h5 class="card-title">Details du Service </h5>
                                <p class="mb-0">{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card provider-widget clearfix">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->prestataire->nom . ' ' . $service->prestataire->prenom }}
                            </h5>
                            <div class="about-author">
                                <div class="about-provider-img">
                                    <div class="provider-img-wrap">
                                        <a href="javascript:void(0);">
                                            <img class="img-fluid rounded-circle" alt=""
                                                src="{{ Storage::url($service->prestataire->photo) }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="provider-details">
                                    <a href="javascript:void(0);"
                                        class="ser-provider-name">{{ $service->prestataire->nom . ' ' . $service->prestataire->prenom }}</a>
                                    <p class="text-muted mb-1">Membre depuis
                                        {{ $service->prestataire->created_at->format('d-M-Y') }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="provider-info">
                                <p class="mb-1"><i class="far fa-envelope"></i> {{ $service->prestataire->user->email }}
                                </p>
                                <p class="mb-0"><i class="fas fa-phone-alt"></i> {{ $service->prestataire->telephone }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>



    </body>


    <!-- Mirrored from html.truelysell.com/template/admin/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:50 GMT -->

    </html>
