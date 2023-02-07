<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:12:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/iconfav.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/plugins/owlcarousel/owl.theme.default.min.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="/assets/plugins/aos/aos.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

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


        <!-- Header des utilisateurs inscrits -->
        <!-- Header des utilisateurs inscrits -->
        <!-- Header des utilisateurs inscrits -->
        <!-- Header des utilisateurs inscrits -->
        @if (\Auth()->user())
            <header class="header">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="/#;">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="/" class="navbar-brand logo">
                            <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="/" class="navbar-brand logo-small">
                            <img src="/assets/img/icon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="/" class="menu-logo">
                                <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="/#;"> <i class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="{!! Request::is('/') ? 'active' : '' !!} ">
                                <a href="/">Accueil </a>
                            </li>

                            <li class="{!! Request::is('categories') ? 'active' : '' !!}">
                                <a href="/categories">Categories</a>
                            </li>
                            <li class="{!! Request::is('search/all') ? 'active' : '' !!}">
                                <a href="/search/all">Rechercher <i class="fas fa-search"></i></a>
                            </li>
                            @if (\Auth()->user()->client())
                                <li class="{!! Request::is('user_dashboard') ? 'active' : '' !!}">
                                    <a href="/user_dashboard">Mon compte <i class="fas fa-chevron-down"></i></a>

                                </li>
                            @endif

                            @if (\Auth()->user()->prestataire())
                                <li class="{!! Request::is('provider_dashboard') ? 'active' : '' !!}">
                                    <a href="/provider_dashboard">Mon compte </a>
                                </li>
                            @endif

                            @if (!\Auth()->user()->client() &&
                                !\Auth()->user()->prestataire())
                                <li class="{!! Request::is('provider_dashboard') ? 'active' : '' !!}">
                                    <a href="/admin_dashboard">Admin </a>
                                </li>
                            @endif


                        </ul>
                    </div>

                    @if (\Auth()->user()->client())


                        <ul class="nav header-navbar-rht">
                            <li class="nav-item desc-list wallet-menu">
                                <a href="/user_wallet" class="nav-link header-login">
                                    <img src="/assets/img/wallet.png" alt=""
                                        class="me-2 wallet-img"><span></span>{{ \Auth()->user()->porte_feuille()->valeur }}
                                    XOF
                                </a>
                            </li>

                            <!-- Notifications -->
                            <li class="nav-item dropdown logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-bell"></i> <span
                                        class="badge badge-pill bg-yellow">{{ $notification->count() }}</span>
                                </a>
                                <div class="dropdown-menu notify-blk dropdown-menu-end notifications">
                                    <div class="topnav-dropdown-header">
                                        <span class="notification-title">Notifications</span>
                                        <a href="{{ route('login') }}" class="clear-notification"> Tout supprimer </a>

                                    </div>
                                    <div class="noti-content">
                                        <ul class="notification-list">
                                            @foreach ($notification as $notif)
                                                <li class="notification-message">
                                                    <a href="#">
                                                        <div class="media d-flex">
                                                            <span class="avatar avatar-sm flex-shrink-0">
                                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                                    src="{{ Storage::url($notif->prestataire->photo) }}">
                                                            </span>
                                                            <div class="media-body flex-grow-1">
                                                                <p class="noti-details"> <span
                                                                        class="noti-title">{{ $notif->prestataire->nom .
                                                                            ' ' .
                                                                            $notif->prestataire->prenom .
                                                                            ' ' .
                                                                            $notif->contenu .
                                                                            ' du service <<' .
                                                                            $notif->service->nom .
                                                                            ' >>' }}</span>
                                                                </p>
                                                                <p class="noti-time"><span
                                                                        class="notification-time">{{ $notif->created_at->format('d-M-Y à H:i') }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                </div>
                            </li>
                            <!-- /Notifications -->

                            <!-- chat -->
                            <!-- chat -->
                            <li class="nav-item logged-item">
                                <a href="/chatify" class="nav-link" target="_blank">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- /chat -->

                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="user-img">
                                        <img class="rounded-circle" src="{{ Storage::url($client->photo) }}"
                                            alt="">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ Storage::url($client->photo) }}" alt="">
                                        </div>
                                        <div class="user-text">
                                            <h6>{{ $client->nom . ' ' . $client->prenom }}</h6>
                                            <p class="text-muted mb-0">Client</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="/user_dashboard">Tableau de bord</a>
                                    <a class="dropdown-item" href="/user_favourites">Favoris</a>
                                    <a class="dropdown-item" href="/user_bookings">Mes commandes</a>
                                    <a class="dropdown-item" href="/user_service">Services demandés</a>
                                    <a class="dropdown-item" href="/user-settings">Profil</a>
                                    <a class="dropdown-item" href="/search/all">Services</a>
                                    <a class="dropdown-item" href="/user_wallet">Porte-feuille</a>
                                    <a class="dropdown-item" href="/chatify" target="_blank">Discussions</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Se déconnecter</a>
                                </div>
                            </li>
                            <!-- /User Menu -->

                        </ul>
                    @endif
                    @if (\Auth()->user()->prestataire())

                        <ul class="nav header-navbar-rht">

                            <li class="nav-item desc-list">

                                <a href="/provider_add_service" class="nav-link header-login">
                                    <i class="fas fa-plus-circle me-1"></i> <span>Ajouter un Service</span>
                                </a>
                            </li>


                            <!-- Notifications -->
                            <li class="nav-item dropdown logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fas fa-bell"></i> <span
                                        class="badge badge-pill bg-yellow">{{ $notifications->count() }}</span>
                                </a>
                                <div class="dropdown-menu notify-blk dropdown-menu-end notifications">
                                    <div class="topnav-dropdown-header">
                                        <span class="notification-title">Notifications</span>
                                        <a href="/provider_clear_notifications/{{ $prestataire->id }}"
                                            class="clear-noti"> Tout
                                            supprimer </a>
                                    </div>
                                    <div class="noti-content">
                                        <ul class="notification-list">
                                            @foreach ($notifications as $notif)
                                                <li class="notification-message">
                                                    <a href="/provider_notifications">
                                                        <div class="media d-flex">
                                                            <span class="avatar avatar-sm flex-shrink-0">
                                                                <img class="avatar-img rounded-circle"
                                                                    alt="User Image"
                                                                    src="{{ Storage::url($notif->client->photo) }}">
                                                            </span>
                                                            <div class="media-body flex-grow-1">
                                                                <p class="noti-details"> <span
                                                                        class="noti-title">{{ $notif->client->nom .
                                                                            ' ' .
                                                                            $notif->client->prenom .
                                                                            ' ' .
                                                                            $notif->contenu .
                                                                            ' <<' .
                                                                            $notif->service->nom .
                                                                            ' >>' }}</span>
                                                                </p>
                                                                <p class="noti-time"><span
                                                                        class="notification-time">{{ $notif->created_at->format('d-M-Y à H:i') }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </li>
                            <!-- /Notifications -->

                            <!-- chat -->
                            <li class="nav-item logged-item">
                                <a href="/chatify" class="nav-link" target="_blank">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- /chat -->

                            <!-- User Menu -->
                            <li class="nav-item dropdown has-arrow logged-item">
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="user-img">
                                        <img class="rounded-circle" src="{{ $prestataire->photo }}"
                                            alt="" width="31">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle"
                                                src="{{ $prestataire->photo }}" alt="">
                                        </div>
                                        <div class="user-text">
                                            <h6 class="text-truncate">
                                                {{ $prestataire->nom . ' ' . $prestataire->prenom }}</h6>
                                            <p class="text-muted mb-0">Prestataire</p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="/provider_dashboard">Tableau de bord</a>
                                    <a class="dropdown-item" href="/provider_services">Mes services</a>
                                    <a class="dropdown-item" href="/demanded_services">Services demandés</a>
                                    <a class="dropdown-item" href="/provider_booking_list">Liste des commandes</a>
                                    <a class="dropdown-item" href="/provider_settings">Profil </a>
                                    <a class="dropdown-item" href="/provider_wallet">Porte-feuille</a>
                                    <a class="dropdown-item" href="/provider_subscription">Abonnement</a>
                                    <a class="dropdown-item" href="/provider_reviews">Mes évaluations</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Deconnexion</a>
                                </div>
                            </li>
                            <!-- /User Menu -->


                        </ul>
                    @endif
                </nav>
            </header>
            <!-- Fin de la partie Header des utilisateurs inscrits -->
            <!-- Fin de la partie Header des utilisateurs inscrits -->
            <!-- Fin de la partie Header des utilisateurs inscrits -->
            <!-- Fin de la partie Header des utilisateurs inscrits -->
        @else
            <!-- Header des utilisateurs non inscrits inscrits -->
            <!-- Header des utilisateurs non inscrits inscrits -->
            <!-- Header des utilisateurs non inscrits inscrits -->
            <!-- Header des utilisateurs non inscrits inscrits -->
            <!-- Header -->
            <!-- Header -->
            <header class="header">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="#">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="/" class="navbar-brand logo">
                            <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="/" class="navbar-brand logo-small">
                            <img src="/assets/img/icon.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="/" class="menu-logo">
                                <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">

                            <li class="{!! Request::is('/') ? 'active' : '' !!}">
                                <a href="/">Accueil </a>
                            </li>

                            <li class="{!! Request::is('categories') ? 'active' : '' !!}">
                                <a href="/categories">Categories</a>
                            </li>
                            <li class="{!! Request::is('search/all') ? 'active' : '' !!}">
                                <a href="/search/all">Rechercher <i class="fas fa-search"></i></a>
                            </li>


                        </ul>
                    </div>



                    <!-- /User Menu -->
                    <!-- /Login/Logout button -->

                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="{{ route('login') }}" data-bs-toggle="modal"
                                data-bs-target="#login_modal">Connexion</a>
                        </li>
                    </ul>

                    <!-- /Login/Logout button -->

                </nav>
            </header>
            <!-- /Header -->

            <!-- /Header -->
        @endif






        @yield('content')






        @include('master.footer')
    </div>



    <!-- User Register Modal -->
    <div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>S'inscrire</h3>
                    </div>

                    <!-- Register Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail</label>
                            <input type="email" class="form-control " required
                                placeholder="ex : alyciakeys@gmail.com" name="email" id="emailregister"
                                onkeyup="check_email_user()">
                            <div id="email-already-token" class="text-danger">

                            </div>
                        </div>

                        <div style="display:none">
                            <input type="text" name="name" value="admin">
                            <input type="text" name="role" value="admin">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre Mot de passe</label>
                            <input type="password" class="form-control" placeholder="********" required
                                minlength="8" name="password">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" id="register-button"
                                type="submit">S'enregistrer</button>
                        </div>


                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /User Register Modal -->

    <!-- Login Modal -->
    <div class="modal account-modal fade" id="login_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Se connecter <span></span></h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}" id="loginform">

                        @csrf

                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail *</label>
                            <input type="email" name="email" required class="form-control" id="emaillogin"
                                placeholder="ex : alyciakeys@gmail.com">

                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre mot de passe *</label>
                            <input type="password" name="password" required minlength="8" id="passwordlogin"
                                title="votre mot de passe doit contenir au moins 8 caractères" class="form-control "
                                placeholder="********">

                        </div>

                        <div class="text-danger" id="invalid-identifiers ">
                        </div>
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary btn-block btn-lg"
                                onclick="check_identifiers()">Se
                                connecter</button>
                        </div>

                        <div class="login-or"> <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>
                        <div class="d-grid">

                            <a class="btn btn-primary btn-block btn-lg login-btn" href="#"
                                data-bs-toggle="modal" data-bs-target="#provider-login">Etes-vous prestataire?
                                Clickez içi</a>

                            </button>
                        </div>
                        <div class="text-center dont-have">Vous n'avez pas de compte ?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#user-register">Inscrivez
                                vous
                                maintenant</a>
                        </div>
                        <div class="text-center dont-have">
                            <a href="/forgot_password">Mot de passe
                                oublié?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Login Modal -->

    <!-- jQuery -->


    <!-- Bootstrap Core JS -->








    <!-- Provider Register Modal -->
    <div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login-header">
                        <h3>S'inscrire en tant que prestataire</h3>
                    </div>

                    <!-- Register Form -->
                    <form method="POST" action="{{ route('register') }}">

                        @csrf
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail</label>
                            <input type="email" class="form-control" required
                                placeholder="ex : alyciakeys@gmail.com" name="email" id="emailregisterprovider"
                                onkeyup="check_email_provider()">
                            <div id="email-already-token-provider" class="text-danger">

                            </div>
                        </div>
                        <div style="display:none">
                            <input type="text" name="name" value="provider">
                            <input type="text" name="role" value="provider">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre Mot de passe</label>
                            <input type="password" class="form-control" placeholder="********" required
                                minlength="8" name="password">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" id="register-button"
                                type="submit">S'inscrire</button>
                        </div>


                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /User Register Modal -->

    <!-- Privider Login Modal -->
    <div class="modal account-modal fade" id="provider-login">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Se connecter en tant que prestataire<span></span></h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data"
                        id="loginformprovider">

                        @csrf

                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail *</label>
                            <input type="email" name="email" required class="form-control"
                                placeholder="ex : alyciakeys@gmail.com" id="emailloginprovider">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre mot de passe *</label>
                            <input type="password" name="password" required minlength="8"
                                title="votre mot de passe doit contenir au moins 8 caractères" class="form-control"
                                placeholder="********" id="passwordloginprovider">
                        </div>
                        <div class="text-danger" id="invalid-identifiers-provider ">
                        </div>
                        <div class="d-grid">
                            <a class="btn btn-primary btn-block btn-lg " onclick="check_identifiers_provider()">Se
                                connecter</a>
                        </div>
                        <div class="login-or"> <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>

                        <div class="text-center dont-have">Vous n'avez pas de compte ?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#provider-register">Inscrivez
                                vous maintenant</a>
                        </div>
                        <div class="text-center dont-have">
                            <a href="/forgot_password">Mot de
                                passe
                                oublié?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- /Login Modal -->
































    <!-- Custom JS -->

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        /* $(document).ready(function() {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        $('#emailregister').keyup(function() {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            check_email();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        });
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    });*/

        function check_email_user() {
            $.ajax({
                type: "post",
                url: "/check_email_register",
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'email': $("#emailregister").val(),
                },
                success: function(data) {
                    document.getElementById('email-already-token').innerHTML = data;
                }

            });

        }

        function check_email_provider() {
            $.ajax({
                type: "post",
                url: "/check_email_register_provider",
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'email': $("#emailregisterprovider").val(),
                },
                success: function(data) {
                    document.getElementById('email-already-token-provider').innerHTML = data;
                }

            });

        }

        function check_identifiers() {
            $.ajax({
                type: "post",
                url: "/check_identifiers",
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'email': $("#emaillogin").val(),
                    'password': $("#passwordlogin").val(),
                },

                success: function(data) {

                    document.getElementById('invalid-identifiers ').innerHTML = data;
                    if (data.trim() !== 'Vos identifiants de connexion sont incorrects') {
                        document.getElementById('loginform').submit();
                    }
                }

            });

        }

        function check_identifiers_provider() {


            $.ajax({
                type: "post",
                url: "/check_identifiers_provider",
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content'),
                },
                data: {
                    'email': $("#emailloginprovider").val(),
                    'password': $("#passwordloginprovider").val(),
                },

                success: function(data) {
                    console.log(data);

                    document.getElementById('invalid-identifiers-provider ').innerHTML = data;
                    if (data.trim() !== 'Vos identifiants de connexion sont incorrects') {

                        document.getElementById('loginformprovider').submit();
                    }
                }

            });

        }
    </script>



</body>

<!-- Mirrored from html.truelysell.com/template/categories by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:44 GMT -->

</html>
