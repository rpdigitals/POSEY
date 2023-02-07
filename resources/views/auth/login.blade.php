<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:12:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/icon.png">

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
                        <img src="/assets/img/iconfav.png" class="img-fluid" alt="Logo">
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
        <!-- Fin de la partie Header des utilisateurs inscrits -->
        <!-- Fin de la partie Header des utilisateurs inscrits -->





        <!-- How It Works -->
        <section class="how-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading howitworks">
                            <h2>Vous devez d'abord vous connecter</h2>
                            <h3>Comment ça marche?</h3>

                        </div>
                        <div class="howworksec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="howwork">
                                        <div class="iconround">
                                            <div class="steps">01</div>
                                            <img src="/assets/img/icon-1.png" alt="">
                                        </div>
                                        <h3>Créez un compte client</h3>
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
                                            Complétez avec vos informations personnelles</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="howwork">
                                        <div class="iconround">
                                            <div class="steps">03</div>
                                            <img src="/assets/img/icon-3.png" alt="">
                                        </div>
                                        <h3>Commandez des services</h3>
                                        <p>
                                            Commandez, évaluez, et ajoutez des services à vos favoris</p>
                                    </div>
                                </div>
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
                        <h2>Vous devez vous inscrire ou vous connecter pour éffectuer cet action </h2>

                    </div>
                    <div class="col-6 call-us-btn">
                        <a href="/" class="btn btn-call-us"data-bs-target="#login_modal"
                            data-bs-toggle="modal">Créer
                            un compte maintenant</a>

                    </div>
                </div>
            </div>
        </section>



        @include('master.footer')
    </div>


    <!-- User Register Modal -->
    <div class="modal
    account-modal fade multi-step" id="user-register" data-keyboard="false"
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
                            <input type="email" class="form-control" required
                                placeholder="ex : alyciakeys@gmail.com" name="email">
                        </div>
                        <div style="display:none">
                            <input type="text" name="name" value="user">
                            <input type="text" name="role" value="user">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre Mot de passe</label>
                            <input type="password" class="form-control" placeholder="********" required
                                minlength="8" name="password">
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn"
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
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail *</label>
                            <input type="email" name="email" required class="form-control"
                                placeholder="ex : alyciakeys@gmail.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre mot de passe *</label>
                            <input type="password" name="password" required minlength="8"
                                title="votre mot de passe doit contenir au moins 8 caractères" class="form-control"
                                placeholder="********">
                        </div>
                        <div class="text-right">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Se
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#user-register">Inscrivez vous
                                maintenant</a>
                        </div>
                        <div class="text-center dont-have">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#user-register">Mot de passe
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
                                placeholder="ex : alyciakeys@gmail.com" name="email">
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
                            <button class="btn btn-primary btn-block btn-lg login-btn"
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
                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="form-group form-focus">
                            <label class="focus-label">Votre adresse mail *</label>
                            <input type="email" name="email" required class="form-control"
                                placeholder="ex : alyciakeys@gmail.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Votre mot de passe *</label>
                            <input type="password" name="password" required minlength="8"
                                title="votre mot de passe doit contenir au moins 8 caractères" class="form-control"
                                placeholder="********">
                        </div>
                        <div class="text-right">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Se
                                connecter</button>
                        </div>
                        <div class="login-or"> <span class="or-line"></span>
                            <span class="span-or">ou</span>
                        </div>

                        <div class="text-center dont-have">Vous n'avez pas de compte ?
                            <a href="#" data-bs-toggle="modal" data-bs-target="#provider-register">Inscrivez
                                vous maintenant</a>
                        </div>
                        <div class="text-center dont-have">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#user-register">Mot de passe
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

    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
    <script src="/assets/js/script.js"></script>
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <script src="/assets/js/script.js"></script>
    <script>
        function showModal() {
            documment.getElementById('btnModal').modal('show');
        }
    </script>



</body>

<!-- Mirrored from html.truelysell.com/template/categories by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:44 GMT -->

</html>
