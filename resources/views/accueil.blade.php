@extends('../master.master')
@section('content')
    <!-- Loader -->
    <div class="page-loading">

        <div class="preloader-inner">
            <div class="preloader-square-swapping">
                <div class="cssload-square-part cssload-square-green"></div>
                <div class="cssload-square-part cssload-square-pink"></div>
                <div class="cssload-square-blend"></div>
            </div>
        </div>
    </div>
    <!-- /Loader -->

    <div class="main-wrapper">



        <!-- Hero Section -->
        <section class="hero-section">
            <div class="layer">
                <div class="home-banner"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-search aos" data-aos="fade-up">
                                <h3> <span>No1 du Dépannage au TOGO</span></h3>
                                <p>De milliers de services disponibles</p>

                                <div class="search-cat">
                                    <i class="fas fa-circle"></i>
                                    <span>Les plus populaires</span>
                                    @foreach ($TreePopularCategories as $nom => $id)
                                        <a href="/search/{{ $id }}">{{ $nom }}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Category Section -->
        <section class="category-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2> Categories mises en avant</h2>
                                    <span>De quoi avez-vous besoin?</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="viewall aos" data-aos="fade-up">
                                    <h4><a href="/categories">Voir tout <i class="fas fa-angle-right"></i></a></h4>
                                    <span>Categories mises en avant</span>
                                </div>
                            </div>
                        </div>
                        <div class="catsec">
                            <div class="row">
                                @foreach ($categories as $categorie)
                                    <div class="col-lg-4 col-md-6">
                                        <a href="/search/{{ $categorie->id }}">
                                            <div class="cate-widget aos" data-aos="fade-up">
                                                <img src="{{ $categorie->image }}" alt="">
                                                <div class="cate-title">
                                                    <h3><span><i class="fas fa-circle"></i> {{ $categorie->nom }}</span>
                                                    </h3>
                                                </div>
                                                <div class="cate-count">
                                                    <i class="fas fa-clone"></i>
                                                    {{ $categorie->nombre_de_services_actifs() }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Category Section -->

        <!-- Popular Servides -->
        <section class="popular-services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading aos" data-aos="fade-up">
                                    <h2>Services les plus populaires</h2>
                                    <span>Découvrez nos services les plus sollicités</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="viewall aos" data-aos="fade-up">
                                    <h4><a href="/search/all">Voir tout <i class="fas fa-angle-right"></i></a></h4>
                                    <span>Les plus populaires</span>
                                </div>
                            </div>
                        </div>
                        <div class="service-carousel">

                            <div class="service-slider owl-carousel owl-theme aos" data-aos="fade-up">
                                @foreach ($services as $service)
                                    @if ($service->categorie->statut == 1)
                                        <div class="service-widget">
                                            <div class="service-img">
                                                <a href="/details/{{ $service->id }}">
                                                    <img class="img-fluid serv-img" alt="Service Image"
                                                        src="{{ $service->image }}">
                                                </a>

                                                <div class="item-info">
                                                    <div class="service-user">
                                                        <a href="/details/{{ $service->id }}">
                                                            <img src="{{ Storage::url($service->prestataire->photo) }}"
                                                                alt="">
                                                        </a>
                                                        <span class="service-price">@php echo strrev(wordwrap(strrev($service->prix), 3, ' ', true));   @endphp f
                                                        </span>
                                                    </div>
                                                    <div class="cate-list">
                                                        <a class="bg-yellow"
                                                            href="/search/{{ $service->categorie->id }}">{{ $service->categorie->nom }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-content">
                                                <h3 class="title">
                                                    <a href="/details/{{ $service->id }}">{{ $service->nom }}</a>
                                                </h3>
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
                                                <div class="user-info">
                                                    <div class="row">
                                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                            <span>{{ $service->prestataire->telephone }}</span>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Servides -->


        <section class="how-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading howitworks">
                            <h2>Comment ça marche?</h2>

                        </div>
                        <div class="howworksec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="howwork">
                                        <div class="iconround">
                                            <div class="steps">01</div>
                                            <img src="/assets/img/icon-1.png" alt="">
                                        </div>
                                        <h3>Créez un compte prestataire</h3>
                                        <p>Très simple, créez un compte en renseignant votre adresse mail et un mot de
                                            passe
                                            ensuite.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="howwork">
                                        <div class="iconround">
                                            <div class="steps">02</div>
                                            <img src="/assets/img/icon-2.png" alt="">
                                        </div>
                                        <h3>Renseignez vos informations</h3>
                                        <p>
                                            Complétez avec vos informations personnelles et souscrire à un pack .</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="howwork">
                                        <div class="iconround">
                                            <div class="steps">03</div>
                                            <img src="/assets/img/icon-3.png" alt="">
                                        </div>
                                        <h3>Proposez un service</h3>
                                        <p>
                                            Créer un service sur la plateforme en spécifiant la catégorie de celle-ci.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /our app -->
        <section class="app-set">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="col-md-12">
                            <div class="heading aos" data-aos="fade-up">
                                <h2>Téléchargez notre application mobile</h2>
                                <span>Bientôt disponible sur les plateformes de téléchargement</span>
                            </div>
                        </div>
                        <div class="downlaod-set aos" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a href="#"><img src="assets/img/gp.png" alt="img"></a>
                                </li>
                                <li>
                                    <a href="#"><img src="assets/img/ap.png" alt="img"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="appimg-set aos" data-aos="fade-up">
                            <img src="assets/img/app.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /our app -->



        </script>
        <script src="/assets/js/jquery-3.6.0.min.js"></script>

        <script src="/assets/plugins/aos/aos.js"></script>
    @endsection
