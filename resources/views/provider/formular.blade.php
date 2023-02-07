<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/img/iconfav.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <!-- Header -->
        <header class="header">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a href="{{ route('logout') }}" class="navbar-brand fa fa-user" style="color:white">
                    </a>
                    <a href="/" class="navbar-brand logo">
                        <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                    </a>
                    <a href="/" class="navbar-brand logo-small">
                        <img src="/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                    </a>

                </div>


                <ul class="nav header-navbar-rht">

                    <li class="nav-item desc-list">

                        <a href="{{ route('logout') }}" class="nav-link header-login">
                            <span>Se Deconnecter</span>
                        </a>
                    </li>





                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div id="this" class="col-xl-3 col-md-4 theiaStickySidebar">


                        <div class="widget settings-menu d-none d-sm-inline d-xl-inline d-lg-inline d-md-inline">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link active">
                                        <i class="fas fa-user"></i> <span>Informations</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-address-book"></i> <span>Mes Services</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-calendar-check"></i> <span>Liste de commandes</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-user"></i> <span>Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-money-bill-alt"></i> <span>Portefeuille</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-calendar-alt"></i> <span>Abonnement</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="far fa-star"></i> <span>Mes évaluations</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="fas fa-hashtag"></i> <span>Payements</span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-xl-9 col-md-8">
                        <form action="/provider_add" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="widget">
                                <h4 class="widget-title"></h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <h5 class="form-title">Vous devez remplir ce formulaire pour
                                            finaliser votre inscription
                                            en tant que prestataire</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">




                                <div class="col-xl-6">
                                    <label class="me-sm-2">Votre Nom</label>
                                    <input type="text" class="form-control" required name="nom" maxlength="15"
                                        placeholder="Ex: LEGEND">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Votre Prenom</label>
                                    <input type="text" class="form-control" required name="prenom"
                                        maxlength="15" placeholder="Ex: John">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Telephone</label>
                                    <input type="tel" title="Veuillez entrer un numero de télephone correct"
                                        class="form-control" required name="telephone" maxlength="12" value="+228">
                                    @if (session()->has('wrong_number'))
                                        <p class="alert alert-danger">{{ session('wrong_number') }}</p>
                                    @endif
                                </div>

                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Photo de profil</label>
                                    <input type="file" class="form-control" name="photo" accept="image/*">

                                </div>
                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Votre Biographie</label>
                                    <textarea class="form-control" required name="biographie" placeholder="Maximum: 300 caractères" maxlength="300"></textarea>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Choisissez un abonnement</label>
                                    <select class="form-control select provider_category form-select"
                                        title="Abonnement" required name="abonnement" style="padding-top:10px">
                                        @foreach ($abonnements as $abonnement)
                                            <option value="{{ $abonnement->id }}">{{ strtoupper($abonnement->type) }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-9 col-md-8">
                                    <div class="row pricing-box">
                                        @foreach ($abonnements as $abonnement)
                                            <div class="col-xl-4 col-md-6 pricing-selected ">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="pricing-header">
                                                            <h2>{{ strtoupper($abonnement->type) }}</h2>
                                                            <p> @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp XOF</p>
                                                        </div>
                                                        <div class="pricing-card-price">
                                                            <h3 class="heading2 price">
                                                                @php echo strrev(wordwrap(strrev($abonnement->prix), 3, ' ', true));   @endphp XOF
                                                            </h3>
                                                            <p>Durée:
                                                                <span>{{ $abonnement->duree . ' jours' }}</span>
                                                            </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group col-xl-12">
                                    <button class="btn btn-primary ps-5 pe-5" type="submit">Valider</button>
                                </div>

                            </div>
                        </form>
                    </div>








                </div>




            </div>
        </div>
    </div>
    <!-- /Header -->







    <!-- jQuery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Custom JS -->
    <script src="/assets/js/script.js"></script>

</body>

<!-- Mirrored from html.truelysell.com/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:46 GMT -->

</html>
