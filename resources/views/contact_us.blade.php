@extends('../master.master')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-title">
                        <h2>Nous contacter</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <section class="contact-us">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-queries">
                            @if (Session()->has('email_sent_successfuly'))
                                <div class="alert alert-warning">
                                    {{ Session('email_sent_successfuly') }}
                                    <br />
                                    <a href="/" class="btn btn-primary">Ok</a>
                                </div>
                            @endif
                            <h4 class="mb-4">N'hésitez pas à nous écrire via ce formulaire</h4>
                            <div class="row">
                                <form method="post" action="/contact_us_mail" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Votre nom</label>
                                        <input class="form-control" type="text" required name="nom">
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Votre prénom</label>
                                        <input class="form-control" type="text" required name="prenom">
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Votre adresse mail</label>
                                        <input class="form-control" type="email" required name="email">
                                    </div>
                                    <div class="form-group col-xl-6">
                                        <label class="me-sm-2">Numéro de téléphone</label>
                                        <input class="form-control" type="text" required name="telephone">
                                    </div>
                                    <div class="form-group col-xl-12">
                                        <label class="me-sm-2">Message</label>
                                        <textarea class="form-control" rows="5" required name="message"></textarea>
                                    </div>
                                    <div class="col-xl-12 mb-4">
                                        <button class="btn btn-primary btn-lg ps-5 pe-5" type="submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-details">
                            <div class="contact-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="contact-data">
                                    <h4>Adresse</h4>
                                    <p>Agoè minamadou non loin de l’école ESA, Lomé - TOGO</p>
                                </div>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <i class="fas fa-phone-alt"></i>
                                <div class="contact-data">
                                    <h4>Téléphone</h4>
                                    <p>+22870441636 </p>
                                    <p>+22893554740</p>
                                </div>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <i class="fab fa-facebook"></i>
                                <div class="contact-data">
                                    <h4>Facebook</h4>
                                    <p>Posey</p>
                                </div>
                            </div>
                            <hr>
                            <div class="contact-info">
                                <i class="far fa-envelope"></i>
                                <div class="contact-data">
                                    <h4>contact@beposey.com</h4>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
