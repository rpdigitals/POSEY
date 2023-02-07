<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/admin/admin_dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey</title>

    <!-- Favicons -->
    {{-- <link rel="shortcut icon" href="/style-admin/img/iconfav1.png"> --}}
    <link rel="shortcut icon" href="/assets/img/iconfav.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/style-admin/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/style-admin/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/style-admin/plugins/fontawesome/css/all.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="/style-admin/css/animate.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/style-admin/css/admin.css">

</head>

<body>
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">
            <div class="header-left">
                <a href="admin_dashboard" class="logo logo-small">
                    <img src="/style-admin/img/iconfav1.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a href="#" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="mobile_btn" id="mobile_btn" href="#">
                <i class="fas fa-align-left"></i>
            </a>

            <ul class="nav user-menu">


                <!-- User Menu -->
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="/admin_profile">Profil</a>
                        <a class="dropdown-item" href="{{ route('logout') }}">Se Déconnecter</a>
                    </div>

                </li>
                <a href="{{ route('logout') }}"> <button class="btn btn-primary fa fa-user">
                        Deconnexion
                    </button></a>
                <!-- /User Menu -->
            </ul>
        </div>
        <!-- /Header -->

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
                <a href="admin_dashboard">
                    <img src="/style-admin/img/iconfav1.png" class="img-fluid" alt="">
                </a>
            </div>
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="{!! Request::is('admin_dashboard') ? 'active' : '' !!}">
                            <a href="/admin_dashboard"><i class="fas fa-columns"></i> <span>Tableau de bord</span></a>
                        </li>
                        <li class="{!! Request::is('admin_categories') ? 'active' : '' !!}">
                            <a href="/admin_categories"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                        </li>

                        <li class="{!! Request::is('admin_service_list') ? 'active' : '' !!}">
                            <a href="/admin_service_list"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
                        </li>
                        <li class="{!! Request::is(
                            'admin_total_reports/all',
                            'admin_total_reports/cancelled',
                            'admin_total_reports/rejected',
                            'admin_total_reports/pending',
                            'admin_total_reports/completed',
                            'admin_total_reports/inprogress',
                        )
                            ? 'active'
                            : '' !!}">
                            <a href="/admin_total_reports/{{ 'all' }}">
                                <i class="far fa-calendar-check"></i>
                                <span>Liste des commandes</span></a>
                        </li>
                        <li class="{!! Request::is('admin_payment_list') ? 'active' : '' !!}">
                            <a href="/admin_payment_list"><i class="fas fa-hashtag"></i> <span>Payements</span></a>
                        </li>

                        <li class="{!! Request::is('admin_review_reports') ? 'active' : '' !!}">
                            <a href="/admin_review_reports"><i class="fas fa-star"></i> <span>Evaluations</span></a>
                        </li>
                        <li class="{!! Request::is('admin_subscriptions') ? 'active' : '' !!}">
                            <a href="/admin_subscriptions"><i class="far fa-calendar-alt"></i>
                                <span>Souscriptions</span></a>
                        </li>
                        <li class="{!! Request::is('admin_wallet') ? 'active' : '' !!}">
                            <a href="/admin_wallet"><i class="fas fa-wallet"></i> <span> Porte-feuilles</span></a>
                        </li>
                        <li class="{!! Request::is('admin_service_providers') ? 'active' : '' !!}">
                            <a href="/admin_service_providers"><i class="fas fa-user-tie"></i> <span>
                                    Prestataires</span></a>
                        </li>
                        <li class="{!! Request::is('admin_users') ? 'active' : '' !!}">
                            <a href="/admin_users"><i class="fas fa-user"></i> <span>Clients</span></a>
                        </li>

                        <li class="{!! Request::is('admin_settings') ? 'active' : '' !!}">

                            <a href="/admin_settings"><i class="fas fa-cog"></i> <span>Paramètres</span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->


        @yield('content')


    </div>
    </div>
    </div>

    {{-- <!-- jQuery -->
    <script src="/style-admin/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="/style-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="/style-admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="/style-admin/js/admin.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js"></script>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js"></script>
    <!-- jQuery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Datepicker Core JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Datatables JS -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Select2 JS -->
    <script src="assets/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/admin_dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:08 GMT --> --}}

</html>
