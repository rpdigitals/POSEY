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
                    <a href="#" class="navbar-brand logo-small">
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
                        <li class="has-submenu {!! Request::is('provider_dashboard') ? 'active' : '' !!}">
                            <a href="/provider_dashboard">Mon compte <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="/provider_dashboard">Tableau de bord</a></li>
                                <li><a href="/provider_services">Mes services</a></li>
                                <li><a href="/demanded_services">Services demandés</a></li>
                                <li><a href="/provider_booking_list">Liste des commandes</a></li>
                                <li><a href="/provider_settings">Profil </a></li>
                                <li><a href="/provider_wallet">Portefeuille</a></li>
                                <li><a href="/provider_subscription">Abonnement</a></li>
                                <li><a href="/provider_payments">Payements</a></li>
                                <li><a href="{{ route('logout') }}">Deconnexion</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>

                <ul class="main-nav">

                    </li>
                </ul>


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
                                class="badge badge-pill bg-yellow">{{ $notification->count() }}</span>
                        </a>
                        <div class="dropdown-menu notify-blk dropdown-menu-end notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="/provider_clear_notifications/{{ $prestataire->id }}" class="clear-noti">
                                    Tout
                                    supprimer </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    @foreach ($notification as $notif)
                                        <li class="notification-message">
                                            <a href="/provider_notifications">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm flex-shrink-0">
                                                        <img class="avatar-img rounded-circle" alt="User Image"
                                                            src="{{ $notif->client->photo }}">
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
                                    <h6 class="text-truncate">{{ $prestataire->nom . ' ' . $prestataire->prenom }}</h6>
                                    <p class="text-muted mb-0">Prestataire</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="/provider_dashboard">Tableau de bord</a>
                            <a class="dropdown-item" href="/provider_services">Mes services</a>
                            <a class="dropdown-item" href="/demanded_services">Services demandés</a>
                            <a class="dropdown-item" href="/provider_booking_list">Liste des commandes</a>
                            <a class="dropdown-item" href="/provider_settings">Profil </a>
                            <a class="dropdown-item" href="/provider_wallet">Portefeuille</a>
                            <a class="dropdown-item" href="/provider_subscription">Abonnement</a>
                            <a class="dropdown-item" href="/provider_reviews">Mes évaluations</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">Deconnexion</a>
                        </div>
                    </li>
                    <!-- /User Menu -->


                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-4 theiaStickySidebar">
                        <div class="mb-4">
                            <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <img alt="profile image" src="{{ $prestataire->photo }}"
                                    class="avatar-lg rounded-circle">
                                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                    <h6 class="mb-0">{{ $prestataire->nom . ' ' . $prestataire->prenom }}</h6>
                                    <p class="text-muted mb-0">Membre depuis
                                        {{ $prestataire->created_at->format('d-M-Y') }}</p>
                                </div>

                            </div>
                        </div>

                        <div class="widget settings-menu d-none d-sm-inline d-xl-inline d-lg-inline d-md-inline">
                            <ul class="">
                                <li class="nav-item ">
                                    <a href="/provider_dashboard" class="nav-link {!! Request::is('provider_dashboard') ? 'active' : '' !!}">

                                        <i class="fas fa-chart-line"></i> <span>Tableau de bord</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_services" class="nav-link {!! Request::is('provider_services') ? 'active' : '' !!}">
                                        <i class="far fa-address-book"></i> <span>Mes Services</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/demanded_services" class="nav-link {!! Request::is('demanded_services') ? 'active' : '' !!}">
                                        <i class="far fa-address-book"></i> <span>Services demandés</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_booking_list" class="nav-link {!! Request::is('provider_booking_list') ? 'active' : '' !!}">
                                        <i class="far fa-calendar-check"></i> <span>Liste de commandes</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_settings" class="nav-link {!! Request::is('provider_settings') ? 'active' : '' !!}">
                                        <i class="far fa-user"></i> <span>Profil</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_wallet" class="nav-link {!! Request::is('provider_wallet') ? 'active' : '' !!}">
                                        <i class="far fa-money-bill-alt"></i> <span>Portefeuille</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_subscription" class="nav-link {!! Request::is('provider_subscription') ? 'active' : '' !!}">
                                        <i class="far fa-calendar-alt"></i> <span>Abonnement</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/provider_reviews" class="nav-link {!! Request::is('provider_reviews') ? 'active' : '' !!}">
                                        <i class="far fa-star"></i> <span>Mes évaluations</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/provider_payments" class="nav-link {!! Request::is('provider_payments') ? 'active' : '' !!}">
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
        <!-- /Header -->

        <!-- Footer
  <footer class="footer">
  
   
   <div class="footer-top">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-6">
       
       <div class="footer-widget footer-menu">
       <h2 class="footer-title">KOF Corporation </h2>
        <ul>
         <li>
          <a href="/about_us">A propos de nous</a>
         </li>
         <li>
          <a href="/contact_us">Nous Contacter </a>
         </li>
         <li>
          <a href="/faq">Faq</a>
         </li>
         <li>
          <a href="#">Aide</a>
         </li>
        </ul>
       </div>
       
      </div>
      
      <div class="col-lg-3 col-md-6">
       
       <div class="footer-widget footer-contact">
        <h2 class="footer-title">Nous Contacter </h2>
        <div class="footer-contact-info">
         <div class="footer-address">
          <span><i class="far fa-building"></i></span>
          <p>Minamadou, Ecole ESA . KOF Corp</p>
         </div>
         <p><i class="fas fa-headphones"></i> 321 546 8764</p>
         <p class="mb-0"><i class="fas fa-envelope"></i> <a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="26525453434a5f55434a4a66435e474b564a430845494b">[email&#160;protected]</a></p>
        </div>
       </div>
       
      </div>
      <div class="col-lg-3 col-md-6">
       
       <div class="footer-widget">
        <h2 class="footer-title">Nous suivre sur les reseaux sociaux</h2>
        <div class="social-icon">
         <ul>
          <li>
           <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
          </li>
          <li>
           <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
          </li>
          <li>
           <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
           <a href="#" target="_blank"><i class="fab fa-google"></i></a>
          </li>
         </ul>
        </div>
        <div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                    <button type="submit" class="btn footer-btn">
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
       </div>
       
      </div>
     </div>
    </div>
   </div>
  
   
   
   <div class="footer-bottom">
    <div class="container">
     
     <div class="copyright">
      <div class="row">
       <div class="col-md-6 col-lg-6">
        <div class="copyright-text">
         <p class="mb-0">&copy; 2022 <a href="/">KOF corp</a>. Tout droit reservé.</p>
        </div>
       </div>
       <div class="col-md-6 col-lg-6">
        
        <div class="copyright-menu">
         <ul class="policy-menu">
          <li>
           <a href="/terms_conditions">Conditions d'utilisation</a>
          </li>
          <li>
           <a href="/privacy">Politique de confidentialité</a>
          </li>
         </ul>
        </div>
        
       </div>
      </div>
     </div>
     
    </div>
   </div>
   </Footer Bottom -->

        </footer>
        <!-- /Footer -->




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

</body>

<!-- Mirrored from html.truelysell.com/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:46 GMT -->

</html>
