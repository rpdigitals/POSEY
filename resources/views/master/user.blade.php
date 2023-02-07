<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:48 GMT -->

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
        <!-- Header -->
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
                        <img src="/assets/img/iconfav.png" class="img-fluid" alt="Logo">
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
                        <li class="has-submenu {!! Request::is('user_dashboard') ? 'active' : '' !!}">
                            <a href="/user_dashboard">Mon compte <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="/user_dashboard">Tableau de bord</a></li>
                                <li><a href="/user_favourites">Favoris</a></li>
                                <li><a href="/user_bookings">Mes Commandes</a></li>
                                <li><a href="/user_service">Services demandés</a></li>
                                <li><a href="/user_settings">Mon Profil</a></li>
                                <li><a href="/user_wallet">Porte-feuille</a></li>
                                <li><a href="/user_reviews">Evaluations</a></li>
                                <li><a href="/user_payments">Payements</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>


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
                                <img class="rounded-circle" src="{{ Storage::url($client->photo) }}" alt="">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ Storage::url($client->photo) }}"
                                        alt="">
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
                            <a class="dropdown-item" href="/user_wallet">Porte-feuille</a>
                            <a class="dropdown-item" href="/user_reviews">Evaluations</a>
                            <a class="dropdown-item" href="/user_payments">Payements</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Se déconnecter</a>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>

            </nav>
        </header>
        <!-- /Header -->

        <!-- /Header -->


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-1 ">
                        <div class="mb-4">
                            <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <img alt="profile image" src="{{ Storage::url($client->photo) }}"
                                    class="avatar-lg rounded-circle">
                                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                    <h6 class="mb-0">{{ $client->nom . ' ' . $client->prenom }}</h6>
                                    <p class="text-muted mb-0">Membre depuis le
                                        {{ $client->created_at->format('d-M-Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="widget settings-menu d-none d-sm-inline d-xl-inline d-lg-inline d-md-inline">
                            <ul role="tablist" class="nav nav-tabs">
                                <li class="nav-item current">
                                    <a href="/user_dashboard" class="nav-link {!! Request::is('user_dashboard') ? 'active' : '' !!}">
                                        <i class="fas fa-chart-line"></i> <span>Tableau de bord</span>
                                    </a>
                                </li>
                                <li class="nav-item current">
                                    <a href="/user_favourites" class="nav-link {!! Request::is('user_favourites') ? 'active' : '' !!} ">
                                        <i class="fas fa-heart"></i> <span>Favoris</span>
                                    </a>
                                </li>
                                <li class="nav-item current">
                                    <a href="/user_bookings" class="nav-link {!! Request::is('user_bookings') ? 'active' : '' !!}">
                                        <i class="far fa-calendar-check"></i> <span>Mes commandes</span>
                                    </a>
                                </li>
                                <li class="nav-item current">
                                    <a href="/user_service" class="nav-link {!! Request::is('user_service') ? 'active' : '' !!}">
                                        <i class="far fa-address-book"></i> <span>Services demandés</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user_settings" class="nav-link {!! Request::is('user_settings') ? 'active' : '' !!}">
                                        <i class="far fa-user"></i> <span>Profil</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user_wallet" class="nav-link {!! Request::is('user_wallet') ? 'active' : '' !!}">
                                        <i class="far fa-money-bill-alt"></i> <span>Porte-feuille</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user_reviews" class="nav-link {!! Request::is('user_reviews') ? 'active' : '' !!}">
                                        <i class="far fa-star"></i> <span>Evaluations</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/user_payments" class="nav-link {!! Request::is('user_payments') ? 'active' : '' !!}">
                                        <i class="fas fa-hashtag"></i> <span>Payements</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>


    </div>

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
    <script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
</body>

<!-- Mirrored from html.truelysell.com/template/user-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:49 GMT -->

</html>
