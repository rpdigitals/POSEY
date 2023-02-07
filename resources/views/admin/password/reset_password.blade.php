<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:19 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Posey </title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="/style-admin/img/iconfav.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/style-admin/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/style-admin/css/admin.css">

</head>

<body>
    <div class="main-wrapper">

        <div class="login-page">
            <div class="login-body container">
                <div class="loginbox">
                    <div class="login-right-wrap">
                        <div class="account-header">

                        </div>

                        @if (session()->has('password_changed_successfully'))
                            <div class="login-header">
                                <h3> <span>POSEY</span></h3>
                                <p class="text-muted"></p>
                            </div>
                            <div class="alert alert-success">

                                <h5> {{ session('password_changed_successfully') }}</h5>
                                <div>
                                    <a href="/" class="btn btn-primary">Ok</a>
                                </div>
                            </div>
                        @else
                            @if (session()->has('password_changed_failed'))
                                <div class="login-header">
                                    <h3> <span>POSEY</span></h3>
                                    <p class="text-muted"></p>
                                </div>
                                <div class="alert alert-warning">

                                    <h5> {{ session('password_changed_failed') }}</h5>

                                </div>
                            @endif
                            <div class="login-header">
                                <h3> <span>POSEY</span></h3>
                                <p class="text-muted">Un code de verification a été envoyé à votre adresse mail</p>
                            </div>
                            <form action="/reset_password" method="POST" enctype="mutipart/form-data">
                                @csrf

                                <div class="form-group mb-4">
                                    <label class="control-label">Entrez le code de vérification à 8 chiffres
                                    </label>
                                    <input class="form-control" type="number" placeholder="  * * * * * * * * "
                                        name="validation_code" required minlength="8">

                                </div>

                                <div class="form-group mb-4">
                                    <label class="control-label">Votre nouveau mot de passe</label>
                                    <input class="form-control" type="text" placeholder=" * * * * * * * * "
                                        name="password" required minlength="8">
                                </div>

                                <div class="form-group mb-4">

                                    <input type="text" value="{{ session('email_to_update') }}" name="email"
                                        hidden>
                                </div>



                                <div class="text-center">
                                    <button class="btn btn-primary btn-block account-btn"
                                        type="submit">Valider</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="/assets/js/admin.js"></script>

</body>


<!-- Mirrored from html.truelysell.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:14:19 GMT -->

</html>
