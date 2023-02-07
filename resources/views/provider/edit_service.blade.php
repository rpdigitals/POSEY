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
                    <a id="mobile_btn" href="/javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="index-2.html" class="navbar-brand logo">
                        <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                    </a>
                    <a href="#" class="navbar-brand logo-small">
                        <img src="/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="#" class="menu-logo">
                            <img src="/assets/img/logo1.png" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="/javascript:void(0);"> <i
                                class="fas fa-times"></i></a>
                    </div>

                    </ul>
                </div>

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
                                <a href="javascript:void(0)" class="clear-noti"> Tout supprimer </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    @foreach ($notification as $notif)
                                        <li class="notification-message">
                                            <a href="/provider_notifications">
                                                <div class="media d-flex">
                                                    <span class="avatar avatar-sm flex-shrink-0">
                                                        <img class="avatar-img rounded-circle" alt="User Image"
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
                            <div class="topnav-dropdown-footer">
                                <a href="/provider_notifications">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- /Notifications -->

                    <!-- chat -->
                    <li class="nav-item logged-item">
                        <a href="/provider_chats" class="nav-link">
                            <i class="fa fa-comments" aria-hidden="true"></i>
                        </a>
                    </li>
                    <!-- /chat -->

                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="user-img">
                                <img class="rounded-circle" src="{{ $prestataire->photo }}" alt=""
                                    width="31">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" src="{{ $prestataire->photo }}"
                                        alt="">
                                </div>
                                <div class="user-text">
                                    <h6 class="text-truncate">{{ $prestataire->nom . ' ' . $prestataire->prenom }}</h6>
                                    <p class="text-muted mb-0">Prestataire</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="/provider_dashboard">Tableau de bord</a>
                            <a class="dropdown-item" href="/provider_services">Mes services</a>
                            <a class="dropdown-item" href="/provider_booking_list">Liste des commandes</a>
                            <a class="dropdown-item" href="/provider_settings">Profil </a>
                            <a class="dropdown-item" href="/provider_wallet">Porte-feuille</a>
                            <a class="dropdown-item" href="/provider_subscription">Abonnement</a>
                            <a class="dropdown-item" href="/provider_chats">Discussions</a>
                            <a class="dropdown-item" href="{{ route('logout') }}">deconnexion</a>
                        </div>
                    </li>
                    <!-- /User Menu -->


                </ul>
            </nav>
        </header>
        <!-- /Header -->
        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2>Modifier ce service</h2>
                        </div>
                        <form method="POST" action="/provider_edit_service/{{ $service->id }}"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="service-fields mb-3">
                                <h3 class="heading-2">Informations sur le service</h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label>Nom ou Titre du Service <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" required
                                                title="Votre nom de service doit commencer par une Majuscule "
                                                maxlength="30" value="{{ $service->nom }}" name="nom_du_service">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label>Prix du Service en (XOF)<span class="text-danger">*</span></label>
                                            <input class="form-control" type="number" required name="prix"
                                                value="{{ $service->prix }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label>Description du service<span class="text-danger">*</span></label>
                                        <textarea class="form-control" required name="description">{{ $service->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="service-fields mb-3">
                                <h3 class="heading-2">Catégorie du Service </h3>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label>Categorie <span class="text-danger">*</span></label>
                                            <select class="form-control form-select" required name="categorie_id">
                                                <option value="{{ $service->categorie->id }}" selected>
                                                    {{ $service->categorie->nom }}</option>
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="service-fields mb-3">
                                    <h3 class="heading-2">Image illustrative </h3>
                                    <div class="form-group col-xl-7">
                                        <label class="me-sm-2">Photo de profil</label>
                                        <input type="file" class="form-control" name="image_illustrative"
                                            value="{{ $service->image }}" accept="image/*">
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                                </div>
                        </form>
                    </div>
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

</body>

<!-- Mirrored from html.truelysell.com/template/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:46 GMT -->

</html>
