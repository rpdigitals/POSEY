@extends('../master.master')
@section('content')

    <body>

        <div class="main-wrapper">


            <!-- Breadcrumb -->
            <div class="breadcrumb-bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-title">
                                <h2>Qui sommes-nous?</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <section class="about-us">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="about-blk-content">
                                <h4>Posey</h4>
                                <p>
                                    Posey, le n°1 du dépannage au TOGO. Posey est une plateforme permettant à
                                    toute personne de trouver rapidement un prestataire pour un besoin.
                                    Commandez des travailleurs, artisans, coursiers pour vos différentes tâches
                                    quotidiennes.
                                </p>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-blk-image">
                                <img src="/assets/img/about.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="call-us">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <span>Plateforme gratuite</span>
                        <h2>Plateforme 100% sécurisée</h2>
                        <p>
                            Tu connais bien ton métier, tu es sympa, courtois, tu
                            as un bon sang froid? Rejoins-nous pour une merveilleuse aventure.
                        </p>
                    </div>
                    <div class="col-6 call-us-btn">
                        <a href="/" class="btn btn-call-us"data-bs-target="#login_modal" data-bs-toggle="modal">Créer
                            un compte maintenant</a>

                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works -->
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


        </div>
    @endsection
